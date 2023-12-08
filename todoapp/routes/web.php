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
Route::get('/login',[FrondEndcontroller::class,'login'])->name('loginpage');
Route::get('/Address',[FrondEndcontroller::class, 'address'])->name('userAddress');
Route::group(['middleware' => 'user_auth'], function(){
    Route::post('/userLogin',[FrondEndcontroller::class,'userLogin'])->name('user.Login');
    Route::get('/create',[FrondEndcontroller::class,'create'])->name('create');
    Route::post('/todo',[FrondEndcontroller::class,'todo'])->name('todotask');
    Route::get('/list',[FrondEndcontroller::class,'list'])->name('todolist');
    Route::get('delete/{id}',[FrondEndcontroller::class,'delete'])->name('delete');
    Route::get('logout',[FrondEndcontroller::class,'logout'])->name('logout.user');




});


