<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('pages.home');})->name('home');

Route::get('/alat', function() {return view('pages.alat');})->name('alat');
Route::get('/peminjaman', function() {return view('pages.peminjaman');})->name('peminjaman');