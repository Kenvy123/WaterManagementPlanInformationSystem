<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateDomesticPFRate extends Model
{
    use HasFactory;

    protected $fillable = [
        'estate_form_id',
        'estate_domestic_rnr_pfr',
        'estate_domestic_rwtp_pfr',
        'estate_domestic_wtps_pfr'
    ];

}