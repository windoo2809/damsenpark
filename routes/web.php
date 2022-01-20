<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VeController;

//index
Route::get('/', 'App\Http\Controllers\HomeController@index');

//sukien
Route::get('/su-kien', 'App\Http\Controllers\HomeController@event');

//lienhe
Route::get('/lien-he', 'App\Http\Controllers\HomeController@contact');

//sendmail
Route::post('/send-mail','App\Http\Controllers\HomeController@sendEmail')->name('send.email');

//chitietsukien
Route::get('/su-kien-chi-tiet/{id}', 'App\Http\Controllers\HomeController@detailevent');

//thanhtoan
Route::get('thanh-toan', 'App\Http\Controllers\VeController@pay');
//index
Route::get('thanh-cong', 'App\Http\Controllers\HomeController@thanhcong');

//admin
Route::get('admin', 'App\Http\Controllers\HomeController@dashboard');

Route::resource('/event',App\Http\Controllers\EventController::class);

Route::get('add-event', 'App\Http\Controllers\EventController@create');

Route::get('show-event', 'App\Http\Controllers\EventController@index');

Route::get('{id}/edit-event', 'App\Http\Controllers\EventController@edit');

Route::get('delete-event/{id}', 'App\Http\Controllers\EventController@delete');

//category_ve
Route::resource('/category-ve',App\Http\Controllers\CategoryVeController::class);

Route::get('add-category-ve', 'App\Http\Controllers\CategoryVeController@create');

Route::get('show-category-ve', 'App\Http\Controllers\CategoryVeController@index');

Route::get('{id}/edit-category-ve', 'App\Http\Controllers\CategoryVeController@edit');

Route::get('delete-category-ve/{id}', 'App\Http\Controllers\CategoryVeController@delete');

//order 

Route::get('show-order', 'App\Http\Controllers\VeController@index');

Route::get('add', 'App\Http\Controllers\VeController@add');

Route::post('insert-data', 'App\Http\Controllers\VeController@insert');

Route::get('delete-order/{id}', 'App\Http\Controllers\VeController@delete');



