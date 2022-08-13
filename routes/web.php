<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\resortController;
use App\Http\Controllers\HomePageController;

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

Route::get('/', HomePageController::class)->name('homepage');

Route::get('/resorts',[resortController::class,'index'])->name('resort.index');
Route::post('/resorts/create',[resortController::class,'create'])->name('resort.create');
Route::get('resorts/edit/{id}',[resortController::class,'edit'])->name('resort.edit');
Route::put('resorts/edit/{id}',[resortController::class,'update'])->name('resort.update');
Route::get('resorts/delete/{id}',[resortController::class,'destroy'])->name('resort.destroy');





// Route::get('/{id}',[resortController::class,'destroy'])->name('destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
