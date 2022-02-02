<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::post('/ajax/temper/date', [\App\Http\Controllers\TempController::class, 'getTemper'])->name('temp-data');
Route::any('/arduino/set', [\App\Http\Controllers\TempController::class, 'setDataArduino']);
Route::get('/a.php', [\App\Http\Controllers\TempController::class, 'setDataArduino']);
Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/temper',[\App\Http\Controllers\TempController::class,'index'])->name('temper');
Route::get('/contact',[\App\Http\Controllers\TempController::class,'contact']);
