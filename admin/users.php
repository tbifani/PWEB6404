<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">User</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <?php
        session_start();
        include('dbconnect.php');

        if(isset($_SESSION['views']))
        {
            // echo "SELAMAT DATANG, ", $_SESSION['nama'];
            $rs = $k->query("SELECT * FROM admin WHERE active = 1");
            $data = $rs->fetch_all(MYSQLI_ASSOC);
        ?>
          <table width="100%" border="1">
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Prodi</th>
                <th>Alamat</th>
            </tr>
            <?php
                $i = 1;
                foreach($data as $value)
                {
                ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $value['nim']?></td>
                        <td><?php echo $value['nama']?></td>
                        <td><?php echo $value['email']?></td>
                        <td><?php echo $value['prodi']?></td>
                        <td><?php echo $value['alamat']?></td>
                        <td><?php echo $value['active']==1?"Aktif":"Tidak Aktif"?></td>
                        <td><a href="edit.php?id=<?php echo $value['id']?>">Edit</a> | <a href="delete.php?id=<?php echo $value['id']?>">Delete</a></td>
                    </tr>
                <?php
                    $i++;
                }
        ?>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->