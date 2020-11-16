<!DOCTYPE html>
<html>

<head>
    <title>
        Image upload
    </title>
    <title>welcome to Banff</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />


    <link rel="stylesheet" type="text/css" href="">
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet" />
    <style>
        input {
            width: 50%;
            height: 100%;
            border: 1px;
            padding: 8px 15px 8px 15px;
        }
    </style>
</head>

<body>

    <center>
        <h1> Upload /insert </h1>

        <form action="" method="POST" enctype="multipart/form-data">
            <label>Choose an Profile pic</label> <br>
            <input type="file" name="image" id="image" /> <br>

            <label>enter text</label> <br>
            <input type="text" name="username" placeholder="Enter username" /> <br>

            <input type="submit" name="upload" value="Upload Image/data" /> <br>
        </form>
    </center>
</body>

</html>

<?php

$connection = mysqli_connect("localhost", "root", "123456");
$db = mysqli_select_db($connection, '170204026');

if (isset($_POST['upload'])) {
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $username = $_POST['username'];
    $query = "INSERT INTO `aboutimage` (`image`) VALUES('$file ')";

    $query_run =  mysqli_query($connection, $query);
    if ($query_run) {
        echo '<script type="text/javascript"> alert("Image uploaded") </script>';
    } else {
        echo '<script type="text/javascript"> alert("Image Not uploaded") </script>';
    }
}


?>