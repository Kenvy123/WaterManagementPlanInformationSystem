<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateOperationSoilMC extends Model
{
    use HasFactory;

    protected $fillable=[
        'estate_form_id',
        'estate_operation_efb_application',
            'estate_operation_efb_ta',
            'estate_operation_efb_mf',
            'estate_operation_dc_application',
            'estate_operation_dc_ta',
            'estate_operation_dc_mf',
            'estate_operation_ba_application',
            'estate_operation_ba_ta',
            'estate_operation_ba_mf',
            'estate_operation_shell_application',
            'estate_operation_shell_ta',
            'estate_operation_shell_mf',
            'estate_operation_fiber_application',
            'estate_operation_fiber_ta',
            'estate_operation_fiber_mf',
            'estate_operation_sp_application',
            'estate_operation_sp_ta',
            'estate_operation_sp_mf',
            'estate_operation_sdp_application',
            'estate_operation_sdp_ta',
            'estate_operation_sdp_mf',
            'estate_operation_fs_application',
            'estate_operation_fs_ta',
            'estate_operation_fs_mf',
            'estate_operation_othr_application',
            'estate_operation_othr_ta',
            'estate_operation_othr_mf'
    ];
}
