@extends('layouts.app')
@section('title')
@section('content')
    <div class="span9">
        <div class="row row-wrap">
            <div class="gap"></div>
            <div class="row">
                <div class="span8">
                    {!! Form::open(['url' => route('auth.login-post'), 'class' => 'form-signin' ] ) !!}
                    @include('includes.status')
                    <h2 class="form-signin-heading">Please sign in</h2>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email address', 'required', 'autofocus', 'id' => 'inputEmail' ]) !!}
                    <label for="inputPassword" class="sr-only">Password</label>
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required',  'id' => 'inputPassword' ]) !!}
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('remember', 1) !!} Remember me

                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    <p><a href="{{ route('auth.password') }}">Forgot password?</a></p>

                    <p class="or-social">Or Use Social Login</p>
                    <a href="{{ route('social.redirect', ['provider' => 'google']) }}"
                       class="btn btn-lg btn-primary btn-block google" type="submit">Google</a>
                    <a href="{{ route('social.redirect', ['provider' => 'facebook']) }}"
                       class="btn btn-lg btn-primary btn-block facebook" type="submit">Facebook</a>
                    <a href="{{ route('social.redirect', ['provider' => 'twitter']) }}"
                       class="btn btn-lg btn-primary btn-block twitter" type="submit">Twitter</a>

                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
@endsection