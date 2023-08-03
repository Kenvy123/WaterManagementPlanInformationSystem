<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateDomesticWasteWMonitoring extends Model
{
    use HasFactory;

    protected $fillable=[
        'estate_form_id',
        'estate_domestic_wwm_ss',
        'estate_domestic_wwm_d'
    ];
}
