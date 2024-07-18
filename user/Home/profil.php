<?php
session_start();
if ( $_SESSION['role'] == 'pegawai') {

if ( !isset($_SESSION['NIP']) && !isset($_SESSION['id'])) {
    header("location: ../../index.php");
    exit;
} 

require '../Pegawai/functions.php';

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $pegawai = query("SELECT * FROM pegawai WHERE id='$id'");
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Profil</title>
	<link rel="icon" href="../../img/kemenkeu.png" type="image/png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <style>
    body,
        html {
            height: 100%;
            margin: 0;
        }


        body {
            height: 100%;
            background-image: url('../../img/1.svg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
      flex: 1;
    }

        .wrapper {
            width: 1200px;
            margin: auto;
            position: relative;
        }

        section {
            padding: 50px 0;
        }

        section h2 {
            font-size: 20px;
            text-align: center;
            padding: 20px 0;
            color: black;
            margin-bottom: 25px;
        }

        section h3 {
            font-size: 10px;
            text-align: center;
            color: white;
            font-family: sans-serif;
        }

        #page-container {
            min-height: 20vh;
            position: relative;
        }

        #content-wrap {
            padding-bottom: 10px;
            /* Footer height */
        }

        #footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 10px;
            /* Footer height */
        }

        #footer p {
            background-color: #ffc107;
            color: black;
            padding: 10px;
            text-align: center;
        }

        .social-icons {
            position: relative;
            z-index: 2;
        }

        .social-icons .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            height: 4rem;
            width: 4rem;
            border-radius: 100rem;
        }

        @media (min-width: 992px) {
            .social-icons {
                position: absolute;
                height: 100%;
                top: 0;
                right: 2.5rem;
                width: auto;
            }
        }

        .d-flex {
            display: flex !important;
        }

        .flex-row {
            flex-direction: row !important;
        }

        .justify-content-around {
            justify-content: center !important;
        }

        .align-items-around {
            align-items: center !important;
        }

        .h-100 {
            height: 100% !important;
        }

        .mt-3 {
            margin-top: 1rem !important;
        }

        .mt-lg-0 {
            margin-top: 0 !important;
        }

</style>



    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top">
            <div class="container">
                <a class="navbar-brand" href="home.php">KPPN YOGYAKARTA</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ms-auto" style="padding: 10px;">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../MenuWebsiteKEMENKEU&DJPb/carduser.php">Website KEMENKEU & DJPb</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../MenuInovasiKPPNYogyakarta/carduser.php">Inovasi KPPN Yogyakarta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../MenuAkuntabilitasKinerjaKPPNYogyakarta/carduser.php">Akuntabilitas Kinerja
                                KPPN
                                YOGYAKARTA</a>
                        </li>
                        <li class="dropdown">
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Profile
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="profil.php">My Profile</a>
                                        <a class="dropdown-item" href="../../Login/logout.php">Log Out</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <main>
        <?php foreach ($pegawai as $row) : ?>

<section class="section" id="sectionBeranda">
    <div class="container">
        <div class="row">
            <div class="col-md-12 fade-in">
                <center>
                    <img src="images/logo.png" class="img-menu2" alt=""><br><br>
                    <h1 class="text-green text-white">Haloo <?php echo $row["nama"]; ?></h1>
                </center>
                <br>
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="text-green">Profil anda</h1>
                                <ul>
                                    <p>Nama : <?php echo $row["nama"]; ?></p>
                                    <p>NIP : <?php echo $row["NIP"]; ?></p>
                                    <p>NIK : <?php echo  $row["NIK"]; ?></p>
                                    <p>Unit : <?php echo  $row["unit"]; ?></p>
                                    <p>Email : <?php echo  $row["email"]; ?></p>
                                    <p>Telepon : <?php echo  $row["nohp"]; ?></p>
                                    <p>Status : <?php echo  $row["status"]; ?></p>
                                    <a href="home.php" class="btn btn-primary btn-sm text-white">Kembali</a>
                                    <a href="editprofil.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm text-white">Edit profil</a>
                                    <a href="../../Login/change_password.php" class="btn btn-danger btn-sm text-white">Ganti Password</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php endforeach; ?>
        </main>
        

        <div id="page-container">
            <div id="content-wrap">
                <div class="social-icons">
                    <div class="d-flex flex-row justify-content-around align-items-around h-100 mt-3 mt-lg-0">
                        <a class="btn btn-warning m-3" href="https://twitter.com/kppn_yogyakarta"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-warning m-3" href="https://www.facebook.com/kppn.yogyakarta.9"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-warning m-3" href="https://www.instagram.com/kppn.yogyakarta/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-warning m-3" href="https://www.tiktok.com/@kppnyogyakarta"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
            <footer id="footer">
                <p>
                    ©-Kantor Pelayanan Perbendaharaan Negara Yogyakarta
                </p>
            </footer>
        </div>

    


    </body>

    </html>

<?php
    // Periksa apakah pengguna telah login
} else {
    // Jika belum login, redirect ke halaman login
    header("location: ../../index.php");
}
?>

<?php }else{
	header("location: ../../index.php");
} ?>