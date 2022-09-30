<div>
    <div class="imgHome d-flex flex-column flex-md-row align-items-center p-3 px-md-4 border-bottom shadow-sm bg-info ">
        <a class="my-0 me-auto opacity-50 mx-5"  href="{{ route('home.index') }}"><img src="{{ asset('Images/logo.png') }}" width="170" height="40" alt="Our Logo"></a>
        <nav class="my-2 my-me-0 me-3 "> 
            <a href={{ route('home.index') }} >Home</a>
            <a href={{ route('home.index') }} >Contact</a>
            <a href={{ route('home.index') }} >About Us</a>
        </nav>
    </div>
    <div>
        <a href="{{ route('Admin.index') }}" class="px-3 btn btn-sm w-25 btn-outline-info">← Back</a>
    </div>
    <div class="mt-5">
        {{$slot}}
    </div>
  
</div>

   
