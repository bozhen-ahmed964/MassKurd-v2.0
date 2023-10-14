<?php

use App\Http\Controllers\admin\adminLoginController;
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

Route::get('/', [App\Http\Controllers\loginController::class, 'login'])->name('login');


Route::get('/adminLogin', [App\Http\Controllers\admin\adminLoginController::class, 'adminLoginPage']);
Route::post('/adminLoginAuth', [App\Http\Controllers\admin\adminLoginController::class, 'storeAdmin']);


Route::middleware(['auth'])->group(function(){
    Route::get('/adminDashboard', [App\Http\Controllers\admin\adminDashboardController::class, 'adminDashboardShow'])->name('adminDashboard');
    Route::post('/logout', [adminLoginController::class, 'adminLogout'])->name('logout');
});
