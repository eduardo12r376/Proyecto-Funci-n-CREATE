<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fridge extends Model
{
    protected $fillable = [
        'refrigerator_type', 'color', 'doors_number', 'functions', 'freezer_location', 'measurements', 'weight',
        'brand', 'model', 'voltage', 'description'
    ];
}
