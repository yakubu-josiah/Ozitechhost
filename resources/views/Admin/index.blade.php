@extends('Layout.layout')
@section('title', 'Admin Only')


@section('content')
    <x-headbar>
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
                    <x-table-head>
                        <h3>Brand Partners</h3>
                        <a href="{{ route('Brand.create')}} " class="text-decoration-none mt-2 mb-4 text-success mx-5 border-bottom border-top border-danger link-dark">Add Features</a>
                   </x-table-head>
                    @include('Admin.partials.table')
                    @foreach ($Brand as $item)
                        <tr>
                            <td>{{ $item->id}}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{ $item->FPS_Img1}}</td>
                            <td>{{ $item->created_at}}</td>
                            <td>
                                <x-table-buttons>
                                    <a href="{{ route('Brand.edit', $item->id) }}" class="btn btn-sm btn-outline-info px-3 rounded mx-2 text-black"> Edit Row</a>
                                    <form action="{{ route('Brand.delete', $item->id) }}" method="POST">
                                        @csrf 
                                        @method('DELETE')
                                        @include('Admin.partials.Form.delete-button')
                                    </form> 
                                </x-table-buttons>
                            </td>   
                        </tr>
                    @endforeach                    
                </table>

                <table class="table table-striped">
                    <x-table-head>
                        <h3>Your Contact Detials On Footer</h3>
                        <a href="{{ route('Contact.create')}} " class="text-decoration-none mt-2 mb-4 text-success mx-5 border-bottom border-top border-danger link-dark">Add Features</a>
                    </x-table-head>
                    @include('Admin.partials.table')
                    @foreach ($Contact as $item)
                        <tr>
                            <td>{{ $item->id}}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{ $item->FCC_em}}</td>
                            <td>{{ $item->created_at}}</td>
                            <td>
                                <x-table-buttons>
                                    <a href="{{ route('Contact.edit', $item->id) }}" class="btn btn-sm btn-outline-info px-3 rounded mx-2 text-black"> Edit Row</a>
                                    <form action="{{ route('Contact.delete', $item->id) }}" method="POST">
                                        @csrf 
                                        @method('DELETE')
                                        @include('Admin.partials.Form.delete-button')
                                    </form> 
                                </x-table-buttons>
                            </td>   
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </x-headbar>
@endsection