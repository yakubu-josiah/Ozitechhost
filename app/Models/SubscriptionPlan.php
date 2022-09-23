<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    protected $fillable = [
        'Hp_NTli',
        'Hp_NTlis',
        'Col_R1H3',
        'Col_R1pr',
        'Col_R1su',
        'Col_R1sp',
        'Col_R1yr',
        //Second Row
        'Col_R2sp',
        'Col_R2H5',
        //Third Row
        'Col_R3sp',
        'Col_R3H5',
        //Fourt Row
        'Col_R4sp',
        'Col_R4H5',
        //Fith Row
        'Col_R5sp',
        'Col_R5H5'
    ];
    use HasFactory;
}
