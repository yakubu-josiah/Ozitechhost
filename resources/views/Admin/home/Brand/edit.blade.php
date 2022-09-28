@extends('Layout.layout')
@section('title', 'Edit Brands')


@section('content')
    <x-headbar>
        <div class="container overflow-hidden">
            <h2>Add Content to Edit Brand Partners</h2>
            <form action="{{route('Brand.update', [$Brand->id])}}" method="POST" class="form-group">
                @csrf
                @method('PUT')
                <div class="row gy-5">
                    <div class="form-group col-6">  
                        <label for="FPS_Img1" class="form-label fs-5">Brand Logo One</label>
                        <input type="url" name="FPS_Img1" class="form-control" id="FPS_Img1" value="{{ $Brand->FPS_Img1 }}">
                    </div>
                    <div class="form-group col-6">
                        <label for="FPS_Img2" class="form-label fs-5">Brand Logo Two</label>
                        <input type="url" name="FPS_Img2" class="form-control" id="FPS_Img2" value="{{ $Brand->FPS_Img2 }}">
                    </div>
                    <div class="form-group col-6">
                        <label for="FPS_Img3" class="form-label fs-5">Brand Logo Three</label>
                        <input type="url" name="FPS_Img3" class="form-control" id="FPS_Img3" value="{{ $Brand->FPS_Img3 }}">
                    </div>
                    <div class="form-group col-6">
                        <label for="FPS_Img4" class="form-label fs-5">Brand Logo Four</label>
                        <input type="url" name="FPS_Img4" class="form-control" id="FPS_Img4" value="{{ $Brand->FPS_Img4 }}" placeholder="Inser url here...">
                    </div>
                    <div class="form-group col-6">
                        <label for="FPS_Img5" class="form-label fs-5">Brand Logo Five</label>
                        <input type="url" name="FPS_Img5" class="form-control" id="FPS_Img5" value="{{ $Brand->FPS_Img5 }}" placeholder="Inser url here...">
                    </div>
                    <div class="form-group col-6">
                        <label for="FPS_Img6" class="form-label fs-5">Brand Logo Six</label>
                        <input type="url" name="FPS_Img6" class="form-control" id="FPS_Img6" value="{{ $Brand->FPS_Img6 }}" placeholder="Inser url here...">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Update Changes" class="form-control btn btn-info btn-block my-3 btn-lg">
                    </div>
                </div>
            </form>
        </div>
    </x-headbar>
@endsection



