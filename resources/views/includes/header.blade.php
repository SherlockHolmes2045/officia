<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Oficiona</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- External Css -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/et-line.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plyr.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/flag.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/jquery.nstSlider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/hopscotch.css')}}">
    <link rel="stylesheet" href="{{asset('css/smart_wizard.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/smart_wizard_theme_arrows.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/quill.bubble.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/quill.snow.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/simplemde.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/tags/bootstrap-tagsinput.css')}}">
    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/icon-114x114.png')}}">
    <style>
        .bootstrap-tagsinput .tag {
            font-weight: 400;
            text-align: left;
            font-family: "Roboto", sans-serif;
            font-size: 1.4rem;
            line-height: 1.85;
            -webkit-box-direction: reverse;
            box-sizing: border-box;
            text-decoration: none;
            background-color: transparent;
            transition: all .3s ease;
            display: inline-block;
            color: inherit;
            outline: none;
            border: 1px solid rgba(0, 0, 0, 0.05);
            padding: 3px 15px;
            margin-right: 5px;
            border-radius: 3px;
            background-image: linear-gradient(to right, #f9fbfe, #ffffff);
        }
    </style>

    <!--[if lt IE 9]>
    <script src="{{asset('assets/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->

</head>
<body>

@include('includes.navbar')
@include('includes.banner-search')
@include('includes.category')
@yield('jobs')
@yield('companies')
@yield('content')
@if(Route::currentRouteName() == "welcome")
    <!-- Testimonial -->
    <div class="section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial">
                        <div class="testimonial-quote">
                            <img src="{{asset('images/testimonial/quote.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="testimonial-for">
                            <div class="testimonial-item">
                                <p>“On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charmsto send our denim shorts wardrob One”</p>
                                <h5>Maria Marlin @ Google</h5>
                            </div>
                            <div class="testimonial-item">
                                <p>“On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charmsto send our denim shorts wardrob Two”</p>
                                <h5>Laura Harper @ Amazon</h5>
                            </div>
                            <div class="testimonial-item">
                                <p>“On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charmsto send our denim shorts wardrob Three”</p>
                                <h5>John Doe @ Envato</h5>
                            </div>
                            <div class="testimonial-item">
                                <p>“On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charmsto send our denim shorts wardrob Four”</p>
                                <h5>Jenny Doe @ Dribbble</h5>
                            </div>
                            <div class="testimonial-item">
                                <p>“On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charmsto send our denim shorts wardrob Five”</p>
                                <h5>Michle Clark @ Apple</h5>
                            </div>
                            <div class="testimonial-item">
                                <p>“On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charmsto send our denim shorts wardrob Two”</p>
                                <h5>Laura Harper @ Amazon</h5>
                            </div>
                            <div class="testimonial-item">
                                <p>“On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charmsto send our denim shorts wardrob Three”</p>
                                <h5>John Doe @ Envato</h5>
                            </div>
                        </div>
                        <div class="testimonial-nav">
                            <div class="commenter-thumb">
                                <img src="{{asset('images/testimonial/thumb-1.jpg')}}" class="img-fluid commenter" alt="">
                                <img src="{{asset('images/testimonial/1.png')}}" class="comapnyLogo" alt="">
                            </div>
                            <div class="commenter-thumb">
                                <img src="{{asset('images/testimonial/thumb-2.jpg')}}" class="img-fluid commenter" alt="">
                                <img src="{{asset('images/testimonial/2.png')}}" class="comapnyLogo" alt="">
                            </div>
                            <div class="commenter-thumb">
                                <img src="{{asset('images/testimonial/thumb-3.jpg')}}" class="img-fluid commenter" alt="">
                                <img src="{{asset('images/testimonial/3.png')}}" class="comapnyLogo" alt="">
                            </div>
                            <div class="commenter-thumb">
                                <img src="{{asset('images/testimonial/thumb-4.jpg')}}" class="img-fluid commenter" alt="">
                                <img src="{{asset('images/testimonial/4.png')}}" class="comapnyLogo" alt="">
                            </div>
                            <div class="commenter-thumb">
                                <img src="{{asset('images/testimonial/thumb-5.jpg')}}" class="img-fluid commenter" alt="">
                                <img src="{{asset('images/testimonial/5.png')}}" class="comapnyLogo" alt="">
                            </div>
                            <div class="commenter-thumb">
                                <img src="{{asset('images/testimonial/thumb-2.jpg')}}" class="img-fluid commenter" alt="">
                                <img src="{{asset('images/testimonial/2.png')}}" class="comapnyLogo" alt="">
                            </div>
                            <div class="commenter-thumb">
                                <img src="{{asset('images/testimonial/thumb-3.jpg')}}" class="img-fluid commenter" alt="">
                                <img src="{{asset('images/testimonial/3.png')}}" class="comapnyLogo" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Career Advice -->
    <div class="padding-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-header">
                        <h2>Career Advice</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <article class="blog-grid">
                        <div class="body">
                            <span class="date">22 <span>Dec</span></span>
                            <h3><a href="blog-details.html">Who chooses to enjoy a pleasure</a></h3>
                            <p>Combined with a handful of model sentence structures, to generate lorem Ipsum which</p>
                        </div>
                        <div class="info">
                            <span class="author"><a href="#"><i data-feather="user"></i>Robert Karlos</a></span>
                            <span class="comments"><a href="#"><i data-feather="message-circle"></i>42</a></span>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="blog-grid">
                        <div class="body">
                            <span class="date">22 <span>Dec</span></span>
                            <h3><a href="blog-details.html">Who chooses to enjoy a pleasure</a></h3>
                            <p>Combined with a handful of model sentence structures, to generate lorem Ipsum which</p>
                        </div>
                        <div class="info">
                            <span class="author"><a href="#"><i data-feather="user"></i>Robert Karlos</a></span>
                            <span class="comments"><a href="#"><i data-feather="message-circle"></i>42</a></span>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="blog-grid">
                        <div class="body">
                            <span class="date">22 <span>Dec</span></span>
                            <h3><a href="blog-details.html">Who chooses to enjoy a pleasure</a></h3>
                            <p>Combined with a handful of model sentence structures, to generate lorem Ipsum which</p>
                        </div>
                        <div class="info">
                            <span class="author"><a href="#"><i data-feather="user"></i>Robert Karlos</a></span>
                            <span class="comments"><a href="#"><i data-feather="message-circle"></i>42</a></span>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- Career Advice End -->

    <!-- App Download -->
    <div class="padding-top-90 padding-bottom-90 app-download-bg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="app-download">
                        <h2>Get Oficiona App</h2>
                        <p>Searching for jobs never been that easy. Now you can find job matched your career expectation</p>
                        <div class="app-download-button">
                            <a href="#" class="apple-app">Apple Store</a>
                            <a href="#" class="android-app">Google Play</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- App Download End -->

@endif
@include('includes.footer')
@include('includes.scripts')
@yield('scripts')
<script>

    $('#language').on('change', function() {
        if(this.value === "English"){
            window.location.href = "/locale/en";
        }else{
            window.location.href = "/locale/fr";
        }
    });
    $('#user-options').on('change',function(){
        console.log(this.value);
        if(this.value ==="Logout"){
            $("#logout").submit();
        }
    });

    var tour;
    $(document).ready(function () {
        tour = {
            id: "demo-tour",
            showPrevButton: !0,
            steps: [{
                title: "MegaMenu",
                content: "Clean Mega menu ",
                target: "head",
                placement: "bottom"
            }, {
                title: "search bar",
                content: "Search here for anything",
                target: "searchbox",
                placement: "bottom"
            }, {
                title: "Create your Tour",
                content: "Create new tour easily",
                target: "create-tour",
                placement: "top"
            }]
        };


        var options = {
            modules: {
                syntax: !0,
                toolbar: [[{
                    font: []
                }, {
                    size: []
                }], ["bold", "italic", "underline", "strike"], [{
                    color: []
                }, {
                    background: []
                }], [{
                    script: "super"
                }, {
                    script: "sub"
                }], [{
                    header: "1"
                }, {
                    header: "2"
                }, "blockquote", "code-block"], [{
                    list: "ordered"
                }, {
                    list: "bullet"
                }, {
                    indent: "-1"
                }, {
                    indent: "+1"
                }], ["direction", {
                    align: []
                }], ["link", "image", "video", "formula"], ["clean"]]
            },
            theme: 'snow'
        };

        //var editor = new Quill('#mytext',options);
        //hopscotch.startTour(tour);
    });

</script>
</body>
</html>
