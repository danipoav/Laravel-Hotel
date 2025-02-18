<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hotel.index');
});

Route::get('/offers', function () {
    return view('hotel.offers');
})->name('offers');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms');
