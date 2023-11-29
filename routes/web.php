<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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
 
Route::middleware(['auth'])->group(function () {
    Route::get('/',  [HomeController::class,'home'])->name('home');
    
    Route::get('/add',  [ProductController::class,'add'])->name('add');

    Route::post('/add',  [ProductController::class,'store'])->name('store');

    Route::get('/view/{id}',  [ProductController::class,'view'])->name('view');
    
    Route::get('/edit/{id}',  [ProductController::class,'edit'])->name('edit');
    Route::post('/edit/{id}',  [ProductController::class,'update'])->name('update');
    
    Route::get('/delete/{id}',  [ProductController::class,'delete'])->name('delete');

    Route::get('/logout',  [AuthController::class,'logout'])->name('logout');

});

Route::middleware(['guest'])->group(function () {
    Route::get('/login',  [AuthController::class,'login'])->name('login');
    Route::post('/login',  [AuthController::class,'auth'])->name('login.auth');
    Route::get('/register',  [AuthController::class,'register'])->name('register');
    Route::post('/register',  [AuthController::class,'store'])->name('register.store');
});
 
