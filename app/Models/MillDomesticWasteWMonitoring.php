<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillDomesticWasteWMonitoring extends Model
{
    use HasFactory;

    protected $fillable=[
        'mill_form_id',
       'mill_domestic_wwm_ss',
           'mill_domestic_wwm_d',
    ];
}
