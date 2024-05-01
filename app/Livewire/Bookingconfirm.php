<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Trip;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Bookingconfirm extends Component
{


    #[Validate('required')]
    public $FullName;
    #[Validate('required')]
    public $MotherName;
    #[Validate('required')]
    public $FatherName;
    #[Validate('required')]
    public $ID_Number;
    #[Validate('required')]
    public $Gander;
    #[Validate('required')]
    public $Birth_date;
    public $trip_id;
    public function mount(Trip $trip)
    {
        $this->trip_id = $trip->id;
    }

    public function submit() {

    $this->validate();
        $booking = Book::create([
            'FullName' => $this->FullName,
            'MotherName' => $this->MotherName,
            'FatherName' => $this->FatherName,
            'ID_Number' => $this->ID_Number,
            'Gander' => $this->Gander,
            'Birth_date' => $this->Birth_date,

        ]);

        // return redirect()->intended(route('app.home'));


    }

        public function render()
    {
        $booking =   Trip::find($this->trip_id);

        return view('livewire.bookingconfirm' , compact('booking'));
    }
}
