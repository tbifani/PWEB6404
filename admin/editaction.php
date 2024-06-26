<?php
    // if($_SESSION['is_logged_in'] != TRUE)
    // {
    //     header("Location: form.php");
    // }
    include("dbconnect.php");

    $id = $_GET['urut'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];

    $edit = $k->query("UPDATE admin SET nim='".$nim."', nama='".$nama."', email='".$email."', prodi='".$prodi."', alamat='".$alamat."' WHERE id='".$id."'");

    if($edit)
    {
       header("Location: index.php?page=users".$page);
    }
    else
    {
        echo "edit data gagal";
    }