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


/* NORMAL VIEWS */
Route::get('/', function () {
    return view('welcome');
});

/* DATA ROUTES */
Route::get('/list', [App\Http\Controllers\OrderDetailController::class, 'showlist'])->name('list');
Route::get('/delete/{id}', [App\Http\Controllers\OrderDetailController::class, 'destroy'])->name('delete');
Route::post('/storeinvoice', [App\Http\Controllers\OrderDetailController::class, 'storeinvoice'])->name('storeinvoice');
Route::get('/create', [App\Http\Controllers\CompanyDetailsController::class, 'showcompanydetails'])->name('create');
Route::get('/showinvoice/{id}', [App\Http\Controllers\OrderDetailController::class, 'showinvoice'])->name('showinvoice');


/* AUTHENTICATION VIEWS */
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




