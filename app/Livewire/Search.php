<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Requests\SearchRequest;
use App\Models\Company;

class Search extends Component
{
    public $Company;
    public function mount(SearchRequest $request)
    {

        $this->Company = $request->company;
    }
    public function render()
    {
        $companies = Company::query()
            // ->when($this->company, fn ($query) => $query->where('company_id', $this->company))
            ->get();
        return view('livewire.Search', compact('companies'));
    }
}
