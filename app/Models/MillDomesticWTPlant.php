<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillDomesticWTPlant extends Model
{
    use HasFactory;

    protected $fillable=[
        'mill_form_id',
        'mill_domestic_wtp_pha_chemi',
        'mill_domestic_wtp_pha_chemi_dosage',
        'mill_domestic_wtp_coagulant_chemi',
        'mill_domestic_wtp_coagulant_chemi_dosage',
        'mill_domestic_wtp_flocculent_chemi',
        'mill_domestic_wtp_flocculent_chemi_dosage',
        'mill_domestic_wtp_filter_chemi',
        'mill_domestic_wtp_filter_chemi_dosage',
        'mill_domestic_wtp_chlorine_chemi',
        'mill_domestic_wtp_chlorine_chemi_dosage',
        'mill_domestic_wtp_other_chemi',
        'mill_domestic_wtp_other_chemi_dosage',
    ];
}
