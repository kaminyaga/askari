<?php

namespace Askari;

use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    protected $table = 'evidence';

    protected $fillable = [
        'item',
        'quantity',
        'serial_number',
        'status',
        'description',
    ];
}
