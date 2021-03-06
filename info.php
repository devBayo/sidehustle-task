<?php 

 if(isset($_POST['name'])){
        $name = htmlentities($_POST['name']);
        $email = htmlentities($_POST['email']);

        echo "Hello $name<br>";
        echo "Your email is: $email <br><br><hr>";
 }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Information</title>
    </head>
<body>
    <form method="POST" action="info.php">
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label><br>
            <input type="text" name="email">
        </div>
        <input type="submit">
    </form>
</body>
</html>