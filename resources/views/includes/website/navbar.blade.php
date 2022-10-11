 <nav class="navbar navbar-expand-md navbar-light navbar-bg">
    <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/website-images/logo.svg')}}" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <img src="{{asset('assets/website-images/hamburger.png')}}" alt="">
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Amin Topup
            </a>
            <div class="dropdown-menu dropdown-bg" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{url('privacy')}}">About Us</a>
              <a class="dropdown-item" href="{{url('contact')}}">Contact Us</a>
            </div>                     
          </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Operators <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Help</a>
        </li>
        
          @if(session()->has('UserloginData'))
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="navbar-profile" src="{{asset('assets/website-images/profile.jpg')}}" alt="image">
                <p class="profile-name">Amin</p> 
              </a>
              <div class="dropdown-menu dropdown-bg" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{route('logoutUser')}}">Logout</a>
              </div>
            </li>
          @else
            <li class="nav-item login">
              <a class="nav-link" href="{{url('main_login')}}">Login</a>
            </li>
          @endif
      </ul>
    </div>
  </nav>