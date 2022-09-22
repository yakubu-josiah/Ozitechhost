<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderSection extends Model
{
    protected $fillable = [
        //First Slider
        'Sld_Img',
        'Sld_H1',
        'Sld_H3',
        'Sld_Btn',
        // Second Slider
        'Sld_Imgs',
        'Sld_H1s',
        'Sld_H3s',
        'Sld_Btns'
    ];
    use HasFactory;
}
