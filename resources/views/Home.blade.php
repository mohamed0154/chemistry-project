{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Home</title>
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
   <link rel="stylesheet" href="./CSS/index.css">
</head>

<body> --}}

    <!-- logo -->
    @extends('sharing.master')
    @section('title','Home')
    @section('content')
     <div id="home22" class="">
      <div class="container-fluid position-relative">
        <div class="row">
          <div class="col-lg-3 mb-md-5 col-md-6 position-relative">
            <div class="wave">
              <svg class="mt-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,288L80,266.7C160,245,320,203,480,197.3C640,192,800,224,960,197.3C1120,171,1280,85,1360,42.7L1440,0L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
            </div>
          </div>
        </div>
       </div>

       {{-- <nav class="navbar overflow-hidden navbar-expand-lg position-fixed top-0 start-0 end-0 d-flex justify-content-center align-items-center">
        <div class="container-fluid">
          <div class="logo d-flex w-25">
            <img src="./images/logo.png" class="">
            <p style="color:rgba(11, 140, 170, 0.74);font-size: 20px;" class="m-2"> <b>Lab_Nerd</b></p>
        </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse me-auto" id="navbarSupportedContent">
            <ul class="d-flex register justify-content-center align-items-center mt-3 gap-3 ms-auto">
               <a class="" href="{{ route('login') }}"><button class="btn btn-info">Sign In</button></a>
               <a class="" href="{{ route('sign_up_view') }}"><button class="btn btn-outline-info">Sign Up</button></a>
            </ul>
          </div>
        </div>
      </nav> --}}
      @include('layouts.navigation')

      <div class="container-fluid pt-5">
        <div class="row mt-5 d-flex justify-content-start">
            <div class="col-md-12 col-lg-7">
               <div class="div m-lg-5">
                <h1 class="fw-bolder pb-4">Let's Learn</h1>
                <h2 class="fs-3 pb-2">From Here!</h2>
                <h4 style="margin-bottom: 50px;" class="mt-3"> Explore the reactions of elements and compounds<br>
                    and discover the amazing chemical phenomena <br>
                    through our engaging and interactive experiments

                </h4>
               </div>
            </div>
            <div class="col-md-12 mt-5 col-lg-5 d-flex justify-content-start align-items-center">
               <div class="div1 my-auto">
                   <img src="./images/background.png" class="w-100 d-block ms-auto">
               </div>
            </div>
        </div>
    </div>
     </div>
@stop



{{-- <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html> --}}
