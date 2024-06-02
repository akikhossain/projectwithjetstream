<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'frontHome'])->name('welcome');


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/home', [AdminController::class, 'index'])->name('home');
Route::get('/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/store', [AdminController::class, 'store'])->name('employees.store');
Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('employees.edit');
Route::put('/update/{id}', [AdminController::class, 'update'])->name('employees.update');
Route::get('/delete/{id}', [AdminController::class, 'destroy'])->name('employees.delete');
