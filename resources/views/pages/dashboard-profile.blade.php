@extends('includes.header')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/dashboard.css')}}">
@endsection

@section('content')

    <!-- Breadcrumb -->
    <div class="alice-bg padding-top-70 padding-bottom-70">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="breadcrumb-area">
                        <h1>Candidates Dashboard</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Candidates Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-form">
                        <form action="#">
                            <input type="text" placeholder="Enter Keywords">
                            <button><i data-feather="search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <div class="alice-bg section-padding-bottom">
        <div class="container no-gliters">
            <div class="row no-gliters">
                <div class="col">
                    <div class="dashboard-container">
                        <div class="dashboard-content-wrapper">
                            <form action="{{route("candidate.profile")}}" class="dashboard-form" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="dashboard-section upload-profile-photo">
                                    <div class="update-photo">
                                        <img class="image" src="{{asset('storage/'.auth()->user()->picture)}}" alt="">
                                    </div>
                                    <div class="file-upload">
                                        <input type="file" class="file-input @error('picture') is-invalid @enderror" name="picture">Changer de photo
                                        @error('picture')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="dashboard-section basic-info-input">
                                    <h4><i data-feather="user-check"></i>Infos de base</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Noms et prénoms</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" name="name" value="{{auth()->user()->name}}">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Adresse mail</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email@example.com" name="email" value="{{auth()->user()->email}}">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Contact</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control @error('contact') is-invalid @enderror" placeholder="+55 123 4563 4643" name="contact" value="{{$details->contact}}">
                                            @error('contact')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Adresse</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('location') is-invalid @enderror" placeholder="Douala" name="location" value="{{$details->location}}">
                                            @error('location')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-section basic-info-input">
                                    <h4><i data-feather="lock"></i>Changer de mot de passe</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Mot de passe actuel</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control @error('actualPassword') is-invalid @enderror" name="actualPassword">
                                            @error('actualPassword')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nouveau mot de passe</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control @error('newPassword') is-invalid @enderror" name="newPassword">
                                            @error('newPassword')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Confirmer le mot de passe</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control @error('newPasswordConfirmation') is-invalid @enderror" name="newPasswordConfirmation">
                                            @error('newPasswordConfirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <button class="button" type="submit">Enregistrer les modifications</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="dashboard-sidebar">
                            @include('includes.user-info')
                            <div class="dashboard-menu">
                                @include('includes.candidate-navigation')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @include('includes.candidate-scripts')
@endsection
