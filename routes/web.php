<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/show',[EmployeeController::class, 'show'])->name('employees.show');
Route::get('/employees/edit{id}',[EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/employees/update{id}',[EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/employees/delete{id}',[EmployeeController::class, 'delete'])->name('employees.delete');
Route::get('/employees/details/{id}', [EmployeeController::class, 'details'])->name('employees.details');
Route::get('/dashboard', [EmployeeController::class, 'dashboard'])->name('dashboard');