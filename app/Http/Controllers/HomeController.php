<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function search()
    {
        return view('search');
    }

    public function searchFullText(Request $request)
    {   
        $output = "Không có sách";
        if($request->ajax()) {
            $name = $request->get('name');
            $author = $request->get('author');
            $publisher = $request->get('publisher');
            $name = $name ?? '';
            $author = $author ?? '';
            $publisher = $publisher ?? '';
    
            $books = DB::table('books')
            ->leftJoin('authors', 'books.author_id', '=', 'authors.id')
            ->leftJoin('publishers', 'books.publisher_id', '=', 'publishers.id')
            ->leftJoin('book_shelves', 'books.book_shelf_id', '=', 'book_shelves.id')
            ->leftJoin('issues', 'books.id', '=', 'issues.book_id');
    
            if(!empty($name)) {
                $books = $books->where('books.name', 'LIKE', "%{$name}%");
            }
    
            if(!empty($author)) {
                $books = $books->Where('authors.name', 'like', "%{$author}%");
            }
    
            if(!empty($publisher)) {
                $books = $books->Where('publishers.name', 'like', "%{$publisher}%");
            }
            
            $books = $books->select('books.id as book_id' ,'books.name as name', 'authors.name as author', 'books.num_pages as num_page', 'books.quantity as quantity', 'book_shelves.address as address', 'publishers.name as publisher')->get();

            if($books->count() > 0) {
                $output = "";
                $output = "<table class='table table-striped table-dark table-sm'>
                <thead class='thead-dark'>
                  <tr>
                    <th scope='col'>Stt</th>
                    <th scope='col'>Tên sách</th>
                    <th scope='col'>Tác giả</th>
                    <th scope='col'>Nhà xuất bản</th>
                    <th scope='col'>Số trang</th>
                    <th scope='col'>Số lượng</th>
                    <th scope='col'>Địa chỉ</th>
                  </tr>
                </thead>
                <tbody>";
                foreach($books as $key=>$value) {
                    $output .= "<tr>";
                    $output .= "<td>".($key + 1)."</td>";
                    $output .= "<td>".($value->name)."</td>";
                    $output .= "<td>".($value->author)."</td>";
                    $output .= "<td>".($value->publisher)."</td>";
                    $output .= "<td>".($value->num_page)."</td>";
                    // Tính số lượng còn
                    $countIssued = DB::table('issues')->where('book_id', $value->book_id)->count() ?? 0;

                    $output .= "<td>".($value->quantity - $countIssued)."</td>";
                    $output .= "<td>".($value->address)."</td>";
                    $output .= "</tr>";
                }
                $output .= "</tbody>";
                $output .= "</table>";
            }
        }
        return Response($output);
    }

}
