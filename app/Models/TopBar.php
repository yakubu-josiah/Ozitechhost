<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopBar extends Model
{
    protected $fillable =[
        'Cnt_Phn',
        'Cnt_Spt',
        'Cnt_Aff',
        'Cnt_Cli'
    ];
    use HasFactory;
}

