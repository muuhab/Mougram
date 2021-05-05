<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top " >
  <div class="container">
    <a class="navbar-brand" href="{{route('dashboard')}}"><i class="fas fa-camera-retro text-white"></i> {{config('app.name')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="ml-auto navbar-nav">
        <li class="nav-item">
          <form>
            <div class="input-group ">
              <input class="form-control py-2 border-right-0 border bg-light" type="search" placeholder="Search" size="40rem" id="example-search-input">
              <span class="input-group-append">
                <button type="submit" class="input-group-text bg-light text-secondary"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
        </li>
        
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item {{Request::path()=='dashboard' ? 'active':''}}">
        <a class="nav-link" href="{{route('dashboard')}}">Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::path()=='account' ? 'active':''}}" href="{{route('account')}}">Account</a>
        </li>
        <li class="nav-item">
          @guest
          <a class="nav-link " href="{{route('login')}}">Login</a>
          @else
          <a class="nav-link" href="{{route('logout')}}">Logout</a>

          @endguest

        </li>
      </ul>
    </div>
  </div>
</nav>