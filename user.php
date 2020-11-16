<?php

session_start();

if (!isset($_SESSION['flag'])) {
    header('location:notLogged.php');
}



?>

<html>

<head>
    <title>Your profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="style.css">
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
                    <a class="nav-link" href="#">Camp</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Events</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="displayGalary.php">Gallery</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
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


    <div class="container" style="
        background-color: #01516B;
        font-size: xx-large;
        margin-top: 20px !important;
        margin-bottom: 8px;
        padding-top: 20px;
        padding-bottom: 17px;
      ">
        <h3 style="text-align: center; color: white">Congratulations <?php echo $_SESSION['username']; ?>, You're a member now! <br> </h3>




    </div>

    <section class=" background-color=white">

        <div class="container my-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/profile2.jpg" class="img-fluid imgcl">
                </div>

                <div class="  col-lg-6 col-md-6 col-12 ">
                    <h2 style=" font-size:40px;"><b>Welcome, Let's explore <?php echo $_SESSION['username']; ?> </b></h2>
                    <p class="py-2" style=" font-size:20px;">
                        We're a very professional and dedicated team for travel and touring kinds. We arrange various events accross Canada and you're welcome to join us. You can hire us for arranging your personal events or you can join our team for the comign events. To be a part of this amazing adventure and to gain a lifetime experience.
                        <a href="list.php" class="btn btn-success"> Make a plan</a>
                    </p>

                </div>
            </div>
        </div>
    </section>

    <section class=" background-color=white">

        <div class="container my-5">
            <div class="row">
                <div class="  col-lg-6 col-md-6 col-12 ">
                    <h2 style=" font-size:40px;"><b>Do a good thing, be a volunteer </b></h2>
                    <p class="py-2" style=" font-size:20px;">
                        Mother nature needs you, all the good person around you. Be a responsible human being and join our community to pay back the nature it's gracefulness. All you need to do is to be there when she needs you the most. Join our fast growing Volunteer community and hather a lifetime experience of working with people with wide range of races.
                        <a href="formVolunteer.php" class="btn btn-success">Volunteer</a>
                    </p>

                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/vol2.jpg" class="img-fluid imgcl">
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="float-right mb-20"> <a href="logout.php" class="btn btn-success">logout</a></div>
    </div>

    <div <!-- FOOTER START -->
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


</body>

</html>