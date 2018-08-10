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


Auth::routes();

Route::get('/home', 'Post\PostController@index')->name('home');

$this->resource('posts','Post\PostController');
$this->post('comment','Post\CommentController@store')->name('comment.store');
$this->get('notifications', 'NotificationController@notifications');