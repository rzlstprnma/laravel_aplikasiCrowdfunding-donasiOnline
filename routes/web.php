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

Route::get('/', 'front\\frontController@index');

// ========== middle =====
Route::group(['middleware' => 'auth'], function () {
    Route::get('/laporanperkembangan/create/{id}', 'middle\\programController@createlaporanperkembangan');
    Route::post('/laporanperkembangan/store', 'middle\\programController@storelaporanperkembangan');
    Route::get('/middle', 'middle\\programController@middle');
    Route::get('/detailprogram/{id}', 'middle\\programController@detailprogram')->name('detail');
    Route::resource('program', 'middle\\programController');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


// ============ front ====
Route::get('/donasi/{id}', 'front\\frontController@donasi');
Route::post('/donasi/store/{id}', 'front\\frontController@store');
Route::get('/daftarprogram', 'front\\frontController@daftarprogram');
Route::get('/konfirmasi', 'front\\frontController@konfirmasi');

Route::group(['prefix' => 'admin'], function () {
   Route::group(['middleware' => ['auth']], function () {
       Route::get('/dashboard', 'back\\backController@index');
       Route::get('/program', 'back\\backController@program');
   });   
});

