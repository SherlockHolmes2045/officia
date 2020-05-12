@extends('layouts.auth')

@section('content')
    <form action="{{route('auth.finalise')}}" method="POST">
        @csrf
        <input type="hidden" value="{{$info}}" name="getInfo">
        <input type="hidden" value="{{$provider}}" name="provider">
        <h3 style="font-weight: bold"> @lang('authentification.account_title')</h3><br>
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
        <button class="button primary-bg btn-block" type="submit">@lang('authentification.register')</button>
    </form>
@endsection
