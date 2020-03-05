<?php
require "header.php";
?>

<main>
    <h1>Reset Your password</h1>
    <p>An email will be sent to you with instructions</p>
    <form action="includes/reset-request.inc.php" method="post">
        <input type="text" name="email" placeholder="Enter your e-mail address...">
        <button type="submit" name="reset-request-submit">Receive new password by email</button>
    </form>
    <?php
        if(isset($_GET["reset"])){
            if($_GET["reset"] == "success"){
                echo '<p class ="signupsuccess">Check youremail</p>'; 
            }
        }
    ?>
</main>
<?php
require "footer.php";
?>