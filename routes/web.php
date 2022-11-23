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

Route::get('/', function () {
    return '<a href="/welcome">WELCOME</a>';
});

Route::get('/welcome', [\App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::post('/send-question', [\App\Http\Controllers\HomeController::class, 'question']);

Route::get('/choose-expert', [\App\Http\Controllers\SalesPerson::class, 'chooseExpert'])->name('choose-details');
Route::get('/expert-details', [\App\Http\Controllers\SalesPerson::class, 'expertDetails'])->name('sales-details');
