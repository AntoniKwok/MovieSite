<?php 

    $dir = "images/";
        if(isset($_POST['Submit'])) {
            $title = $_POST['title'];
            $genre = $_POST['genre'];
            $duration = $_POST['duration'];
            $sinopsis = $_POST['sinopsis'];
            
            $target_file = $dir.basename($_FILES["image"]["name"]);

            // die("ytest" . $target_file);

            require_once("../config.php");
            $id = $_POST['id'];
            if($target_file != $dir.""){
                move_uploaded_file($_FILES["image"]["tmp_name"], "../images/".basename($_FILES["image"]["name"]));
            }else{
                $temp = $conn->query("SELECT image_path FROM movies WHERE id = ".$id);
                foreach($temp as $result) {
                    $target_file = $result['image_path'];
                }
            }

            $conn->query("UPDATE movies SET title='$title', 
            genre='$genre', duration='$duration', image_path='$target_file', 
            sinopsis='$sinopsis' WHERE id='$id'");
            
            header("Location: ../../index.php");
        }

        
    ?>