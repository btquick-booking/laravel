<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Requests\SearchRequest;
use App\Models\Company;

class Search extends Component
{
    public function mount(SearchRequest $request)
    {


    }
    public function render()
    {
        $companies = Company::query()
        ->pluck('Company_Name', 'id');
        return view('livewire.search', compact('companies'));
    }
}
