<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Quiz</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="stylesheet" href="./CSS/quiz.css">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">


</head>

<body>

    <!-- logo -->
    <!-- <div style="float:left">

        <div style="margin: 12px 25px;" class="logo">
            <img src="./images/logo.png">
            <p style="margin-left:20px;margin-top: 8px; color:rgba(11, 140, 170, 0.74);font-size: 30px;"><b> Lab_Nerd</b></p>
        </div>
    </div> -->
    <!-- navbar -->
    <!-- <div style=  "margin-top: 2rem; float:right"  class="topnav">
    <b>
         <a href="Welcome.html"> Welcome </a>
        <a href="./About.html">About</a>
        <a href="./Chemical.html"> Chemical reaction </a>
        <a href="./Experiment.html"> Experiment </a>
        <a href="./Quiz.html"> Quiz </a>
    </b>


        <div class="dropdown">
            <a><i style="color:rgba(134, 8, 8, 0.76)" class="fa fa-fw fa-user"></i><b>User</b>
                <div class="dropdown-content">
                    <a href="./MyProfile.html">MyProfile</a>
                    <a href="./front-end-1-main/login.html">LogOut</a>

                </div>
                </a>
        </div>
        </div> -->

          <!-- start navbar -->
    {{-- <nav id="navbar-example" class="navbar position-absolute start-0 end-0 top-0 navbar-expand-lg d-flex justify-content-center">
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
                <a class="nav-link active" aria-current="page" href="Home.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Welcome.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Welcome.html">Chemical_Reaction</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Experiment">Experiment</a>
              </li>
              <li class="nav-item dropdown dropdown1">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Quiz
                </a>
                <ul class="dropdown-menu text-center dropdown1-content">
                  <li class="px-3"><a class="dropdown-item" href="Quiz1.html">1stPrep</a></li>
                  <li class="px-3"><a class="dropdown-item" href="Quiz2.html">2stPrep</a></li>
                  <li class="px-3"><a class="dropdown-item" href="Quiz3.html">3stPrep</a></li>
                </ul>
              </li>
                <li class="nav-item dropdown dropdown2">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown2" aria-expanded="false"><i style="color:rgba(134, 8, 8, 0.76)" class="fa fa-fw fa-user"></i><b>User</b></a>
                    <ul class="dropdown-menu text-center dropdown-content">
                      <li><a class="dropdown-item" href="MyProfile.html">my profile</a></li>
                      <li><a class="dropdown-item" href="Home.html">logout</a></li>
                    </ul>
              </li>
            </ul>
          </div>
        </div>

      </nav> --}}
      @include('layouts.navigation')
    <!-- end navbar -->





<main>
    <div class="container">
    <div class="quiz">


        </div>
        <div class="buttons">
            <div class="row">
                <div class="col">

                    <button class="next" >
                        next
                    </button>
                </div>
            </div>
        </div>
       </div>

</main>


<script src="./js/QuizThree.js"></script>
</body>

</html>
