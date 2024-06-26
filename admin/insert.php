<?php
    include("dbconnect.php");

    // if($jenis == 'users')
    // {

    // }
    // elseif($jenis == 'mahasiswa')
    // {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $prodi = $_POST['prodi'];
        $alamat = $_POST['alamat'];
    
        $insert = $k->query("INSERT INTO admin (nim,nama,email,prodi,alamat,active) VALUES ('".$nim."','".$nama."','".$email."','".$prodi."','".$alamat."',1)");
    // }

    if($insert)
    {
       header("Location: index.php?page=users".$page);
    }
    else
    {
        echo "insert data gagal";
    }