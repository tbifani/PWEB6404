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

                <h2 id="jakul">Jadwal Kuliah</h2>
                <img src="header.jpg" style="margin-bottom: 40px; width: 100%;">
                <table>
                    <tr>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Ruang</th>
                        <th>Mata Kuliah</th>
                    </tr>
                    <tr>
                        <td>Senin</td>
                        <td>18.30 - 21.00</td>
                        <td>H.3.1</td>
                        <td>Perencanaan Sumber Daya Perusahaan</td>
                    </tr>
                    <tr>
                        <td>Selasa</td>
                        <td>18.30 - 21.00</td>
                        <td>H.3.11</td>
                        <td>Perencanaan Strategis Sistem Informasi</td>
                    </tr>
                    <tr>
                        <td>Rabu</td>
                        <td>
                            08.40 - 10.20 <br>
                            12.30 - 14.10 <br>
                            18.30 - 21.00
                        </td>
                        <td>
                            H.4.6 <br>
                            H.5.10 <br>
                            H.3.11
                        </td>
                        <td>
                            Pemrograman WEB <br>
                            Analisa dan Perancangan Sistem Informasi II <br>
                            Manajemen Rantai Pasok
                        </td>
                    </tr>
                    <tr>
                        <td>Kamis</td>
                        <td>
                            08.40 - 10.20 <br>
                            10.20 - 12.00 <br>
                            12.30 - 14.10
                        </td>
                        <td>
                            Kulino <br>
                            D.2.B <br>
                            D.2.K
                        </td>
                        <td>
                            Bahasa Indonesia <br>
                            Pemrograman WEB <br>
                            Pemrograman Berorientasi Objek
                        </td>
                    </tr>
                    <tr>
                        <td>Jumat</td>
                        <td>
                            07.00 - 08.40 <br>
                            08.40 - 10.20
                        </td>
                        <td>
                            H.3.9 <br>
                            H.3.9
                        </td>
                        <td>
                            Analisa dan Perancangan Sistem Informasi <br>
                            Pemrograman Berorientasi Objek
                        </td>
                    </tr>
                </table>
                    
            </div>
         </div>
    </div>
</body>
</html>