<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'image',
        'address',
        'details',

    ];

    public function Company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
