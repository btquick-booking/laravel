<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Traits\Models\HasFcmToken;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;

class User extends Authenticatable implements FilamentUser
{
    //this trait
    use Billable;

    use HasFactory, Notifiable;
    use HasFcmToken;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function canAccessPanel(Panel $panel): bool
    {
        if ($this->admin && $panel->getId() == 'admin') {
            return true;
        }
        if ($this->company && $panel->getId() == 'company') {
            return true;
        }

        return false;
    }

    public function admin(): HasOne
    {
        return $this->hasOne(Admin::class);
    }

    public function Company(): HasOne
    {
        return $this->hasOne(Company::class);
    }

    public function customer():HasOne
    {
        return $this->hasOne(Customer::class);
    }
}
