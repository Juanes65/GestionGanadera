<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Ruta pública
Route::get('/', function () {
    return view('auth.login');
});

// Rutas de autenticación
Auth::routes();

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Rutas para el CRUD de usuarios
    Route::get('/Usuarios/index', [UserController::class, 'index'])->name('index.Usuario');
    Route::post('/Usuarios/create/insert', [UserController::class, 'store'])->name('store.Usuario');
    Route::put('/Usuarios/index/{id}/update', [UserController::class, 'update'])->name('update.Usuario');
    Route::delete('/Usuarios/index/{id}', [UserController::class, 'destroy'])->name('destroy.Usuario');

    // Rutas para el CRUD de los animales
    Route::get('/Animales/index', [AnimalController::class, 'index'])->name('index.animals');
    Route::post('/Animales/create/insert', [AnimalController::class, 'store'])->name('store.animals');
    Route::put('/Animales/index/{animals}/update', [AnimalController::class, 'update'])->name('update.animals');
    Route::delete('/Animales/index/{animals}', [AnimalController::class, 'destroy'])->name('destroy.animals');

    // Rutas para el CRUD de los insumos
    Route::get('/Inventario/index', [InventoryController::class, 'index'])->name('index.inventario');
    Route::post('/Inventario/create/insert', [InventoryController::class, 'store'])->name('store.inventario');
    Route::put('/Inventario/index/{inventory}/update', [InventoryController::class, 'update'])->name('update.inventario');
    Route::delete('/Inventario/index/{inventory}', [InventoryController::class, 'destroy'])->name('destroy.inventario');

    // Rutas para el CRUD de los procedimientos
    Route::get('/Procedimientos/index', [ProcedureController::class, 'index'])->name('index.procedimiento');
    Route::post('/Procedimientos/create/insert', [ProcedureController::class, 'store'])->name('store.procedimiento');
    Route::put('/Procedimientos/index/{procedure}/update', [ProcedureController::class, 'update'])->name('update.procedimiento');
    Route::delete('/Procedimientos/index/{procedure}', [ProcedureController::class, 'destroy'])->name('destroy.procedimiento');
});
