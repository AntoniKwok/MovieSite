<?php 
        if(isset($_POST['Submit'])) {
            $title = $_POST['title'];
            $genre = $_POST['genre'];
            $duration = $_POST['duration'];
            $sinopsis = $_POST['sinopsis'];
            $path = "images/poster_aquaman.jpg";
            require_once("../config.php");
            $result = $conn->query("INSERT INTO movies (title, genre, duration, image_path, sinopsis) 
                VALUES('$title','$genre','$duration','$path', '$sinopsis')");
            header("Location: ../index.php");
        }

        
    ?>