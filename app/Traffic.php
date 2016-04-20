<?php

namespace Askari;

use Illuminate\Database\Eloquent\Model;

class Traffic extends Model
{
    protected $fillable = [
        'citation_number',
        'traffic_id',
        'traffic_offence',
        'offender_id',
        'date_of_issue',
        'court_date',
        'user_id',
    ];

    /**
     * A traffic offence is issued by a police officer.
     *
     * @return Object
     */
    public function officer()
    {
        return $this->belongsTo('Askari\User');
    }
}
