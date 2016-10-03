@extends('layouts.app')
@section('title')
    {{"Forgot Password"}}
@endsection
@section('content')
Click here to reset your password: <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
@endsection