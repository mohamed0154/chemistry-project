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
     <div id="home" class="position-relative overflow-hidden">
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
      @include('layouts.navigation')

<div id="about" style="margin-top: 70px;">
    <div class="container">
        <h2 class="about-before py-3">ABOUT</h2>
      <h1 class="py-2 fs-20">WHO WE ARE</h1>
      <div>
          <h4 class="h4 prag pb-5">We are using 3d technology to build a laboratory which enable any one from <br>
              any place at any time to do their scientific Experiments</h4>
          <ul class="fs-5">
              <li>Providing safe experimentswithout any risk.</li><br>
              <li>Reducing the negative effects of the use of chemicals.</li><br>
              <li>Availability of experiments in any place and at any time.</li><br>
              <li>Reducing the cost of tools and elements.</li>
          </ul>
      </div>

      <div class="d-flex justify-content-end mb-3 div40">
          <p class="fs-5 py-3">Lab nerd will serve every one who does experiments as teachers and it can<br>
               also serve the students in schools and universities.Lab nerd is a new style<br>
              for learning based on 3d technology to simulate the experiments thw same <br>
              as in real life. </p>
      </div>
      <div class="row gy-5 d-flex justify-content-center align-items-center">
          <div class="col-lg-4 col-md-12">
              <div class="item text-center">
                  <img src="./images/logo2.jpeg" class="translate-middle-y"/>
                    <div class="px-3 pt-0 pb-3">
                      <h2 class="diff_title" style="text-align: center; color:rgb(65, 164, 156)">Our Mission</h2>
                          <p>Developing students practical skills.</p>
                      <p>Reducing experiments execution time.</p>
                      <p class="pb-1"> Providing more practicable user experience practicable user experience.</p>
                    </div>

                </div>
          </div>
          <div class="col-lg-4 col-md-12">
              <div class="item text-center">
              <img src="./images/logo3.jpeg" class="translate-middle-y"/>
              <div class="px-3 pt-0 pb-3">
                <h2 style=" text-align: center; color: rgb(219, 170, 11);">Our plan</h2>
                <p>Improve quality of lab experience like models and animation.</p>
                <p class=""> Increase accuracy of experiments by scientific content creators</p></div>
              </div>
          </div>
          <div class="col-md-12 col-lg-4">
              <div class="item text-center">
                  <img src="./images/logo4.jpeg" class="translate-middle-y">
              <div class="px-3 pt-0 pb-3">
                <h2 style="color: rgb(219, 11, 11);">Our vision</h2><br>
                <p>Extend to cover various sections of subjects.</p>
                <p class="">Platforms be available on different platforms like ios and windows phoneand produce a 3d version for lab .</p>

              </div>
            </div>
          </div>
      </div>
    </div>
  </div>

  <script src="anime.min.js"></script>
  <script src="./CSS/main.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
<!-- end about -->
<!-- start  -->
</body>

</html>
