<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillDomesticERPlan extends Model
{
    use HasFactory;

    protected $fillable=[
        'mill_form_id',
        'mill_domestic_erp_dsp',
        'mill_domestic_erp_dwsja',
    ];
}
