<?php

namespace App\Livewire;

use App\Models\Trip;
use Livewire\Component;

class Tripdetails extends Component
{

    public $id;

    public function mount(int $trip)
    {
        $this->id = $trip;

    }

    public function render()
    {
        $trip =   Trip::find($this->id);

        return view('livewire.tripdetails', compact('trip'));
    }

}
