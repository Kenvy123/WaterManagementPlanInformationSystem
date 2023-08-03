<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateDomesticAEducation extends Model
{
    use HasFactory;

    protected $fillable=[
        'estate_form_id',
        'estate_domestic_ae_np',
        'estate_domestic_ae_aop',
        'estate_domestic_ae_plan',
        'estate_domestic_ae_actual',
        'estate_domestic_ae_pic',
    ];
}
