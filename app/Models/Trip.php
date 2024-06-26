<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Trip extends Model
{
    use HasFactory;
    protected $fillable =[
        'Starting_place',
        'Destination_place',
        'date',
        'starting_time',
        'Access_time',
        'Driver_name',
        'Number_of_seat',
        'Details',
        'Trip_price',
        'bus_id',
       ];

       public function customers()
       {
           return $this->belongsToMany(Customer::class, 'books');
       }

    public function bus():BelongsTo
    {
        return $this->belongsTo(Bus::class);
    }


    public function Book():HasMany
    {
        return $this->hasMany(Book::class);
    }
}
