<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;


Route::get('/', [CustomerController::class, 'index'])->name('customers.index');



Route::resource('barang', BarangController::class);
Route::resource('customer', CustomerController::class);

Route::prefix('customer')->group(function(){
    Route::get('/', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('/take/{customer}', [CustomerController::class, 'take'])->name('customers.take');
    Route::post('/take/{customer}', [CustomerController::class, 'takeStore'])->name('customers.takeStore');
});

//pivot
Route::get('/trans', [CustomerController::class, 'trans'])->name('trans');
