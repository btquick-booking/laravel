<?php

namespace App\Livewire;

use App\Http\Requests\SearchRequest;
use App\Models\Company;
use Livewire\Component;

class Search extends Component
{
    public function mount(SearchRequest $request)
    {
    }

    public function render()
    {
        $companies = Company::query()
            ->pluck('Company_Name', 'id');

        return view('livewire.Search', compact('companies'));
    }
}
