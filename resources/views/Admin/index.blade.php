@extends('Layout.layout')
@section('title', 'Admin Only')


@section('content')
    <x-headbar>
        {{-- @include('Admin.partials.headbar') --}}
        <div class="container pt-4 text-center mt-5">
            <div class="form-control">
                <h3 class="fs-3 fw-light ">THE HOMEPAGE EDITING SECTION</h3>
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
                    <a href="{{ route('Brand.create')}}" class="btn btn-primary"> Edit Brands</a>
                </table>
                
                <table class="table table-striped">
                    <h3>Your Contact Detials On Footer</h3>
                    @include('Admin.partials.table')
                </table>
            </div>
        </div>
    </x-headbar>
@endsection