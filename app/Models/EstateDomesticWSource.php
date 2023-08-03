<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateDomesticWSource extends Model
{
    use HasFactory;

    protected $fillable=[
        'estate_form_id',
        'estate_domestic_river_water_name',
            'estate_domestic_river_water_abstraction',
            'estate_domestic_use_of_river_water',
            'estate_domestic_ground_water_name',
            'estate_domestic_ground_water_abstraction',
            'estate_domestic_use_of_ground_water',
            'estate_domestic_reservoir_name',
            'estate_domestic_reservoir_abstraction',
            'estate_domestic_use_of_reservoir_water',
            'estate_domestic_natural_pond_name',
            'estate_domestic_natural_pond_abstraction',
            'estate_domestic_use_of_natural_pond_water',
            'estate_domestic_local_authority_name',
            'estate_domestic_local_authority_abstraction',
            'estate_domestic_use_of_local_authority_water',
            'estate_domestic_rain_water_harvesting_abstraction',
            'estate_domestic_use_of_harvesting_water',
            'estate_domestic_other_name',
            'estate_domestic_other_abstraction',
            'estate_domestic_use_of_other_water',
    ];

}
