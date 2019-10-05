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


//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('about', function () {
//	//$tasks = [
//	//	'wake up',
//	//	'Do all works'
//	//];
//	$tasks=DB::table('tasks')->get();
//    return view('about' , compact('tasks'));
//});
//Route::get('tasks','TasksController@index');
//Route::get('task/{task}','TasksController@view' );
Route::get('/','PostsController@index')->name('home');
Route::get('/post/{post}','PostsController@show' );
Route::get('/posts/create','PostsController@create' );
Route::post('/posts','PostsController@store' );
Route::post('/posts/{post}/comments','CommentsController@store' );
Route::get('/register','RegistrationController@create' );
Route::post('/register','RegistrationController@store' );
Route::get('/login','SessionsController@create')->name('login');
Route::post('/login','SessionsController@store' );
Route::get('/logout','SessionsController@destroy' );
Route::get('/loged', function () {
    return view('home');
});
