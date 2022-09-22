<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NavBar extends Model
{
    protected $fillable = [
        'Nav_Logo',
        'Nav_Home',
        'Nav_Dom',
        'Nav_SSL',
        'Nav_Sit',
        'Nav_Hos',
        'Nav_Web'
    ];
    use HasFactory;
}
