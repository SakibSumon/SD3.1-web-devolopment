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
                    <a class="nav-link" href="#">Gallery</a>
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
        background-color: #e01e2b;
        font-size: xx-large;
        margin-top : 20px !important;
        margin-bottom: 8px;
        padding-top: 20px;
        padding-bottom: 17px;
      ">
        <h2 style="text-align: center; color: white">Gallery</h2>
    </div>

    <center class>
        <form action="" method="POST" enctype="multipart/form-data">

            <table width: "50%" cellpaddign="5" cellspacing="5">
                <thead>
                    <tr>
                        <th IMAGE></th>


                    </tr>
                </thead>
                <?php
                $connection = mysqli_connect("localhost", "root", "123456");

                $db = mysqli_select_db($connection, '170204026');


                $query = "SELECT * FROM `aboutimage`";
                $query_run = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_array($query_run)) {
                ?>



                    <div class="row">
                        <tr>

                            <div class="col-lg-4 col-md-4 col-12">
                                <?php echo '<img src = "data:image;base64,' . base64_encode($row['image']) . '" alt= "Image" style ="margin-top = 10"; "width: 70%; height: 70%;">'; ?>
                            </div>


                            
                                <h2 style=" font-size:40px;"> <b>
                                        <?php echo $row['username']; ?> </td>
                                    </b></h2>


                        </tr>
                    </div>

                <?php
                }
                ?>
            </table>
        </form>
    </center>
</body>

</html>