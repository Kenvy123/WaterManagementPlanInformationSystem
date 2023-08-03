<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillDomesticSTCapacity extends Model
{
    use HasFactory;

    protected $fillable=[
        'mill_form_id',
        'mill_domestic_wtpst_stc',
            'mill_domestic_housing_stc',
            'mill_domestic_office_stc',
    ];
}
