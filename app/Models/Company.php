<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'Company_Name',
        'Company_Director',
        'phone_number',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function trips():HasMany
    {
        return $this->hasMany(Trip::class);
    }
    public function Bus():HasOne
    {
        return $this->hasOne(Bus::class);
    }
}
