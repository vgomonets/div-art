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
Route::get('register/verify/{token}', 'Auth\RegisterController@verify');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products', 'ProductController@index');
Route::get('/create', 'ProductController@create');
Route::get('/edit/{id}', 'ProductController@edit');
Route::post('/update/{id}', 'ProductController@update');
Route::get('/delete/{id}', 'ProductController@delete');
Route::post('/store', 'ProductController@store');
Route::get('/show/{id}', 'ProductController@show');

Route::get('upload',['as' => 'upload_form', 'uses' => 'UploadController@getForm']);
Route::post('upload',['as' => 'upload_file','uses' => 'UploadController@upload']);