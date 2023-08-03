<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateDomesticWATLCommunity extends Model
{
    use HasFactory;

    protected $fillable=[
        'estate_form_id',
        'estate_domestic_watlc_list_stake',
        'estate_domestic_watlc_feedback_stake',
        'estate_domestic_watlc_infoplan_stake',
    ];
}
