<?php

namespace App\Livewire;

// use App\Models\Company;

use Livewire\Component;

class CompanyProfile extends Component
{
    public $company_id;

    public $name;

    public $Phone_Number;

    public function mount(CompanyProfile $profile)
    {
        $this->id = $profile->company_id;

        $this->name = $profile->name;
        $this->Phone_Number = $profile->Phone_Number;
    }
    public function render()
    {


        // $profile = CompanyProfile::find($this->id);
        return view('livewire.company-profile');
    }
}
