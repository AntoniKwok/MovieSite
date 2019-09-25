<?php 
    session_start();
    require_once("config.php");

    if(!isset($_SESSION['auth'])){
        header("Location: auth/login.php");
	}
	
	$result = mysqli_query($conn, "SELECT * FROM queues q JOIN users u ON q.user_id = u.id WHERE status='Pending' ORDER BY TIME ASC");
	
    $result = $conn->query("SELECT * FROM movies");
    // $id = $_SESSION['id'];
    // $check = $conn->query("SELECT user_id FROM queues WHERE user_id = $id AND status='Pending'");
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>MovieSite</title>
    <link rel="shortcut icon" href="../images/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <script src="../vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include('components/navbar.php') ?>
    <div class="container py-3">
		<?php
			$idx =1;
			while($user_data = mysqli_fetch_array($result)){ 
				?>
				<div class="card-deck">
				<div class="card" style="max-width: 540px;">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="images/poster_aquaman.jpg" alt="" style="max-width: 100%;">	
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">My Title</h5>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum reiciendis autem impedit voluptatum. Pariatur molestiae hic placeat eligendi omnis, optio labore laborum suscipit voluptatem maxime sit ex, repellat nulla rem!</p>
							</div>
							<div class="card-footer">
								<a href="">More info</a>
							</div>
						</div>
					</div>
				</div>
				<div class="card" style="max-width: 540px;">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="public/images/icon.jpg" alt="">	
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">My Title</h5>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum reiciendis autem impedit voluptatum. Pariatur molestiae hic placeat eligendi omnis, optio labore laborum suscipit voluptatem maxime sit ex, repellat nulla rem!</p>
							</div>
							<div class="card-footer">
								<a href="">More info</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
			}	
		?>
		
		
	</div>

    <?php include('components/footer.php') ?>
</body>
</html>
