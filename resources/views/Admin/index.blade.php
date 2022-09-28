@extends('Layout.layout')
@section('title', 'Admin Only')


@section('content')
    <x-headbar>
        {{-- @include('Admin.partials.headbar') --}}
        <div class="container pt-4 text-center mt-5 bg-light">
            <div class="form-control">
                <h3 class="fs-3 fw-light p-3">THE HOMEPAGE EDITING SECTION</h3>
                <table class="table table-striped">
                    <h3>Top Bar Navigation</h3>
                    @include('Admin.partials.table')
                </table>
                <table class="table table-striped">
                    <h3>The Second Navigation Bar</h3>
                    @include('Admin.partials.table')
                </table>
                <table class="table table-striped">
                    <h3>Slider Section Contents</h3>
                    @include('Admin.partials.table')
                    
                </table>
                
                <table class="table table-striped">
                    <h3>Details On The Hosting Platform</h3>
                    @include('Admin.partials.table')
                </table>
                
                <table class="table table-striped">
                    <h3>The Subscription Plan Service</h3>
                    @include('Admin.partials.table')
                </table>
                
                <table class="table table-striped">
                    <h3>Brand Partners</h3>
                    @include('Admin.partials.table')
                    @foreach ($Brand as $item)
                        <tr>
                            <td>{{ $item->id}}</td>
                            <td>{{ $item->FPS_Img1}}</td>
                            <td>{{ $item->created_at}}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('Brand.edit', $item->id) }}" class="btn btn-sm btn-outline-info px-3 rounded fs-6 mx-2 text-black"> Edit Row</a>
                                    <form action="{{ route('Brand.delete', $item->id) }}" method="POST">
                                        @csrf 
                                        @method('DELETE')
                                        <input type="submit" value="Delete Row" class="btn btn-sm btn-outline-info px-3 rounded fs-6">
                                    </form> 
                                </div>

                            </td>   
                        </tr>
                    @endforeach
                    
                    
                </table>
                
                <table class="table table-striped">
                    <h3>Your Contact Detials On Footer</h3>
                    @include('Admin.partials.table')
                </table>
            </div>
        </div>
    </x-headbar>
@endsection