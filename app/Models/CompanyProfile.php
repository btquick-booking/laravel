<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompanyProfile extends Model
{
    protected $fillable =[
'company_id',

    ];
    public function Company():BelongsTo
    {
        return $this->belongsTo(Company::class);
    }



    use HasFactory;
}
