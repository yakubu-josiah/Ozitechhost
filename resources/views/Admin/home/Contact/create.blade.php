@extends('Layout.layout')
@section('title', 'Create Contact Details')

@section('content')
    <x-headbar>
        <div class="container overflow-hidden">
            <h2>Add Content to Edit Your Contact Detials On Footer</h2>
            <form action="{{ route('Contact.store') }}" method="POST" class="form-group">
                @csrf
                <div class="row gy-5">
                    <x-form-column>  
                        <label for="FCC_em" class="form-label fs-5">Label of Contact Type 1</label>
                        <input type="text" name="FCC_em" class="form-control" id="FCC_em" placeholder="Email here...">
                    </x-form-column>
                    <x-form-column>
                        <label for="FCC_su" class="form-label fs-5">Label 1 Detials</label>
                        <input type="text" name="FCC_su" class="form-control" id="FCC_su" placeholder="your@email.com">
                    </x-form-column>
                    <x-form-column>
                        <label for="FCC_of" class="form-label fs-5">Label of Contact Type 2</label>
                        <input type="text" name="FCC_of" class="form-control" id="FCC_of" placeholder="Enter Location here...">
                    </x-form-column>
                    <x-form-column>
                        <label for="FCC_ad" class="form-label fs-5">Label 2 Details</label>
                        <input type="text" name="FCC_ad" class="form-control" id="FCC_ad" placeholder="13, St. Park Street">
                    </x-form-column>
                    <x-form-column>
                        <label for="FCC_ph" class="form-label fs-5">Label of Contact Type 3</label>
                        <input type="text" name="FCC_ph" class="form-control" id="FCC_ph" placeholder="Telephone">
                    </x-form-column>
                    <x-form-column>
                        <label for="FCC_nu" class="form-label fs-5">Label 3 Details</label>
                        <input type="text" name="FCC_nu" class="form-control" id="FCC_nu" placeholder="+0123-456-789">
                    </x-form-column>
                    @include('Admin.partials.Form.save-button')
                </div>
            </form>
        </div>
    </x-headbar>
@endsection
