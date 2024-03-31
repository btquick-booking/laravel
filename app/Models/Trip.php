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


       ];

    public function Company():BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function Bus():HasOne
    {
        return $this->hasOne(Bus::class);
    }
    public function Book():HasMany
    {
        return $this->hasMany(Book::class);
    }
}
