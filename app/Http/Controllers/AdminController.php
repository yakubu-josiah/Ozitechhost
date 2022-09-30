<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminForm;
use App\Models\BrandPartners;
use App\Models\ContactDetails;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $Brand = BrandPartners::get();
        $Contact = ContactDetails::get();
  
        return view('Admin.index',
            [
                'Brand' => $Brand,
                'Contact' => $Contact
            ]
        );
    }
            // THE BRAND SECTION   THE BRAND SECTION    THE BRAND SECTION   THE BRAND SECTION

    public function BrandCreate()
    {
        return view('Admin.home.Brand.create');
    }

   public function BrandStore(AdminForm $request)
    {
        $validated = $request->validated();
        $Brands = BrandPartners::create($validated);

        session()->flash('status', 'Successfully Added Brand Partners!!!');
        return redirect()->route('Admin.index');

    }

    public function BrandEdit($id)
    {
        return view('Admin.home.Brand.edit', ['Brand' => BrandPartners::findOrFail($id)]);
    }

    public function BrandUpdate(AdminForm $request, $id)
    {
        $validated = $request->validated();
        $Brand = BrandPartners::findOrFail($id);
        $Brand->fill($validated);
        $Brand->save();
        
        session()->flash('status', 'Successfully Updated Brand Partners!!!');
        return redirect()->route('Admin.index');        
    }
    
    public function BrandDelete($id)
    {
        $Brand = BrandPartners::findOrFail($id);
        $Brand->delete();

        session()->flash('status', 'Deleted successfully!!!');
        return redirect()->route('Admin.index');
    }

    
    
    // THE CONTACT SECTION     THE CONTACT SECTION     THE CONTACT SECTION    THE CONTACT SECTION
    public function ContactCreate()
    {
        return view('Admin.home.Contact.create');
    }
}
