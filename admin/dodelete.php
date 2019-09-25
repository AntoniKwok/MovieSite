<?php
    require_once("../config.php");
    
    $id = $_POST['id'];
    
    $conn->query("DELETE FROM movies WHERE id = ".$id);
    header("Location: ../index.php");
    ?>
