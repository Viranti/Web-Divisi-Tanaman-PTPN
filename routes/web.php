<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProtasController;
use App\Http\Controllers\RaystatController;
use App\Http\Controllers\TahunTanamController;
use Illuminate\Support\Facades\Route;

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

Route::get('/profil', function () {
    return view('client/profil');
})->name('profil');
// Auth Controller
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::get('/daftar', [AuthController::class, 'showDaftar'])->name('daftar');
Route::post('/login-store', [AuthController::class, 'login'])->name('login.store');
Route::post('/daftar-store', [AuthController::class, 'daftar'])->name('daftar.store');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


// Protas Controller
Route::middleware('auth')->get('/protas', [ProtasController::class, 'index'])->name('protas');
Route::middleware('auth')->post('/protas/store', [ProtasController::class, 'store'])->name('protas.store');
Route::middleware('auth')->get('/protas/download/{id}', [ProtasController::class, 'download'])->name('protas.download');
Route::middleware('auth')->get('/protas/edit/{id}', [ProtasController::class, 'edit'])->name('protas.get');
Route::middleware('auth')->delete('/protas/delete/{id}', [ProtasController::class, 'destroy'])->name('protas.destroy');
Route::middleware('auth')->put('/protas/update', [ProtasController::class, 'update'])->name('protas.update');

// Raystat Controller
Route::middleware('auth')->get('/raystat', [RaystatController::class, 'index'])->name('raystat');
Route::middleware('auth')->post('/raystat/store', [RaystatController::class, 'store'])->name('raystat.store');
Route::middleware('auth')->get('/raystat/download/{id}', [RaystatController::class, 'download'])->name('raystat.download');
Route::middleware('auth')->get('/raystat/edit/{id}', [RaystatController::class, 'edit'])->name('raystat.get');
Route::middleware('auth')->delete('/raystat/delete/{id}', [RaystatController::class, 'destroy'])->name('raystat.destroy');
Route::middleware('auth')->put('/raystat/update', [RaystatController::class, 'update'])->name('raystat.update');

// tahunTanam Controller
Route::middleware('auth')->get('/tahunTanam', [TahunTanamController::class, 'index'])->name('tahunTanam');
Route::middleware('auth')->post('/tahunTanam/store', [TahunTanamController::class, 'store'])->name('tahunTanam.store');
Route::middleware('auth')->get('/tahunTanam/download/{id}', [TahunTanamController::class, 'download'])->name('tahunTanam.download');
// Route::middleware('auth')->get('/tahunTanam/edit/{id}', [TahunTanamController::class, 'edit'])->name('tahunTanam.get');
Route::middleware('auth')->delete('/tahunTanam/delete/{id}', [TahunTanamController::class, 'destroy'])->name('tahunTanam.destroy');
Route::middleware('auth')->put('/tahunTanam/update', [TahunTanamController::class, 'update'])->name('tahunTanam.update');

// Dashboard Controller
Route::middleware('auth')->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Dashboard Controller
Route::get('/', [BerandaController::class, 'index'])->name('beranda');

// Berita Controller
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::middleware('auth')->post('/berita/store', [BeritaController::class, 'store'])->name('berita.store');
Route::middleware('auth')->delete('/berita/delete/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
Route::middleware('auth')->put('/berita/update', [BeritaController::class, 'update'])->name('berita.update');