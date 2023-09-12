<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserTypeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\Admin\SaleController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductTypeController;
use App\Http\Controllers\Admin\AppsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(function(){
    Route::get('user-types', [UserTypeController::class, 'index'])->name('userType.index');

    Route::get('roles', [RoleController::class, 'index'])->name('role.index');
    
    Route::get('statuses', [StatusController::class, 'index'])->name('status.index');
    
    Route::get('users', [UserTypeController::class, 'users'])->name('users.index');

    // SALES
    Route::prefix('sales')->group(function () {
        Route::get('index', [SaleController::class, 'index'])->name('sales.index');

        Route::get('create', [SaleController::class, 'create'])->name('sales.create');

        Route::get('store', [SaleController::class, 'store'])->name('sales.store');
    });

    // PRODUCTS
    Route::prefix('products')->group(function () {
        Route::get('index', [ProductController::class, 'index'])->name('products.index');

        Route::get('create', [ProductController::class, 'create'])->name('products.create');

        Route::post('store', [ProductController::class, 'store'])->name('products.store');
    });

    // PRODUCT TYPEs
    Route::prefix('product-types')->group(function () {
        Route::get('index', [ProductTypeController::class, 'index'])->name('productTypes.index');

        Route::get('create', [ProductTypeController::class, 'create'])->name('productTypes.create');

        Route::post('store', [ProductTypeController::class, 'store'])->name('productTypes.store');
    });

    // APPS
    Route::prefix('apps')->group(function () {
        Route::get('index', [AppsController::class, 'index'])->name('apps.index');
    });
});

require __DIR__.'/auth.php';
