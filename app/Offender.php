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
}
