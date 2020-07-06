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
                            <div class="dashboard-section user-statistic-block">
                                <div class="user-statistic">
                                    <i data-feather="pie-chart"></i>
                                    <h3>132</h3>
                                    <span>Companies Viewed</span>
                                </div>
                                <div class="user-statistic">
                                    <i data-feather="briefcase"></i>
                                    <h3>{{count($applications)}}</h3>
                                    <span>Applied Jobs</span>
                                </div>
                                <div class="user-statistic">
                                    <i data-feather="heart"></i>
                                    <h3>{{count($fav)}}</h3>
                                    <span>Favourite Jobs</span>
                                </div>
                            </div>
                            <div class="dashboard-section dashboard-view-chart">
                                <canvas id="view-chart" width="400" height="200"></canvas>
                            </div>
                            <div class="dashboard-section dashboard-recent-activity">
                                <h4 class="title">Recent Activity</h4>
                                @foreach($notifications as $notification)
                                <div class="activity-list">
                                    <i class="fas fa-bolt"></i>
                                    <div class="content">
                                        <h5>{{$notification->data["message"]}}</h5>
                                        <span class="time">{{$notification->created_at->diffForHumans(Carbon\Carbon::now())}}</span>
                                    </div>
                                    <div class="close-activity">
                                        <i class="fas fa-times"></i>
                                    </div>
                                </div>
                                @endforeach
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
