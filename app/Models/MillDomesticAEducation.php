<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillDomesticAEducation extends Model
{
    use HasFactory;

    protected $fillable=[
        'mill_form_id',
       'mill_domestic_ae_np',
       'mill_domestic_ae_aop',
       'mill_domestic_ae_plan',
       'mill_domestic_ae_actual',
       'mill_domestic_ae_pic'
    ];
}
