<?php


//beautifying data with function //can remove if you want

$con = mysqli_connect('localhost', 'root', '123456');
//mysqli_select_db($con, '170204026');

if (!$con) {
    echo 'Not Connected';
}

if (!mysqli_select_db($con, '170204026')) {
    echo 'not selected db';
}


$name1 = $_POST['fname'];
$name2 = $_POST['lname'];
$email = $_POST['email'];
$text = $_POST['text'];

//$sql = "INSERT INTO feedback ( firstname, lastname, email, message ) VALUES ('$fname','$lname',$email','$message')";

$sql = "INSERT INTO feedback (firstname, lastname, email, t ) VALUES ('$name1','$name2', '$email', '$text')";


//mysqli_query($con, $sql1);

if (!mysqli_query($con, $sql)) {
    echo 'Not inserted ';
    echo '$lname';
} else {
    echo 'Inserted ';
}

header("refresh:1; url: index.php");
