<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cadastro', [HomeController::class, 'create'])->name('cadastro');
Route::post('/detalhes', [HomeController::class, 'show'])->name('detalhes');
Route::post('/store', [HomeController::class, 'store'])->name('store');
Route::post('/edit', [HomeController::class, 'edit'])->name('edit');