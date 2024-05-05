<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Scopes\PassTripScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'Starting_place',
        'Destination_place',
        'date',
        'starting_time',
        'Access_time',
        'Driver_name',
        // 'Number_of_seat',
        'Details',
        'Trip_price',
        'bus_id',
    ];

    public function startDate(): Attribute
    {
        return new Attribute(
            get: function(){
              $startDate = Carbon::parse($this->date . ' ' . $this->starting_time);

              return $startDate;
            },
        );
    }


    public function availableSeats(): Attribute
    {
        return new Attribute(
            get: function(){
                $Seat_Capacity= $this->bus->Seat_Capacity - $this->Book()->count() ;

              return $Seat_Capacity;
            },
        );
    }




    protected static function booted()
    {
        if (! auth()->user()?->company) {
            static::addGlobalScope(PassTripScope::class);
        }
        // dump(now());
    }

    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'books');
    }

    public function bus(): BelongsTo
    {
        return $this->belongsTo(Bus::class);
    }

    public function Book(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
