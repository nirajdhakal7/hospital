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
Route::get('/', 'PageController@index');
Route::get('/executive', 'PageController@executive');
Route::get('/contact', 'PageController@contact');
Route::get('/service', 'PageController@service');

Auth::routes(['verify' => true]);
Route::group(['middleware' => ['verified']], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::resource('/', 'DashboardController');
        Route::resource('about', 'AboutController');
        Route::resource('doctor', 'DoctorController');
        Route::resource('executive', 'ExecutiveController');
        Route::resource('notice', 'NoticeController');
        Route::resource('pages', 'PageController');
        Route::resource('service', 'ServiceController');
        Route::resource('carousel', 'CarouselController');
        Route::resource('user', 'UserController');
        Route::patch('/verify/{user}', 'Auth\AdminVerificationController@update')->name('admin.verify');
    });
});