<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::prefix('')->controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/about', 'about')->name('about');
        Route::get('/usage-and-process', 'uandp')->name('uandp');
        Route::get('/products', 'products')->name('products');
        Route::get('/blogs', 'blogs')->name('blogs');
        Route::get('/csr', 'csr')->name('csr');
        Route::get('/contact', 'contact')->name('contact');
    });
});
