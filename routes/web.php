<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\resortController;

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

Route::get('/',[resortController::class,'index'])->name('index');
Route::post('/',[resortController::class,'create'])->name('create');
Route::get('/edit/{id}',[resortController::class,'edit'])->name('edit');
Route::put('/edit/{id}',[resortController::class,'update'])->name('update');
Route::get('/delete/{id}',[resortController::class,'destroy'])->name('destroy');



// Route::get('/{id}',[resortController::class,'destroy'])->name('destroy');