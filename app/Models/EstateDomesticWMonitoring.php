<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateDomesticWMonitoring extends Model
{
    use HasFactory;

    protected $fillable=[
        'estate_form_id',
        'estate_domestic_bf_ph',
        'estate_domestic_bf_do',
        'estate_domestic_bf_bod',
        'estate_domestic_bf_cod',
        'estate_domestic_bf_tss',
        'estate_domestic_bf_an',
        'estate_domestic_bf_ong',
        'estate_domestic_bf_turbidity',
        'estate_domestic_bf_other_parameter_value',
        'estate_domestic_bf_other_parameter_name',
        'estate_domestic_wqm_bf_qmf',
        'estate_domestic_af_tc',
        'estate_domestic_af_ecoli',
        'estate_domestic_af_turbidity',
        'estate_domestic_af_ph',
        'estate_domestic_af_frc',
        'estate_domestic_af_iron',
        'estate_domestic_af_manganese',
        'estate_domestic_af_other_parameter_value',
        'estate_domestic_af_other_parameter_name',
        'estate_domestic_wqm_af_qmf'
    ];
}
