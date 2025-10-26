<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [UsersController::class, 'Dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/addcategory', [AdminController::class, 'addCategory'])->name('admin.addcategory');
    
    Route::post('/addcategory', [AdminController::class, 'postAddCategory'])->name('admin.postaddcategory');
    
    Route::get('/viewcategory', [AdminController::class, 'viewCategory'])->name('admin.viewcategory');
    
    Route::get('/deletecategory/{id}', [AdminController::class, 'deleteCategory'])->name('admin.deletecategory');
    
    Route::get('/updatecategory/{id}', [AdminController::class, 'editCategory'])->name('admin.updatecategory');
    
    Route::post('/updatecategory/{id}', [AdminController::class, 'postUpdateCategory'])->name('admin.postupdatecategory');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
