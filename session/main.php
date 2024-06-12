<?php
    session_start();
    include('dbconnect.php');

    if(isset($_SESSION['views']))
    {
        echo "SELAMAT DATANG, ", $_SESSION['nama'];
        $rs = $k->query("SELECT * FROM users WHERE active = 1");
        $data = $rs->fetch_all(MYSQLI_ASSOC);

        ?>
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
        <?php
                $i = 1;
                foreach($data as $value)
                {
                ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $value['nama']?></td>
                        <td><?php echo $value['username']?></td>
                        <td><?php echo $value['email']?></td>
                        <td><?php echo $value['active']==1?"Aktif":"Tidak Aktif"?></td>
                        <td><a href="edit.php?urut=<?php echo $value['id']?>">Edit</a> | <a href="delete.php?urut=<?php echo $value['id']?>">Delete</a></td>
                    </tr>
                <?php
                    $i++;
                }
        ?>
            </table>
        <?php
    }
    else
    {
        echo "session belum diset";
        echo '<a href="session.php">Set session disini</a>';
    }