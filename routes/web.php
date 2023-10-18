<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Models\Produk;
use App\Http\Controllers\GoogleSheetController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/home', [ProdukController::class, 'index'])->name('produk.index');

Route::get('home/getProducts', [ProdukController::class, 'getProducts'])->name('home.getProducts');

// Route::get('sheets',[GoogleSheetController::class,'index']);

// Route::get('/detail-produk/{id}',[ProdukController::class,'detailProduk'])->name('detailProduk');

// Route::get('/detail-produk', 'ProdukController@showDetail')->name('detailProduk');

Route::get('/detail-produk', function () {
    return view('wss.detail.produk-detail');
});

Route::get('/searchbar', [ProdukController::class, 'search'])->name('search');

Route::get('/info-produk', [ProdukController::class, 'infoProduk'])->name('infoProduk');

Route::get('/input-produk', [ProdukController::class, 'tampilFormInput'])->name('tampilFormInput');
Route::post('/input-produk', [ProdukController::class, 'inputProduk'])->name('inputProduk');

Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('editProduk');
Route::put('/produk/update/{id}', [ProdukController::class, 'update'])->name('updateProduk');

Route::delete('/hapus-produk/{id}', [ProdukController::class, 'hapusProduk'])->name('hapusProduk');


Route::get('/kategori', function () {
    return view('wss.kategori');
});

Route::get('/resep', function () {
    return view('wss.resep');
});

Route::get('/keranjang', function () {
    return view('wss.keranjang');
});

Route::get('/akun', function () {
    return view('wss.akun');
});





