<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\RoomController;
use App\Models\Room;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $rooms = Room::all();
    return view('hotel.index', compact('rooms'));
})->name('index');

Route::get('/offers', function () {
    $rooms = Room::take(4)->get();
    return view('hotel.offers', compact('rooms'));
})->name('offers');

Route::get('/about', function () {
    return view('hotel.about');
})->name('about');

//Contact Routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('save-contact', [ContactController::class, 'store'])->name('create.contact');

Route::get('/rooms', [RoomController::class, 'index'])->name('rooms');
