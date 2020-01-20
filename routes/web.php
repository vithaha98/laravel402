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
Route ::get('admin','HomeController@showWelcome');
Route::get('/', function () {
    return view('welcome');
});
Route ::get('profile/{name}','ProfileController@showProfile');
Route ::get('about/{theSubject}',function ($theSubject){
    return $theSubject.'Content goes here';
});
Route::get('admin/create', 'HomeController@create');
Route::post('admin/save', 'HomeController@save');
Route::get('admin/delete/{id}', 'HomeController@delete');
Route::get('admin/update/{id}', 'HomeController@update');



