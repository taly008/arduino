<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::group([
    'middleware' => 'auth'
],function(){
    Route::post('/ajax/temper/date', [\App\Http\Controllers\HomeController::class, 'getTemper'])->name('temp-data');
    Route::any('/arduino/set', [\App\Http\Controllers\HomeController::class, 'setDataArduino']);
    Route::get('/temper',[\App\Http\Controllers\HomeController::class,'temper'])->name('temper');
    Route::get('/contact',[\App\Http\Controllers\HomeController::class,'contact']);
    Route::get('/checkcode',[\App\Http\Controllers\HomeController::class,'checkcode']);
    Route::post('/check',[\App\Http\Controllers\HomeController::class,'check'])->name('check');

});

Route::group([
    'middleware' => ['role:admin']
],function(){
    Route::get('/setting',[\App\Http\Controllers\HomeController::class,'setting'])->name('setting');
    Route::post('/saveSetting',[\App\Http\Controllers\HomeController::class,'saveSetting'])->name('saveSetting');
});

Route::get('/b.php', [\App\Http\Controllers\HomeController::class, 'setDataArduino']);
Route::get('/test', [\App\Http\Controllers\HomeController::class, 'test']);
Route::post('/ajax/temper/getHomeTemper', [\App\Http\Controllers\HomeController::class, 'getHomeTemper']);
Auth::routes();

