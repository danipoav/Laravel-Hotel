<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'photo',
        'check_in',
        'check_out',
        'room',
        'requests',
        'booking_date',
        'price',
        'status',
    ];

    //ONE Booking only can have ONE Room
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
