<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Book extends Model
{
    use HasFactory;
  public function Trip():BelongsTo
  {
      return $this->belongsTo(Trip::class);
  }
  public function Customer():BelongsTo
  {
      return $this->belongsTo(Customer::class);
  }
  public function Payment():HasOne
  {
      return $this->hasOne(Payment::class);
  }
}
