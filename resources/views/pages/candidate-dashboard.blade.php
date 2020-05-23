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
                            <div class="dashboard-section user-statistic-block">
                                <div class="user-statistic">
                                    <i data-feather="pie-chart"></i>
                                    <h3>132</h3>
                                    <span>Companies Viewed</span>
                                </div>
                                <div class="user-statistic">
                                    <i data-feather="briefcase"></i>
                                    <h3>12</h3>
                                    <span>Applied Jobs</span>
                                </div>
                                <div class="user-statistic">
                                    <i data-feather="heart"></i>
                                    <h3>32</h3>
                                    <span>Favourite Jobs</span>
                                </div>
                            </div>
                            <div class="dashboard-section dashboard-view-chart">
                                <canvas id="view-chart" width="400" height="200"></canvas>
                            </div>
                            <div class="dashboard-section dashboard-recent-activity">
                                <h4 class="title">Recent Activity</h4>
                                <div class="activity-list">
                                    <i class="fas fa-bolt"></i>
                                    <div class="content">
                                        <h5>Your Resume Updated!</h5>
                                        <span class="time">5 hours ago</span>
                                    </div>
                                    <div class="close-activity">
                                        <i class="fas fa-times"></i>
                                    </div>
                                </div>
                                <div class="activity-list">
                                    <i class="fas fa-arrow-circle-down"></i>
                                    <div class="content">
                                        <h5>Someone downloaded your resume.</h5>
                                        <span class="time">11 hours ago</span>
                                    </div>
                                    <div class="close-activity">
                                        <i class="fas fa-times"></i>
                                    </div>
                                </div>
                                <div class="activity-list">
                                    <i class="fas fa-check-square"></i>
                                    <div class="content">
                                        <h5>You applied for Project Manager @homeland</h5>
                                        <span class="time">11 hours ago</span>
                                    </div>
                                    <div class="close-activity">
                                        <i class="fas fa-times"></i>
                                    </div>
                                </div>
                                <div class="activity-list">
                                    <i class="fas fa-check-square"></i>
                                    <div class="content">
                                        <h5>You applied for Project Manager @homeland</h5>
                                        <span class="time">5 hours ago</span>
                                    </div>
                                    <div class="close-activity">
                                        <i class="fas fa-times"></i>
                                    </div>
                                </div>
                                <div class="activity-list">
                                    <i class="fas fa-user"></i>
                                    <div class="content">
                                        <h5>You changed password successfuly</h5>
                                        <span class="time">2 days ago</span>
                                    </div>
                                    <div class="close-activity">
                                        <i class="fas fa-times"></i>
                                    </div>
                                </div>
                                <div class="activity-list">
                                    <i class="fas fa-heart"></i>
                                    <div class="content">
                                        <h5>Someone bookmarked you</h5>
                                        <span class="time">3 days ago</span>
                                    </div>
                                    <div class="close-activity">
                                        <i class="fas fa-times"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-sidebar">
                            <div class="user-info">
                                <div class="thumb">
                                    <img src="{{asset('dashboard/images/user-1.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="user-body">
                                    <h5>Lula Wallace</h5>
                                    <span>@username</span>
                                </div>
                            </div>
                            <div class="profile-progress">
                                <div class="progress-item">
                                    <div class="progress-head">
                                        <p class="progress-on">Profile</p>
                                    </div>
                                    <div class="progress-body">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                                 aria-valuemax="100" style="width: 0;"></div>
                                        </div>
                                        <p class="progress-to">70%</p>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-menu">
                                <ul>
                                    <li class="active"><i class="fas fa-home"></i><a href="dashboard.html">Dashboard</a></li>
                                    <li><i class="fas fa-user"></i><a href="dashboard-edit-profile.html">Edit Profile</a></li>
                                    <li><i class="fas fa-file-alt"></i><a href="resume.html">Resume</a></li>
                                    <li><i class="fas fa-edit"></i><a href="edit-resume.html">Edit Resume</a></li>
                                    <li><i class="fas fa-heart"></i><a href="dashboard-bookmark.html">Bookmarked</a></li>
                                    <li><i class="fas fa-check-square"></i><a href="dashboard-applied.html">Applied Job</a></li>
                                    <li><i class="fas fa-comment"></i><a href="dashboard-message.html">Message</a></li>
                                    <li><i class="fas fa-calculator"></i><a href="dashboard-pricing.html">Pricing Plans</a></li>
                                </ul>
                                <ul class="delete">
                                    <li><i class="fas fa-power-off"></i><a href="#">Logout</a></li>
                                    <li><i class="fas fa-trash-alt"></i><a href="#" data-toggle="modal" data-target="#modal-delete">Delete
                                            Profile</a></li>
                                </ul>
                                <!-- Modal -->
                                <div class="modal fade modal-delete" id="modal-delete" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <h4><i data-feather="trash-2"></i>Delete Account</h4>
                                                <p>Are you sure! You want to delete your profile. This can't be undone!</p>
                                                <form action="#">
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" placeholder="Enter password">
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="delete-button">Save Update</button>
                                                        <button class="">Cancel</button>
                                                    </div>
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input" checked="">
                                                        <label class="form-check-label">You accepts our <a href="#">Terms and Conditions</a> and <a
                                                                href="#">Privacy Policy</a></label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{asset('dashboard/js/dashboard.js')}}"></script>
    <script src="{{asset('dashboard/js/datePicker.js')}}"></script>
    <script src="{{asset('dashboard/js/upload-input.js')}}"></script>
@endsection
