<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | EzyGrocer</title>
    <?php include 'head.php' ?>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="half-background bg-light">
                <h3>Login</h5>
            </div>
            <div class="logo-container"><img src="../assets/img/EzyGrocer/3.png" class="trolley-logo"
                    alt="EzyGrocer Logo"></div>
        </div>
        <div class="row mt-3">
            <form action="main.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email or username</label>
                    <input type="text" class="form-control" name="text" aria-describedby="emailHelp">
                </div>
               
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
               
                <a href="main.php"><button class="btn btn-block btn-primary">Login</button></a>
                <small>Don't have an account yet? <a href="registration.php">Register</a></small>
            </form>
        </div>
    </div>
</body>

</html>