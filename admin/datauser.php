<?php
    include('dbconnect.php');
    $_SESSION['views'] = 1;

    if(isset($_SESSION['views']))
    {
        $_SESSION['views']++;
    }
    else
    {
        $_SESSION['views'] = 1;
    }

    if(isset($_SESSION['views']))
    {
        // echo "SELAMAT DATANG, ", $_POST['nama'];
        ?>
        <form action="insert.php" method="post">
                <input type="text" name="nim" required placeholder="NIM"><br>
                <input type="text" name="nama" required placeholder="Nama Lengkap"><br>
                <input type="email" name="alamat" required placeholder="Email"><br>
                <input type="text" name="prodi" required placeholder="Program Studi"><br>
                <input type="text" name="alamat" required placeholder="Alamat"><br>
                <input type="submit" value="Simpan">
        </form>
        