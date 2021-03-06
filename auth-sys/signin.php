<?php
    if (isset($_POST['username'])){
        session_start(); // Starts the session

        $name = $_SESSION['username'];
        $email = $_SESSION['email'];
        header('Location: home.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Sign In</title>

        <style>
             input[type=text],input[type=password],input[type=submit]{
                padding:20px;
                margin:20px 20px 20px 20px;
                border:0;
                box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
                border-radius:20px;
                width:50%;

            }
        </style>
    </head>
<body>
    <h2>Sign in to proceed</h2>
    <form method="post" action="home.php">
        <div>
            Username: <input type="text" name="username" placeholder="Username or Email"><br>
            Password: <input type="password" name="password" placeholder="Password">
                        <input type="submit" value="Sign in">
        </div>
    </form>

</body>
</html>