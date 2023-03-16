<?php

use App\Http\Controllers\Auth\{LoginController, LogoutController, RegisterController};
use App\Http\Controllers\ProductController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

//__only for guest 
Route::middleware(['guest'])->group(function() { 
    //__login 
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
    
    //__register
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    
});

//__protected routes for auth
Route::middleware(['auth'])->group(function() {
    
    Route::get('/', [ProductController::class, 'index'])->name('home');

    //__logout
    Route::get('/logout', LogoutController::class)->name('logout');

    Route::get('/product/{products}', [ProductController::class, 'show'])->name('product.item');

});