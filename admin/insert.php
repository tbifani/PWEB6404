<?php
    include("dbconnect.php");

    $jenis = $_GET['jenis-data'];
    $page = $_GET['page'];
    if($jenis == 'mahasiswa')
    {

    }
    elseif($jenis == 'users')
    {
        $user = $_POST['username'];
        $paswd = md5(sha1($_POST['paswd']));
        $email = $_POST['email'];
        $nama = $_POST['nama'];
    
        $insert = $k->query("INSERT INTO users (username,nama,email,paswd,active) VALUES ('".$user."','".$nama."','".$email."','".$paswd."',1)");
    }

    if($insert)
    {
       header("Location: index.php?page=".$page);
    }
    else
    {
        echo "insert data gagal";
    }