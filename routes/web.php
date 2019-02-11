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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/codes', 'PagesController@codes')->name('codes');
Route::get('/checkout', 'PagesController@codes')->name('checkout');


Route::resource('projects', 'ProjectsController');

Route::get('/mail-us', 'PagesController@mailUs')->name('mail_us');
Route::post('/mail', 'MailsController@store')->name('mails');

Route::post('/send-feedback', 'FeedbackController@sendFeedBack')->name('send_feedback');
