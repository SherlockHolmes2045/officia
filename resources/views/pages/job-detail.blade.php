@extends('includes.header')
@section('content')


    @guest
        <form action="{{route("job.apply",['id'=>$job->id])}}" method="POST" id="apply-job">
            @csrf
        </form>
        @endguest
    @auth
    @if(count($application)!=0)
    <form action="{{route("job.unapply",['id'=>$job->id])}}" method="POST" id="apply-job">
        @csrf
    </form>
    @else
        <form action="{{route("job.apply",['id'=>$job->id])}}" method="POST" id="apply-job">
            @csrf
        </form>
        @endif
    @endauth
    <!-- Candidates Details -->
    <div class="alice-bg padding-top-60 section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="job-listing-details">
                        <div class="job-title-and-info">
                            <div class="title">
                                <div class="thumb">
                                    <img src="{{asset('images/job/company-logo-1.png')}}" class="img-fluid" alt="">
                                </div>
                                <div class="title-body">
                                    <h4>{{$job->title}}</h4>
                                    <div class="info">
                                        {{Session::get('url.intended') == null ? "null":"else"}}
                                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>{{$job->location}}</a></span>
                                        <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>{{$job->type}}</a></span>
                                    </div>
                                </div>
                            </div>
                            @guest
                            <div class="buttons">
                                <a class="save" href="#" style="/*color: #ff8fa6;border-color: #ff8fa6;*/"><i data-feather="heart"></i>Save Job</a>
                                <a class="apply" href="#"  onclick="event.preventDefault();
                                                     document.getElementById('apply-job').submit();">Apply</a>
                            </div>
                                @endguest

                            @auth
                                @if(auth()->user()->account_type == "candidate")
                                <div class="buttons">
                                    <a class="save" href="#" style="/*color: #ff8fa6;border-color: #ff8fa6;*/"><i data-feather="heart"></i>Save Job</a>

                                    @if(count($application)!=0)
                                        <a class="apply" href="#"  onclick="event.preventDefault();
                                                     document.getElementById('apply-job').submit();">Unapply</a>
                                        @else
                                        <a class="apply" href="#"  onclick="event.preventDefault();
                                                     document.getElementById('apply-job').submit();">Apply</a>
                                    @endif
                                </div>
                                    @endif
                                @endauth

                        </div>
                        <div class="details-information section-padding-60">
                            <div class="row">
                                <div class="col-xl-7 col-lg-8">
                                    <div class="description details-section">
                                        <h4><i data-feather="align-left"></i>Job Description</h4>
                                        {!! $job->description !!}
                                    </div>
                                    <div class="responsibilities  details-section">
                                        <h4><i data-feather="zap"></i>JOB CATEGORY</h4>
                                        <div class="skill-and-profile">
                                            <div class="skill ">
                                                @foreach($job->categories as $category)
                                                <a href="#">{{$category}}</a>
                                                    @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="edication-and-experience details-section">
                                        <h4><i data-feather="book"></i>JOB SKILLS</h4>
                                        <div class="skill-and-profile">
                                            <div class="skill">
                                                @foreach($job->skills as $skill)
                                                    <a href="#">{{$skill}}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-apply-buttons justify-content-center">
                                        <a href="#" class="apply"  onclick="event.preventDefault();
                                                     document.getElementById('apply-job').submit();">Apply</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 offset-xl-1 col-lg-4">
                                    <div class="information-and-share">
                                        <div class="job-summary">
                                            <h4>Job Summary</h4>
                                            <ul>
                                                <li><span>Published on:</span> {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  $job->created_at)->format('F j, Y')}}</li>
                                                <li><span>Employment Status:</span> {{$job->type}}</li>
                                                <li><span>Experience:</span> {{$job->experience}}</li>
                                                <li><span>Job Location:</span> {{$job->location == null ? "Unknow ": $job->location}}</li>
                                                <li><span>Average Salary:</span> {{$job->renumeration == null ? "Unknow" : $job->renumeration." FCFA"}}</li>
                                                <li><span>Gender:</span> {{$job->gender}}</li>
                                                <li><span>Application Deadline:</span>{{\Carbon\Carbon::createFromFormat('Y-m-d',  $job->deadline)->format('F j, Y')}}</li>
                                            </ul>
                                        </div>
                                        <div class="share-job-post">
                                            <span class="share"><i class="fas fa-share-alt"></i>Share:</span>
                                            <a href="{{$facebook}}"><i class="fab fa-facebook-f"></i></a>
                                            <a href="{{$twitter}}"><i class="fab fa-twitter"></i></a>
                                            <a href="{{$linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="{{$whatsapp}}"><i class="fab fa-whatsapp"></i></a>
                                        </div>
                                        <div class="buttons">
                                            <a href="#" class="button print"><i data-feather="printer"></i>Print Job</a>
                                            <a href="#" class="button report"><i data-feather="flag"></i>Report Job</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-7 col-lg-8">
                                <div class="company-information details-section">
                                    <h4><i data-feather="briefcase"></i>About the Company</h4>
                                    <ul>
                                        <li><span>Company Name:</span> The Oreo Company Ltd.</li>
                                        <li><span>Address:</span> Queens, NY 11375 USA</li>
                                        <li><span>Website:</span> <a href="#">www.theoreoltd.com</a></li>
                                        <li><span>Company Profile:</span></li>
                                        <li>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum looked up one of the more obscure Latin words, consectetur.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Candidates Details End -->

    <!-- Jobs -->
    <div class="section-padding-bottom alice-bg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-header section-header-2 section-header-with-right-content">
                        <h2>Simillar Jobs</h2>
                        <a href="#" class="header-right">+ Browse All Jobs</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="job-list">
                        <div class="thumb">
                            <a href="#">
                                <img src="{{asset('images/job/company-logo-1.png')}}" class="img-fluid" alt="">
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
                                    <a href="#" class="button">Apply Now</a>
                                    <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                </div>
                                <p class="deadline">Deadline: Oct 31,  2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="thumb">
                            <a href="#">
                                <img src="{{asset('images/job/company-logo-2.png')}}" class="img-fluid" alt="">
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
                                    <a href="#" class="button">Apply Now</a>
                                    <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                </div>
                                <p class="deadline">Deadline: Oct 31,  2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="thumb">
                            <a href="#">
                                <img src="{{asset('images/job/company-logo-8.png')}}" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <div class="content">
                                <h4><a href="job-details.html">Restaurant Team Member - Crew </a></h4>
                                <div class="info">
                                    <span class="company"><a href="#"><i data-feather="briefcase"></i>Geologitic</a></span>
                                    <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                                    <span class="job-type temporary"><a href="#"><i data-feather="clock"></i>Temporary</a></span>
                                </div>
                            </div>
                            <div class="more">
                                <div class="buttons">
                                    <a href="#" class="button">Apply Now</a>
                                    <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                </div>
                                <p class="deadline">Deadline: Oct 31,  2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="thumb">
                            <a href="#">
                                <img src="{{asset('images/job/company-logo-9.png')}}" class="img-fluid" alt="">
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
                                    <a href="#" class="button">Apply Now</a>
                                    <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                </div>
                                <p class="deadline">Deadline: Oct 31,  2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="thumb">
                            <a href="#">
                                <img src="{{asset('images/job/company-logo-3.png')}}" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <div class="content">
                                <h4><a href="job-details.html">Land Development Marketer</a></h4>
                                <div class="info">
                                    <span class="company"><a href="#"><i data-feather="briefcase"></i>Realouse</a></span>
                                    <span class="office-location"><a href="#"><i data-feather="map-pin"></i>Washington, D.C.</a></span>
                                    <span class="job-type freelance"><a href="#"><i data-feather="clock"></i>Freelance</a></span>
                                </div>
                            </div>
                            <div class="more">
                                <div class="buttons">
                                    <a href="#" class="button">Apply Now</a>
                                    <a href="#" class="favourite"><i data-feather="heart"></i></a>
                                </div>
                                <p class="deadline">Deadline: Oct 31,  2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jobs End -->

@endsection
@section('scripts')
    <script src="{{ asset('js/share.js') }}"></script>
@endsection
