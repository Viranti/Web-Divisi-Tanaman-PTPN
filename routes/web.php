<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProtasController;
use App\Http\Controllers\RaystatController;
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
// Dashboard Controller
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Raystat Controller
Route::get('/raystat', [RaystatController::class, 'index'])->name('raystat');
