<?php
require_once 'signupclass.php';
if (isset($_POST['signup-button'])) {
    $validator = new User_registration($_POST);
    $validator->register();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    .main-form {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        width: 60%;
        color: black;
        font-weight: bold;
        background-color: white;
        opacity: 0.8;
    }

    @media(max-width:767px) {
        .main-form {
            width: 100% !important;
        }
    }

    a {
        color: black;
        font-size: 20px;
    }

    body {
        background-color: rgba(218, 218, 218, 0.938);
    }

    .main-wrapper {
        background-image: url("logo.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 100vh;
        position: relative;
    }
    </style>
</head>

<body>
    <div class="main-wrapper">
        <form class="main-form" action="index.php" method="POST">
            <p style="font-size: 40px; font-weight: bold; text-align:center"><img class="navbar-brand" src="tetris.png"
                    width="40px" />Welcome to Tetris Game</p>
            <div class="form-row">
                <div class="form-group col-md-4 m-auto">
                    <label>Username</label>
                    <input type="text" class="form-control" name="userName" placeholder="User name" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4 m-auto">
                    <label>Email Address</label>
                    <input type="email" class="form-control" name="emailAddress" placeholder="email" required>

                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4 m-auto">
                    <label>Country</label>
                    <input type="text" class="form-control" name="country" placeholder="country" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4 m-auto">
                    <label>Password (Must be at least 8 characters)</label>
                    <input type="password" class="form-control" name="password" placeholder="password" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4 m-auto">
                    <label>Repeat Password</label>
                    <input type="password" class="form-control" name="repeatpassword" placeholder="password" required>
                </div>
            </div>

            <button type="submit" name="signup-button" value="submit"
                class="btn btn-primary col-4 btn-sign btn-block ml-auto mr-auto mt-3">Sign
                Up</button>
            <div class="row">
                <div class="col-md-4 m-auto">
                    <p>Already have an account? <a href="signin.php">Sign In</a></p>

                </div>
            </div>
        </form>
    </div>

    </div>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>