<?php
session_start();
if ( $_SESSION['role'] == 'admin') {

if ( !isset($_SESSION['NIP']) && !isset($_SESSION['id'])) {
    header("location: ../../index.php");
    exit;
} 
require '../Pegawai/functions.php';

$id = $_GET["id"];
$pegawai = query("SELECT * FROM pegawai WHERE id = $id");
$kry = $pegawai[0];

if (isset($_POST["ubah"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
				alert('data berhasil diubah!');
				document.location.href = 'profil.php';
			  </script>";
    } else {
        echo "<script>
				alert('data gagal diubah!');
				document.location.href = 'profil.php';
			 </script>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Profil</title>
	<link rel="icon" href="../../img/kemenkeu.png" type="image/png">
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<ul class="navbar-nav ms-auto" style="padding: 10px;">
					<li class="nav-item">
						<a class="nav-link text-white" href="../MenuWebsiteKEMENKEU&DJPb/cardadmin.php">Website KEMENKEU & DJPb</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="../MenuInovasiKPPNYogyakarta/cardadmin.php">Inovasi KPPN Yogyakarta</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="../MenuAkuntabilitasKinerjaKPPNYogyakarta/cardadmin.php">Akuntabilitas Kinerja
							KPPN
							YOGYAKARTA</a>
					</li>
					<li class="dropdown">
						<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
							<a href="../Monitoring/cardadmin.php" class="btn btn-primary">Monitoring</a>
							<a href="../Pegawai/pegawai.php" class="btn btn-primary ">Data Pegawai</a>
							<div class="btn-group" role="group">
								<button id="btnGroupDrop1" type="button" class="btn btn-dark dropdown-toggle"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

    <?php foreach ($pegawai as $kry) : ?>

        <section class="section" style="margin-top: 15px;" id="sectionBeranda">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 fade-in">
                        <br>
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <form action="" method="post">
                                                <h1>Edit Profil</h1>
                                                <div class="container">
                                                    <input type="hidden" name="id" value="<?php echo $kry["id"]; ?>">
                                                    <div class="mb-3 mt-3">
                                                        <label for="nama" class="form-label">Nama</label>
                                                        <input value="<?php echo $kry["nama"]; ?>" type="text" class="form-control" id="nama" name="nama" required autocomplete="off">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="NIP" class="form-label">NIP</label>
                                                        <input value="<?php echo $kry["NIP"]; ?>" type="number" class="form-control" id="NIP" name="NIP" required maxlength="20">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="NIK" class="form-label">NIK</label>
                                                        <input value="<?php echo $kry["NIK"]; ?>" type="number" class="form-control" id="NIK" name="NIK" required maxlength="20">
                                                    </div>
                                                    <label for="unit" class="form-label">Unit</label>
                                                    <div class="input-group">
                                                        <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="unit" required>
                                                            <option selected value="<?php echo $kry["unit"]; ?>"><?php echo $kry["unit"]; ?></option>
                                                            <option value="Subbagian Umum">Subbagian Umum</option>
                                                            <option value="Seksi Pencairan Dana">Seksi Pencairan Dana</option>
                                                            <option value="Seksi Bank">Seksi Bank</option>
                                                            <option value="Seksi Manajemen SATKER dan Kepatuhan Internal">Seksi Manajemen SATKER dan Kepatuhan Internal</option>
                                                            <option value="Seksi Verifikasi dan Akuntansi">Seksi Verifikasi dan Akuntasnsi</option>
                                                            <option value="Fungsional">Fungsional</option>
                                                        </select>
                                                    </div>
                                                    <div class=" mb-3 mt-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input value="<?php echo $kry["email"]; ?>" type="email" class="form-control" id="email" name="email" required></input>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nohp" class="form-label">Nomor HP</label>
                                                        <input value="<?php echo $kry["nohp"]; ?>" type="number" class="form-control" id="nohp" name="nohp" required></input>
                                                    </div>
                                                    <div class="dropdown-menu">
                                                        <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="status">
                                                            <option selected value="<?php echo $kry["status"]; ?>"><?php echo $kry["status"]; ?></option>
                                                            <option value="Aktif">Aktif</option>
                                                            <option value="Tidak Aktif">Tidak Aktif</option>
                                                        </select>
                                                    </div>
                                                    <div class="dropdown-menu">
                                                        <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="role" id="role">
                                                            <option selected value="<?php echo $kry["role"]; ?>"><?php echo $kry["role"]; ?></option>
                                                            <option value="admin">Admin</option>
                                                            <option value="pegawai">Pegawai</option>
                                                        </select>
                                                    </div>
                                                    <button type="submit" name="ubah" class="btn btn-success mt-3">Simpan</button>
                                                    <a type="button" class="btn btn-primary mt-3" href="profil.php">Tutup</a>
                                                </div>
                                            </form>
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

<?php }else{
	header("location: ../../index.php");
} ?>
