@extends('layouts.auth')

@section('content')
    <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="form-group">
            <input type="email" placeholder="Email Address" class="form-control" name="email">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Password" class="form-control" name="password">
        </div>
        <div class="more-option">
            <div class="mt-0 terms">
                <input class="custom-radio" type="checkbox" id="radio-4" name="remember">
                <label for="radio-4">
                    <span class="dot"></span> @lang('authentification.remember')
                </label>
            </div>
            <a href="#">@lang('authentification.forget')</a>
        </div>
        <button class="button primary-bg btn-block">@lang('authentification.login')</button>
    </form>
    <div class="shortcut-login">
        <span>@lang('authentification.oauth_login')</span>
        <div class="buttons">
            <a href="{{url('/auth/redirect/github')}}" class="facebook"><i class="fab fa-github"></i>Github</a>
            <a href="#" class="google"><i class="fab fa-google"></i>Google</a>
        </div>
        <p>@lang('authentification.not_account') <a href="{{route('register')}}">@lang('authentification.register')</a></p>
    </div>
@endsection
