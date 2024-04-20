<?php

namespace App\Livewire;

use App\Http\Requests\SearchRequest;
use App\Models\Trip;
use Livewire\Component;
use Livewire\WithPagination;

class Departurelist extends Component
{
    // public $status;
    public $origin;
    public $max_price;
    public $min_price;
    public $destination;
    public $company;
    public $date;

    public function mount(SearchRequest $request)
    {
        // $this->status = $request->status;
        $this->origin = $request->origin;
        $this->destination = $request->destination;
        $this->company = $request->company;
        $this->date = $request->date;
        $this->min_price = $request->min_price;
        $this->max_price = $request->max_price;
    }

    public function render()
    {
        $data = Trip::query()
        // ->when($this->status, fn ($query) => $query->where(''))
        ->when($this->origin, fn ($query) => $query->where('Starting_place', $this->origin))
         ->when($this->min_price &&  $this->max_price, fn ($query) => $query->whereBetween('Trip_price', [
            $this->min_price ,
            $this->max_price
         ]))
        ->when($this->destination, fn ($query) => $query->where('Destination_place', $this->destination))
        ->when($this->company, fn ($query) => $query->whereHas('bus', fn ($query) => $query->where('company_id', $this->company)))
        ->when($this->date, fn ($query) => $query->where('date', $this->date ))
        ->get();

        return view('livewire.departurelist', compact('data'));
    }
}
