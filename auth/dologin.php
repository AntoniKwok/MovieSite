<?php
        session_start();
        if(isset($_POST['Submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $pass = md5($password);

            require_once("../config.php");
            $result = $conn->query("SELECT * FROM users WHERE email = '$email' AND password = '$pass'");

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                    $_SESSION['auth'] = true;
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['user'] = $row['username'];
                    $_SESSION['role'] = $row['name'];
                    
                    header("Location: ../index.php");
                }
                
            }
            else {
                echo("Invalid username and password");

            }
        
