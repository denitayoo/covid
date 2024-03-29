<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\RwController;
use App\Http\Controllers\JumlahkasusController;

use App\Http\Controllers\FrontendController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes(['register'=>false]);

Route::group(['prefix' => 'admin', 'middleware'=>['auth']], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
   Route::resource('provinsi',ProvinsiController::class);
   Route::resource('kota',KotaController::class);
   Route::resource('kecamatan',KecamatanController::class);
   Route::resource('kelurahan',KelurahanController::class);
   Route::resource('rw',RwController::class);
   Route::resource('jumlahkasus',JumlahkasusController::class);

});

Route::get('dashboard',function () {
    return view('dashboard.index');
});

Route::resource('/',FrontendController::class);