<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillOperationProtectionwns extends Model
{
    use HasFactory;

    protected $fillable=[
        'mill_form_id',
       'mill_operation_pwns_location_riparian',
           'mill_operation_pwns_riparian_reserve',
           'mill_operation_pwns_mf',
           'mill_operation_pwns_pic',
    ];
}
