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
       'email',
       'password',
       'Message',
    ];
  public function Book():HasMany
  {
      return $this->hasMany(Book::class);
  }
}
