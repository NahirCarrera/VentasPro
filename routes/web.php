<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VentasController;


Route::get('/', function () {
    return view('welcome');
});

// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Gestión de Usuarios (solo para admin y secre)
    Route::middleware(['role:admin|secretaria'])->group(function () {
        Route::get('/users', [UsuarioController::class, 'index'])->name('user.index');
        Route::get('/users/create', [UsuarioController::class, 'create'])->name('user.create');
        Route::post('/users', [UsuarioController::class, 'store'])->name('user.store');
    }); 

    // Gestión de Categorías y Productos (solo para bodega)
    Route::middleware(['role:bodega'])->group(function () {
        // Categorías   
        Route::get('/categories', [CategoriasController::class, 'index'])->name('categories.index');
        Route::get('/categories/create', [CategoriasController::class, 'create'])->name('categories.create');
        Route::post('/categories', [CategoriasController::class, 'store'])->name('categories.store');

        // Productos
        Route::get('/products', [ProductosController::class, 'index'])->name('products.index');
        Route::get('/products/create', [ProductosController::class, 'create'])->name('products.create');
        Route::post('/products', [ProductosController::class, 'store'])->name('products.store');
    });

    Route::middleware(['auth', 'role:cajera'])->group(function () {
    Route::get('/sales', [VentasController::class, 'index'])->name('sales.index');
    Route::get('/sales/create', [VentasController::class, 'create'])->name('sales.create');
    Route::post('/sales', [VentasController::class, 'store'])->name('sales.store');
    });

});

// Breeze (Auth)
require __DIR__.'/auth.php';
