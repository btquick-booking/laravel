<?php

namespace App\Livewire;

use App\Http\Requests\SearchRequest;
use App\Models\Trip;
use Livewire\Component;

class Departurelist extends Component
{

    public function mount(SearchRequest $request)
    {

    }

    public function render()
    {
        $data = [];

        $data = Trip::query()
        ->get();

        return view('livewire.departurelist', compact('data'));
    }
}
