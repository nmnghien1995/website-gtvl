<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'C_NAME',
        'C_PHONE',
        'C_EMAIL',
        'C_WEBSITE',
        'C_ADDRESS',
    ];
}
