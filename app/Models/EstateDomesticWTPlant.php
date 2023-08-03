<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateDomesticWTPlant extends Model
{
    use HasFactory;

    protected $fillable=[
        'estate_form_id',
        'estate_domestic_wtp_pha_chemi',
        'estate_domestic_wtp_pha_chemi_dosage',
        'estate_domestic_wtp_coagulant_chemi',
        'estate_domestic_wtp_coagulant_chemi_dosage',
        'estate_domestic_wtp_flocculent_chemi',
        'estate_domestic_wtp_flocculent_chemi_dosage',
        'estate_domestic_wtp_filter_chemi',
        'estate_domestic_wtp_filter_chemi_dosage',
        'estate_domestic_wtp_chlorine_chemi',
        'estate_domestic_wtp_chlorine_chemi_dosage',
        'estate_domestic_wtp_other_chemi',
        'estate_domestic_wtp_other_chemi_dosage'
    ];
}
