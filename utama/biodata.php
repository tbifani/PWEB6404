<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Tiara Bifani</title>
    <style>
        body{
            padding-left: 5%;
            padding-right: 5%;
        }
        .nav-link{
            list-style: none;
        }
        .nav-link li{
            grid-auto-columns: max-content;
            margin: 10px;
            color: #0e2066;
        }
        span.field{
            font-weight: bold;
            width: 200px;
        } 
        .info{
            margin-bottom: 5px;
        }
        .info span{
            display:inline-block;
            border: 1px slategray;
        }
        .info-value{
            margin-left: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
        }
        th, td {
            border: 1px solid black;
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #425abb;
            color: white;
        }
    </style>
</head>
<body>

    <?php
    session_start ();
    if($_SESSION ['is_logged_in'] != True)
    {
        header("Location: ../formlogin.php");
        exit();
    }
    ?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3" style="background-color: #a9ceec;">
            <nav class="nav-link" style="position: fixed;">
                <h1 style="color: white;">Welcome, <br> <?php echo $_SESSION['nim']; ?>!</h1>
                <li><a href="beranda.php">Beranda</a></li>
                <li><a href="jakul.php">Jadwal Kuliah</a></li>
                <li><a href="biodata.php">Biodata</a></li>
                <li><a href="logout.php">Logout</a></li>
            </nav>
            </div>

            <div class="col-md-9" style="background-color: white">
                <img src="welcome.jpg" style="width: 100%;">
                <h2 id="biodata">Biodata</h2>
                <table>
                <tr>
                    <td style="border: 0px; border-color: transparent; width: 30%; margin: 0%;">
                        <img src="tiara.jpg" height="300px" width="300pxs">
                    </td>
                    <td style="border: 0px; border-color: transparent; margin: 70%;">
                        <div>
                            <div class="info">
                                <span class="field">NIM</span> <span class="info-value">: A12.2022.06803</span>
                            </div>
                            <div class="info">
                                <span class="field">Nama</span> <span class="info-value">: Tiara Bifani</span>
                            </div>
                            <div class="info">
                                <span class="field">Jenis Kelamin</span> <span class="info-value">: Perempuan</span>
                            </div>
                            <div class="info">
                                <span class="field">Tempat, tanggal lahir</span> <span class="info-value">: Grobogan, 1 April 2004</span>
                            </div>
                            <div class="info">
                                <span class="field">Asal Sekolah</span> <span class="info-value">: SMAN 1 Gubug</span>
                            </div>
                            <div class="info">
                                <span class="field">Alamat tempat tinggal</span> <span class="info-value">: Gubug, Grobogan, Jawa Tengah</span>
                            </div>
                            <div class="info">
                                <span class="field">E-mail</span> <span class="info-value">: 112202206803@mhs.dinus.ac.id</span>
                            </div>
                        </div>
                    </td>
                </tr>
               </table>
            </div>
         </div>
    </div>
</body>
</html>