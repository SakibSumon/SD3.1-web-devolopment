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
$contact = $_POST['contact'];
$city = $_POST['city'];
$country = $_POST['country'];
$postal = $_POST['postal'];
$email = $_POST['email'];


//$sql = "INSERT INTO feedback ( firstname, lastname, email, message ) VALUES ('$fname','$lname',$email','$message')";

$sql = "INSERT INTO volunteer (firstname, lastname, Contact, City, Country, Postal, Email ) VALUES ('$name1','$name2', '$contact', '$city', 
'$country', '$postal', '$email')";


//mysqli_query($con, $sql1);

if (!mysqli_query($con, $sql)) {
    echo 'Not inserted ';
    echo '$lname';
} else {

    echo '<script type="text/javascript"> alert("Data Inserted") </script>';
}

header("refresh:1; url: index.php");
