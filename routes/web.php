<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[RegisterController::class,'showRegistrationForm'])->name('register');
Route::post('/register',[RegisterController::class,'register']);

Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');
Route::post('/login',[LoginController::class,'login']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/getUserDetails',[DashboardController::class,'getUserDetails'])->name('getUserDetails');
    Route::put('/dashboard/editUser', [DashboardController::class,'editUser'])->name('editUser');
    Route::delete('/dashboard/deleteUser', [DashboardController::class, 'deleteUser'])->name('deleteUser');
    //Route::get('/auth/google', [DashboardController::class,'redirectToGoogle']);
    Route::get('/dashboard/handleGoogleCallback', [DashboardController::class,'handleGoogleCallback'])->name('handleGoogleCallback');
    Route::get('/dashboard/synchroniseCalendar',[DashboardController::class,'synchroniseCalendar'])->name('synchroniseCalendar');
    Route::get('/dashboard/stripe', [DashboardController::class, 'stripe']);
    Route::post('/dashboard/stripePost', [DashboardController::class, 'stripePost'])->name('stripePost');
    Route::get('/dashboard/stripeConfirmPayment',[DashboardController::class,'stripeConfirmPayment'])->name('stripeConfirmPayment');
    Route::post('/dashboard/ExpressPayment',[DashboardController::class,'ExpressPayment'])->name('ExpressPayment');
    Route::post('/dashboard/sendMessage', [DashboardController::class,'sendMessage'])->name('sendMessage');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');