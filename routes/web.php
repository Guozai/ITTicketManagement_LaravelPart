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
    return view('home');
});

Route::get('thankyou', function () {
    return view('ticket.thankyou');
})->name('thankyou');

Route::resource('ticket', 'TicketController');

Route::resource('productCRUD','ProductCRUDController');

Route::get('comment/{id}','commentController@show')->name("comment");

Route::get('login', function() {
    return view('login.login');
});

Route::resource('issue', 'IssueController');

Route::get('FAQ',function(){
    return view('FAQ');
});

Route::get('Contact',function(){
    return view('Contact');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
