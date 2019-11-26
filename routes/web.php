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
        Route::get('/dashboard', 'DashboardController@index')->name('show-dashboard');
        
        Route::get('/issue-book', 'BookController@showIssueBook')->name('show-issue-book');
        Route::post('/issue-book', 'BookController@issueBook')->name('issue-book');

        Route::get('/issued-books', 'BookController@showIssuedBooks')->name('show-issued-books');
        
        Route::get('/non-return-books', 'BookController@nonReturnBooks')->name('show-non-return-book');

        Route::post('/logout', 'LoginController@logout')->name('logout');
    });
});

Auth::routes(['register' => false]);

Route::get('/', 'HomeController@search')->name('home');
// Route::get('/search', 'HomeController@search');
Route::post('/search', 'HomeController@searchFullText')->name('search');
