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

Auth::routes(['verify' => true]);

Route::get('/service', function () {
    return view('web.page.services');
});
Route::get('/contact', function () {
    return view('web.page.contact');
});
Route::get('/', 'PageController@index');
Route::group(['middleware' => [ 'verified']], function () {
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