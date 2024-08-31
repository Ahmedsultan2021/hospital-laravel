<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/departments',[DepartmentController::class,'index'])->name('departments.index');
Route::get('/departments/create',[DepartmentController::class,'create'])->name('departments.create');
Route::post('/departments/store',[DepartmentController::class,'store'])->name('departments.store');
Route::get('/departments/{department}/edit',[DepartmentController::class,'edit'])->name('departments.edit');
Route::patch('/departments/{department}/update',[DepartmentController::class,'update'])->name('departments.update');
Route::delete('/departments/{department}/delete',[DepartmentController::class,'destroy'])->name('departments.destroy');

// Route::resource('departments',DepartmentController::class);