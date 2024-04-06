<?php

namespace App\Livewire;

use App\Http\Requests\SearchRequest;
use App\Models\Trip;
use Livewire\Component;

class Departurelist extends Component
{
    public $status;
    public $origin;
    public $destination;
    public $company;
    public $date;

    public function mount(SearchRequest $request)
    {
        $this->status = $request->status;
        $this->origin = $request->origin;
        $this->destination = $request->destination;
        $this->company = $request->company;
        $this->date = $request->date;
    }

    public function render()
    {
        $data = Trip::query()
        // ->when($this->status, fn ($query) => $query->where(''))
        ->when($this->origin, fn ($query) => $query->where('Starting_place', $this->origin))
        ->when($this->destination, fn ($query) => $query->where('Destination_place', $this->destination))
        ->when($this->company, fn ($query) => $query->where('company_id', $this->company))
        ->when($this->date, fn ($query) => $query->where('date', $this->date))
        ->paginate();

        return view('livewire.departurelist', compact('data'));
    }
}
