@section('head')
    @include('partials._head')
@show

@section('header')
    @include('partials._header')
@show

<!-- //////////////////////////////////
//////////////PAGE CONTENT/////////////
////////////////////////////////////-->

<div class="container">
    <div class="row">
        @section('sidebar')
            @include('partials._sidebar')
        @show
        @yield('content')
    </div>
</div>

<!-- //////////////////////////////////
//////////////END PAGE CONTENT/////////
////////////////////////////////////-->
@section('footer')
    @include('partials._footer')
@show