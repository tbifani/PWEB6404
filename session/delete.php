<?php
    if($_SESSION['is_logged_in'] != TRUE)
    {
        header("Location: form.php");
    }
    include("dbconnect.php");

    $id = $_GET['urut'];
    $delete = $k->query("DELETE FROM users WHERE id='".$id."'");
    if($delete)
    {
        header("Location: main.php");
    }
    else
    {
        echo "hapus data gagal";
    }