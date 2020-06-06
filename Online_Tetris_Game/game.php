<?php
session_start();

function leaderboardcaller()
{
    require_once 'bestscoreclass.php';
    if (isset($_COOKIE["bestScore"])) {
        $update = new bestScore();
        $update->update();
        $score = new bestScore();
        $score->query();
    } else {
        $score = new bestScore();
        $score->query();
    }
}

if (isset($_POST['rate'])) {
    require_once 'rateclass.php';
    $rate = new rate($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Tetris game with Js</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    #score {
        display: inline-block;
        font-size: 20px;
        font-weight: bold;
    }

    #bestscore {
        display: inline-block;
        font-size: 20px;
        font-weight: bold;
    }

    .gridcontainer {
        display: grid;
        grid-template-columns: auto auto;
        /* border: 1px solid black; */

    }

    .container {
        margin-top: 80px;
    }

    body {
        background-color: #b1b4c7;
    }

    @media(max-width:767px) {
        .instructions {
            grid-column: 1/3 !important;
            margin-left: 0px !important;
        }

        .tetris {
            grid-column: 1/3;
            text-align: center;
        }

        .keys {
            display: grid !important;
            position: absolute;
            top: 490px;
            left: 125px;
        }

        .btn {
            position: relative;
            margin-top: 30px;
        }

        .scores {
            margin-top: 120px;
        }
    }

    .instructions {
        grid-column: 2/3;
        margin-left: 50px;
    }

    .navbar {
        background-color: #786aa9e6;
    }

    .keys {
        display: grid;
        grid-template-columns: auto auto auto;
        max-width: 90px;
        display: none;
    }

    .up {
        grid-column: 1/4;
        /* width: 30px; */
        margin-left: 40px;
    }

    .arr {
        border: 1px solid black;
        text-align: center;
        height: 40px;
        background-color: #001f3f;
        width: 40px;
        color: white;
    }

    .down {
        margin-top: 40px;
    }
    </style>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light nav-background">
        <img class="navbar-bran d" src="tetris.png" width="40px" />
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="signout.php">Signout<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="gridcontainer">
            <div class="tetris">
                <canvas id="tetris" width="200" height="400"></canvas>
                <div class="scores">
                    <div>
                        Current Score: <div id="score">0</div>
                    </div>
                    <div>
                        Best Score: <div id="bestscore"><?php leaderboardcaller(); ?></div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit" id="start">Start Game</button>
                <button class="btn btn-primary" type="submit" id="save">Save Game</button>

                <div class="keys">
                    <div class="up arr" id="uparrow"><i class="fa fa-arrow-up"></i></div>
                    <div class="left arr" id="leftarrow"><i class="fa fa-arrow-left"></i></div>
                    <div class="down arr" id="downarrow"><i class="fa fa-arrow-down"></i></div>
                    <div class="right arr" id="rightarrow"><i class="fa fa-arrow-right"></i></div>
                </div>
            </div>
            <div class="instructions">
                <p>This Tetris game challenges the player to create complete lines by moving differently-shaped
                    pieces –
                    the
                    tetrominoes, which scroll from the top to bottom of the playing field. </p>
                <p>The completed lines disappear
                    and grant the player points, and the player can proceed to fill the vacated spaces. The game
                    ends
                    when the playing field is filled to the point that additional pieces can no longer descend.</p>
                <p> The longer the player can delay this inevitable outcome, the higher their score will be.</p>
                <p> Each completed lines of tetriminoes add 10 points to the player</p>
                <p>If you are on laptop follow the instruction below else use arrow keys.</p>
                <p> Press <b>w</b> to rotate piece.<br> press <b>s</b> to movie piece down<br> press <b>a</b> to move
                    piece
                    left.<br> press <b>d</b> to move piece right.</p>
            </div>
        </div>



        <div class="rating">
            <form action="game.php" method="POST">
                <label>Your rating (scale of 1-5)</label><br>
                <input type="number" name="rating" placeholder="Your rating">
                <button type="submit" name="rate">Submit</button>
            </form>
        </div>
        <p style="text-align: center; font-size: 40px"><b>Leader Board - Top(10)</b></p>

        <?php
        require_once 'leaderboardclass.php';
        $leaderboard = new leaderBoard();
        ?>
    </div>

    <script src="dom.js" type="module">
    </script>
    <script src="tetris.js" type="module"></script>
    <!-- <script src="tetrominoes.js"></script> -->

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