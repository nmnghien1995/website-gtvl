<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    use HasFactory;

    protected $fillable = [
        'USER_ID',
        'C_ID',
        'RE_NAME',
        'E_DATE',
        'RE_FILE',
        'RE_VIEW',
    ];
}
