<?php

namespace App\Livewire;

// use App\Models\Company;

use App\Models\Company;
use App\Models\CompanyProfile as ModelsCompanyProfile;
use Livewire\Component;

class CompanyProfile extends Component
{
    public $company_id;

    public $name;

    public $Phone_Number;

    public function mount(ModelsCompanyProfile $profile)
    {
        $this->company_id = $profile->company_id;

        $this->name = $profile->name;
        $this->Phone_Number = $profile->Phone_Number;
    }
    public function render()
    {
        $company = Company::with('CompanyProfiles')->find($this->company_id);

        return view('livewire.company-profile', compact('company'));
    }
}
