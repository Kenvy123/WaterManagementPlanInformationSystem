<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateOperationFlowMeter extends Model
{
    use HasFactory;

    protected $fillable=[
        'estate_form_id',
        'estate_operation_store_fm',
            'estate_operation_store_remark',
            'estate_operation_ws_fm',
            'estate_operation_ws_remark',
            'estate_operation_pmarea_fm',
            'estate_operation_pmarea_remark',
            'estate_operation_tra_fm',
            'estate_operation_tra_remark',
            'estate_operation_nursery_fm',
            'estate_operation_nursery_remark',
            'estate_operation_lb_fm',
            'estate_operation_lb_remark'
    ];
}
