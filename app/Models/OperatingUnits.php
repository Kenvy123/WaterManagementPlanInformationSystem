<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperatingUnits extends Model
{
    use HasFactory;
    protected $table= 'ou';
    protected $fillable = ['operating_unit_name', 'g_remark'];
}
