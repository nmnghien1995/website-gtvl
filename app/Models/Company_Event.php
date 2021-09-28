<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'E_ID',
        'C_ID',
    ];
}
