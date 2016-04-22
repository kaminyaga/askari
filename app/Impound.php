<?php

namespace Askari;

use Illuminate\Database\Eloquent\Model;

class Impound extends Model
{
    protected $fillable = [
        'impound_id',
        'make',
        'licence_plate',
        'offender_id',
        'dln',
        'vehicle_type',
        'citation_number',
    ];
}
