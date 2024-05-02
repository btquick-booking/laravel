<?php

namespace App\Helpers;

class StripeHelper
{
    public function charge($user, $confirmation_number, $totalPrice, $payment_method_id, $email)
    {
        $payment = $user->charge(ceil($totalPrice), $payment_method_id, [
            'receipt_email' => $email,
            'description' => 'You bought my swag!',
            'return_url' => route('app.home'),
            'metadata' => [
                'Confirmation # ' => $confirmation_number,
            ],
        ]);
        $payment = $payment->asStripePaymentIntent();
    }
}
