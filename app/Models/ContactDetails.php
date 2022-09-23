<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactDetails extends Model
{
    protected $fillable = [
        'FCC_em',
        'FCC_su',
        'FCC_of',
        'FCC_ad',
        'FCC_ph',
        'FCC_nu'
    ];
    use HasFactory;
}
