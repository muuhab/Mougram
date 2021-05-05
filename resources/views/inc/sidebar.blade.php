<div class="col-2  sidenav d-md-block d-none bg-dark   " >
    <div class=" p-3 mb-3 username  bg-light  ">
        <img class="rounded-circle" src="{{$user->profile_image}}">
        <p class="font-weight-bold d-inline">{{ucfirst($user->first_name)}} {{ucfirst($user->last_name)}}</p>
    </div>
    <ul class="side-list">
        <li>
        <a href="{{route('dashboard')}}"><i class="fas fa-rss-square  pr-4"></i> Feed</a>
        </li>
        <li>
        <a href="#"><i class="fas fa-photo-video  pr-3"></i> Photo</a>
        </li>
        <li>
        <a href="#"><i class="fas fa-calendar-week  pr-4"></i> Event</a>
        </li>
        <li>
        <a href="#"><i class="fas fa-user-friends  pr-3"></i> Friends</a>
        </li>
    </ul>
    
</div>