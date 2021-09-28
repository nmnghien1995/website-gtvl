<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uers_Roles extends Model
{
    use HasFactory;

    protected $fillable = [
        'R_ID',
        'USER_ID',
      
    ];
}
