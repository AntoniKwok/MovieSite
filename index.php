<?php 
    session_start();
    require_once("config.php");

    if(!isset($_SESSION['auth'])){
        header("Location: auth/login.php");
	}
	
    
    // $id = $_SESSION['id'];
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
    <link rel="stylesheet" href="../vendor/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../vendor/fontawesome/css/all.min.css">
    <script src="../vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include('components/navbar.php') ?>
    <?php include('components/content.php') ?>

    <?php include('components/footer.php') ?>
</body>
</html>
