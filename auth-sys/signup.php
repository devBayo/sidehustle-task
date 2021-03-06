<?php
    if (isset($_POST['username'])){

        $name = htmlentities($_POST['username']);
        $email = htmlentities($_POST['email']);

        $user = ['name' => $name, 'email' => $email];
        $user = serialize($user);
        setcookie('user', $user, time()+ 3600); // sets the cookie


        session_start(); // Starts the session
        $_SESSION['username'] = $name;
        $_SESSION['email'] =  $email;
        
        

        header('Location: signin.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Sign up</title>

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
    <h2>Welcome!!!<br> This site is still under development in order to serve you better</h2>
    <p>Sign up to explore our content.</p>
    <form method="post" action="signup.php">
        <div>
            Username: <input type="text" name="username" placeholder="Username"><br>
            Email: <input type="text" name="email" placeholder="test@gmail.com"><br>
            Password: <input type="password" name="password" placeholder="Password">
                        <input type="submit" value="sign up">
        </div>
    </form>

    <p>Already an existing user?<a href="signin.php">Sign in.</a></p>
</body>
</html>