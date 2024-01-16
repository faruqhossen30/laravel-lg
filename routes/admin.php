<?php

use App\Http\Controllers\Admin\Admin\AdminController;
use App\Http\Controllers\Admin\Attribute\ColorController;
use App\Http\Controllers\Admin\Attribute\SizeController;
use App\Http\Controllers\Admin\Attribute\TagController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Product\CategoryController;
use App\Http\Controllers\Admin\Product\SubcategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;

Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function () {
    // Route::get('', [RoutingController::class, 'index'])->name('root');
    // Route::get('/home', fn()=>view('index'))->name('home');
    // Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    // Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    // Route::get('{any}', [RoutingController::class, 'root'])->name('any');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('subcategory', SubcategoryController::class);
    Route::resource('size', SizeController::class);
    Route::resource('color', ColorController::class);
    Route::resource('tag', TagController::class);
    // Admin
    Route::resource('admin', AdminController::class);
});
