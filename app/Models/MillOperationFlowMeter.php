<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillOperationFlowMeter extends Model
{
    use HasFactory;

    protected $fillable=[
        'mill_form_id',
        'mill_operation_bs_fm',
            'mill_operation_ws_fm',
            'mill_operation_store_fm',
    ];
}
