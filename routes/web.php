<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\EmployeeController;

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

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/karyawan', [KaryawanController::class, 'index']);

// employee
// Route::get('/employee', [EmployeeController::class, 'index']);
// Route::get('/employee/create', [EmployeeController::class, 'create']);
// Route::get('/employee/{employee}', [EmployeeController::class, 'show']);
// Route::post('/employee', [EmployeeController::class, 'store']);
// Route::delete('/employee/{employee}', [EmployeeController::class, 'destroy']);
// Route::get('/employee/{employee}/edit', [EmployeeController::class, 'edit']);
// Route::patch('/employee/{employee}', [EmployeeController::class, 'update']);
Route::resource('employee', EmployeeController::class);