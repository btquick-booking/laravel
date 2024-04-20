<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

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

    public function trips():HasManyThrough
    {
        return $this->hasManyThrough(Trip::class ,Bus::class);
    }
    public function Bus():HasOne
    {
        return $this->hasOne(Bus::class);
    }
    public function CompanyProfiles():HasOne
    {
        return $this->hasOne(CompanyProfile::class);
    }
}
