<!DOCTYPE html>
<html lang="en">
<?php
require_once '../includes/autoclassloader.inc.php';
if (isset($_POST['signup-button'])) {
    $validator = new User_registration_validation($_POST);
    $validator->validateForm();
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    .main-form {
        width: 80%;
        margin: auto;
        margin-top: 60px;
    }

    body {
        background-color: rgba(218, 218, 218, 0.938);
    }
    </style>
</head>

<body>
    <div class="main-wrapper">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-secondary">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signin.html">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.html">Sign Up</a>
                    </li>
                </ul>
            </div>
        </nav>

        <form class="main-form" action="signup.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-4 m-auto">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="firstname" placeholder="First Name"
                        value="<?php echo (isset($_POST['signup-button']))  ? htmlspecialchars($_POST['firstname']) : '' ?>"
                        required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4 m-auto">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="lastname" placeholder="Last Name"
                        value="<?php echo (isset($_POST['signup-button']))  ? htmlspecialchars($_POST['lastname']) : '' ?>"
                        required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4 m-auto">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email"
                        value="<?php echo (isset($_POST['signup-button']))  ? htmlspecialchars($_POST['email']) : '' ?>"
                        required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4 m-auto">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" name="phonenumber" placeholder="Phone number"
                        value="<?php echo (isset($_POST['signup-button']))  ? htmlspecialchars($_POST['phonenumber']) : '' ?>"
                        required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4 m-auto">
                    <label>Date of Birth</label>
                    <input type="date" class="form-control" name="dateofbirth" placeholder="date of birth"
                        value="<?php echo (isset($_POST['signup-button']))  ? htmlspecialchars($_POST['dateofbirth']) : '' ?>"
                        required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4 m-auto">
                    <label>Address</label>
                    <input type="text" class="form-control" name="location" placeholder="Eg. Nyarutarama, Kigali"
                        value="<?php echo (isset($_POST['signup-button']))  ? htmlspecialchars($_POST['location']) : '' ?>"
                        required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4 m-auto">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password"
                        value="<?php echo (isset($_POST['signup-button']))  ? htmlspecialchars($_POST['password']) : '' ?>"
                        required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4 m-auto">
                    <label>Repeat Password</label>
                    <input type="password" class="form-control" name="repeatpassword" placeholder="Repeat password"
                        value="<?php echo (isset($_POST['signup-button']))  ? htmlspecialchars($_POST['repeatpassword']) : '' ?>"
                        required>
                </div>
            </div>
    </div>
    <button type="submit" name="signup-button" value="submit"
        class="btn btn-outline-info col-4 btn-sign btn-block ml-auto mr-auto mt-3">Sign
        Up</button>
    </form>
    <?php
        if (isset($_GET["registration"])) {
            if ($_GET["registration"] == "successful") {
                echo '<p>You have registered successfully</p>';
            }elseif($_GET["registration"] == "failed"){
                echo '<p>regitration failed</p>';
            }
        }
        ?>
    </div>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>