<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Welcome To Lab_Nerd</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/index.css">

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">
    <!-- start Home -->
     <div id="home " class="position-relative overflow-hidden">
        <!-- start wave  -->
        <div class="container-fluid position-relative">
            <div class="row">
              <div class="col-lg-3 mb-md-5 col-md-6 position-relative">
                <div class="wave">
                  <svg class="mt-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,288L80,266.7C160,245,320,203,480,197.3C640,192,800,224,960,197.3C1120,171,1280,85,1360,42.7L1440,0L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
                </div>
              </div>
            </div>
           </div>
         <!-- end wave -->
      <!-- start navbar -->
      {{-- @include('layouts.navigation') --}}
      <nav class="navbar overflow-hidden navbar-expand-lg position-fixed top-0 start-0 end-0 d-flex justify-content-center align-items-center">
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
               <a class="" href="{{ route('login') }}"><button class="navw btn btn-info">Sign In</button></a>
               <a class="" href="{{ route('sign_up_view') }}"><button class="navw btn btn-outline-info">Sign Up</button></a>
            </ul>
          </div>
        </div>
      </nav>
    <!-- end navbar -->
         <div class="container-fluid">
             <div class="row mt-4 g-5">
                 <div class="col-md-12 col-lg-7 d-flex justify-content-start align-items-center">
                    <div class="div m-lg-5">
                        <h1 class="fs-1 mb-5">Welcome to Lab Nerd</h1>
                        <h4  class="h4 prag1">We are using technology to build a 3D laboratory<br>
                            which anable any one from any place any time <br>
                            to do their scientific experiments.
                        </h4>

                    </div>
                 </div>
                 <div class="col-md-12 col-lg-5 d-flex pt-5 align-self-end">
                    <div class="div1 pt-4">
                        <img src="./images/background.png" class="w-100 ms-auto">
                    </div>
                 </div>
             </div>
         </div>
     </div>
    <!-- end Home -->


    <script src="anime.min.js"></script>
    <script src="./CSS/main.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
<!-- start  -->
  </body>

</html>
