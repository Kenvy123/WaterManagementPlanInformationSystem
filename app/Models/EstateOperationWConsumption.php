<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateOperationWConsumption extends Model
{
    use HasFactory;

    protected $fillable=[
        'estate_form_id',
        'estate_operation_workshop_wc',
            'estate_operation_pre_mc_wc',
            'estate_operation_trf_wc',
            'estate_operation_nursery_wc',
            'estate_operation_ls_wc',
           'estate_operation_other_wc_name',
            'estate_operation_other_wc'
    ];
}
