<?php

use App\Http\Controllers\FrondEndcontroller;
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
Route::get('login',[FrondEndcontroller::class,'login'])->name('login');
Route::post('/userLogin',[FrondEndcontroller::class,'userLogin'])->name('login')->middleware('user_auth');
    Route::get('/create',[FrondEndcontroller::class,'create'])->name('create');
    Route::post('/todo',[FrondEndcontroller::class,'todo'])->name('todotask');
    Route::get('/list',[FrondEndcontroller::class,'list'])->name('viewtodo');
    Route::get('delete/{id}',[FrondEndcontroller::class,'delete'])->name('delete');


