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
