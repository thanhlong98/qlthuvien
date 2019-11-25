<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
    Route::get('/', 'LoginController@showLoginForm')->name('login');
    Route::post('/', 'LoginController@login');
    Route::group(['middleware' => ['auth:admin']], function() {
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('/issue-book', 'BookController@issueBook')->name('issue-book');
        Route::get('/issued-books', 'BookController@issuedBooks')->name('issued-books');
        Route::get('/non-return-books', 'BookController@nonReturnBooks')->name('non-return-book');

        Route::post('/logout', 'LoginController@logout')->name('logout');
    });
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
