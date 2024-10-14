<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Welcome To Lab_Nerd</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="stylesheet" href="./CSS/quiz.css">


</head>

<body>

    <!-- logo -->
    {{-- <div style="float:left">

        <div style="margin: 12px 25px;" class="logo">
            <img src="./images/logo.png">
            <p style="margin-left:20px;margin-top: 8px; color:rgba(11, 140, 170, 0.74);font-size: 30px;"><b> Lab_Nerd</b></p>
        </div>
    </div> --}}
    <!-- navbar -->


    @include('layouts.navigation')




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
