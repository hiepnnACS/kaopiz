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


// e tính làm trang admin để crud mà hình như e hiểu sai đề bài ạ!

// admin
Route::get('admin/list-post/', 	'PostController@listPost')->name('list.post');
Route::get('admin/edit-post/{id}', 'PostController@editPost')->name('edit.post');
Route::post('admin/update-post/{id}', 'PostController@updatePost')->name('update.post');
Route::get('admin/create-post', 'PostController@createPost')->name('create.post');
Route::post('adminn/save-post', 'PostController@savePost')->name('save.post');
Route::get('admin/delete-post/{id}', 'PostController@deletePost')->name('delete.post');	

// client
Route::get('list', 'HomeController@listPost')->name('list');
Route::get('detail/{id}', 'HomeController@detailPost')->name('detail.post');
Route::get('add-post', 'HomeController@addPost')->name('post.add');
Route::post('insert', 'HomeController@insertPost')->name('post.save');

// ORM
Route::get('/search-user', 'UserController@searchUser')->name('search.user');
Route::get('/result-user', 'UserController@resultSearch')->name('result.search.user');


Route::post('add-comment/{idPost}', 'HomeController@addComment')->name('add.comment');

// auth
Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
