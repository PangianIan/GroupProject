<?php 
    session_start();
    $_SESSION['loggedIn'] = false;
    session_destroy();
    header('HomePage.html');
    echo'Logged Out';
?>
<br><a href="HomePage.php">HOME</a>