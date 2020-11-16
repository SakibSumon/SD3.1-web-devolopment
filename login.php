<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="login.css" />
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet" />
</head>

<body>






    <div class="contaioner">
        <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-left">
                    <h2> Login here</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label> Username </label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label> Password </label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>

                <div class="col-md-6 login-right">
                    <h2> Register here</h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label> Username </label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label> Password </label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label> Email </label>
                            <input type="text" name="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label> Contact </label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
                <p style="color: white;" class="float-left">Already logged in? <button class="btn btn-primary my-2 my-sm-0" type="">


                        <a href="user.php" style="color: white;">Profile</a></button>
                    <button class="btn btn-primary my-2 my-sm-0" type=""> <a href="index.php" style="color: white;">Home</a></button></p>
            </div>
        </div>
    </div>
</body>

</html>