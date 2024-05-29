<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('admin/login');
});
// Protas Controller
Route::get('/protas', [ProtasController::class, 'index'])->name('protas');
Route::post('/protas/store', [ProtasController::class, 'store'])->name('protas.store');
Route::get('/protas/download/{id}', [ProtasController::class, 'download'])->name('protas.download');
Route::get('/protas/edit/{id}', [ProtasController::class, 'edit'])->name('protas.get');
Route::delete('/protas/delete/{id}', [ProtasController::class, 'destroy'])->name('protas.destroy');
Route::put('/protas/update', [ProtasController::class, 'update'])->name('protas.update');

// Raystat Controller
Route::get('/raystat', [RaystatController::class, 'index'])->name('raystat');
Route::post('/raystat/store', [RaystatController::class, 'store'])->name('raystat.store');
Route::get('/raystat/download/{id}', [RaystatController::class, 'download'])->name('raystat.download');
Route::get('/raystat/edit/{id}', [RaystatController::class, 'edit'])->name('raystat.get');
Route::delete('/raystat/delete/{id}', [RaystatController::class, 'destroy'])->name('raystat.destroy');
Route::put('/raystat/update', [RaystatController::class, 'update'])->name('raystat.update');

// tahunTanam Controller
Route::get('/tahunTanam', [TahunTanamController::class, 'index'])->name('tahunTanam');
Route::post('/tahunTanam/store', [TahunTanamController::class, 'store'])->name('tahunTanam.store');
Route::get('/tahunTanam/download/{id}', [TahunTanamController::class, 'download'])->name('tahunTanam.download');
Route::get('/tahunTanam/edit/{id}', [TahunTanamController::class, 'edit'])->name('tahunTanam.get');
Route::delete('/tahunTanam/delete/{id}', [TahunTanamController::class, 'destroy'])->name('tahunTanam.destroy');
Route::put('/tahunTanam/update', [TahunTanamController::class, 'update'])->name('tahunTanam.update');

// Dashboard Controller
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
