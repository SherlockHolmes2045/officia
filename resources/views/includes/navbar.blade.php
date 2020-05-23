<header class="header-2" id="head">
    <div class="container">
        <div class="row">

            <div class="col">
                <div class="header-top">
                    <div class="logo-area">
                        <a href="index.html"><img src="{{asset('images/logo-2.png')}}" alt=""></a>
                    </div>
                    <div class="header-top-toggler">
                        <div class="header-top-toggler-button"></div>
                    </div>
                    <div class="top-nav">
                        @auth
                        <div class="dropdown header-top-notification">
                            <a href="#" class="notification-button">Notification</a>
                            <div class="notification-card">
                                <div class="notification-head">
                                    <span>Notifications</span>
                                    <a href="#">Mark all as read</a>
                                </div>
                                <div class="notification-body">
                                    @foreach($notifications as $notification)
                                    <a href="home-2.html" class="notification-list">
                                        <i class="fas fa-bolt"></i>
                                        <p>{{$notification->data["message"]}}</p>
                                        <span class="time">{{$notification->created_at->diffForHumans(Carbon\Carbon::now())}}</span>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endauth
                        @guest
                        <div class="dropdown header-top-account login-modals">
                            <button title="Title" type="button"><a href="{{route('login')}}">Login</a></button>
                            <button title="Title" type="button"><a href="{{route('register')}}">Registration</a></button>
                        </div>
                            @endguest
                            @auth

                                <form action="{{route("logout")}}" method="POST" id="logout">
                                    @csrf
                                </form>
                                <select class="selectpicker select-language" id="user-options" data-width="fit">

                                        <option data-content='{{auth()->user()->name}}' selected>{{auth()->user()->name}}</option>
                                        <option  data-content='Logout'>Logout</option>
                                </select>
                                &nbsp;&nbsp;
                                @endauth
                        <select class="selectpicker select-language" id="language" data-width="fit">
                            @if(session()->get('locale') =='fr')
                                <option data-content='<span class="flag-icon flag-icon-gb"></span> English' >English</option>
                                <option  data-content='<span class="flag-icon flag-icon-fr"></span> Français' selected>Français</option>
                            @else
                                <option data-content='<span class="flag-icon flag-icon-gb"></span> English' selected>English</option>
                                <option  data-content='<span class="flag-icon flag-icon-fr"></span> Français' >Français</option>
                            @endif
                        </select>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg cp-nav-2">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="menu-item active"><a title="Home" href="{{route('welcome')}}">Home</a></li>
                            <li class="menu-item"><a href="{{route('job.list')}}" title="Jobs">Jobs</a></li>
                            <li class="menu-item dropdown">
                                <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Candidates</a>
                                <ul  class="dropdown-menu">
                                    <li class="menu-item"><a  href="candidate.html">Candidate Listing</a></li>
                                    <li class="menu-item"><a  href="candidate-details.html">Candidate Details</a></li>
                                    <li class="menu-item"><a  href="add-resume.html">Add Resume</a></li>
                                </ul>
                            </li>
                            <li class="menu-item dropdown">
                                <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Employers</a>
                                <ul  class="dropdown-menu">
                                    <li class="menu-item"><a  href="employer-listing.html">Employer Listing</a></li>
                                    <li class="menu-item"><a  href="employer-details.html">Employer Details</a></li>
                                    <li class="menu-item"><a  href="employer-dashboard-post-job.html">Post a Job</a></li>
                                </ul>
                            </li>
                            <li class="menu-item dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Dashboard</a>
                                <ul  class="dropdown-menu">
                                    <li class="menu-item dropdown">
                                        <a href="#" data-toggle="dropdown"  class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Candidate Dashboard</a>
                                        <ul class="dropdown-menu">
                                            <li class="menu-item"><a  href="dashboard.html">Dashboard</a></li>
                                            <li class="menu-item"><a  href="dashboard-edit-profile.html">Edit Profile</a></li>
                                            <li class="menu-item"><a  href="add-resume.html">Add Resume</a></li>
                                            <li class="menu-item"><a  href="resume.html">Resume</a></li>
                                            <li class="menu-item"><a  href="edit-resume.html">Edit Resume</a></li>
                                            <li class="menu-item"><a  href="dashboard-bookmark.html">Bookmarked</a></li>
                                            <li class="menu-item"><a  href="dashboard-applied.html">Applied</a></li>
                                            <li class="menu-item"><a  href="dashboard-pricing.html">Pricing</a></li>
                                            <li class="menu-item"><a  href="dashboard-message.html">Message</a></li>
                                            <li class="menu-item"><a  href="dashboard-alert.html">Alert</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item dropdown">
                                        <a href="#" data-toggle="dropdown"  class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Employer Dashboard</a>
                                        <ul class="dropdown-menu">
                                            <li class="menu-item"><a href="employer-dashboard.html">Employer Dashboard</a></li>
                                            <li class="menu-item"><a href="employer-dashboard-edit-profile.html">Edit Profile</a></li>
                                            <li class="menu-item"><a href="employer-dashboard-manage-candidate.html">Manage Candidate</a></li>
                                            <li class="menu-item"><a href="employer-dashboard-manage-job.html">Manage Job</a></li>
                                            <li class="menu-item"><a href="employer-dashboard-message.html">Dashboard Message</a></li>
                                            <li class="menu-item"><a href="employer-dashboard-pricing.html">Dashboard Pricing</a></li>
                                            <li class="menu-item"><a href="employer-dashboard-post-job.html">Post Job</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="contact.html">Contact Us</a></li>

                            <li class="menu-item post-job"><a href="{{route('job.showform')}}"><i class="fas fa-plus"></i>Post a Job</a></li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
