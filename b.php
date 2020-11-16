<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>welcome to Banff</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="b.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet" />
</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-10">
        <a class="navbar-brand" href="index.php"> Explorer</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">


                <li class="nav-item">
                    <a class="nav-link" href="list.php">Where to Go </a>
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
                    <button class="btn btn-primary my-2 my-sm-0" type=""> <a href="login.php" style="color: white;">Profile</a></button>
                </h3>

                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

            </form>

        </div>
    </nav>
    <!--
    
    <div class="jumbotron">
        <h2 class="display-4">Hello, Welome to banff</h2>
        <p class="lead">
            Set out on a journey of hunters, treasure seekers and merchants to the
            Canadian far north where ice and cold prevail. Treasure seekers rushed
            to find their fortune in Miles Canyon. But it was difficult to cross the
            Yukon River.
        </p>
        <hr class="my-4" />
        <p></p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>

-->

    <div class="cont my-20">
        <div class="row2">
            <div class="banner4">
                <img src="images/lake1.jpg" class="bann">
                <h2 class="heading"> Welcome to Banff </h2>
                <p class="contents2">Banff National Park is Canada's oldest national park, established in 1885. Located in Alberta's Rocky Mountains, 110–180 kilometres west of Calgary, Banff encompasses 6,641 square kilometres of mountainous terrain</p>
            </div>
        </div>
    </div>



    <div class="container" style="
        background-color: #e01e2b;
        font-size: xx-large;
        margin-top : 20px !important;
        margin-bottom: 8px;
        padding-top: 20px;
        padding-bottom: 17px;
      ">
        <h3 style="text-align: center; color: white">What to Do</h3>

    </div>

    <div class="container1">
        <div class="box ">
            <div class="imgBox">
                <img src="images/aurora.jpg">
            </div>
            <div class="details">
                <div class="content">
                    <h2>Enjoy the Aurora</h2>
                    <p>An aurora, sometimes referred to as polar lights, northern lights, or southern lights, is a natural light display in the Earth's sky.</p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="images/ski.jpg">
            </div>
            <div class="details">
                <div class="content">
                    <h2>Slide with the snow</h2>
                    <p>A ski is a narrow strip of semi-rigid material worn underfoot to glide over snow.</p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="images/camp.jpg">
            </div>
            <div class="details">
                <div class="content">
                    <h2>Stay nights with friends </h2>
                    <p>Camp is an aesthetic style and sensibility that regards something as appealing because of its bad taste and ironic value.</p>
                </div>
            </div>
        </div>


        <div class="box ">
            <div class="imgBox">
                <img src="images/kayak.jpg">
            </div>
            <div class="details">
                <div class="content">
                    <h2>Do some boat adventure</h2>
                    <p>A kayak is a small, narrow watercraft which is typically propelled by means of a double-bladed paddle.</p>
                </div>
            </div>
        </div>
    </div>


    <section class="mt-5 py-5 background-color=white">

        <div class="container">
            <div class="row">


                <div class="  col-lg-6 col-md-6 col-12 ">
                    <h2 style=" font-size:40px;"> <b>Travel Limitless, with us</b></h2>
                    <p class="py-2" style=" font-size:20px;">
                        We're a very professional and dedicated team for travel and touring kinds. We arrange various events accross Canada and you're welcome to join us. You can hire us for arranging your personal events or you can join our team for the comign events. To be a part of this amazing adventure and to gain a lifetime experience.
                        <a href="planForm.php" class="btn btn-success">Make Plan</a>
                    </p>

                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/plann.jpg" class="img-fluid imgcl">
                </div>

            </div>
        </div>
    </section>


    <section class="mt-5 py-5 background-color=white">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/vol.png" class="img-fluid imgcl">
                </div>

                <div class="  col-lg-6 col-md-6 col-12 ">
                    <h2 style=" font-size:40px;"> <b>Join as a volunteer</b></h2>
                    <p class="py-2" style=" font-size:20px;">
                        We're a very professional and dedicated team for travel and touring kinds. We arrange various events accross Canada and you're welcome to join us. You can hire us for arranging your personal events or you can join our team for the comign events. To be a part of this amazing adventure and to gain a lifetime experience.
                        <a href="formVolunteer.php" class="btn btn-success">Join</a>
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
                        <p class="text-center">&copy; Copyright 2018 - Explorer LTD. All rights reserved.</p>
                    </div>
                </div>


            </div>
        </div>
    </footer>




</body>