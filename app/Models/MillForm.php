<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillForm extends Model
{
    use HasFactory;

    protected $fillable=[
            'mill_form_year',
            'mill_unit_name',
            'mill_commission_info',
            'mill_throughput',
            'mill_staff_exe',
            'mill_staff_exed',
            'mill_workers',
            'mill_worker_dep',
            'mill_total_housing',
            'mill_general_remark',
            'mill_Jan',
            'mill_Feb',
            'mill_Mar',
            'mill_Apr',
            'mill_May',
            'mill_Jun',
            'mill_Jul',
            'mill_Aug',
            'mill_Sep',
            'mill_Oct',
            'mill_Nov',
            'mill_Dec',
    ];
}
