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
})->name('root');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/register', 'LoginController@register')->name('login.register');
Route::post('/register', 'LoginController@create');

Route::get('/logout', 'LoginController@logout')->name('login.logout');
Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/user/list', 'UserController@index')->name('user.index');
Route::get('/user/create', 'UserController@create')->name('user.create');
Route::post('/user/create', 'UserController@store');
Route::get('/user/show/{id}', 'UserController@show')->name('user.show');
Route::get('/product/manufaturer/{id}', 'SubCatagoryController@brand')->name('subcatagory.brand');
Route::get('/product/list/{s_id}/{m_id}', 'ProductController@list')->name('product.show.man');
Route::get('/product/show/{id}', 'ProductController@show')->name('product.show');
Route::post('/user/show/{id}', 'UserController@update');
//Route::post('/login', 'LoginController@verify');