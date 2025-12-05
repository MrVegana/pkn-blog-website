<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PknController;

Route::get('/', [PknController::class, 'home'])->name('home');
Route::get('/modul', [PknController::class, 'modul'])->name('modul');
Route::get('/showcase', [PknController::class, 'showcase'])->name('showcase');
Route::get('/refleksi', [PknController::class, 'refleksi'])->name('refleksi');