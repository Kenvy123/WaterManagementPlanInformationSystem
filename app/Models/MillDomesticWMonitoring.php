<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillDomesticWMonitoring extends Model
{
    use HasFactory;

    protected $fillable=[
        'mill_form_id',
       'mill_domestic_bf_ph',
           'mill_domestic_bf_do',
           'mill_domestic_bf_bod',
           'mill_domestic_bf_cod',
           'mill_domestic_bf_tss',
           'mill_domestic_bf_an',
           'mill_domestic_bf_ong',
           'mill_domestic_bf_turbidity',
           'mill_domestic_bf_other_parameter_value',
           'mill_domestic_bf_other_parameter_name',
           'mill_domestic_wqm_bf_qmf',
           'mill_domestic_af_tc',
           'mill_domestic_af_ecoli',
           'mill_domestic_af_turbidity',
           'mill_domestic_af_ph',
           'mill_domestic_af_frc',
           'mill_domestic_af_iron',
           'mill_domestic_af_manganese',
           'mill_domestic_af_other_parameter_value',
           'mill_domestic_af_other_parameter_name',
           'mill_domestic_wqm_af_qmf',
    ];
}
