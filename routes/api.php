<?php

use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', 'AuthController@login');

Route::group(['prefix' => 'auth', 'middleware' => 'auth:sanctum'], function() {
    // manggil controller sesuai bawaan laravel 8
    Route::post('logout', [AuthController::class, 'logout']);
    // manggil controller dengan mengubah namespace di RouteServiceProvider.php biar bisa kayak versi2 sebelumnya
    Route::get('api_user', 'ApiUserController@getall');

    // Route::get('api_user', [ApiUserController::class, 'getall']);

});

Route::group(['namespace' => 'Backend'], function(){
    //user
    Route::get('api_user', 'ApiUserController@getall');
    Route::get('api_user/{id}', 'ApiUserController@getus');
    Route::post('api_user', 'ApiUserController@createus');
    Route::put('api_user', 'ApiUserController@updateus');
    Route::delete('api_user', 'ApiUserController@deleteus');

    //contact
    Route::get('api_contact', 'ApiPenggunaController@getall');
    Route::get('api_contact/{id}', 'ApiPenggunaController@getpeng');
    Route::post('api_contact', 'ApiPenggunaController@createpeng');
    Route::put('api_contact', 'ApiPenggunaController@updatepeng');
    Route::delete('api_contact', 'ApiPenggunaController@deletepeng');

    //dokumentasi
    Route::get('api_dokumentasi', 'ApiDokumentasiController@getall');
    Route::get('api_dokumentasi/{id}', 'ApiDokumentasiController@getdok');
    Route::post('api_dokumentasi', 'ApiDokumentasiController@createdok');
    Route::put('api_dokumentasi', 'ApiDokumentasiController@updatedok');
    Route::delete('api_dokumentasi', 'ApiDokumentasiController@deletedok');

    //informasi
    Route::get('api_informasi', 'ApiInformasiController@getall');
    Route::get('api_informasi/{id}', 'ApiInformasiController@getinf');
    Route::post('api_informasi', 'ApiInformasiController@createinf');
    Route::put('api_informasi', 'ApiInformasiController@updateinf');
    Route::delete('api_informasi', 'ApiInformasiController@deleteinf');

    //produk
    Route::get('api_produk', 'ApiProdukController@getall');
    Route::get('api_produk/{id}', 'ApiProdukController@getprod');
    Route::post('api_produk', 'ApiProdukController@createprod');
    Route::put('api_produk', 'ApiProdukController@updateprod');
    Route::delete('api_produk', 'ApiProdukController@deleteprod');

    //transaksi
    Route::get('api_transaksi', 'ApiTransaksiController@getall');
    Route::get('api_transaksi/{id}', 'ApiTransaksiController@gettransk');
    Route::post('api_transaksi', 'ApiTransaksiController@createtransk');
    Route::put('api_transaksi', 'ApiTransaksiController@updatetransk');
    Route::delete('api_transaksi', 'ApiTransaksiController@deletetransk');
});
