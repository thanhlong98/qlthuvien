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


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
    Route::get('/', 'LoginController@showLoginForm')->name('login');
    Route::post('/', 'LoginController@login');
    Route::group(['middleware' => ['auth:admin']], function() {
        Route::get('/dashboard', 'DashboardController@index');
        Route::get('/issue-book', 'BookController@showIssueBook');
        Route::get('/issued-books', 'BookController@showIssuedBooks');
        Route::get('/non-return-books', 'BookController@nonReturnBooks')->name('non-return-book');

        Route::post('/logout', 'LoginController@logout')->name('logout');
    });
});

Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('/search', 'HomeController@search');
Route::post('/search', 'HomeController@searchFullText')->name('search');
