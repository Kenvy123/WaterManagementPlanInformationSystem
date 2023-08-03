<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateOperationObstructionRiver extends Model
{
    use HasFactory;

    protected $fillable=[
        'estate_form_id',
        'estate_operation_orw_bund_application',
            'estate_operation_orw_bund_location',
            'estate_operation_orw_bund_remark',
            'estate_operation_orw_weir_application',
            'estate_operation_orw_weir_location',
            'estate_operation_orw_weir_remark',
            'estate_operation_orw_dam_application',
            'estate_operation_orw_dam_location',
            'estate_operation_orw_dam_remark'
    ];

}
