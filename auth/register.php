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
<!-- Default form register -->
<form class="text-center border border-light p-5" action="doregister.php" method="POST">

    <img src="../images/logo.svg" class="rounded mx-auto d-block" style="height: 100px;">

    <p class="h4 mb-4">Sign up</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" name="fname" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" name="sname" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
        </div>
    </div>
    
    <!-- Username -->
    <input type="text" name="uname" id="defaultRegisterUsername " class="form-control mb-4" placeholder="Username">


    <!-- E-mail -->
    <input type="email" name="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password" name="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">

    <!-- Sign up button -->
    <button class="btn btn-secondary my-4 btn-block" type="submit" name="Submit">Register</button>

    <hr>

    <!-- Terms of service -->
    <p>By clicking
        <em>Register</em> you agree to our
        <a href="" target="_blank">terms of service</a>

    <!-- Register -->
    <p>Already be a member?
        <a href="login.php">Sign in</a>
    </p>


</form>
<!-- Default form register -->
</div>
    
</body>
</html>