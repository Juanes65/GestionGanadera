<?php

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
    Route::get('/Usuarios', function () {
        return view('paginas.usuarios');
    })->name('menu_usuarios');

    // Rutas para el CRUD de usuarios
    Route::get('/Usuarios/index', [UserController::class, 'index'])->name('index.Usuario');
    Route::get('/Usuarios/create', [UserController::class, 'create'])->name('create.Usuario');
    Route::post('/Usuarios/create/insert', [UserController::class, 'store'])->name('store.Usuario');
    Route::get('/Usuarios/index/{id}/edit', [UserController::class, 'edit'])->name('edit.Usuario');
    Route::put('/Usuarios/index/{id}/update', [UserController::class, 'update'])->name('update.Usuario');
    Route::delete('/Usuarios/index/{id}', [UserController::class, 'destroy'])->name('destroy.Usuario');
});
