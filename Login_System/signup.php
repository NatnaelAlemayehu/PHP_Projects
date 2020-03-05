<?php 
require "header.php";
?>

<main>
    <h1>Signup</h1>
    <h3>Nooooooo</h3>
    <input="text" name="pwd" placeholder="Reapeat Password">
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="Email">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat Password">
            <button type="submit" name="signup-submit">Signup</button>
        </form>
        <?php 
        if (isset($_GET["newpwd"])){
            if($_GET["newpwd"] == "passwordupdated"){
                echo '<p>Your pass has been reset</p>';
            }
        }
        ?>
        <a href="reset-password.php">Forgot Password? </a>
</main>
<?php 
require "footer.php";
?>