@extends('layouts.app')
@section('title')
    {{'Login :: Betwithme'}}
@endsection
@section('content')
    <div class="span8">
        {!! Form::open(['url' => route('auth.login-post'), 'class' => 'dialog-form', 'id'=>'login-form-page' ] ) !!}
        <div id="login-page-alert" class="alert alert-danger" style="display: none;">
            <strong>Whoops!</strong> That is a wrong email or password, try again..<br><br>
        </div>
        <label>E-mail</label>
        {!! Form::email('email', null, ['class' => 'span3', 'placeholder' => 'email@domain.com', 'required', 'autofocus', 'id' => 'inputEmail' ]) !!}
        <label>Password</label>
        {!! Form::password('password', ['class' => 'span3', 'placeholder' => 'Password', 'required',  'id' => 'inputPassword' ]) !!}
        <label class="checkbox">
            {!! Form::checkbox('remember', 1) !!}Remember me
        </label>
        <input type="submit" value="Login in" id="login-button" class="btn btn-primary"/><br/><br/>
        <a href="{{ route('social.redirect', ['provider' => 'google']) }}" class="btn btn-primary social-login google"
           target="_blank">Sign in with Google</a>
        <a href="{{ route('social.redirect', ['provider' => 'facebook']) }}"
           class="btn btn-primary social-login facebook" target="_blank">Sign in with Facebook</a>
        <a href="{{ route('social.redirect', ['provider' => 'twitter']) }}" class="btn btn-primary social-login twitter"
           target="_blank">Sign in with Twitter</a>
        {!! Form::close() !!}
        <ul class="dialog-alt-links">
            <li><a class="popup-text" href="#register-dialog" data-effect="mfp-zoom-out">Not member yet</a>
            </li>
            <li> <a href="{{ route('auth.password') }}">Forgot password?</a>
            </li>
        </ul>
    </div>
@endsection