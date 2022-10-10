<?php

use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TamañoController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('tamaños', TamañoController::class)->names('admin.tamaños');

Route::resource('categorias', CategoriaController::class)->names('admin.categorias');