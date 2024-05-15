<?php

namespace App\Livewire;

use Livewire\Component;

class UserProfile extends Component
{
    public function render()
    {
        $trips = auth()->user()->customer->trips()->withoutGlobalScopes()->get();

        return view('livewire.user-profile', compact('trips'));
    }
}
