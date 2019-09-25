<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MovieSite</title>
    <link rel="shortcut icon" href="../images/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <script src="../vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container py-2 col-md-5">
    <!-- Default form login -->
    <form class="text-center border border-light p-5" action="dologin.php" method="POST">

    <img src="../images/logo.svg" class="rounded mx-auto d-block" style="height: 100px;">

    <p class="h4 mb-4">Sign in</p>

    <!-- Email -->
    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">

    <!-- Password -->
    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="password">

    <div class="d-flex justify-content-around">
        <div>
            <!-- Remember me -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
            </div>
        </div>
        <div>
            <!-- Forgot password -->
            <a href="">Forgot password?</a>
        </div>
    </div>

    <!-- Sign in button -->
    <button class="btn btn-secondary btn-block my-4" type="submit" name="Submit">Sign in</button>

    <!-- Register -->
    <p>Not a member?
        <a href="register.php">Register</a>
    </p>

    </form>
    <!-- Default form login -->    
    </div>
</body>
</html>
<!-- php -S localhost:2000 -->