<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateDomesticWConsumptions extends Model
{
    use HasFactory;

    protected $fillable=[
        'estate_form_id',
        'estate_domestic_housing_wc',
        'estate_domestic_office_building_wc',
        'estate_domestic_other_wc_name',
        'estate_domestic_other_wc'
    ];
}
