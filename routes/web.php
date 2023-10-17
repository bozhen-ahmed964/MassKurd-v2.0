<?php

use App\Http\Controllers\admin\addMemberController;
use App\Http\Controllers\admin\adminLoginController;
use App\Http\Controllers\admin\billingController;
use App\Http\Controllers\admin\courseController;
use App\Http\Controllers\admin\settingController;
use App\Http\Controllers\admin\trainerController;
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


Route::middleware(['auth'])->group(function () {

    Route::get('/adminDashboard', [App\Http\Controllers\admin\adminDashboardController::class, 'adminDashboardShow'])->name('adminDashboard');
    Route::post('/logout', [adminLoginController::class, 'adminLogout'])->name('logout');


    // Add member routes
    Route::get('/admin/addMember', [addMemberController::class, 'addMemberView'])->name('addMemberPage');
    Route::post('/admin/storeMember',[addMemberController::class, 'storeMember']);






    Route::get('/admin/billing', [billingController::class, 'billingView'])->name('billingPage');
    Route::get('/admin/course', [courseController::class, 'courseView'])->name('coursePage');
    Route::get('/admin/setting', [settingController::class, 'settingView'])->name('settingPage');
    Route::get('/admin/trainer', [trainerController::class, 'trainerView'])->name('trainerPage');
});
