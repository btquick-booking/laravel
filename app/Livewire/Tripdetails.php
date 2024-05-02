<?php

namespace App\Livewire;

use App\Models\Trip;
use Livewire\Component;

class Tripdetails extends Component
{
    public $id;

    public $startPlaceLatLng;

    public $DestinationplaceLatLng;

    public function mount(Trip $trip)
    {
        $this->id = $trip->id;
        $this->startPlaceLatLng = $this->getLatLng($trip->Starting_place);
        $this->DestinationplaceLatLng = $this->getLatLng($trip->Destination_place);
    }

    public function getLatLng($city)
    {
        $cities = [
            'Damascus' => [36.2004942, 33.5074482],
            'Homs' => [36.5946809, 34.73027],
            'Daraa' => [36.0582501, 32.622847],
            'Latakia' => [35.6142887, 35.5879472],
            'Aleppo' => [37.0661839, 36.2064064],
            'Hama' => [36.5946894, 35.1365891],
            'Tartous' => [35.8414056, 34.886002],
            'Quneitra' => [35.5550674, 33.0667405],
            'Tadmur' => [38.2202282, 34.5692739],
            'Al-Hasakah' => [40.6656934, 36.504454],
            'As-Suwayda' => [36.5350548, 32.7018773],
            'Deir ez-Zor' => [39.9822563, 35.3350224],
            'Idlib' => [36.6149259, 35.9266196],
            'Rif Dimashq' => [36.1439313, 33.4467359],

            'Ar-Raqqah' => [38.9558021, 35.9547226],
        ];

        return $cities[$city];
    }

    public function render()
    {
        $trip = Trip::find($this->id);

        return view('livewire.tripdetails', compact('trip'));
    }
}
