<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillDomesticFlowMeter extends Model
{
    use HasFactory;

    protected $fillable=[
        'mill_form_id',
       'mill_domestic_ha_fm',
           'mill_domestic_oa_fm',
           'mill_domestic_otr_fm',

    ];
}
