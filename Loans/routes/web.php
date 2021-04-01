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
    return view('welcome');
});


use App\Http\Controllers\AdminController;

Route::get('/admin',[AdminController::class, 'index']);
Route::get('/admin/loans',[AdminController::class, 'loan'] );
Route::get('/admin/payments/{year}', [AdminController::class, 'payment']);
Route::get('/admin/clients',[AdminController::class, 'client'] );
Route::get('/admin/loanofficers', [AdminController::class, 'loanofficer']);
Route::get('/admin/loantypes', [AdminController::class, 'loantype']);
Route::get('/admin/loanplan', [AdminController::class, 'loanplan']);
Route::get('/admin/clientshow/{id}', [AdminController::class, 'clientshow']);
Route::get('/admin/years/', [AdminController::class, 'years']);


use App\Http\Controllers\LoanofficerController;

Route::get('/officer',[LoanofficerController::class, 'index'] );
Route::get('/officer/loans',[LoanofficerController::class, 'loan'] );
Route::get('/officer/payments/{year}', [LoanofficerController::class, 'payment']);
Route::get('/officer/clients',[LoanofficerController::class, 'client'] );
Route::get('/officer/loantypes', [LoanofficerController::class, 'loantype']);
Route::get('/officer/loanplan', [LoanofficerController::class, 'loanplan']);
Route::get('/officer/clientshow/{id}', [LoanofficerController::class, 'clientshow']);
Route::get('/officer/years', [LoanofficerController::class, 'years']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
