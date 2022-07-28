<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('guests.home');
})->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')
   ->namespace('Admin') //cartella dentro a controllers
   ->name('admin.') //le rotte iniziano con admin.
   ->prefix('admin') //prefisso nelle URL /admin/
   ->group(function () {
        Route::get('/', 'AdminController@dashboard')->name('dashboard');
        Route::resource('posts', 'PostController');
        Route::get('users', 'UserController@index')->name('users.index');
        Route::resource('categories', 'CategoryController');
        Route::resource('tags', 'TagController');
        // Route::get('my-posts', 'PostController@myIndex')->name('posts.myIndex');
   });
