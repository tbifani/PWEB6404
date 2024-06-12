<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Ilfa Neilna</title>
    <style>
        img{
            float: left;
            margin: 150px auto;
            margin-right: 10px;
        }
        li{
            list-style-type: none ;
            padding: 5px;
            margin: 5px;
            color: wheat;
           
        }
        li:hover{
            background-color: rgb(57, 3, 251);
            transition:.5s ease-in-out ;
        }
        li a{
            text-decoration: none;
            color: white;
        }
    a{
        margin-bottom: 15%;
        text-align: end;
    }
    </style>
</head>
<body>

    <?php
    session_start ();
    if($_SESSION ['is_logged_in'] != True)
    {
        header("Location: ../form.php");
        exit();
    }
    ?>

<div class="container-fluid">
    <div class="row">
        <!-- HEADER -->
        <div class="col-md-12" style="background-color:rgb(0, 84, 209) ; height: 80px;">
            <h1 style="color: azure; font-family:'Times New Roman', Times, serif ; align-content: center;">
                Welcome, <?php echo $_SESSION ['username'] ?>
            </h1>
        </div>
        <div class="col-md-2" style="background-color: rgb(0, 65, 139);">
            <li><a href="beranda.php">Beranda</a></li>
            <li><a href="biodata.php">Biodata</a></li>
            <li><a href="jadwalKuliah.php">Jadwal Kuliah</a></li>
            <li><a href="logout.php">Logout</a></li>
        </div>
        <div class="col-md-10" style="background-color: rgb(3, 106, 175); bottom:1% ; height: 120vh;">
           
        <p>
            Halo.. <br>
            Ini tentang aku sebagai penyuka hewan berbulu seperti kucing 
            <br>
            aku adalah seorang pecinta hewan berbulu seperti kucing, entah mengapa sangat suka dengan yang namanya kucing
            ,walaupun pernah dicakar maupun digigit entah mengapa aku tetap menyukai hewan itu. kucing itu lucu, menggemaskan meskipun
            terkadang garang dan suka menyakar, tapi dia tetap lucu. intinyaaa aku sangaaaaaattt suka kucing <br>
        </p>
        <div class="row">
            <div class="col" style="color: rgb(2, 214, 179); height: 35vh; box-shadow:0 4px 6px  rgb(85, 85, 85)">
              <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1661753020/attached_image/inilah-cara-merawat-anak-kucing-yang-tepat.jpg" style="height: 200px; width: 250px; float: left; margin: 15px;">
              <h4 style="color: rgb(6, 6, 6);"> Foto Kucing Menggemaskan</h4>
            </div>
            <div class="col" style="color: rgb(2, 214, 179) ; height: 40vh; box-shadow:0 4px 8px rgb(85, 85, 85);">
                <img src="https://radarkuningan.disway.id/upload/6d04ec57a124a93ef8e7dc3d221420ac.jpg" style="height: 200px; width: 190px; float: left; margin: 20px;">
                <h4 style="color: rgb(6, 6, 6);"> Foto Kucing Garang</h4>
            </div>
            <div class="col" style="color: rgb(0, 201, 184); height: 35vh; box-shadow: 0 4px 6px rgb(85, 85, 85);">
                <img src="https://static.republika.co.id/uploads/images/inpicture_slide/kucing-bernama_230808173625-261.jpeg" style="height: 200px; width: 250px; float: left; margin: 15px;">
                <h4 style="color: rgb(6, 6, 6);"> Foto Kucing Lucu</h4>
            </div>
          </div>
          <p>
            Sudah Lihat ??? <br>
            Sangat sangat lucu bukaaaann<br>
        </p>
        </div>
    </div>
</div>
</body>
</html>