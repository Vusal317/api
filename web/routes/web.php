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
Route::get('/', function(){return"";});

Route::post('/login', 'ApiController@postLogin');
Route::get('/user-info/{id}', 'ApiController@getUserInfo');
Route::get('/cust-list/{id}', 'ApiController@custList');
Route::get('/uni-ant-codes-by-cat', 'ApiController@codesByCat');
Route::post('/add', 'ApiController@postAdd');
Route::get('/custumer/{cust_code}', 'ApiController@custumer');
Route::get('/sales/{id}', 'ApiController@sales');





