<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /** @use HasFactory<\Database\Factories\RoomFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'photo',
        'bed_type',
        'room_number',
        'facilities',
        'price',
        'status',
    ];

    //ONE Room can have MANY Bookings
    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}
