<?php

namespace Askari;

use Illuminate\Database\Eloquent\Model;

class Offendeer extends Model
{
    /**
     * An offender is added by one user
     *
     * @return Object User
     */
    public function user()
    {
        return $this->belongsTo('Askari\User')
    }
}
