<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function issueBook() {
        return view('admin.issue-book');
    }
    public function issuedBooks() {
        return view('admin.issued-books');
    }
    public function nonReturnBooks() {
        return view('admin.non-return-books');
    }
}
