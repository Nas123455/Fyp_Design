<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\AdminController;


// use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\admin\LoginController as AdminLoginController;
// use App\Http\Controllers\admin\DashboardController as AdminDashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/login', [LoginController::class, 'index'])->name('account.login');
// Route::get('/register', [LoginController::class, 'register'])->name('account.register');
// Route::post('/process-register', [LoginController::class, 'processRegister'])->name('account.processRegister');
// Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');

// Route::get('/logout', [LoginController::class, 'logout'])->name('account.logout');
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('account.dashboard');

// Route::group(['prefix' => 'account'], function() {

//     // Guest routes for users
//     Route::middleware('guest')->group(function() {
       
//     });

//     // Authenticated routes for users
//     Route::middleware('auth')->group(function() {
       
//     });
// });

// Route::group(['prefix' => 'admin'], function() {

//     // Guest routes for admins
//     // Route::middleware('admin.guest')->group(function() {
//         Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
//         Route::post('/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
//     // });

//     // Authenticated routes for admins
//     Route::middleware('admin.auth')->group(function() {
//         Route::get('/admindashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
//         Route::get('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
//     });
// });

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'processRegister'])->name('processRegister');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('account.dashboard');
        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');


// Route::get('/account/dashboard', [AccountController::class, 'dashboard'])->name('account.dashboard');

