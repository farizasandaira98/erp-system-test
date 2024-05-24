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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'role:Super Admin,Admin'])->group(function () {
    Route::resource('clients', App\Http\Controllers\ClientController::class);
    Route::resource('orders', App\Http\Controllers\OrderController::class);

    Route::get('orders/{order}/pdf', [App\Http\Controllers\OrderController::class, 'generatePDF'])->name('orders.pdf');
});

Route::post('logout', [App\Http\Controllers\Auth\LogoutController::class, 'logout'])->name('logout');


