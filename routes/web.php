<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;

//index
Route::get('/', 'App\Http\Controllers\HomeController@index');

//sukien
Route::get('/su-kien', 'App\Http\Controllers\HomeController@event');


//lienhe
Route::get('/lien-he', 'App\Http\Controllers\HomeController@contact');

//chitietsukien
Route::get('/su-kien-chi-tiet', 'App\Http\Controllers\HomeController@detailevent');

//thanhtoan
Route::get('thanh-toan', 'App\Http\Controllers\HomeController@payment');

//admin
Route::get('admin', 'App\Http\Controllers\HomeController@dashboard');

Route::resource('/event',App\Http\Controllers\EventController::class);

Route::get('add-event', 'App\Http\Controllers\EventController@create');

Route::get('show-event', 'App\Http\Controllers\EventController@index');

Route::get('{id}/edit-event', 'App\Http\Controllers\EventController@edit');

Route::get('delete/{id}', 'App\Http\Controllers\EventController@delete');




