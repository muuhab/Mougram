<div class="col-2 bg-white sidenav d-md-block d-none  ">
    <div class=" p-3 m-3  bg-light username ">
        <img class="rounded-circle" src="h{{$user->profile_image}}">
        <p class="font-weight-bold d-inline">{{$user->first_name}} {{$user->last_name}}</p>
    </div>
    <div class="list-group">
        <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action border-0 "><i class="fas fa-rss-square text-primary pr-4"></i> Feed</a>
        <a href="#" class="list-group-item list-group-item-action border-0 "><i class="fas fa-photo-video text-primary pr-3"></i> Photo</a>
        <a href="#" class="list-group-item list-group-item-action border-0 "><i class="fas fa-calendar-week text-primary pr-4"></i> Event</a>
        <a href="#" class="list-group-item list-group-item-action border-0 "><i class="fas fa-user-friends text-primary pr-3"></i> Friends</a>
      </div>
</div>