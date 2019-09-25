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
<form class="text-center border border-light p-5" action="doadd.php" method="POST">

    <img src="../images/logo.svg" class="rounded mx-auto d-block" style="height: 100px;">

    <p class="h4 mb-4">Add New Movie</p>
    
    <!-- Title Movie -->
    <input type="text" name="title" id="defaultRegisterUsername " class="form-control mb-4" placeholder="Movie Ttile">

    <!-- Genre -->
    <input type="text" name="genre" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Movie Genre">

    <!-- Duration -->
    <input type="text" name="duration" id="defaultRegisterUsername " class="form-control mb-4" placeholder="Duration">


    <!-- Sinopsis -->
    <textarea name="sinopsis" id="" cols="30" rows="10" class="form-control mb-4" placeholder="Sinopsis"></textarea>

    <!-- Duration -->
    <input type="file" name="image" id="defaultRegisterUsername " class="form-control mb-4" placeholder="Duration">

    <!-- Sign up button -->
    <button class="btn btn-secondary my-4 btn-block" type="submit" name="Submit">Add</button>


</form>
</div>
    
</body>
</html>