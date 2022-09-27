<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandPartners extends Model
{
    protected $fillable = [
        'FPS_Img1',
        'FPS_Img2',
        'FPS_Img3',
        'FPS_Img4',
        'FPS_Img5',
        'FPS_Img6',
    ];
    use HasFactory;


    // public static function getForAdmin(){
    //     return self::orderBy('id', 'DESC')->get();
    // }

    // public static function adminGetAdmin($id){
    //     return self::where()
    // }
}
