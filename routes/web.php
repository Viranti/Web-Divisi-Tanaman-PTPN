<?php

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
Route::get('/dashboard', function () {
    return view('admin/dashboard');
});
Route::get('/raystat', function () {
    return view('admin/raystat');
});
Route::get('/protas', function () {
    return view('admin/protas');
});
