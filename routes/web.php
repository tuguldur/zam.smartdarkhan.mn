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
    return view('client/home');
});
Route::get('/license', function () {
    return view('client/license');
});
Route::get('/pay', function () {
    return view('client/pay');
});

Auth::routes();
Route::get('/admin', 'adminController@index');
Route::get('/admin/profile', 'userController@index');
Route::post('/admin/profile', 'userController@save');

Route::post('/admin/payment','paymentController@save');
Route::get('/admin/payment','paymentController@view');
Route::get('/admin/payment/{id}','paymentController@find');
Route::delete('/admin/payment/','paymentController@remove');
Route::get('/admin/payment/search/{search}','paymentController@search');

Route::get('/check/{car_number}','paymentController@check');