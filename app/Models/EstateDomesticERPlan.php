<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateDomesticERPlan extends Model
{
    use HasFactory;

    protected $fillable=[
        'estate_form_id',
        'estate_domestic_erp_dsp',
        'estate_domestic_erp_dwsja'
    ];
}
