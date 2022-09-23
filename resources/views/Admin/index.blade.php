@extends('Layout.layout')
@section('title', 'Admin Only')


@section('content')
    <div class="imgHome d-flex flex-column flex-md-row align-items-center p-3 px-md-4 border-bottom shadow-sm fixed-top mb-5 bg-info">
        <a class="my-0 me-auto opacity-50 mx-5"  href="{{ route('home.index') }}"><img src="{{ asset('Images/logo.png') }}" width="170" height="40" alt="Our Logo"></a>
        <nav class="my-2 my-me-0 me-3 "> 
            <a href={{ route('home.index') }} >Home</a>
            <a href={{ route('home.index') }} >Contact</a>
            <a href={{ route('home.index') }} >About Us</a>
        </nav>
    </div>
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
            </table>
            
            <table class="table table-striped">
                <h3>Your Contact Detials On Footer</h3>
                @include('Admin.partials.table')
            </table>
        </div>
    </div>
@endsection