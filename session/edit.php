<?php
    include('dbconnect.php');
    $id = $_GET['urut'];
    $data = $k->query("SELECT * FROM users WHERE id='".$id."'");
    if($data->num_rows == 1)
    {
        $datauser = $data->fetch_assoc();
        ?>
        <form action="editaction.php" method="post">
		<input type="text" id="" name="username" required placeholder="username" value="<?php echo $datauser['username']?>">
        <input type="text" id="" name="nama" required placeholder="nama lengkap" value="<?php echo $datauser['nama']?>">
        <input type="email" id="" name="email" required placeholder="email" value="<?php echo $datauser['email']?>">
        <input type="password" id="" name="passwd" required placeholder="kosongi jika tidak mau ganti password">
        <input type="hidden" id="" name="userid" value="<?php echo $datauser?>">
		<input type="submit" value="Simpan">
	    </form>
        <?php
    }
    else
    {
        echo "data tidak ditemukan";
    }