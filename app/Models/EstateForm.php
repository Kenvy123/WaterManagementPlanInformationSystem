<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'estate_form_year',
        'estate_unit_name',
        'estate_area_state',
        'estate_land_title',
        'estate_planting_profile',
        'estate_soil_type',
        'estate_staff_exe',
        'estate_staff_exed',
        'estate_workers',
        'estate_worker_dep',
        'estate_total_housing',
        'estate_general_remark',
        'Jan',
        'Feb',
        'Mar',
        'Apr',
        'May',
        'Jun',
        'Jul',
        'Aug',
        'Sep',
        'Oct',
        'Nov',
        'Dec'
    ];
}