<ul>
    <li @if(Route::currentRouteName() == "candidate.dashboard") class="active" @endif><i class="fas fa-home"></i><a href="{{route('candidate.dashboard')}}">Dashboard</a></li>
    <li @if(Route::currentRouteName() == "candidate.profile") class="active" @endif><i class="fas fa-user"></i><a href="{{route('candidate.profile')}}">Edit Profile</a></li>
    <li @if(Route::currentRouteName() == "candidate.resume") class="active" @endif><i class="fas fa-file-alt"></i><a href="{{route('candidate.resume')}}">Resume</a></li>
    <li><i class="fas fa-edit"></i><a href="edit-resume.html">Edit Resume</a></li>
    <li @if(Route::currentRouteName() == "candidate.bookmark")class="active"@endif><i class="fas fa-heart"></i><a href="{{route('candidate.bookmark')}}">Bookmarked</a></li>
    <li @if(Route::currentRouteName() == "candidate.applications")class="active"@endif><i class="fas fa-check-square"></i><a href="{{route('candidate.applications')}}">Applied Job</a></li>
    <li><i class="fas fa-comment"></i><a href="dashboard-message.html">Message</a></li>
    <li><i class="fas fa-calculator"></i><a href="dashboard-pricing.html">Pricing Plans</a></li>
</ul>
<ul class="delete">
    <li><i class="fas fa-power-off"></i><a href="#">Logout</a></li>
</ul>
