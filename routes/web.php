<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Login;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ResetPasswordController;

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

// sengaja dibikin gini => defaultnya radionbendahara.com tuh ke login
// jadi nanti di middleware dibikin aja kalo blm login ke lemparnya ke radionbendahara.com/dashboard
// defaultny yg bagus gini
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

// fungsi middleware auth biar yg bs masuk cm yg bs login
Route::middleware('admin')->controller(AdminController::class)->group(function() {
    Route::get('/admin', 'index');
    Route::get('/admin/bendahara', 'bendahara');
    Route::get('/admin/users', 'user');
    Route::get('/admin/hrd', 'hrd');

    Route::post('/admin/users', 'add_user');
});

Route::middleware('auth')->controller(DashboardController::class)->group(function() {
    Route::get('/dashboard', 'index')->name('dashboard');
    Route::post('/dashboard', 'update_password');
    
    Route::get('/bendahara', 'bendahara');
    Route::get('/user', 'user');
    Route::get('/evaluation', 'evaluation');

    Route::post('/bendahara', 'add_kas');
    Route::post('/evaluation', 'add_evaluation');
});


Route::middleware('guest')->controller(ResetPasswordController::class)->group(function() {
    Route::get('/forgot-password', 'index')->name('password.request');
    Route::post('/forgot-password', 'forgot_password')->name('password.email');
    Route::get('/reset-password/{token}', 'reset_token')->name('password.reset');
    Route::post('/reset-password', 'reset')->name('password.update');;
});