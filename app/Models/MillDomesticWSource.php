<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillDomesticWSource extends Model
{
    use HasFactory;

    protected $fillable=[
        'mill_form_id',
        'mill_domestic_river_water_name',
        'mill_domestic_river_water_abstraction',
        'mill_domestic_use_of_river_water',
        'mill_domestic_ground_water_name',
        'mill_domestic_ground_water_abstraction',
        'mill_domestic_use_of_ground_water',
        'mill_domestic_reservoir_name',
        'mill_domestic_reservoir_abstraction',
        'mill_domestic_use_of_reservoir_water',
        'mill_domestic_natural_pond_name',
        'mill_domestic_natural_pond_abstraction',
        'mill_domestic_use_of_natural_pond_water',
        'mill_domestic_local_authority_name',
        'mill_domestic_local_authority_abstraction',
        'mill_domestic_use_of_local_authority_water',
        'mill_domestic_rain_water_harvesting_abstraction',
        'mill_domestic_use_of_harvesting_water',
        'mill_domestic_other_name',
        'mill_domestic_other_abstraction',
        'mill_domestic_use_of_other_water',
    ];
}
