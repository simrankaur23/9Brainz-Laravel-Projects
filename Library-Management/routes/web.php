<?php

use Illuminate\Support\Facades\Route;
use \App\Datatables\UserDataTable;
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


// Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('bs', 'UsersBooksController');

Route::get('/send-mail','MailSend@mailsend');

Route::group(['middleware' => ['auth','admin']], function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/books', function () {
        return view('admin.books');
    });
    Route::get('/role-register','Admin\DashboardController@registered')->name('get.users');
    Route::resource('dashboard', 'Admin\DashboardController');

    Route::post('/dashboard/update', 'Admin\DashboardController@update')->name('dashboard.update');
    Route::get('/dashboard/destroy/{id}', 'Admin\DashboardController@destroy');

    Route::resource('books', 'BooksController');
    Route::post('books/update', 'BooksController@update')->name('books.update');
    Route::get('books/destroy/{id}', 'BooksController@destroy');



});


// Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
// Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('login/{website}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{website}/callback', 'Auth\LoginController@handleProviderCallback');




