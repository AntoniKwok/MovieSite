<?php 
        if(isset($_POST['Submit'])) {
            $first_name = $_POST['fname'];
            $last_name = $_POST['sname'];
            $username = $_POST['uname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $pass = md5($password);
            $fullname = $first_name." ".$last_name;
            require_once("../config.php");
            $result = $conn->query("INSERT INTO users (fullname, username, email, password) 
                VALUES('$fullname','$username','$email','$pass')");
            header("Location: login.php");
        }

        
    ?>