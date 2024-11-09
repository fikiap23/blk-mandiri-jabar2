<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Auth;

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
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);

// Route::get('/login', [AuthController::class, 'login']);
// Route::post('/login', [AuthController::class, 'postLogin']);

// Route::get('/register', [AuthController::class, 'register']);
// Route::post('/register', [AuthController::class, 'postRegister']);

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);


Route::group(['middleware' => 'auth'], function () {
    // Backend

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('/dashboard/artikel', ArtikelController::class);

    Route::resource('/dashboard/kategori', KategoriController::class);

    Route::get('/dashboard/artikel/create/checkSlug', [ArtikelController::class, 'checkSlug']);
});

// Route::get('/home', [HomeController::class, 'index']);
Route::get('/profile', [HomeController::class, 'profile']);
Route::get('/strukturOrganisasi', [HomeController::class, 'strukturOrganisasi']);
Route::get('/daftarKejuruan', [HomeController::class, 'daftarKejuruan']);
Route::get('/pengumuman', [HomeController::class, 'pengumuman']);
Route::get('/sk', [HomeController::class, 'syaratDanKetentuan']);
Route::get('/kebijakanPrivasi', [HomeController::class, 'kebijakanPrivasi']);
Route::get('/kontak', [HomeController::class, 'kontak']);
Route::get('/alumni', [HomeController::class, 'alumni']);

Route::get('*', [AuthController::class, 'NotFound']);
