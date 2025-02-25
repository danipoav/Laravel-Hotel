<?php

namespace App\Services;

use App\Interfaces\PaymentProvider;

class PaypalPaymentProvider implements PaymentProvider
{
    public function processPayment(float $amount) {
        // \File::put(storage_path('logs/paypal_payments.txt'), "Payment processed: $amount\n", FILE_APPEND);
    }
}
