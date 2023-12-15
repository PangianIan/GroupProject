<?php

    require_once "config.php";

    if(!isset($_POST["username"], $_POST["password"])) {
        exit("Please enter a valid username and password");
    }
    if(empty($_POST["username"]) || empty($_POST["password"])) {
        exit("Please enter a valid username and password");
    }
    if ($stmt = $con->prepare('SELECT password FROM users WHERE username = ?')) {
        $username = $_POST['username'];
        $cleanUsername = mysqli_real_escape_string($con, $username);
        $stmt->bind_param('s', $cleanUsername);
        $stmt->execute();
        $stmt->store_result();
        if($stmt->num_rows > 0) {
            $stmt->bind_result($password);
            $stmt->fetch();
            if(password_verify($_POST['password'], $password)) {
                $_SESSION['loggedIn'] = true;
                echo 'Logged in';
            }
            else {
                echo'Incorrect username or password, please try again';
            }
        }
        else {
            echo'Incorrect username or password, please try again';
        }
        $stmt->close();
    }
    else{
        echo'Unexpected statement error';
    }
?>
<br><a href="HomePage.php">HOME</a>