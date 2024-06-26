<?php
    include('dbconnect.php');
    $id = $_GET['id'];
    $data = $k->query("SELECT * FROM admin WHERE id='".$id."'");

    if($data->num_rows == 1)
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
        <?php
    }
    else
    {
        echo "data tidak ditemukan";
    }