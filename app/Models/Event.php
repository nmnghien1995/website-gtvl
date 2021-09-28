<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'USER_ID',
        'ET_ID',
        'E_NAME',
        'E_DATE',
        'E_START',
        'E_END',
        'E_IMAGE',
        'E_VIEW',
        'E_ADDRESS',
    ];
}
