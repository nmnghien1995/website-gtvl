<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $fillable = [
        'FA_ID',
        'USER_ID',
        'IN_NAME',
        'IN_PHONE',
    ];
}
