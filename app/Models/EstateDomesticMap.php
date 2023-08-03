<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateDomesticMap extends Model
{
    use HasFactory;

    protected $fillable = [
        'estate_form_id',
        'estate_domestic_map_estate_area',
        'estate_domestic_map_oh_area',
        'estate_domestic_map_ws_area',
        'estate_domestic_map_wtp_area',
        'estate_domestic_map_rz_area',
        'estate_domestic_map_ss_area',
        'estate_domestic_map_topo_map'
    ];
}