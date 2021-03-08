<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tv extends Model
{
    protected $fillabe = [
        'tipe', 'brand', 'model', 'munt_tipe', 'screen_resolution', 'screen_technology', 'screen_size', 'serial_number',
    ];
}
