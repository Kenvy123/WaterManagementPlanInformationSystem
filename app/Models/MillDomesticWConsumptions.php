<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillDomesticWConsumptions extends Model
{
    use HasFactory;

    protected $fillable = [
        'mill_form_id',
        'mill_domestic_housing_wc',
        'mill_domestic_office_building_wc',
        'mill_domestic_other_wc_name',
        'mill_domestic_other_wc',
    ];
}