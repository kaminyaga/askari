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
}
