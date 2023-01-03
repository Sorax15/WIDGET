<?php

use App\Http\Controllers\TradeInController;
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

Route::get('/trade-in', [TradeInController::class, 'index'])->name('trade-in');
Route::post('/trade-check-vin', [TradeInController::class,'checkByVinCode'])->name('check-vin');
Route::post('/getAvailableYearMakeModel', [TradeInController::class,'getAvailableYearMakeModel'])->name('getAvailableYearMakeModel');
Route::post('/getEngine', [TradeInController::class,'getEngine'])->name('getEngine');
Route::post('/sell-my-car', [TradeInController::class,'onSellMyCar'])->name('sellMyCar');
Route::post('/get-trade-in-value', [TradeInController::class,'onGetTradeInValue'])->name('get-trade-in-value');
Route::post('/customer-information', [TradeInController::class,'onCustomerInformation'])->name('customer-information');
