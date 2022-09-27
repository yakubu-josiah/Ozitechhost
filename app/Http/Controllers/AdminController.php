<?php

namespace App\Http\Controllers;

use App\Models\BrandPartners;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $Brand = BrandPartners::get();
  
        return view('Admin.index',
            [
                'Brand' => $Brand
            ]
        );
    }
            // THE BRAND SECTION  THE BRAND SECTION THE BRAND SECTION THE BRAND SECTION

    public function BrandCreate()
    {
        return view('Admin.home.Brand.create');
    }

   public function BrandEdit(Request $request)
    {
        $Brands = BrandPartners::create($request->all());
    }


}
