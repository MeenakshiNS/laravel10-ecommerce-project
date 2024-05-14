<?php
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
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
//-----------------------------------------------
// documentation

// Route::name('admin.')->group(function () {
//     Route::get('/users', function () {
//         // Route assigned name "admin.users"...
//     })->name('users');
// });
//----------------------------------------------


Route::name('admin.')->group(function(){
    Route::get('admin/login',[LoginController::class,'login']);
    Route::get('admin/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');



    Route::post('admin/check-login',[LoginController::class,'checkLogin'])->name('check.login');

});
