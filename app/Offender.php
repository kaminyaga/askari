<?php

namespace Askari;

use Illuminate\Database\Eloquent\Model;

class Offender extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'dob',
        'sex',
        'national_id',
        'phone_number',
    ];
    /**
     * An offender is added by one user
     *
     * @return Object User
     */
    public function user()
    {
        return $this->belongsTo('Askari\User');
    }

    /**
     * An offender can have many traffic offences
     *
     * @return Object traffic offences
     */
    public function traffic_offences()
    {
        return $this->hasMany('Askari\Traffic');
    }

    /**
     * An offender can have many robbery offences
     *
     * @return Object traffic offences
     */
    public function robbery_offences()
    {
        return $this->hasMany('Askari\Robbery');
    }

    /**
     * An offender can have many impounds
     *
     * @return Object traffic offences
     */
    public function impounds()
    {
        return $this->hasMany('Askari\Impound');
    }
}
