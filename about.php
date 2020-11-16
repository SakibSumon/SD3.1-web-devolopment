<html>

<head>
    <title>Your profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="b.css">

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
                    <a class="nav-link" href="form.php">Contact Us</a>
                </li>





                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>



                <li class="nav-item">
                    <a class="nav-link" href="displayGalary.php">Gallery</a>
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



    <div class="cont my-20">
        <div class="row2">
            <div class="banner4">
                <img src="images/banfCity.jpg" class="bann">
                <h3 class="heading"> About Us </h3>

            </div>
        </div>
    </div>



    <div class="container" style="
        background-color: #e01e2b;
        font-size: xx-large;
        margin-top: 20px !important;
        margin-bottom: 8px;
        padding-top: 20px;
        padding-bottom: 17px;
      ">
        <h3 style="text-align: center; color: white"> Know Us<br>

        </h3>


    </div>



    <section class=" background-color=white">

        <div class="container my-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/aboutus.jpg" class="img-fluid imgcl">
                </div>

                <div class="  col-lg-6 col-md-6 col-12 ">
                    <h2 style=" font-size:40px;"><b>Explorer Travel LTD</b></h2>
                    <p class="py-2" style=" font-size:20px;">
                        We're a very professional and dedicated team for travel and touring kinds. We arrange various events accross Canada and you're welcome to join us. You can hire us for arranging your personal events or you can join our team for the comign events. To be a part of this amazing adventure and to gain a lifetime experience.
                        <a href="planForm.php" class="btn btn-success"> Make a plan</a>
                    </p>

                </div>






            </div>
        </div>
    </section>

    <section class=" background-color=white">

        <div class="container my-5">
            <div class="row">
                <div class="  col-lg-6 col-md-6 col-12 ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.8855396640643!2d90.3914805148472!3d23.82266888455388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c6c2abe72015%3A0x163f4f4303a0d9e9!2sEcb%20Chottor%20Bus%20Stand!5e0!3m2!1sen!2sbd!4v1600547199444!5m2!1sen!2sbd" width="500" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                </div>

                <div class="col-lg-6 col-md-6 col-12 pt-10">
                    <h2 style=" font-size:40px; color:red"><b>Find Us here:</b></h2>
                    <h4 style=" font-size:40px;">Email: Sakib@explorer.com</h4>
                    <h4 style=" font-size:40px;">Hotline: 01234567890</h4>
                </div>
            </div>
        </div>
    </section>


    <center>
        <section class=" background-color=white">
            <div class="container my-5">

                <?php
                $connection = mysqli_connect("localhost", "root", "123456");

                $db = mysqli_select_db($connection, '170204026');


                $query = "SELECT * FROM `aboutimage`";
                $query_run = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_array($query_run)) {
                ?>




                    <tr>

                        <div class="col-lg-6 col-md-6 col-12 ">
                            <?php echo '<img src = "data:image;base64,' . base64_encode($row['image']) . '" alt= "Image" style ="margin-top = 10"; "width: 30%; height: 70%;"   >'; ?>
                        </div>


                        <div class="  col-lg-6 col-md-6 col-12 ">
                            <h2 style=" font-size:40px;"><b>Sakib Rahman Sumon</b></h2>
                            <p class="py-2" style=" font-size:20px;">


                            </p>


                    </tr>


                <?php
                }
                ?>

            </div>
        </section>

    </center>


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

</html>