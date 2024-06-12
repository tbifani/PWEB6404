<?php
    $username = $_POST ['username'];
    $password = $_POST ['password'];

    $u = 'A12.2022.06819';
    $p = 'polke001';

    if($username == $u AND $password == $p)
    {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['is_logged_in'] = TRUE;

        header("Location: beranda.php");
        exit;
    }
    else
    {
        echo "username atau password salah";
    }

?>
