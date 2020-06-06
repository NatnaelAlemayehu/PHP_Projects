<?php
require_once 'signinclass.php';
if (isset($_POST['signinButton'])) {
    $auth = new User_authentication($_POST);
    $auth->validate_user();
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Signin Template for Bootstrap</title>
    <style>
    .form-signin {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    body {
        background-color: rgb(195, 216, 219);
    }

    .col-12 {
        padding: 0;
    }

    .inp {
        width: 20rem;
        height: 3rem;
    }

    .btn-sig {
        height: 3rem;
    }

    .main-form {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        width: 80%;
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

    .main-wrapper {
        background-image: url("logo.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 100vh;
        position: relative;
    }

    img {
        display: inline-block;
    }
    </style>
</head>

<body>
    <div class="main-wrapper">
        <form class="main-form" action="signin.php" method="POST">

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
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="password" required>
                </div>
            </div>


            <button class="btn btn-primary col-4 btn-sign btn-block ml-auto mr-auto mt-3" name="signinButton"
                type="submit">Sign
                in</button>
            <div class="form-group col-md-4 m-auto">
                <p>Don't have an account yet? <a href="index.php">Signup</a></p>
            </div>

        </form>
    </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>