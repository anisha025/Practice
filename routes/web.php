<?php

use App\Http\Controllers\frontendController;
use App\Http\Controllers\StudentController;
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

Route::get("/", [frontendController::class, 'welcome']);
Route::get("/register", [frontendController::class, 'register']);

Route::post("/registration", [StudentController::class, 'store']);
Route::get("/student-delete/{id}", [StudentController::class, 'destroy']);
Route::get("/registration-edit/{id}", [StudentController::class, 'edit']);
Route::post("/registeration-update/{id}", [StudentController::class, 'update']);
