<?php 
    $dir = "images/";
        if(isset($_POST['Submit'])) {
            $title = $_POST['title'];
            $genre = $_POST['genre'];
            $duration = $_POST['duration'];
            $sinopsis = $_POST['sinopsis'];
            
            $target_file = $dir.basename($_FILES["image"]["name"]);

            

            move_uploaded_file($_FILES["image"]["tmp_name"], "../images/".basename($_FILES["image"]["name"]));

            // die("ytest" . $target_file);

            require_once("../config.php");

            $result = $conn->query("INSERT INTO movies (title, genre, duration, image_path, sinopsis) 
                VALUES('$title','$genre','$duration','$target_file', '$sinopsis')");

            header("Location: ../index.php");
        }

        
    ?>