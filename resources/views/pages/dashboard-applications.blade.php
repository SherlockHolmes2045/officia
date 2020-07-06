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
                        <h1>Candidate Dashboard</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Candidate Dashboard</li>
                            </ol>
                        </nav>
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
                            <div class="dashboard-bookmarked">
                                <h4 class="bookmark-title">{{count($applications)}} Job Applied</h4>
                                <div class="bookmark-area">
                                    @foreach($applications as $application)
                                        <div class="job-list">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="{{$application->picture}}" class="img-fluid" alt="Employer Logo">
                                                </a>
                                            </div>
                                            <div class="body">
                                                <div class="content">
                                                    <h4><a href="{{route('job.details',["id"=>$application->id])}}">{{$application->title}}</a></h4>
                                                    <div class="info">
                                                        <span class="company"><a href="#"><i data-feather="briefcase"></i>{{$application->name}}</a></span>
                                                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>{{$application->location}}</a></span>
                                                        <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>{{$application->type}}</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
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
