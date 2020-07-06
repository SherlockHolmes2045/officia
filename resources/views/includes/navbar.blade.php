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
                                <div class="dropdown header-top-account">
                                    <a href="#" class="account-button">My Account</a>
                                    <div class="account-card">
                                        <div class="header-top-account-info">
                                            <a href="#" class="account-thumb">
                                                <img src="{{asset('storage/'.auth()->user()->picture)}}" class="img-fluid" alt="User profile">
                                            </a>
                                            <div class="account-body">
                                                <h5><a href="#">{{auth()->user()->name}}</a></h5>
                                                <span class="mail">{{auth()->user()->email}}</span>
                                            </div>
                                        </div>
                                        <ul class="account-item-list">
                                            <li><a href="#"><span class="ti-user"></span>Account</a></li>
                                            <li><a href="#" onclick="event.preventDefault();
                                                    document.getElementById('logout').submit();"><span class="ti-power-off"></span>Log Out</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <form action="{{route("logout")}}" method="POST" id="logout">
                                    @csrf
                                </form>
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
                            <li class="menu-item"><a title="Candidates" href="#">Candidates</a></li>
                            <li class="menu-item"><a title="" href="#">Employers</a></li>
                            @auth
                                @if(auth()->user()->account_type == "candidate")
                            <li class="menu-item"><a href="{{route('candidate.dashboard')}}">Dashboard</a></li>
                                @else
                                    <li class="menu-item"><a href="{{route('employer.dashboard')}}">Dashboard</a></li>
                                @endif
                            @endauth
                            <li class="menu-item"><a href="contact.html">Contact Us</a></li>

                            <li class="menu-item post-job"><a href="{{route('job.showform')}}"><i class="fas fa-plus"></i>Post a Job</a></li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
