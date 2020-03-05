<?php
if (isset($_POST['reset-password-submit'])) {
    require 'dbh.inc.php';
    $selector = strval($_POST["selector"]);
    $validator = $_POST["validator"];
    $password = $_POST["pwd"];
    $passwordRepeat = $_POST["pwd-repeat"];

    if (empty($password) || empty($passwordRepeat)) {
        header("Location: ../signup.php");
        exit();
    } else if ($password != $passwordRepeat) {
        header("Location: ../signup.php");
        exit();
    }
    $currentDate = intval(date("U"));
    $sql = "SELECT * FROM users;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../reset-password.php?error=connectionfailed");
        exit();
    } else {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        if (!$row) {
            echo '<h1>' . substr($selector, 0, -1) . '</h1>';
            echo "No result from database";
            exit();
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row["emailUsers"], $row["uidUsers"];
            }

            $tokenBin = hex2bin(substr($validator, 0, -1));
            $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

            if ($tokenCheck === true) {
                echo "token not similar";
                exit();
            } elseif ($tokenCheck === false) {
                $tokenEmail = $row['pwdResetEmail'];
                $sql = "SELECT * FROM users WHERE emailUsers=?;";

                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "There was an error";
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, 's', $tokenEmail);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    if (!$row = mysqli_fetch_assoc($result)) {
                        echo "Email doesn't exist!";
                    } else {
                        $sql = "UPDATE users SET pwdUsers=? WHERE emailUsers=?";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            echo "There was an error";
                            exit();
                        } else {

                            $new_hashed_pass = password_hash($password, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt, 'ss', $new_hashed_pass, $tokenEmail);
                            mysqli_stmt_execute($stmt);

                            $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?";
                            $stmt = mysqli_stmt_init($conn);
                            if (!mysqli_stmt_prepare($stmt, $sql)) {
                                echo "There was an error";
                                exit();
                            } else {
                                mysqli_stmt_bind_param($stmt, 's', $tokenEmail);
                                mysqli_stmt_execute($stmt);
                                header("Location: ../signup.php?newpwd=passwordupdated");
                            }
                        }
                    }
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: ../index.php");
    exit();
}