<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;

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

Route::get('/', [ViewsController::class, 'home'])->name('home');
Route::get('/soal/uts', [ViewsController::class, 'soal_uts'])->name('get-uts');
Route::get('/soal/uas', [ViewsController::class, 'soal_uas'])->name('get-uas');
Route::get('/soal/tugas', [ViewsController::class, 'tugas'])->name('get-tugas');
