<?php
    session_start();

    $_SESSION['views'] = 1;

    if(isset($_SESSION['views']))
    {
        $_SESSION['views']++;
    }
    else
    {
        $_SESSION['views'] = 1;
    }