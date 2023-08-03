<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChemicalParameter extends Model
{
    
    use HasFactory;
    protected $fillable=[
        'chemical_parameter_name',
        'cm_usage'
    ];
}
