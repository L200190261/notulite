<?php

use App\Models\M_Administrator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RapatController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\NotulensiController;
use App\Http\Controllers\AdministratorController;


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
//     return view('home', [
//         "title" => "Home",
//         "active" => 'home'
//     ]);
// });
// Route::get('/rapat', function () {
//     return view('rapat', [
//         "title" => "Rapat",
//         "active" => 'rapat'
//     ]);
// });
// Route::get('/notulensi', function () {
//     return view('notulensi', [
//         "title" => "Notulensi",
//         "active" => 'notulensi'
//     ]);
// });

Route::get('/rapat', [RapatController::class, 'index'])->middleware('auth');
Route::get('/notulensi', [NotulensiController::class, 'index'])->middleware('auth');
Route::get('/', [HomeController::class, 'index'])->middleware('auth');

// halaman login
//halaman yang bisa diakses oleh tamu/yg belum login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

//logout
Route::post('/logout', [LoginController::class, 'logout']);

// halaman register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

//halaman dashboard
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layout/admin');
});

// Route::get('/administrator', function () {
//     return view('layout/administrator');
// });

// Route::get('/asn', function () {
//     return view('layout/asn');
// });

// Route::get('/nonasn', function () {
//     return view('layout/nonasn');
// });

// Route::get('/tambah-data', function () {
//     return view('layout/tambah');
// });

// Route CRUD
Route::get('/administrator', [AdministratorController::class, 'index'])->name('admin');

Route::get('/tambah-data', [AdministratorController::class, 'create']);
Route::post('/tambah-data/add', [AdministratorController::class, 'store'])->name('store');
Route::delete('/administrator/{admin}', [AdministratorController::class, 'destroy']);
