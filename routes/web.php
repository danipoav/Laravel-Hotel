<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hotel.index');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
