<?php
require_once 'Databaseclass.php';
class User_authentication extends Database
{
    private $data;
    public function __construct($postData)
    {
        $this->data = $postData;
    }

    public function validate_user()
    {
        $username = $this->data['userName'];
        $password = $this->data['password'];

        $this->authenticate($username, $password);
    }

    private function authenticate($username, $user_password)
    {
        $sql = "SELECT * FROM useraccount WHERE userName = ?";
        $conn = $this->connect();
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: signin.php?error=connectionerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 's', $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($result->num_rows == 0) {
                header("Location: signin.php?error=noresultfound");
                exit();
            } else {
                if ($data = $result->fetch_array(MYSQLI_BOTH)) {
                    $trimmedusrpass = trim($user_password);
                    $pwdCheck = password_verify($trimmedusrpass, $data['userPassword']);
                    if ($pwdCheck == false) {
                        header("Location: signin.php?error=wrongpwd");
                        exit();
                    } else if ($pwdCheck == true) {
                        session_start();
                        $_SESSION['accountId'] = $data['accountId'];
                        header("Location: game.php?loggedStatus=true");
                        exit();
                    }
                }
            }
        }
    }
}