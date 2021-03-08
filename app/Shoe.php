<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    protected $fillable = [
        'type', 'color', 'size_number', 'exterior',
        'inside', 'gender', 'model', 'brand', 'description', 'sole'

    ];
}
