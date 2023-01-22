<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PadiController;

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


Route::get('/', [PadiController::class, 'dashboard'])->name('dashboard');
Route::get('/show/{show}', [PadiController::class, 'show'])->name('show');

Auth::routes();

Route::get('/home', [PadiController::class, 'index'])->name('home');
Route::resource('/padi', PadiController::class)->except('show')->middleware('auth');
