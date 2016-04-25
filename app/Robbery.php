<?php

namespace Askari;

use Illuminate\Database\Eloquent\Model;

class Robbery extends Model
{
    protected $fillable = [
        'robbery_id',
        'crime_id',
        'evidence_id',
        'offender_id',
        'user_id',
        'victims_name',
        'crime_location',
        'comments',
    ];

     /**
     * A Robbery offence belongs to an offender
     *
     * @return object
     */
    public function offender()
    {
        return $this->belongsTo('Askari\Offender');
    }
}
