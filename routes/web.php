<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PageController;
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

Route::get('/hitung', [HitungController::class, 'index'])->name('hitung.index');
Route::resource('/nilai', NilaiController::class)->parameters(['nilai' => 'nilai']);
Route::resource('/kriteria', KriteriaController::class)->parameters(['kriteria' => 'kriteria']);
Route::resource('/alternatif', AlternatifController::class)->parameters(['alternatif' => 'alternatif']);
Route::get('/',  [PageController::class, 'home'])->name('home');