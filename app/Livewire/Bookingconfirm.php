<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Trip;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Helpers\StripeHelper;
use Livewire\Attributes\Validate;
use Filament\Notifications\Notification;

class Bookingconfirm extends Component
{

    public $trip_id;

    public function mount(int $trip)
    {
        $this->trip_id = $trip;
    }

    public function submit(array $customers, $payment_method_id, $totalPrice, $email)
    {

        // dd($payment_method_id, $totalPrice, $email);

        foreach ($customers as $customer) {
            auth()->user()->customer->books()->create($customer + [
                'trip_id' => $this->trip_id,
            ]);
        }

        $stripeHelper = new StripeHelper;
        $confirmation_number = Str::uuid();
            $user = auth()->user() ?? new User;

            $stripeHelper->charge($user, $confirmation_number,
            $totalPrice, $payment_method_id, $email);

        // Notification::make('success')
        // ->title('Successfully')
        // ->success()
        // ->send();

        return redirect()->intended(route('app.home'));

    }

    public function render()
    {
        $price = Trip::find($this->trip_id)->Trip_price;

        return view('livewire.bookingconfirm', compact('price'));
    }
}
