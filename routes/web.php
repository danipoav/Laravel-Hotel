<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hotel.index');
})->name('index');

Route::get('/offers', function () {
    return view('hotel.offers');
})->name('offers');

Route::get('/about', function () {
    return view('hotel.about');
})->name('about');

//Contact Routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('save-contact', [ContactController::class, 'store'])->name('create.contact');

Route::get('/rooms', [RoomController::class, 'index'])->name('rooms');
