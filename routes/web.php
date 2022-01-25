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

Route::post('/ajax/temper/date', [\App\Http\Controllers\TempController::class, 'getTemper'])->name('temp-data');

Route::any('/arduino/set', [\App\Http\Controllers\TempController::class, 'setDataArduino']);
Route::any('/a', [\App\Http\Controllers\TempController::class, 'setDataArduino']);

Route::get('/',[\App\Http\Controllers\TempController::class,'index'])->name('home');
