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

<div id="chemical_reaction" class="mt-5">
    <div class="container py-5">
     <div class="row mt-5">
       <div class="col-lg-12 col-md-5">
         <div class="mt-3 m-2">
           <img src="images/Periodic_table_large.svg" alt="periodic_table_img" class="w-100">
         </div>

       </div>
       <div class="row g-5">
         <div class="col-lg-7 col-md-12 d-flex flex-column left-content">
           <div class="col pb-md-5 pb-lg-5">
             <h3>2Na + 2H2O → 2NaOH + H2</h3>
             <p>When sodium is exposed to water, a rapid reaction occurs that leads to the formation of sodium hydroxide (NaOH) and the release of hydrogen gas (H2).</p>
           </div>
           <div class="col pb-md-5 pb-lg-5">
             <h3>HCl + NaOH → NaCl + H2O</h3>
             <p>The double replacement reaction between HCl and NaOH is a common and important reaction in chemistry. It is used in many applications such as adjusting the pH of solutions, in salt preparation, in water treatment, and in the manufacture of detergents and other chemicals.</p>
           </div>
           <div class="col pb-md-5 pb-lg-5">
             <h3>Mg + HCL → MgCl2 + H2</h3>
             <p>In the reaction , there is only 1 hydrogen atom on the reactant side while only 2 hydrogen atoms on the product side.</p>
           </div>
         </div>
         <div class="col-lg-5 col-md-12">
           <video width="400"  controls>
             <source src="./videos/video.mp4" type="video/mp4">
           </video>
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
