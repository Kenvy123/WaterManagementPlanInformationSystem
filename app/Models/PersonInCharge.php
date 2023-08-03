<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonInCharge extends Model
{
    use HasFactory;
    protected $fillable=[
        'pic_name',
        'pic_position',
        'pic_contact'
    ];
}
