<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillDomesticMap extends Model
{
    use HasFactory;

    protected $fillable=[
        'mill_form_id',
        'mill_domestic_map_mill_area',
            'mill_domestic_map_oh_area',
            'mill_domestic_map_ws_area',
            'mill_domestic_map_wtp_area',
            'mill_domestic_map_rz_area',
            'mill_domestic_map_ss_area',
            'mill_domestic_map_topo_map'
    ];
}
