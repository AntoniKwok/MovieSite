<?php

    $username = $_SESSION['user'];
  
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="../images/logo.svg" alt="" style="height:60px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Movie
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        
          <a class="dropdown-item" href="index.php">View Movie</a>
          <a class="dropdown-item" href="admin/add-new-movie.php">Add New Movie</a>
          
        </div>
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <?php if(isset($_SESSION['id'])) {?>
            <a class="nav-link" href="#"  >Welcome, <?php echo $username ?></a>
          <?php }else{?>
            <a class="nav-link" href="auth/login.php"  >Masuk</a>
          <?php }?>
        </li>
    </ul>
  </div>
</nav>