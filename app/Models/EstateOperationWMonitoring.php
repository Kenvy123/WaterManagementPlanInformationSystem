<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateOperationWMonitoring extends Model
{
    use HasFactory;

    protected $fillable=[
        'estate_form_id',
       'estate_operation_wqm_ph',
       'estate_operation_wqm_do',
       'estate_operation_wqm_bod',
       'estate_operation_wqm_cod',
       'estate_operation_wqm_tss',
       'estate_operation_wqm_an',
       'estate_operation_wqm_ong',
       'estate_operation_wqm_turbidity',
       'estate_operation_other_parameter_value',
       'estate_other_parameter_name',
       'estate_operation_rw_qmf',
       'estate_gw_parameter_value',
       'estate_gw_parameter_name',
       'estate_operation_gw_qmf'
    ];
}
