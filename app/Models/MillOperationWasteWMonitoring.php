<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillOperationWasteWMonitoring extends Model
{
    use HasFactory;

    protected $fillable=[
        'mill_form_id',
            'mill_operation_wwm_bod_limit_discharge',
            'mill_operation_wwm_bod_mf',
            'mill_operation_wwm_cod_limit_discharge',
            'mill_operation_wwm_cod_mf',
            'mill_operation_wwm_ts_limit_discharge',
            'mill_operation_wwm_ts_mf',
            'mill_operation_wwm_ss_limit_discharge',
            'mill_operation_wwm_ss_mf',
            'mill_operation_wwm_ong_limit_discharge',
            'mill_operation_wwm_ong_mf',
            'mill_operation_wwm_an_limit_discharge',
            'mill_operation_wwm_an_mf',
            'mill_operation_wwm_tn_limit_discharge',
            'mill_operation_wwm_tn_mf',
            'mill_operation_wwm_ph_limit_discharge',
            'mill_operation_wwm_ph_mf',
            'mill_operation_wwm_temp_limit_discharge',
            'mill_operation_wwm_temp_mf',
            'mill_operation_wwm_pond_name',
            'mill_operation_wwm_size',
            'mill_operation_wwm_capacity',
            'mill_operation_wwm_r_time',
    ];
}
