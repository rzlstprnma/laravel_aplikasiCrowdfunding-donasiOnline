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
    Route::get('/verify/{id}', 'middle\\programController@verify');
    Route::get('/donasi', 'middle\\programController@donasi');
    Route::post('/donasi/konfir/{id}', 'middle\\programController@donasikonfir');
});

Auth::routes();

// ============ front =====
Route::get('/donasi/{id}', 'front\\frontController@donasi');
Route::get('/donasi/{id}/donasi', 'front\\frontController@donasicreate');
Route::post('/donasi/{id}/donasi/store', 'front\\frontController@donasistore');
Route::get('/daftarprogram', 'front\\frontController@daftarprogram');
Route::get('/program/category/{id}', 'front\\frontController@programcategory');
Route::get('/konfirmasi', 'front\\frontController@konfirmasi');
Route::post('/konfirmasi/store/{id}', 'front\\frontController@konfirmasistore');
Route::get('/thx/{id}', 'front\\frontController@thx')->name('thx');
Route::get('/konfirmasi/thx/{id}', 'front\\frontController@thxkonfir')->name('thxkonfir');
Route::post('/report/{id}', 'front\\frontController@report');




// ======= back =====
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::group(['middleware' => ['auth']], function () {
            Route::get('/dashboard', 'back\\backController@index');
            Route::get('/program', 'back\\backController@program');
            Route::get('/categories', 'back\\backController@categories');
            Route::post('/categories/create', 'back\\backController@categoriescreate');
            Route::get('/published/{id}', 'back\\backController@published');
            Route::get('/selected/{id}', 'back\\backController@selected');
            Route::get('/delete/{id}', 'back\\backController@destroy');
            Route::get('/detail/{id}', 'back\\backController@detail');
            Route::get('/hapus/{id}', 'back\\backController@hapusProgram');
        });   
    });
});


