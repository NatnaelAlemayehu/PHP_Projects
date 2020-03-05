<?php 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/mycss.css">
    <title>Document</title>
</head>

<body>

</body>


<div class="header">
    <img src="img/logo.png" width="200px">
    <div class="header-right">
        <a class="active" href="#home">Home</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="signup.php">Signup</a>
        <?php
        if (isset($_SESSION['userId'])) {
            echo '<form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form>';
           
        } else {
            echo '<div>
    <form action="includes/login.inc.php" method="post">
        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <input type="text" placeholder="Enter Email" name="mailuid" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pwd" required>            
            <button type="submit" name="login-submit" class="registerbtn">Login</button>
        </div>
    </form>


</div>';
        }
         ?>


    </div>
</div>


</html>