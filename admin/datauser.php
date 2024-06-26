<?php
    include('dbconnect.php');
    $_SESSION['views'] = 1;
    if(isset($_SESSION['views']))
    {
        // echo "SELAMAT DATANG, ", $_POST['nama'];
        $rs = $k->query("SELECT * FROM admin WHERE active = 1");
        $data = $rs->fetch_all(MYSQLI_ASSOC);
        ?>
        <form action="insert.php" method="post">
            <label for="nim">NIM:</label>
            <input type="text" name="nim" required placeholder="NIM anda"><br>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" required placeholder="Nama Lengkap anda"><br>
            <label for="email">Email:</label>
            <input type="email" name="email" required placeholder="Email anda"><br>
            <label for="prodi">Program Studi:</label>
            <input type="text" name="prodi" required placeholder="Isi Program Studi"><br>
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" required placeholder="Alamat anda"><br>
            <input type="submit" value="Simpan">
        </form>
        <?php
    }
    else
    {
        echo "data tidak ditemukan";
    }