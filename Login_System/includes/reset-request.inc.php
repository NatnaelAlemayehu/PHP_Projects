<?php
require_once "lib/random.php";

if (isset($_POST['reset-request-submit'])){
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);
    $url = "www.family-tutors.com/php/create-new-password.php?selector=".$selector."&validator=".bin2hex($token);
    $expires = date("U") + 1800;
    require 'dbh.inc.php';
    $userEmail = $_POST["email"];
    $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../reset-password.php?error=connectionfailed");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, 's', $userEmail);
        mysqli_stmt_execute($stmt);         
    }
    
    $sql = "INSERT INTO pwdreset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?,?,?,?);";
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../reset-password.php?error=connectionfailed");
        exit();
    } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, 'ssss', $userEmail,$selector,$hashedToken,$expires);
        mysqli_stmt_execute($stmt);        
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
    $to = $userEmail;
    $ubject = 'Reset your password for Intaho';
    $message .= '<p>We received a pass request. The link to rewqddfs </p>';
    $message .= '<p>Here is your password reset link: </br>';
    $message .= '<a href="'.$url.'">'.$url.'</a></p>';
    $headers = "From: Intaho <info@familytutors.com>\r\n"; 
    $headers .= "Reply-To: info@familytutors.com\r\n";
    $headers .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);
    
    header("Location: ../reset-password.php?reset=success");
}else{
    header("Location: ../index.php");
    exit();
}

// if ($row = mysqli_stmt_num_rows($stmt)) {
// } else {
// }