<?php
    include('dbconnect.php');
    $id = $_GET['urut'];
    $data = $k->query("SELECT * FROM admin WHERE id='".$id."'");
    if($data->num_rows == 1)
    {
        $datauser = $data->fetch_assoc();
        ?>
        <form action="editaction.php" method="post">
		<input type="text" id="" name="nim" required placeholder="username" value="<?php echo $datauser['nim']?>">
        <input type="text" id="" name="nama" required placeholder="nama lengkap" value="<?php echo $datauser['nama']?>">
        <input type="email" id="" name="email" required placeholder="email" value="<?php echo $datauser['email']?>">
        <input type="text" id="" name="prodi" required placeholder="username" value="<?php echo $datauser['prodi']?>">
		<input type="text" id="" name="alamat" required placeholder="username" value="<?php echo $datauser['alamat']?>">
        <input type="hidden" id="" name="userid" value="<?php echo $datauser?>">
		<input type="submit" value="Simpan">
	    </form>
        <?php
    }
    else
    {
        echo "data tidak ditemukan";
    }