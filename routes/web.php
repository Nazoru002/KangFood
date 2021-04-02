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


Auth::routes();

Route::get('/', 'BaseController@index')->name('frontend.main');
Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'backend', 'as' => 'backend.'], function ()
    {
        Route::get('/', 'Backend\MainController@index')->name('main');
        
        Route::get('/barang', 'Backend\BarangController@index')->name('barang');

    });
});

Route::get('/home', 'HomeController@index')->name('home');
