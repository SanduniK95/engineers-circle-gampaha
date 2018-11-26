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
    return view('layouts.welcome');
});

Route::get('admin', function () {
    return view('layouts.admin-template');
});

Route::get('admin/sendmail', function () {
    return view('admin.sendmail');
});

Route::get('admin/newsletter', function () {
    return view('admin.newsletter');
});

Route::get('admin/viewUsers', function () {
    return view('admin.viewUserdetail');
});

Auth::routes();
Route::post('admin/newsletter','NewsletterController@store');


Route::get('/home', 'HomeController@index')->name('home');
