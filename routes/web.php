<?php

use App\Http\Controllers\BarangMasukController;
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

Auth::routes(
    [
        'register' => false
    ]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// khusus admin
// Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function(){
//     Route::get('/', function(){
//         return 'halaman admin';
//     });

//     Route::get('profile', function(){
//         return 'halaman profile admin';
//     });
// });
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('barang', function(){
        return view ('barang.index');
    })->middleware(['role:admin|pengguna']);

    Route::get('barangmasuk', function(){
        return view ('barangmasuk.index');
    })->middleware(['role:admin']);
    Route::resource('barangmasuk', BarangMasukController::class);
});
Route::resource('barangmasuk', BarangMasukController::class);

// // hanya untuk pengguna
// Route::group(['prefix' => 'pengguna', 'middleware' => ['auth', 'role:pengguna']], function(){
//     Route::get('/', function(){
//         return 'halaman pengguna';
//     });

//     Route::get('profile', function(){
//         return 'halaman profile pengguna';
//     });
// });