<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="{{route('dashboard')}}">{{config('app.name')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item {{Request::path()=='dashboard' ? 'active':''}}">
        <a class="nav-link" href="{{route('dashboard')}}">Home
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link {{Request::path()=='account' ? 'active':''}}" href="{{route('account')}}">Account</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>