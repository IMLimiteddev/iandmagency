<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'code',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function isAdmin()
    {
        return $this->code == 3187;
    }
    public function isCandidate()
    {
        return $this->code == 3188;
    }
    public function isEmployer()
    {
        return $this->code == 3189;
    }
    public function info(): HasOne
    {
        return $this->hasOne(Information::class, 'user_id', 'id');
    }

    /**
     * Get the company associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function company(): HasOne
    {
        return $this->hasOne(Company::class, 'user_id', 'id');

    }

    /**
     * Get all of the request for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requests(): HasMany
    {
        return $this->hasMany(Request::class, 'user_id', 'id');
    }
}
