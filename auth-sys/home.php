<?php 
    session_start();

    $name = $_SESSION['username'];
    $email = $_SESSION['email'];

    echo "Welcome $name.<br>";
    echo "You've successfully suscribed using $email."



?>