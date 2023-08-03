<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateDomesticSTCapacity extends Model
{
    use HasFactory;

    protected $fillable=[
        'estate_form_id',
        'estate_domestic_wtpst_stc',
        'estate_domestic_housing_stc',
        'estate_domestic_office_stc'
    ];
}
