<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class BookingNotifier
{
    public function notify($booking)
    {
        Log::info("Nueva reserva creada: {$booking->id}, Check-in: {$booking->check_in}, Check-out: {$booking->check_out}");
    }
}