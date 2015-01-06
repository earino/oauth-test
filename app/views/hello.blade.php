@extends('layout')

@section('content')
<a href="{{ route('social-login', array('twitter')) }}?onsuccess=/account&onerror=/login">
    Log in with Twitter
</a>
<a href="{{ route('social-login', array('facebook')) }}?onsuccess=/account&onerror=/login">
    Log in with Facebook
</a>
<a href="{{ route('social-login', array('google')) }}?onsuccess=/account&onerror=/login">
    Log in with Google
</a>
@stop
