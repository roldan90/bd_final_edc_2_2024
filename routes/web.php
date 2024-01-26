<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Documentos;
use App\Http\Controllers\Historicos;
use App\Http\Controllers\Productos;
use App\Http\Controllers\Proveedores;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/nuevo', [AuthController::class, 'nuevo']);

Route::prefix('documentos')->group(function(){
    Route::get('/', [Documentos::class, 'problema'])->name('documentos-problema');
    Route::get('/script', [Documentos::class, 'script'])->name('documentos-script');
    Route::get('/er', [Documentos::class, 'er'])->name('documentos-er');
});

Route::prefix('historico')->group(function(){
    Route::get('/', [Historicos::class, 'index'])->name('historico-index');
});

Route::prefix('producto')->group(function(){
    Route::get('/', [Productos::class, 'index'])->name('producto-index');
    Route::get('/create', [Productos::class, 'create'])->name('producto-create');
    Route::post('/store', [Productos::class, 'store'])->name('producto-store');
    Route::get('/edit/{id}', [Productos::class, 'edit'])->name('producto-edit');
    Route::put('/update/{id}', [Productos::class, 'update'])->name('producto-update');
    Route::get('/show/{id}', [Productos::class, 'show'])->name('producto-show');
    Route::post('/destroy/{id}', [Productos::class, 'destroy'])->name('producto-destroy');
});

Route::prefix('proveedor')->group(function(){
    Route::get('/', [Proveedores::class, 'index'])->name('proveedor-index');
    Route::get('/create', [Proveedores::class, 'create'])->name('proveedor-create');
    Route::post('/store', [Proveedores::class, 'store'])->name('proveedor-store');
    Route::get('/edit/{id}', [Proveedores::class, 'edit'])->name('proveedor-edit');
    Route::put('/update/{id}', [Proveedores::class, 'update'])->name('proveedor-update');
    Route::get('/show/{id}', [Proveedores::class, 'show'])->name('proveedor-show');
    Route::post('/destroy/{id}', [Proveedores::class, 'destroy'])->name('proveedor-destroy');
});

Route::prefix('historico')->group(function(){
    Route::get('/', [Historicos::class, 'index'])->name('historico-index');
    Route::get('/create', [Historicos::class, 'create'])->name('historico-create');
    Route::post('/store', [Historicos::class, 'store'])->name('historico-store');
    Route::get('/edit/{id}', [Historicos::class, 'edit'])->name('historico-edit');
    Route::put('/update/{id}', [Historicos::class, 'update'])->name('historico-update');
    Route::get('/show/{id}', [Historicos::class, 'show'])->name('historico-show');
    Route::post('/destroy/{id}', [Historicos::class, 'destroy'])->name('historico-destroy');
});