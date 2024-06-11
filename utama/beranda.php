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
                <h2 id="beranda">Beranda</h2>
               <p style="text-align: justify;">
                Selamat datang di jendela ke dalam hidup saya! Di sini, saya berbagi potongan kepribadian, kisah inspiratif, dan refleksi tentang perjalanan saya. Mari kita temukan kedekatan melalui pengalaman yang saya bagikan.
                Pada halaman beranda ini, saya akan menceritakan hal seru tentang saya! Diantaranya adalah hobi saya, penyanyi favorit saya, dan mungkin sedikit
                cerita tentang kehidupan sehari-hari saya? 
               </p>
               <p style="text-align: justify;">
                Okelah kalau begitu, berikut ini saya akan menceritakan semuanya!
               </p>
               <img src="intro.jpg" style="width: 100%;">
               <h3>[Hobi Saya]</h3>
               <p style="text-align: justify;">
                Selamat datang di dunia keindahan dan harmoni yang saya temukan dalam dua hobi saya yang tak tergantikan: memotret langit dan mendengarkan musik. Dalam setiap momen ketika langit membuka dirinya dengan keajaiban warna dan bentuk, saya merasa terhubung dengan kebesaran alam semesta. Dari gemerlap bintang hingga permainan awan yang dramatis, kamera saya adalah jendela ke dunia langit yang menakjubkan.
                Sementara itu, musik adalah sahabat setia dalam perjalanan kreatif saya. Dengan setiap melodi, saya merasakan emosi yang meluap-luap dan cerita yang tak terucapkan. Dari melodi yang mendayu hingga irama yang menggugah semangat, setiap nada adalah langkah yang membawa saya lebih dekat pada keselarasan dan keindahan.
                Dengan gabungan kedua hobi ini, saya menciptakan narasi visual dan auditif yang memukau. Setiap foto langit yang saya ambil adalah kisah yang dipenuhi dengan pesan dan makna, sementara musik menjadi latar yang sempurna untuk mengiringi perjalanan pencitraan saya. Bersama-sama, kedua hobi ini menginspirasi saya untuk melihat keindahan di sekitar saya dengan mata yang lebih dalam dan hati yang lebih terbuka.
               </p>
               <h3>[Favorit Saya]</h3>
               <p style="text-align: justify;">
                Tiba-tiba, semesta K-Pop memperoleh warna yang lebih berarti sejak pertama kali saya terjatuh ke dalam pesona boyband luar biasa, EXO. Mereka bukan hanya sekedar penyanyi dan penari; mereka adalah sumber inspirasi, semangat, dan kegembiraan bagi saya. Setiap ketukan lagu mereka, setiap gerakan koreografi yang anggun, membawa saya ke dunia yang penuh keajaiban dan emosi yang tak terlupakan.
                Ketika saya mendengarkan musik mereka, saya merasakan getaran dari tiap nada, seperti energi yang memenuhi setiap sel dalam tubuh saya. Musik mereka adalah pelipur lara yang mengangkat semangat saya di saat-saat sulit dan menambah keceriaan di hari-hari bahagia. Tak hanya itu, visual mereka seperti lukisan hidup yang menghipnotis mata saya; keanggunan dan daya tarik yang tak terbantahkan memancar dari setiap penampilan mereka.
                Gaya mereka tidak hanya memikat, tetapi juga memancarkan keunikan dan keberanian. Saya selalu terkesima oleh keberanian mereka untuk berinovasi dalam penampilan mereka, memperlihatkan kepada dunia bahwa keberagaman adalah kecantikan sejati. Namun, di antara semua anggota yang luar biasa, ada satu yang secara khusus berhasil merebut hati saya, yaitu Ooh Sehun. Dari senyumnya yang memikat hingga keanggunan dalam setiap gerakan, dia adalah personifikasi dari semua yang saya kagumi.
                Bagi saya, EXO bukan sekadar boyband; mereka adalah teman setia yang menemani setiap langkah hidup saya. Dengan setiap lagu yang mereka nyanyikan, setiap penampilan yang mereka bawakan, saya merasa dihubungkan dengan sesuatu yang jauh lebih besar dari diri saya sendiri. Bersama EXO, saya merasa memiliki keluarga besar di mana saya dapat mengekspresikan diri sepenuhnya dan merasakan cinta yang tak terbatas.
               </p>
               <h3>[Cerita Saya]</h3>
               <p style="text-align: justify;">
                Saat itu, langit biru cerah memeluk perjalanan saya ke Wonosobo, sebuah kota indah di pegunungan Jawa Tengah. Semangat petualangan mengalir dalam diri saya, menggetarkan setiap sel di tubuh saya, karena saya tahu bahwa perjalanan ini akan menjadi pengalaman yang tak terlupakan.
                Sesampainya di Wonosobo, udara segar dan sejuk menyambut kedatangan saya. Perbukitan hijau yang menghampar luas memberikan pemandangan yang menenangkan dan mempesona. Saya merasa seakan terhubung dengan alam di sini, di tengah hamparan keindahan yang memukau.
                Mengelilingi kota kecil ini, saya menemukan keajaiban alam yang menakjubkan. Danau yang tenang, pepohonan hijau yang rimbun, dan aroma segar dari pegunungan membuat hati saya merasa damai. Saat matahari terbenam, langit di Wonosobo berubah menjadi lukisan alam yang memukau; warna-warni senja merayakan keindahan yang tiada tara.
                Tak hanya keindahan alamnya, tetapi juga keramahan penduduk setempat yang membuat perjalanan ini menjadi istimewa. Saya disambut dengan senyuman hangat dan keramahan yang tulus di setiap sudut kota. Berinteraksi dengan mereka, saya belajar banyak tentang budaya dan tradisi lokal, merasakan kedalaman dan kekayaan yang dimiliki oleh masyarakat Wonosobo.
                Tetapi tentu saja, perjalanan tidak selalu mulus. Ada momen-momen tantangan yang membuat saya merasa hidup, seperti melalui jalanan berkelok-kelok di pegunungan atau menavigasi cuaca yang berubah-ubah. Namun, setiap rintangan itu adalah bagian dari petualangan, menguatkan saya dan membuat saya lebih menghargai keindahan setiap detik yang saya habiskan di sini.
                Saat saya meninggalkan Wonosobo, saya membawa pulang kenangan yang tak terlupakan dan hati yang penuh dengan rasa syukur. Perjalanan ini telah mengisi jiwa saya dengan keindahan alam, kehangatan manusia, dan pelajaran hidup yang berharga. Dan saya tahu, meskipun telah berpisah dengan kota ini, tetapi bagian dari Wonosobo akan selalu tinggal di hati saya.
               </p>
            </div>
         </div>
    </div>
</body>
</html>