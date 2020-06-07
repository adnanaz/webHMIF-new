<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix'=>'adminhimpunanmahasiswaif'] , function(){
    Route::group(['prefix' => 'artikel'], function () {
        Route::get('/tambah','AdminArtikelController@create')->name('adminartikel.create');
        Route::post('/tambah','AdminArtikelController@store')->name('adminartikel.store');
        Route::get('/{id}/edit','AdminArtikelController@edit')->name('adminartikel.edit');
        Route::post('/{id}/update','AdminArtikelController@update')->name('adminartikel.update');
        Route::get('/{id}/delete','AdminArtikelController@destroy')->name('adminartikel.delete');
    });

    Route::group(['prefix' => 'berita'], function () {
        Route::get('/tambah','AdminEventController@create')->name('adminberita.create');
        Route::post('/tambah','AdminEventController@store')->name('adminberita.store');
        Route::get('/{id}/edit','AdminEventController@edit')->name('adminberita.edit');
        Route::post('/{id}/update','AdminEventController@update')->name('adminberita.update');
        Route::get('/{id}/delete','AdminEventController@destroy')->name('adminberita.delete');
    });
    
}); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
