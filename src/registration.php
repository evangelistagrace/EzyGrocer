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
                <h3>Register</h5>
            </div>
            <div class="logo-container"><img src="../assets/img/EzyGrocer/3.png" class="trolley-logo"
                    alt="EzyGrocer Logo"></div>
        </div>
        <div class="row">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="username" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" name="password2">
                </div>
                <button type="submit" class="btn btn-block btn-primary">Register</button>
                <small>Have an account already? <a href="login.php">Login</a></small>
            </form>
        </div>
    </div>
</body>

</html>