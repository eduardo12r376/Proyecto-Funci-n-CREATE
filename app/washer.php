<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class washer extends Model
{
    protected $fillable = [
        'type', 'color', 'capacity', 'measurements', 'weight',
        'brand', 'model', 'description'
    ];
}
