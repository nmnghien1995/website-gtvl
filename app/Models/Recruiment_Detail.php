<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruiment_Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'RE_ID',
        'CA_ID',
        'RD_QUANTITY',
        'RD_SALARY',
        'RD_SKILL',
    ];
}
