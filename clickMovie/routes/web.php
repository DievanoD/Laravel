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

//mostrar

Route::get('/movies', 'PostsController@index');
Route::get('/movies/{id}','PostsController@show');
//

/*
criar
*/
Route::get('/create','PostsController@create');
Route::post('movies','PostsController@store');
//

//Route::get('/posts', 'PostsController@index');
//Route::get('/create', 'PostsController@create');
//Route::post('posts', 'PostsController@store');
//Route::get('/{id}', 'PostsController@show');
//Route::get('/{id}/edit', 'PostsController@edit');

/*
edição
*/
Route::get('/movies/{id}/edit','PostsController@edit');
Route::put('/movies/{id}','PostsController@update');
/*
deletar
*/
Route::delete('/movies/{id}','PostsController@destroy');