<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillOperationPFRate extends Model
{
    use HasFactory;

    protected $fillable=[
        'mill_form_id',
       'mill_operation_rnr_pfr',
       'mill_operation_rwtp_pfr',
       'mill_operation_wtps_pfr',
    ];
}
