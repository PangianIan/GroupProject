<?php

    require_once "config.php";

    if(!isset($_POST["username"], $_POST["password"])) {
        exit("Please enter a valid username and password");
    }
    if(empty($_POST["username"]) || empty($_POST["password"])) {
        exit("Please enter a valid username and password");
    }
    if ($stmt = $con->prepare('SELECT username FROM users WHERE username = ?')) {
        $username = $_POST['username'];
        $cleanUsername = mysqli_real_escape_string($con, $username);
        $stmt->bind_param('s', $cleanUsername);
        $stmt->execute();
        $stmt->store_result();
        if($stmt->num_rows > 0) {
            echo "Username already exists, please choose another";
        } else {
            if ($stmt = $con->prepare('INSERT into users(username, password) values (?, ?)')) {

                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $cleanPassword = mysqli_real_escape_string($con, $password);
                $stmt->bind_param('ss', $cleanUsername, $cleanPassword);
                $stmt->execute();
                echo'Account made, please head to login screen to log in';
            }
            else{
                echo'Unexpected statement error in registering user';
            }
        }
        $stmt->close();
    }
    else{
        echo'Unexpected statement error in checking availability';
    }
    if (!$stmt->execute()) {
        echo 'Execute failed: ' . $stmt->error;
    }
    $con->close();
?>

<br><a href="HomePage.php">HOME</a>