<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateOperationWSource extends Model
{
    use HasFactory;

    protected $fillable=[
        'estate_form_id',
        'estate_operation_river_water_name',
            'estate_operation_river_water_abstraction',
            'estate_operation_use_of_river_water',
            'estate_operation_ground_water_name',
            'estate_operation_ground_water_abstraction',
            'estate_operation_use_of_ground_water',
            'estate_operation_reservoir_name',
            'estate_operation_reservoir_abstraction',
            'estate_operation_use_of_reservoir_water',
            'estate_operation_natural_pond_name',
            'estate_operation_natural_pond_abstraction',
            'estate_operation_use_of_natural_pond_water',
            'estate_operation_local_authority_name',
            'estate_operation_local_authority_abstraction',
            'estate_operation_use_of_local_authority_water',
            'estate_operation_rain_water_harvesting_abstraction',
            'estate_operation_use_of_harvesting_water',
            'estate_operation_other_name',
            'estate_operation_other_abstraction',
            'estate_operation_use_of_other_water',
    ];
}
