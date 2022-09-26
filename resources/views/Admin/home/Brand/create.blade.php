@extends('Layout.layout')
@section('title', 'Edit Brands')


@section('content')
    <x-headbar>
        {{-- @include('Admin.partials.headbar')   --}}
        <div class="container overflow-hidden">
            <h2>Add Content to edit Brand Partners</h2>
            <form action="{{ route('Brand.create') }}" method="POST" class="form-group">
                @csrf
                <div class="row gy-5">
                    <div class="form-group col-6">  
                        <label for="Header" class="form-label fs-5">Header</label>
                        <input type="text" name="head" class="form-control" id="Header" >
                    </div>
                    <div class="form-group col-6">
                        <label for="Text" class="form-label fs-5">Text on Page</label>
                        <input type="text" name="head" class="form-control" id="Header" >
                    </div>
                    <div class="form-group col-6">
                        <label for="Img" class="form-label fs-5">Change Head Image</label>
                        <input type="url" name="image" class="form-control" id="Img">
                    </div>
                    <div class="form-group col-6">
                        <label for="Imgs" class="form-label fs-5">Change Body Image </label>
                        <input type="url" name="images" class="form-control" id="Imgs">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Save Changes" class="form-control btn btn-primary btn-block my-3 btn-lg">
                    </div>
                </div>
            </form>
        </div>
    </x-headbar>
@endsection



