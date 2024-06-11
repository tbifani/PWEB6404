<?php
    $nim = $_POST ['nim'];
    $pass = $_POST ['pass'];

    $n = 'A12.2022.06803';
    $p = 'polke001';

    if($nim == $n AND $pass == $p)
    {
        session_start();
        $_SESSION['nim'] = $nim;
        $_SESSION['is_logged_in'] = TRUE;

        header("Location: beranda.php");
        exit;
    }
    else
    {
        echo "username atau password salah";
    }

?>
