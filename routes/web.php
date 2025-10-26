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
<<<<<<< HEAD
    
    Route::get('/addsupplier', [AdminController::class, 'addSupplier'])->name('admin.addsupplier');
    
    Route::post('/addsupplier', [AdminController::class, 'postAddSupplier'])->name('admin.postaddsupplier');
    
    Route::get('/viewsupplier', [AdminController::class, 'viewSupplier'])->name('admin.viewsupplier');
    
=======

>>>>>>> 07beae1c1bcb49de7156c833f89af0f87f0de267
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
