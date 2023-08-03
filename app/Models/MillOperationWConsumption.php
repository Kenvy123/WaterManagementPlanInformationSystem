<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillOperationWConsumption extends Model
{
    use HasFactory;

    protected $fillable=[
        'mill_form_id',
       'mill_operation_processing_ffb_wc',
       'mill_operation_workshop_wc',
       'mill_operation_lab_wc',
       'mill_operation_other_wc_name',
       'mill_operation_other_wc',
    ];
}
