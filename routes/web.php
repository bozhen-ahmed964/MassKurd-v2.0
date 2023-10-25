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
    Route::prefix('/admin')->group(function () {

        Route::get('/billing', [billingController::class, 'billingView'])->name('billingPage');
        Route::get('/course', [courseController::class, 'courseView'])->name('coursePage');
        Route::get('/setting', [settingController::class, 'settingView'])->name('settingPage');


        // Member functoins
        Route::get('/addMember', [addMemberController::class, 'addMemberView'])->name('addMemberPage');
        Route::post('/storeMember', [addMemberController::class, 'storeMember']);
        Route::post('/deleteMember/{id}', [addMemberController::class, 'deleteMember']);
        Route::get('/memberInfoUpdate/{id}', [addMemberController::class, 'showUpdateForm']);
        Route::put('/updateMember/{id}', [addMemberController::class, 'updateMember']);


        // Trainer functions
        Route::get('/trainer', [trainerController::class, 'trainerView'])->name('trainerPage');
        Route::post('/addTrainer',[trainerController::class, 'addTrainer'])->name('addTrainer');
        Route::post('/deleteTrainer/{id}' ,[trainerController::class, 'deleteTrainer'])->name('deleteTrainer');



    });
});
