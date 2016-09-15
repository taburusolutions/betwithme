@extends('layouts.app')
@section('title')
@section('content')
    <div class="span9">
        <div class="row row-wrap">
            <div class="gap"></div>
            <div class="row">
                <div class="span8">
                    {!! Form::open(['url' => route('auth.password-post'), 'class' => 'form-signin' ] ) !!}
                    @include('includes.status')
                    <h2 class="form-signin-heading">Password Reset</h2>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email address', 'required', 'autofocus', 'id' => 'inputEmail' ]) !!}
                    <br/>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Send me a reset link</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop