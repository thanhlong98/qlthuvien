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
    public function issueBook() {
        $users = User::select('*')->get()->toArray();
        $books = Book::select('*')->get()->toArray();
        $date = Carbon::now()->format('Y-m-d');
        return view('admin.issue-book', compact('users', 'books', 'date'));
    }

    public function issuedBooks(Request $request) {
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
