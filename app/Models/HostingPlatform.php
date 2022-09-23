<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostingPlatform extends Model
{
    protected $fillable = [
        'Hp_H2',
        'Hp_p'
    ];
    use HasFactory;
}

