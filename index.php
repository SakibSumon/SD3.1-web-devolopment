<?php
session_start();

?>







<!DOCTYPE html>
<html>

<head>
  <title>let's Explore</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>

  </style>
</head>


<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"> Explorer</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">


        <li class="nav-item">
          <a class="nav-link" href="list.php">Where to Go</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="form.php">Contact Us</a>
        </li>







        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="displaygalary.php">Gallery</a>
        </li>

        <li class="nav-item">
          <a class="nav-link disabled" href="#"></a>
        </li>
      </ul>


      <form class="form-inline">
        <h3 class="mr-sm-2" style="color:aliceblue">
          <button class="btn btn-primary my-2 my-sm-0" type="">


            <a href="login.php" style="color: white;">Profile</a></button>
        </h3>

        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

      </form>

    </div>
  </nav>
  <!-- navbar finishes here-->

  <!-- carosuel starts here -->

  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/lake1.jpg" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption">

          <a href="banff.php">
            <h3 class="font-wight-bolder text-monospace btn btn-outline-dark" style="color:white;font-size:36px;"> Lake Louise</h3>
          </a>


          <p style="color:white;font-size:26px; text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF; "> Banff National Park, Alberta</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/banff.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
          <a href="banff.php">
            <h3 class="ont-wight-bolder text-monospace btn btn-outline-dark" style="color:white;font-size:36px;"">Lake Moriane</h3></a>
        <p>Flow with the blues</p>
      </div>   
    </div>
    <div class=" carousel-item">
              <img src="images/lake2.jpg" alt="New York" width="1100" height="500">
              <div class="carousel-caption">
                <h3 class="font-wight-bolder text-monospace btn btn-outline-dark" style="color:white;font-size:36px; text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF; ">Yellow Stone</h3>
                <p class="font-wight-bold glow" style="color:white;font-size:26px; text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF; ">Where's the Wolves?</p>
              </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>







    <section class="my-5 background-color=white">
      <div class="py-5">
        <h1 class="text-center "> About us</h1>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <img src="images/mapple.jpg" class="img-fluid imgcl">
          </div>

          <div class="  col-lg-6 col-md-6 col-12 ">
            <h2 style=" font-size:40px;"> <b>We make your travel possible</b></h2>
            <p class="py-2" style=" font-size:20px;">
              We're a very professional and dedicated team for travel and touring kinds. We arrange various events accross Canada and you're welcome to join us. You can hire us for arranging your personal events or you can join our team for the comign events. To be a part of this amazing adventure and to gain a lifetime experience.
              <a href="form.php" class="btn btn-success">Contact Us</a>
            </p>

          </div>
        </div>
      </div>
    </section>






    <!-- FOOTER START -->
    <footer class="mainfooter" role="contentinfo">
      <div class="footer-middle">
        <div class="container">

          <div class="row">
            <div class="col-md-12 copy">
              <p class="text-center">&copy; Copyright 2020 - Explorer LTD. All rights reserved.</p>
            </div>
          </div>


        </div>
      </div>
    </footer>



    <!-- END OF FOOTER -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>