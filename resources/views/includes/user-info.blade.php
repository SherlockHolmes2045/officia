<div class="user-info">
    <div class="thumb">
        <img src="{{asset('storage/'.auth()->user()->picture)}}" class="img-fluid" alt="User Profile">
    </div>
    <div class="user-body">
        <h5>{{auth()->user()->name}}</h5>
        <span>{{$details->title}}</span>
    </div>
</div>
<div class="profile-progress">
    <div class="progress-item">
        <div class="progress-head">
            <p class="progress-on">Profile</p>
        </div>
        <div class="progress-body">
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$percentage}}" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
            </div>
            <p class="progress-to">{{$percentage}}%</p>
        </div>
    </div>
</div>
