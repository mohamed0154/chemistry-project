<nav class="navbar navbar-expand-lg bg-body-tertiary p-0 ">

    <div class="container-fluid bg-white align-items-start ">

        <div class="logo">
            <div class="photo ">
                <img src="{{ asset('images/logo.png') }}" width="60px" class="w-20 h-10">
                <span class="logo-title"><b>Lab_Nerd</b></span>
            </div>
            <div class="wave ">
                <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#ffffff" fill-opacity="1"
                        d="M0,288L80,266.7C160,245,320,203,480,197.3C640,192,800,224,960,197.3C1120,171,1280,85,1360,42.7L1440,0L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                    </path>
                </svg>
            </div>
        </div>
        <button class="navbar-toggler mt-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
           {{-- if Authenticated --}}
            @auth
                <ul class="navbar-nav me-lg-5 mb-2 mb-lg-0 gap-2 gap-lg-4 p-2 nav-lin">
                    <li class="nav-item">
                        <a class="nav-link active pe-0" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-0" href="{{ route('users.about_us') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-0" href="{{ route('users.chemical') }}">Chemical Reaction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-0" href="">Experiment</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link pe-0" href="true">Quiz</a>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle pe-0" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            User
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('users.profile') }}">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('users.logout') }}">Logout</a></li>
                        </ul>
                    </li>

                </ul>
            @else
                <div class="  auth-buttons align-items-start p-3 mt-2 d-flex  flex-column flex-lg-row">
                    <a href="{{ route('users.login') }}" class="btn btn-primary ps-3 pe-3 me-2 fw-bold text-black">login</a>
                    <a href="{{ route('users.sign_up_view') }}"
                        class="btn btn-primary mt-2 mt-lg-0 ps-3 pe-3 fw-bold text-black">register</a>
                </div>
            @endauth
        </div>
    </div>
</nav>
{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav> --}}
