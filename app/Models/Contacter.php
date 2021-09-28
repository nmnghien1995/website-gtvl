<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacter extends Model
{
    use HasFactory;

    protected $fillable = [
        'C_ID',
        'CT_NAME',
        'CT_PHONE',
        'CT_EMAIL',
        'CT_POSITION',
        
    ];
}
