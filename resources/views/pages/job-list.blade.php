@extends('includes.header')

@section('content')

    <!-- Breadcrumb -->
    <div class="alice-bg padding-top-70 padding-bottom-70">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="breadcrumb-area">
                        <h1>Job Listing</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Job Listing</li>
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


    <!-- Job Listing -->
    <div class="alice-bg section-padding-bottom">
        <div class="container">
            <div class="row no-gutters">
                <div class="col">
                    <div class="job-listing-container">
                        <div class="filtered-job-listing-wrapper">
                            <div class="job-view-controller-wrapper">
                                <div class="job-view-controller">
                                    <div class="controller list active">
                                        <i data-feather="menu"></i>
                                    </div>
                                    <div class="controller grid">
                                        <i data-feather="grid"></i>
                                    </div>
                                    <div class="job-view-filter">
                                        <select class="selectpicker">
                                            <option value="" selected>Most Recent</option>
                                            <option value="california">Top Rated</option>
                                            <option value="las-vegas">Most Popular</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="showing-number">
                                    <span>Showing 1–12 of {{count($jobs)}} Jobs</span>
                                </div>
                            </div>
                            <div class="job-filter-result">

                                @foreach($jobs as $job)
                                    <div class="job-list">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="{{$job->picture}}" class="img-fluid" alt="Employer Logo">
                                            </a>
                                        </div>
                                        <div class="body">
                                            <div class="content">
                                                <h4><a href="{{route('job.details',['id' => $job->id])}}">{{$job->title}}</a></h4>
                                                <div class="info">
                                                    <span class="company"><a href="#"><i data-feather="briefcase"></i>{{$job->name}}</a></span>
                                                    <span class="office-location"><a href="#"><i data-feather="map-pin"></i>{{$job->location}}</a></span>
                                                    <span class="job-type temporary"><a href="#"><i data-feather="clock"></i>{{$job->type}}</a></span>
                                                </div>
                                            </div>
                                            <div class="more">
                                                @auth
                                                    @if(auth()->user()->account_type == "candidate")

                                                        @if($job->candidature_id != null)

                                                        <form action="{{route("job.unapply",['id' => $job->id])}}" method="POST" id="apply-job-{{$job->id}}">
                                                            @csrf
                                                        </form>
                                                        @else
                                                            <form action="{{route("job.apply",['id' => $job->id])}}" method="POST" id="apply-job-{{$job->id}}">
                                                                @csrf
                                                            </form>
                                                            @endif
                                                <div class="buttons">
                                                    <a href="#" class="button" onclick="event.preventDefault();
                                                     document.getElementById('apply-job-{{$job->id}}').submit();">{{$job->candidature_id == null ? "Apply Now":"Unapply"}}</a>
                                                    <a href="{{route('job.fav',['id' => $job->id])}}" class="favourite" @if($job->fav_id !=null)style="color: #ff8fa6;border-color: #ff8fa6;"@endif><i data-feather="heart" style="colors:#ff8fa6;"></i></a>
                                                </div>
                                                        @endif
                                                @endauth
                                                <p class="deadline">Deadline: {{\Carbon\Carbon::createFromFormat('Y-m-d',  $job->deadline)->format('F j, Y')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="job-list">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="images/job/company-logo-9.png" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="body">
                                        <div class="content">
                                            <h4><a href="job-details.html">Nutrition Advisor</a></h4>
                                            <div class="info">
                                                <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                                                <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                                                <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <div class="buttons">
                                                <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                                                <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                            </div>
                                            <p class="deadline">Deadline: Oct 31,  2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="images/job/company-logo-10.png" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="body">
                                        <div class="content">
                                            <h4><a href="job-details.html">UI Designer</a></h4>
                                            <div class="info">
                                                <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                                                <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San Francisco</a></span>
                                                <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part Time</a></span>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <div class="buttons">
                                                <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                                                <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                            </div>
                                            <p class="deadline">Deadline: Oct 31,  2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="images/job/company-logo-3.png" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="body">
                                        <div class="content">
                                            <h4><a href="job-details.html">Land Development Marketer</a></h4>
                                            <div class="info">
                                                <span class="company"><a href="#"><i data-feather="briefcase"></i>Realouse</a></span>
                                                <span class="office-location"><a href="#"><i data-feather="map-pin"></i>Washington</a></span>
                                                <span class="job-type freelance"><a href="#"><i data-feather="clock"></i>Freelance</a></span>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <div class="buttons">
                                                <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                                                <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                            </div>
                                            <p class="deadline">Deadline: Oct 31,  2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="images/job/company-logo-10.png" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="body">
                                        <div class="content">
                                            <h4><a href="job-details.html">UI Designer</a></h4>
                                            <div class="info">
                                                <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                                                <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San Francisco</a></span>
                                                <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part Time</a></span>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <div class="buttons">
                                                <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                                                <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                            </div>
                                            <p class="deadline">Deadline: Oct 31,  2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="images/job/company-logo-3.png" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="body">
                                        <div class="content">
                                            <h4><a href="job-details.html">Land Development Marketer</a></h4>
                                            <div class="info">
                                                <span class="company"><a href="#"><i data-feather="briefcase"></i>Realouse</a></span>
                                                <span class="office-location"><a href="#"><i data-feather="map-pin"></i>Washington</a></span>
                                                <span class="job-type freelance"><a href="#"><i data-feather="clock"></i>Freelance</a></span>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <div class="buttons">
                                                <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                                                <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                            </div>
                                            <p class="deadline">Deadline: Oct 31,  2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="images/job/company-logo-1.png" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="body">
                                        <div class="content">
                                            <h4><a href="job-details.html">Designer Required</a></h4>
                                            <div class="info">
                                                <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                                                <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                                                <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <div class="buttons">
                                                <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                                                <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                            </div>
                                            <p class="deadline">Deadline: Oct 31,  2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="images/job/company-logo-2.png" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="body">
                                        <div class="content">
                                            <h4><a href="job-details.html">Project Manager</a></h4>
                                            <div class="info">
                                                <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                                                <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San Francisco</a></span>
                                                <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part Time</a></span>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <div class="buttons">
                                                <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                                                <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                            </div>
                                            <p class="deadline">Deadline: Oct 31,  2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="images/job/company-logo-8.png" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="body">
                                        <div class="content">
                                            <h4><a href="job-details.html">Restaurant Team Member - Crew </a></h4>
                                            <div class="info">
                                                <span class="company"><a href="#"><i data-feather="briefcase"></i>Geologitic</a></span>
                                                <span class="office-location"><a href="#"><i data-feather="map-pin"></i>Las Vegas</a></span>
                                                <span class="job-type temporary"><a href="#"><i data-feather="clock"></i>Temporary</a></span>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <div class="buttons">
                                                <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                                                <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                            </div>
                                            <p class="deadline">Deadline: Oct 31,  2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="images/job/company-logo-9.png" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="body">
                                        <div class="content">
                                            <h4><a href="job-details.html">Nutrition Advisor</a></h4>
                                            <div class="info">
                                                <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                                                <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                                                <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <div class="buttons">
                                                <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                                                <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                            </div>
                                            <p class="deadline">Deadline: Oct 31,  2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="images/job/company-logo-1.png" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="body">
                                        <div class="content">
                                            <h4><a href="job-details.html">Designer Required</a></h4>
                                            <div class="info">
                                                <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                                                <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                                                <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <div class="buttons">
                                                <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                                                <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                            </div>
                                            <p class="deadline">Deadline: Oct 31,  2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="images/job/company-logo-2.png" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="body">
                                        <div class="content">
                                            <h4><a href="job-details.html">Project Manager</a></h4>
                                            <div class="info">
                                                <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                                                <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San Francisco</a></span>
                                                <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part Time</a></span>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <div class="buttons">
                                                <a href="#" class="button" data-toggle="modal" data-target="#apply-popup-id">Apply Now</a>
                                                <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                            </div>
                                            <p class="deadline">Deadline: Oct 31,  2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="apply-popup">
                                    <div class="modal fade" id="apply-popup-id" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"><i data-feather="edit"></i>APPLY FOR THIS JOB</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="#">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Full Name" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" placeholder="Email Address" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea class="form-control" placeholder="Message"></textarea>
                                                        </div>
                                                        <div class="form-group file-input-wrap">
                                                            <label for="up-cv">
                                                                <input id="up-cv" type="file">
                                                                <i data-feather="upload-cloud"></i>
                                                                <span>Upload your resume <span>(pdf,zip,doc,docx)</span></span>
                                                            </label>
                                                        </div>
                                                        <div class="more-option">
                                                            <input class="custom-radio" type="checkbox" id="radio-4" name="termsandcondition">
                                                            <label for="radio-4">
                                                                <span class="dot"></span> I accept the <a href="#">terms & conditions</a>
                                                            </label>
                                                        </div>
                                                        <button class="button primary-bg btn-block">Apply Now</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-list text-center">
                                {{$jobs->links()}}
                            </div>
                        </div>
                        <div class="job-filter-wrapper">
                            <div class="selected-options same-pad">
                                <div class="selection-title">
                                    <h4>You Selected</h4>
                                    <a href="#">Clear All</a>
                                </div>
                                <ul class="filtered-options">
                                </ul>
                            </div>
                            <div class="job-filter-dropdown same-pad category">
                                <select class="selectpicker">
                                    <option value="" selected>Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->name}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div data-id="job-type" class="job-filter job-type same-pad">
                                <h4 class="option-title">Job Type</h4>
                                <ul>
                                    <li class="full-time"><i data-feather="clock"></i><a href="#" data-attr="Full Time">Full Time</a></li>
                                    <li class="part-time"><i data-feather="clock"></i><a href="#" data-attr="Part Time">Part Time</a></li>
                                    <li class="freelance"><i data-feather="clock"></i><a href="#" data-attr="Freelance">Freelance</a></li>
                                </ul>
                            </div>
                            <div data-id="experience" class="job-filter experience same-pad">
                                <h4 class="option-title">Experience</h4>
                                <ul>
                                    <li><a href="#" data-attr="any">Any</a></li>
                                    <li><a href="#" data-attr="Less than 1 year">Less than 1 year</a></li>
                                    <li><a href="#" data-attr="2 year">2 Year</a></li>
                                    <li><a href="#" data-attr="3 year">3 Year</a></li>
                                    <li><a href="#" data-attr="4 year">4 Year</a></li>
                                    <li><a href="#" data-attr="5 year">5 Year</a></li>
                                    <li><a href="#" data-attr="Over 5 year">Avobe 5 Years</a></li>
                                </ul>
                            </div>
                            <div class="job-filter same-pad">
                                <h4 class="option-title">Salary Range</h4>
                                <div class="price-range-slider">
                                    <div class="nstSlider" data-range_min="0" data-range_max="1000000"
                                         data-cur_min="0"    data-cur_max="150000">
                                        <div class="bar"></div>
                                        <div class="leftGrip"></div>
                                        <div class="rightGrip"></div>
                                        <div class="grip-label">
                                            <span class="leftLabel"></span>
                                            <span class="rightLabel"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-id="post" class="job-filter post same-pad">
                                <h4 class="option-title">Date Posted</h4>
                                <ul>
                                    <li><a href="#" data-attr="Last hour">Last hour</a></li>
                                    <li><a href="#" data-attr="Last 24 hour">Last 24 hour</a></li>
                                    <li><a href="#" data-attr="Last 7 days">Last 7 days</a></li>
                                    <li><a href="#" data-attr="Last 14 days">Last 14 days</a></li>
                                    <li><a href="#" data-attr="Last 30 days">Last 30 days</a></li>
                                </ul>
                            </div>
                            <div data-id="gender" class="job-filter same-pad gender">
                                <h4 class="option-title">Gender</h4>
                                <ul>
                                    <li href="#" data-attr="Any">Any</li>
                                    <li><a href="#" data-attr="Male">Male</a></li>
                                    <li><a href="#" data-attr="Female">Female</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Job Listing End -->
@endsection

@section('scripts')
    @include('scripts.job-list.fav')
    @endsection
