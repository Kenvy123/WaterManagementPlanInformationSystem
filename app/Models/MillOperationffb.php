<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MillOperationffb extends Model
{
    use HasFactory;

    protected $fillable=[
        'mill_form_id',
       'mill_operation_o_record'
    ];
}
