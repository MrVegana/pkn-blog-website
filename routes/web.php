<?php

use App\Http\Controllers\PknController;

Route::get('/', [PknController::class, 'home'])->name('home');
Route::get('/modul', [PknController::class, 'modul'])->name('modul');
Route::get('/modul/pdf', [PknController::class, 'modulPdf'])->name('modul.pdf'); // <— baru
Route::get('/modul/minggu/{minggu}', [PknController::class, 'modulDetail'])->name('modul.detail'); // untuk nomor 6
Route::get('/showcase', [PknController::class, 'showcase'])->name('showcase');
Route::get('/refleksi', [PknController::class, 'refleksi'])->name('refleksi');
Route::get('/profil', [PknController::class, 'profil'])->name('profil'); // nomor 4
Route::get('/modul/minggu/{minggu}', [PknController::class, 'modulDetail'])->name('modul.detail');
