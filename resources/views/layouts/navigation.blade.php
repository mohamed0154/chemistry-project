
  <nav id="navbar-example" class="navbar position-absolute start-0 end-0 top-0 navbar-expand-lg d-flex justify-content-center">

    <div class="container-fluid">
        <div class="logo d-flex w-25">
            <img src="./images/logo.png" class="">
            <p style="color:rgba(11, 140, 170, 0.74);font-size: 20px;" class="m-2"> <b>Lab_Nerd</b></p>
        </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse topnav" id="navbarSupportedContent">
        <ul class="navbar-nav fw-bold ms-auto gap-4 mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home_page') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about_us') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('chemical')}}">Chemical_Reaction</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Experiment</a>
          </li>
          <li class="nav-item dropdown dropdown1">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Quiz
            </a>
            <ul class="dropdown-menu text-center dropdown1-content">
              <li class="px-3"><a class="dropdown-item" href="{{ route('Quiz_one') }}">1stPrep</a></li>
              <li class="px-3"><a class="dropdown-item" href="{{ route('Quiz_two') }}">2stPrep</a></li>
              <li class="px-3"><a class="dropdown-item" href="{{ route('Quiz_three') }}">3stPrep</a></li>
            </ul>
          </li>
            <li class="nav-item dropdown dropdown2">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown2" aria-expanded="false"><i style="color:rgba(134, 8, 8, 0.76)" class="fa fa-fw fa-user"></i><b>User</b></a>
                <ul class="dropdown-menu text-center dropdown-content">
                  <li><a class="dropdown-item" href="{{ route("user.profile") }}">my profile</a></li>
                  <li><a class="dropdown-item" href="{{ route("logout") }}">logout</a></li>
                </ul>
          </li>
        </ul>
      </div>
    </div>

  </nav>


