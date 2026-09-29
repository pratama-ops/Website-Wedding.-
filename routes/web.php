<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin');
})->name('admin.dashboard');

Route::get('/admin/portfolio', function () {
    return view('portfolio');
})->name('admin.portfolio.create');

Route::get('/admin/orders', function () {
    return view('orders');
})->name('admin.orders.index');

Route::get('/admin/testimonials', function () {
    return view('testimonials');
})->name('admin.testimonials.index');