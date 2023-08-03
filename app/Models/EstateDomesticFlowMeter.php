<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateDomesticFlowMeter extends Model
{
    use HasFactory;

    protected $fillable=[
        'estate_form_id',
        'estate_domestic_ha_fm',
        'estate_domestic_ha_remark',
        'estate_domestic_oa_fm',
        'estate_domestic_oa_remark',
        'estate_domestic_otr_fm',
        'estate_domestic_otr_remark'
    ];
}
