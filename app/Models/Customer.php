<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
       'Full_name',
       'Birth_date',
       'Gender',
       'ID_Number',
       'Seat_Number',

       'Message',
    ];

    public function trips()
       {
           return $this->belongsToMany(Trip::class, 'books');
       }

  public function Book():HasMany
  {
      return $this->hasMany(Book::class);
  }
}
