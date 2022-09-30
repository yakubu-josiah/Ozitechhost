@extends('Layout.layout')
@section('title', 'Create Brands')


@section('content')
    <x-headbar>
        <div class="container overflow-hidden">
            <h2>Add Content to Edit Brand Partners</h2>
            <form action="{{ route('Brand.store') }}" method="POST" class="form-group">
                @csrf
                <div class="row gy-5">
                    <x-form-column>  
                        <label for="FPS_Img1" class="form-label fs-5">Brand Logo One</label>
                        <input type="url" name="FPS_Img1" class="form-control" id="FPS_Img1" placeholder="Inser url here...">
                    </x-form-column>
                    <x-form-column>
                        <label for="FPS_Img2" class="form-label fs-5">Brand Logo Two</label>
                        <input type="url" name="FPS_Img2" class="form-control" id="FPS_Img2" placeholder="Inser url here...">
                    </x-form-column>
                    <x-form-column>
                        <label for="FPS_Img3" class="form-label fs-5">Brand Logo Three</label>
                        <input type="url" name="FPS_Img3" class="form-control" id="FPS_Img3" placeholder="Inser url here...">
                    </x-form-column>
                    <x-form-column>
                        <label for="FPS_Img4" class="form-label fs-5">Brand Logo Four</label>
                        <input type="url" name="FPS_Img4" class="form-control" id="FPS_Img4" placeholder="Inser url here...">
                    </x-form-column>
                    <x-form-column>
                        <label for="FPS_Img5" class="form-label fs-5">Brand Logo Five</label>
                        <input type="url" name="FPS_Img5" class="form-control" id="FPS_Img5" placeholder="Inser url here...">
                    </x-form-column>
                    <x-form-column>
                        <label for="FPS_Img6" class="form-label fs-5">Brand Logo Six</label>
                        <input type="url" name="FPS_Img6" class="form-control" id="FPS_Img6" placeholder="Inser url here...">
                    </x-form-column>
                    @include('Admin.partials.Form.save-button')
                </div>
            </form>
        </div>
    </x-headbar>
@endsection



