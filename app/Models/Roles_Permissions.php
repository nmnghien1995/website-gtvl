<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles_Permissions extends Model
{
    use HasFactory;

    protected $fillable = [
        'R_ID',
        'P_ID',
      
    ];
}
