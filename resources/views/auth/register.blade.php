@extends('layouts.auth')

@section('content')
    <form action="{{route('register')}}" method="POST">
        @csrf
        <div class="account-type">
            <label for="idRegisterCan">
                <input id="idRegisterCan" type="radio" name="account_type" value="candidate">
                <span>Candidate</span>
            </label>
            <label for="idRegisterEmp">
                <input id="idRegisterEmp" type="radio" name="account_type" value="employer">
                <span>Employer</span>
            </label>
        </div>
        @error('account_type')
        <div>
        <span style="color: red" role="alert">
                <strong>@lang('authentification.account_type')</strong>
            </span>
        </div>
        @enderror
        <div class="form-group">
            <input type="text" placeholder="Name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name" autofocus required>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email" autofocus required>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" placeholder="Password" name="password" class="form-control @error('password') is-invalid @enderror" autofocus required>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" placeholder="Confirm Password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" autofocus required>
            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="more-option terms">
            <div class="mt-0 terms">
                <input class="custom-radio @error('termsandcondition')is-invalid @enderror" type="checkbox" id="radio-4" name="termsandcondition" value="1" {{ old('termsandcondition') ? 'checked="checked"' : '' }}>
                <label for="radio-4">
                    <span class="dot"></span> I accept the <a href="#">terms & conditions</a>
                </label>
            </div>
            @error('termsandcondition')
            <span role="alert" style="color: red">
                <strong>@lang('authentification.terms')</strong>
            </span>
            @enderror
        </div>
        <button class="button primary-bg btn-block" type="submit">@lang('authentification.register')</button>
    </form>
    <div class="shortcut-login">
        <span>@lang('authentification.oauth_register')</span>
        <div class="buttons">
            <a href="{{ url('/auth/redirect/github') }}" class="facebook"><i class="fab fa-github"></i>Github</a>
            <a href="#" class="google"><i class="fab fa-google"></i>Google</a>
        </div>
        <p>Already have an account? <a href="{{route('login')}}">@lang('authentification.login')</a></p>
    </div>
@endsection
