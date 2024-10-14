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


<script src="./js/Quiz.js"></script>
</body>

</html>
