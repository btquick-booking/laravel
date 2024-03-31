<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bus extends Model
{
    protected $fillable = [
       'Code',
       'Seat_Capacity',
       'Status',
       'trip_id',

     ];
    use HasFactory;
    public function Trip():BelongsTo
    {
        return $this->belongsTo(Trip::class);
    }
    public function Profile():HasMany
    {
        return $this->hasMany(Profile::class);
    }
}
