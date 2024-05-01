<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Collection;

class StripeHelper
{
    public function charge($user, $request, $confirmation_number, $reservations = null)
    {
        if (session()->has('coupon')) {
            $discountValue = session()->get('coupon')['discount'] / 100;
            $discountCode = session()->get('coupon')['name'];
        } else {
            $discountCode = 'NULL';
            $discountValue = 0;
        }
        $payment = $user->charge(ceil($request->amount), $request->payment_method_id, [
            'receipt_email' => $request->email,
            'description' => 'You bought my swag!',
            'return_url' => route('app.home'),
            'metadata' => [
                'Confirmation # ' => $confirmation_number,
                'Item(s)' => json_encode([
                    'Product Code: dmc-alp ' .
                        'Product Name: damascus to aleppo ' .
                        'Product Qty: 1 '
                ]),
                'Total Item(s) Count' => $reservations?->sum(fn ($item) => $item->price) ?? 100,
                'Discount' => $discountCode . ': -$' . $discountValue . ' off',
            ],
        ]);
        $payment = $payment->asStripePaymentIntent();
    }
}
