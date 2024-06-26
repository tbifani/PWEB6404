<?php
    include("dbconnect.php");
    $id = $_GET['urut'];
    $jenis = $_GET['jenis-data'];
    $page = $_GET['page'];
    if($jenis == 'mahasiswa')
    {

    }
    elseif($jenis == 'users')
    {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $prodi = $_POST['prodi'];
        $alamat = $_POST['alamat'];
    
        $insert = $k->query("INSERT INTO admin (nim,nama,email,prodi,alamat,active) VALUES ('".$nim."','".$nama."','".$email."','".$prodi."','".$alamat."',1)");
    }

    if($insert)
    {
       header("Location: index.php?page=users".$page);
    }
    else
    {
        echo "insert data gagal";
    }