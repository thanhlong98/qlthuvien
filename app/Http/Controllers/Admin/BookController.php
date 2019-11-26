<?php

namespace App\Http\Controllers\Admin;

use App\Models\Issue;
use App\Models\User;
use App\Models\Book;
use App\Models\Admin;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function showIssueBook() {
        $users = User::select('*')->get()->toArray();
        $books = Book::select('*')->get()->toArray();
        $date = Carbon::now()->format('Y-m-d');
        return view('admin.issue-book', compact('users', 'books', 'date'));
    }

    public function issueBook() {
        $data = request()->validate([
            'user_id' => 'required',
            'book_id' => 'required',
            'issueDate' => 'required',
            'ghichu' => ''
        ]);
        if(empty($data['ghichu'])) {
            $data['ghichu'] = '';
        }
        Issue::create([
            'user_id' => $data['user_id'],
            'book_id' => $data['book_id'],
            'admin_id' => auth()->user()->id,
            'note' => $data['ghichu']
        ]);
        return back()->with('success', 'Đã thêm vào cơ sỡ dữ liệu');
    }

    public function showIssuedBooks(Request $request) {
        $items = Issue::select('*')->get()->toArray();
        foreach($items as $key => $item) {
            $items[$key]['username'] = User::find($item['user_id'])['name'];
            $items[$key]['bookname'] = Book::find($item['book_id'])['name'];
            $items[$key]['admin'] = Admin::find($item['admin_id'])['name'];
        }

        $items = array_filter($items, function($item) {
            global $request;
            $type = $request->input('type');
            $q = $request->input('q');
            if($type == 'docgia') {
                return empty($q) || strpos(strtolower($item['username']), strtolower($q)) !== false;
            } else {
                return empty($q) || strpos(strtolower($item['bookname']), strtolower($q)) !== false;
            }
        });

        return view('admin.issued-books', compact('items'));
    }

    public function nonReturnBooks() {
        return view('admin.non-return-books');
    }
}
