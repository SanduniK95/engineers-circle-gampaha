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

/*Route::get('admin/home', function () {
    return view('layouts.admin-template');
});
*/


Route::get('admin/sendmail', function () {
    return view('admin.sendmail');
});

Route::get('newsletter', function () {
    return view('admin.newsletter');
});

Route::get('admin/viewUsers', function () {
    return view('admin.viewUserdetail');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/newsletter','NewsletterController@create');
Route::post('/admin/newsletter','NewsletterController@store');
Route::match(['get','post'],'/admin','AdminController@login');
Route::get('/admin/dashboard','AdminController@dashboard');
Route::get('/logout','AdminController@logout');

Route::post('/create','MailController@store');

Route::post('admin/createproject/add','projectController@add');

Auth::routes();

Route::get('admin/projects','projectController@index');

Route::get('admin/createproject',function(){
	return view('admin/createproject');
});

Route::get('admin/viewoutproject',function(){
	return view('outsideproject/viewoutproject');
});

Route::resource('outsideProject', 'OutsideProjectController');