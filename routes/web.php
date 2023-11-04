<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DevicesSystemsController;
use App\Http\Controllers\RecivingStockController;
use App\Http\Controllers\SalesReportController;
use App\Http\Controllers\StoreMasterDataController;
use App\Http\Controllers\VoidController;
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
    return view('Auth.auth');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/product', [StoreMasterDataController::class, 'index']);

Route::get('/sales-event-order', [RecivingStockController::class, 'index']);

Route::get('/trunstile', [SalesReportController::class, 'index']);

