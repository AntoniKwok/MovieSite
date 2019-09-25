<?php
    session_start();
    require_once("../config.php");
    if(!isset($_SESSION['auth'])){
        header("Location: auth/login.php");
    }
    $result = mysqli_query($conn, "SELECT * FROM queues q JOIN users u ON q.user_id = u.id WHERE status='Pending' ORDER BY TIME ASC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Queue</title>
</head>
<body>
    <header>
        <h2>Admin Page</h2>
        <ul>
            <li><a href="#">View User</a></li>
            <li><a href="queue.php">View Queue</a></li>
        </ul>
        <h3>Queue Data</h3>
    </header>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                    // echo(md5('test'));
                    $idx = 1;
                    while($user_data = mysqli_fetch_array($result)) {         
                        echo "<tr>";
                        echo "<td>".$idx.".</td>";
                        echo "<td>".$user_data['first_name']." ".$user_data['last_name']."</td>";
                        echo "<td>".$user_data['username']."</td>";
                        echo "<td>".$user_data['email']."</td>";   
                        echo "<td>".$user_data['role']."</td></tr>";
                        $idx+=1;     
                    }
                ?>
            </tbody>
        </table>
        <?php 
            
        ?>
    </div>
    
</body>
</html>
