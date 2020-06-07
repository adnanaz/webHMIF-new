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

// Route::get('/', function () {
//     return view('layout.pengunjung');
// });

Route::get('/','UtamaController@index')->name('utama.index');
Route::get('/detailberitaacara','EventController@index')->name('detailberitaacara.index');
Route::get('/detailartikel','ArtikelController@index')->name('detailartikel.index');

Route::group(['prefix'=>'adminhimpunanmahasiswaif', 'middleware'=>'auth'] , function(){
    Route::get('/','AspirationController@dashboard')->name('dashboard.dashboard');
    Route::get('/gantipassword','GantiPasswordController@index')->name('gantipassword.index');
    Route::post('/password','GantiPasswordController@changePassword')->name('gantipassword.changePassword');

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

    Route::group(['prefix' => 'merchandise'], function () {
        Route::get('/tambah','MerchandiseController@create')->name('adminmerchandise.create');
        Route::post('/tambah','MerchandiseController@store')->name('adminmerchandise.store');
        Route::get('/{id}/delete','MerchandiseController@destroy')->name('adminmerchandise.delete');
    });

    Route::group(['prefix' => 'aspirasi'], function () {
        Route::get('/','AspirationController@index')->name('aspirasi.index');
        Route::get('/tambah','AspirationController@create')->name('adminaspirasi.create');
        Route::post('/tambah','AspirationController@store')->name('adminaspirasi.store');
        Route::get('/{id}/delete','AspirationController@destroy')->name('adminaspirasi.delete');
    });

    Route::group(['prefix' => 'header'], function () {
        Route::get('/edit','HeaderController@edit')->name('adminheader.edit');
        Route::post('/{id}/update','HeaderController@update')->name('adminheader.update');
    });

    Route::group(['prefix' => 'youtube'], function () {
        Route::get('/tambah','YoutubeController@create')->name('adminyoutube.create');
        Route::post('/tambah','YoutubeController@store')->name('adminyoutube.store');
        Route::get('/{id}/delete','YoutubeController@destroy')->name('adminyoutube.delete');
    });
}); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
