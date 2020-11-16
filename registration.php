<?php


session_start();
header('location:login.php');

$con = mysqli_connect('localhost', 'root', '123456');

mysqli_select_db($con, '170204026');
$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$s = "select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num == 1) {

    echo '<script type="text/javascript"> alert("Username already Taken") </script>';
} else {
    $reg = "insert into usertable(name, password,email,phone) values ('$name' , '$pass' ,'$email' , '$phone')";
    mysqli_query($con, $reg);

    echo "registration succesfull ";
}
$email_search = "select * from usertable where email = '$email'";
$query = mysqli_query($con, $email_search);
$email_pass = mysqli_fetch_assoc($query);

$_SESSION['email'] = $email_pass['email'];
