<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillOperationWSource extends Model
{
    use HasFactory;

    protected $fillable = [
        'mill_form_id',
        'mill_operation_river_water_name',
        'mill_operation_river_water_abstraction',
        'mill_operation_use_of_river_water',
        'mill_operation_ground_water_name',
        'mill_operation_ground_water_abstraction',
        'mill_operation_use_of_ground_water',
        'mill_operation_reservoir_name',
        'mill_operation_reservoir_abstraction',
        'mill_operation_use_of_reservoir_water',
        'mill_operation_natural_pond_name',
        'mill_operation_natural_pond_abstraction',
        'mill_operation_use_of_natural_pond_water',
        'mill_operation_local_authority_name',
        'mill_operation_local_authority_abstraction',
        'mill_operation_use_of_local_authority_water',
        'mill_operation_rain_water_harvesting_abstraction',
        'mill_operation_use_of_harvesting_water',
        'mill_operation_other_name',
        'mill_operation_other_abstraction',
        'mill_operation_use_of_other_water',
    ];

}