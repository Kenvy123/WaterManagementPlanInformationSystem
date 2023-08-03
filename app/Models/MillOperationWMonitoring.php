<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillOperationWMonitoring extends Model
{
    use HasFactory;

    protected $fillable=[
        'mill_form_id',
       'mill_operation_wqm_ph',
           'mill_operation_wqm_do',
           'mill_operation_wqm_bod',
           'mill_operation_wqm_cod',
           'mill_operation_wqm_tss',
           'mill_operation_wqm_an',
           'mill_operation_wqm_ong',
           'mill_operation_wqm_turbidity',
           'mill_operation_other_parameter_value',
           'mill_other_parameter_name',
           'mill_operation_rw_qmf',
           'mill_gw_parameter_value',
           'mill_gw_parameter_name',
           'mill_operation_gw_qmf',
    ];
}
