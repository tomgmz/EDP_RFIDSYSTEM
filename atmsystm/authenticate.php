<?php
    require_once './database/config.php';

    $is_validate = false;
    $databaseConn = new Database();
    $connection = $databaseConn->GetConnection();

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $checkIfExist = sprintf('SELECT * FROM useraccounts WHERE email = "%s"', 
                                $connection->real_escape_string($_POST['email']));
        $result = $connection->query($checkIfExist);
        $userAccount = $result->fetch_assoc();

        if ($userAccount) {
            if (password_verify($_POST['password'], $userAccount['password'])) {
                session_start();
                session_regenerate_id();
                $_SESSION['user_email'] = $userAccount['email'];
                header("Location: ./dashboard/");
                exit;
            }
        }
    }
    $is_validate = true;
?>