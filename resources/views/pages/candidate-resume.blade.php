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
                        <h1>Resume</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Resume</li>
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
                            <div class="download-resume dashboard-section">
                                <a href="#">Download CV<i data-feather="download"></i></a>
                            </div>
                            <div class="skill-and-profile dashboard-section">
                                <div class="skill">
                                    <label>Skills:</label>
                                   @if(count($details->skills) == 0 )
                                       <span> You have not specified your skills yet</span>
                                    @else
                                       @foreach($details->skills as $item)
                                           <a href="#">{{$item}}</a>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="social-profile">
                                    <label>Social:</label>
                                    <a href="{{$details->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{$details->twitter}}"><i class="fab fa-twitter"></i></a>
                                    <a href="{{$details->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="{{$details->dribble}}"><i class="fab fa-dribbble"></i></a>
                                    <a href="{{$details->github}}"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                            <div class="about-details details-section dashboard-section">
                                <h4><i data-feather="align-left"></i>About Me</h4>
                                @if($details->about == "")
                                    <p>Nothing to show for now</p>
                                @else
                                    {!! $details->about !!}
                                @endif
                                <div class="information-and-contact">
                                    <div class="information">
                                        <h4>Information</h4>
                                        <ul>
                                            <li><span>Category:</span> Design & Creative</li>
                                            <li><span>Location:</span> {{$details->location == ""? "Empty" : $details->location}}</li>
                                            <li><span>Status:</span> {{$details->job_type == "" ? "Empty": $details->job_type}}</li>
                                            <li><span>Experience:</span> {{$details->experience == "" ? "Unknow": $details->experience}} year(s)</li>
                                            <li><span>Gender:</span> {{$details->gender == "" ? "Empty":$details->gender}}</li>
                                            <li><span>Age:</span> 24 Year(s)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="experience dashboard-section details-section">
                                <h4><i data-feather="briefcase"></i>Work Experiance</h4>
                                <div class="experience-section">
                                    <span class="service-year">2016 - Present</span>
                                    <h5>Lead UI/UX Designer<span>@ Codepassengers LTD</span></h5>
                                    <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more
                                        obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                                </div>
                                <div class="experience-section">
                                    <span class="service-year">2012 - 2016</span>
                                    <h5>Former Graphic Designer<span>@ Graphicreeeo CO</span></h5>
                                    <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more
                                        obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                                </div>
                            </div>
                            <div class="personal-information dashboard-section last-child details-section">
                                <h4><i data-feather="user-plus"></i>Personal Deatils</h4>
                                <ul>
                                    <li><span>Full Name:</span> {{auth()->user()->name}}</li>
                                    <li><span>Date of Birth:</span> 22/08/1992</li>
                                    <li><span>Nationality:</span> American</li>
                                    <li><span>Sex:</span>{{$details->gender == "" ? "Empty":$details->gender}} </li>
                                    <li><span>Address:</span> {{$details->location == ""? "Empty" : $details->location}}</li>
                                </ul>
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
