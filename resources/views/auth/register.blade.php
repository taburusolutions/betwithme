@extends('layouts.app')
@section('title')
    {{"Sign up"}}
@endsection
@section('content')
    <div class="span9">
        <div class="row row-wrap">
            <div class="gap"></div>
            <div class="row">
                <div class="span8">
                    {!! Form::open(['url' => route('auth.register-post'), 'class' => 'form-signin' ] ) !!}

                    @include('includes.status')

                    <h2 class="form-signin-heading">Please register</h2>

                    <label for="inputEmail" class="sr-only">Email address</label>
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email address', 'required', 'autofocus', 'id' => 'inputEmail' ]) !!}

                    <label for="inputFirstName" class="sr-only">First name</label>
                    {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First name', 'required', 'id' => 'inputFirstName' ]) !!}

                    <label for="inputLastName" class="sr-only">Last name</label>
                    {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last name', 'required', 'id' => 'inputLastName' ]) !!}


                    <label for="inputPassword" class="sr-only">Password</label>
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required',  'id' => 'inputPassword' ]) !!}


                    <label for="inputPasswordConfirm" class="sr-only">Confirm Password</label>
                    {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password confirmation', 'required',  'id' => 'inputPasswordConfirm' ]) !!}


                    <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>

                    <p class="or-social">Or Use Social Login</p>

                    <a class="btn btn-lg btn-primary btn-block facebook" type="submit">Facebook</a>
                    <a class="btn btn-lg btn-primary btn-block twitter" type="submit">Twitter</a>

                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
@endsection