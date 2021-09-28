<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event_Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'E_ID',
        'ED_TIME',
        'ED_COMMIT',
    ];
}
