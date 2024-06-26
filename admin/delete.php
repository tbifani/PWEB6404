<?php
    include("dbconnect.php");

    $jenis = $_GET['jenis'];
    $page = $_GET['page'];
    
    if($jenis == 'users')
    {
        $id = $_GET['id'];
        $delete = $k->query("DELETE FROM admin WHERE id=".$id);
    }

    if($delete)
    {
        header("Location: index.php?page=users".$page);
    }
    else
    {
        echo "hapus data gagal";
    }