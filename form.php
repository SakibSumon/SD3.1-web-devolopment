<?php


//$fname = '';
//$lname = '';
//$email = '';

//$password = '';
//$message = '';

//beautifying data with function //can remove if you want

///$con = mysqli_connect('localhost', 'root', '123456');
//mysqli_select_db($con, '170204026');

//if (!$con) {
//  echo 'Not Connected';
//}

//if (!mysqli_select_db($con, '170204026')) {
//  echo 'not selected db';
//}

//if (isset($_POST["submit"])) {

// $fname = $_POST['fname'];
/// $lname = $_POST['lname'];
// $email = $_POST['email'];
//$message = $_POST['message'];
//
//$sql = "INSERT INTO feedback ( firstname, lastname, email, message ) VALUES ('$fname','$lname',$email','$message')";
//}

?>






<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>My form</title>
  <style>
    body {
      background: linear-gradient(rgba(0, 0, 50, 0.5), rgba(0, 0, 50, 0.5)),
        url(aa.png);
      background-size: cover;
      background-position: center;
    }

    .login-box {
      max-width: 700px;
      float: none;
      margin: 150px auto;
    }
  </style>

</head>




<body>

  <section>
    <div class="  my-5">
      <h2 class="text-center">What's in your mind</h2>

    </div>
  </section>

  <div class="login-box">
    <form action="insert.php" method="post">
      <div class="container">
        <div class="row">
          <div class="col">
            <div clas="form-group">

              <label>First Name</label>
              <input type="text" name="fname" class="form-control" placeholder="First name">
            </div>
          </div>


          <div class="col">
            <div class="form-group">
              <label>Last Name</label>
              <input type="text" name="lname" class="form-control" placeholder="Last name">
            </div>
          </div>
        </div>


        <div class="form-group" mt-5>
          <label>Email address</label>
          <input type="email" name="email" class="form-control" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>


        <!--

      <div class="form-group" mt-5>
        <label>text</label>
        <input type="text" name="text" class="form-control" placeholder="Enter text">

      </div>

-->
        <!--  --
  <div class="form-group">
    <label >Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $password; ?>">
  </div>
  -->

        <div class="form-group">
          <label>Enter Message</label>
          <textarea class="form-control" name="text" placeholder="Enter Message"> </textarea>

        </div>






        <div type="button" class=" btn btn-primary">
          <input type="submit" name="submit" value="Insert" />
        </div>

        <button type="button" class="btn btn-link"> <a href="index.php">Home</a></button>




    </form>
  </div>
</body>

</html>