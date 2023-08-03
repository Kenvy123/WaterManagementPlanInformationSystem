<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateOperationProtectionwns extends Model
{
    use HasFactory;

    protected $fillable=[
        'estate_form_id',
        'estate_operation_pwns_location_riparian',
           'estate_operation_pwns_riparian_reserve',
            'estate_operation_pwns_mf',
            'estate_operation_pwns_pic'
    ];
}
