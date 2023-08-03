<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillDomesticWATLCommunity extends Model
{
    use HasFactory;

    protected $fillable=[
        'mill_form_id',
        'mill_domestic_watlc_list_stake',
            'mill_domestic_watlc_feedback_stake',
            'mill_domestic_watlc_infoplan_stake',
    ];
}
