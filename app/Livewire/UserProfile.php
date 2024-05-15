<?php

namespace App\Livewire;

use App\Models\Trip;
use Livewire\Component;

class UserProfile extends Component
{

    public function cancel(Trip $trip)
    {
        auth()->user()->customer
            ->books()->where('trip_id', $trip->id)
            ->delete();
    }

    public function render()
    {
        $trips = auth()->user()->customer->trips()->withoutGlobalScopes()->get();

        return view('livewire.user-profile', compact('trips'));
    }
}
