<?php


session_start();


$con = mysqli_connect('localhost', 'root', '123456');

mysqli_select_db($con, '170204026');
$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$s = "select * from usertable where name = '$name' && password= '$pass'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);





if ($num == 1) {

    $_SESSION['flag'] = 1;
    $_SESSION['username'] = $name;
    $_SESSION['email'] = $result1;
    echo '<script type="text/javascript"> alert("Image uploaded") </script>';
    header('location:index.php');
} else {
    echo '<script type="text/javascript"> alert("Image Not uploaded") </script>';
    header('location:login.php');
}
