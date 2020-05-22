<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- External Css -->
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('css/et-line.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/plyr.css')}}" />
    <link rel="stylesheet" href="{{asset('css/flag.css')}}" />
    <link rel="stylesheet" href="{{asset('css/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/jquery.nstSlider.min.css')}}" />

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/icon-114x114.png')}}">


    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.min.js')}}" defer></script>
    <script src="{{asset('js/respond.min.js')}}" defer></script>
    <![endif]-->
</head>
<body>

    <header class="header-2 access-page-nav">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-top">
                        <div class="logo-area">
                            <a href="{{route('welcome')}}"><img src="{{asset('images/logo-2.png')}}" alt=""></a>
                        </div>
                        @if(Route::currentRouteName() == "register" || Route::currentRouteName() == "login" )
                        <div class="top-nav">
                            @if (Route::currentRouteName() == "register")
                            <a href="{{route('login')}}" class="account-page-link">@lang('authentification.login')</a>
                                @endif
                            @if(Route::currentRouteName() == "login")
                                    <a href="{{route('register')}}" class="account-page-link">@lang('authentification.register')</a>
                                @endif
                        </div>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="padding-top-90 padding-bottom-90 access-page-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="access-form">
                        @if(Route::currentRouteName() == "register" || Route::currentRouteName() == "login" )
                        <div class="form-header">
                            @if(Route::currentRouteName() == "login")
                            <h5><i data-feather="user"></i>@lang('authentification.login')</h5>
                                @endif
                            @if(Route::currentRouteName() == "register")
                                    <h5><i data-feather="edit"></i>@lang('authentification.register')</h5>
                                @endif
                        </div>
                        @endif
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/feather.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('js/jquery.nstSlider.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/visible.js')}}"></script>
    <script src="{{asset('js/jquery.countTo.js')}}"></script>
    <script src="{{asset('js/chart.js')}}"></script>
    <script src="{{asset('js/plyr.js')}}"></script>
    <script src="{{asset('js/tinymce.min.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>

    <script src="{{asset('js/custom.js')}}"></script>

</body>
</html>
