<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Company extends Model
{
    use HasFactory;
    public function Admin():BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }
    public function Trip():HasMany
    {
        return $this->hasMany(Trip::class);
    }
}
