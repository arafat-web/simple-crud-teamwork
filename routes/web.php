<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {return view('welcome');});

//-------------------Dashboard Routes-------------------
Route::get('/',[DashboardController::class,'index'])->name('dashboard');


//-------------------Departments Routes-------------------
Route::get('department',[DepartmentController::class,'index'])->name('department');


//-------------------Profile Routes-------------------
Route::get('profile',[ProfileController::class,'index'])->name('profile');


//-------------------Profile Routes-------------------
Route::get('program',[ProgramController::class,'index'])->name('program');
