@extends('Layout.layout')
@section('title', 'Update Contact Details')

@section('content')
    <x-headbar>
        <div class="container overflow-hidden">
            <h2>Add Content to Edit Your Contact Detials On Footer</h2>
            <form action="{{ route('Contact.update', $Contacts->id) }}" class="form-group">
                @csrf
                @method('PUT')
                <div class="row gy-5">
                    <x-form-column>  
                        <label for="FCC_em" class="form-label fs-5">Label of Contact Type 1</label>
                        <input type="url" name="FCC_em" class="form-control" id="FCC_em" value="{{ $Contacts->FCC_em }}">
                    </x-form-column>
                    <x-form-column>
                        <label for="FCC_su" class="form-label fs-5">Label 1 Detials</label>
                        <input type="url" name="FCC_su" class="form-control" id="FCC_su" value="{{ $Contacts->FCC_su }}">
                    </x-form-column>
                    <x-form-column>
                        <label for="FCC_of" class="form-label fs-5">Label of Contact Type 2</label>
                        <input type="url" name="FCC_of" class="form-control" id="FCC_of" value="{{ $Contacts->FCC_of }}">
                    </x-form-column>
                    <x-form-column>
                        <label for="FCC_ad" class="form-label fs-5">Label 2 Details</label>
                        <input type="url" name="FCC_ad" class="form-control" id="FCC_ad" value="{{ $Contacts->FCC_ad }}">
                    </x-form-column>
                    <x-form-column>
                        <label for="FCC_ph" class="form-label fs-5">Label of Contact Type 3</label>
                        <input type="url" name="FCC_ph" class="form-control" id="FCC_ph" value="{{ $Contacts->FCC_ph }}">
                    </x-form-column>
                    <x-form-column>
                        <label for="FCC_nu" class="form-label fs-5">Label 3 Details</label>
                        <input type="url" name="FCC_nu" class="form-control" id="FCC_nu" value="{{ $Contacts->FCC_nu }}">
                    </x-form-column>
                    @include('Admin.partials.Form.update-button')
                </div>
            </form>
        </div>
    </x-headbar>
@endsection
