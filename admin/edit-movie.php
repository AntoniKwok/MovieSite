<?php 
    require_once("../config.php");
    $id = $_POST['id'];
    $result = $conn->query("SELECT * FROM movies WHERE id = ". $id);
    
    $movie_data = mysqli_fetch_array($result);
    // die("test".$movie_data['sinopsis']);
    // $check = $conn->query("SELECT user_id FROM queues WHERE user_id = $id AND status='Pending'");
    

?>
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
<form class="text-center border border-light p-5" action=<?php echo "doedit.php/id=".$id ?> method="POST"  enctype="multipart/form-data">

    <img src="../images/logo.svg" class="rounded mx-auto d-block" style="height: 100px;">

    <p class="h4 mb-4">Add New Movie</p>

    <input type="hidden" name="id" value=<?php echo $id?>>
    
    <!-- Title Movie -->
    <input type="text" 
    name="title" id="defaultRegisterUsername " class="form-control mb-4" 
    placeholder="Movie Ttile"
    value=<?php echo $movie_data['title'] ?>>

    <!-- Genre -->
    <input type="text" name="genre" id="defaultRegisterFormEmail" class="form-control mb-4" 
    placeholder="Movie Genre"
    value=<?php echo $movie_data['genre'] ?>>

    <!-- Duration -->
    <input type="text" name="duration" id="defaultRegisterUsername " class="form-control mb-4" 
    placeholder="Duration"
    value=<?php echo $movie_data['duration'] ?>>


    <!-- Sinopsis -->
    <input type="text" name="sinopsis" id="" class="form-control mb-4"
        value=<?php echo htmlspecialchars($movie_data['sinopsis']);  ?>
    >

    <!-- Duration -->
    <input type="file" name="image" id="defaultRegisterUsername " class="form-control mb-4">

    <!-- Sign up button -->
    <button class="btn btn-secondary my-4 btn-block" type="submit" name="Submit">Edit</button>


</form>
</div>
    
</body>
</html>