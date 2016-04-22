<?php

namespace Askari;

use Illuminate\Database\Eloquent\Model;

class MissingPersons extends Model
{
    protected $table = 'missing_persons';

    protected $fillable = [
        'name',
        'sex',
        'dob',
        'national_id',
        'phone_number',
        'guardians',
        'reporting_date',
        'evidence_id',
        'date_last_seen',
        'place_last_seen',
        'suspects',
    ];
}
