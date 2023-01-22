<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\StudentController;
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
Route::get('/department',[DepartmentController::class,'show'])->name('department');
Route::post('/add-department',[DepartmentController::class,'create'])->name('add.department');
Route::get('/edit-department/{id}',[DepartmentController::class,'edit'])->name('edit.department');
Route::post('/update-department',[DepartmentController::class,'updateDepartment'])->name('update.department');
Route::get('/delete-department/{id}',[DepartmentController::class,'deleteDepartment'])->name('delete.department');


//-------------------Profile Routes-------------------
Route::get('profile',[ProfileController::class,'index'])->name('profile');


//-------------------Program Routes-------------------
Route::get('program',[ProgramController::class,'index'])->name('program');
Route::get('delete-program/{id}',[ProgramController::class,'destroy'])->name('delete.program');
Route::get('edit-program/{id}',[ProgramController::class,'edit'])->name('edit.program');

Route::post('add-program',[ProgramController::class,'create'])->name('add.program');
Route::post('update-program',[ProgramController::class,'update'])->name('update.program');


//-------------------Student Routes-------------------
Route::get('add-student',[StudentController::class,'index'])->name('add.student');
Route::post('add-student',[StudentController::class,'store'])->name('store.student');
Route::get('all-students',[StudentController::class,'manage'])->name('all.students');
Route::get('show-student',[StudentController::class,'show'])->name('show.student');
Route::get('edit-student',[StudentController::class,'edit'])->name('edit.student');
