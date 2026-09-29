<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin');
})->name('admin.dashboard');

Route::get('/admin/portfolio', function () {
    return view('portfolio');
})->name('admin.portfolio.create');
