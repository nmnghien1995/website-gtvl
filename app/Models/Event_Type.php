<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event_Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'ET_NAME',
        
    ];
}
