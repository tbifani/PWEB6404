<?php
    $server = '127.0.0.1'; //localhost
    $username = 'bdl'; //atau root
    $password = 'sehunganteng'; //atau root
    $namadb = 'a122206803';

    mysqli_connect($server, $username, $password, $namadb);

    $k = new mysqli($server, $username, $password, $namadb);
    if($k->connect_errno)
    {
        echo "failed", $k->connect_error;
        exit();
    }