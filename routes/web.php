<?php

use App\Http\Controllers\AboutpageController;
use App\Http\Controllers\BlogpageController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductpageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;

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

require __DIR__ . '/auth.php';
Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::get('/products', [ProductpageController::class, 'index'])->name('productpage');
Route::get('about-us', [AboutpageController::class, 'index'])->name('aboutpage');
Route::get('blogs', [BlogpageController::class, 'index'])->name('blogpage');



