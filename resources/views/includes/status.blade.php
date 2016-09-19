@extends('layouts.app')
@if(Session::has('message'))
    <div class="alert alert-{{ Session::get('status') }} status-box">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        {{ Session::get('message') }}
    </div>
@endif
@section('content')

    <div class="row">
        <div class="col-md-12">

            <p>{!! $error !!}</p>

        </div>
    </div>

@stop