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

Route::get('admin', function () {
    return view('layouts.admin-template');
});

Route::get('admin/sendmail', function () {
    return view('admin.sendmail');
});

Route::get('admin/sendmail', function () {
    return view('admin.sendmail');
});

Route::get('admin/viewUsers', function () {
    return view('admin.viewUserdetail');
});

Route::post('/create','MailController@store');

Route::post('admin/create_project/add','projectController@add');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/createproject',function(){
	return view('admin/createproject');
});
