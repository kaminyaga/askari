<?php

namespace Askari;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'national_id',
        'rank',
        'department',
        'police_id',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * A police officer can add many offendeers
     *
     * @return Object Offenders added by User
     */
    public function offenders()
    {
        return $this->hasMany('Askari\Offender');
    }

    /**
     * An officer can issue many traffic offences
     *
     * @return Object
     */
    public function traffic_offences()
    {
        return $this->hasMany('Askari\Traffic');
    }
}
