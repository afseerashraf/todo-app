<?php

use App\Http\Controllers\FrondEndcontroller;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\For_;
use App\Http\Middleware\checkuser;

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
    Route::get('/',[FrondEndcontroller::class,'viewlogin'])->name('loginpage');



    Route::post('/userLogedin',[FrondEndcontroller::class,'userLogedin'])->name('user.Login');
    
    //autherised user can only access this routes.
    Route::group(['middleware' => 'user_auth'], function(){
        Route::get('/create',[FrondEndcontroller::class,'create'])->name('create');
        Route::post('/todo',[FrondEndcontroller::class,'todo'])->name('todotask');
        Route::get('/list',[FrondEndcontroller::class,'list'])->name('todolist');
        Route::get('delete/{id}',[FrondEndcontroller::class,'delete'])->name('delete');
        Route::get('logout',[FrondEndcontroller::class,'logout'])->name('logout.user');
});
    




// Route::group(['prefix' => 'payments'],function(){
    //     Route::get('/payments',[PaymentController::class,'viewpayment'])->name('viewpay');
    //     Route::post('/paymet',[PaymentController::class,'create'])->name('razorpay_payment');
    //     Route::post('/store-payment',[PaymentController::class,'payment'])->name('payment');
    // });



