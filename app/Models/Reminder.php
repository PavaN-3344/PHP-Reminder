<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;

    protected $casts = [
        'when'=>'datetime',
    ];

    protected $fillable = [
        'reminder',
        'when',
    ];
}
