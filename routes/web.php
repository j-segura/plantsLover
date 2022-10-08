<?php

use App\Http\Controllers\PrincipalContorller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [PrincipalContorller::class, 'index'])->name('home');
Route::get('tienda', [PrincipalContorller::class, 'tienda'])->name('tienda');
Route::get('producto/{producto}', [PrincipalContorller::class, 'show'])->name('show');
Route::get('categoria/{categoria}', [PrincipalContorller::class, 'categoria'])->name('plants.categoria');
Route::get('tamaño/{tamaño}', [PrincipalContorller::class, 'tamaño'])->name('plants.tamaño');

Route::view('/nosotros', 'nosotros')->name('nosotros');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

