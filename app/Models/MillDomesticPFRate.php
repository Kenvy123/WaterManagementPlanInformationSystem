<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillDomesticPFRate extends Model
{
    use HasFactory;

    protected $fillable=[
        'mill_form_id',
       'mill_domestic_rnr_pfr',
       'mill_domestic_rwtp_pfr',
       'mill_domestic_wtps_pfr',
    ];
}
