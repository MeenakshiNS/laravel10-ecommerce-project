<?php
use App\Http\Controllers\User\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// use App\Http\Controllers\UserController;
 
// Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/',[HomeController::class,'home']);