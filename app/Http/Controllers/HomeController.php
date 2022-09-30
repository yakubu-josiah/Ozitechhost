<?php

namespace App\Http\Controllers;

use App\Models\BrandPartners;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $Brand = BrandPartners::first();

        return view('home.index',
            [
                'home' => $Brand
            ]
        );
    }
}
