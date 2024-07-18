<?php
session_start();
if ( $_SESSION['role'] == 'pegawai') {

if ( !isset($_SESSION['NIP']) && !isset($_SESSION['id'])) {
    header("location: ../../index.php");
    exit;
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu Internal</title>
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
	}


	section {
		padding: 50px 0;
	}

	section h2 {
		font-size: 30px;
		text-align: center;
		padding: 20px 0;
		color: black;
		margin-bottom: 25px;
	}

	.websitekemenkeu,
	.inovasikppnyogyakarta,
	.akuntabilitaskinerjakppnyog {
		padding-bottom: 50px;
	}

	section p {
		font-size: 25px;
		color: black;
		word-spacing: 2px;
		line-height: 25px;
		margin-bottom: 20px;
		text-align: justify;
	}

	section h3 {
		font-size: 10px;
		text-align: center;
		color: white;
		font-family: sans-serif;
	}

	#page-container {
		position: relative;
		min-height: 20vh;
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

	/* Gaya CSS untuk tablet */
	@media (max-width: 768px) {
		.content {
			font-size: 20px;
		}
	}

	/* Gaya CSS untuk smartphone */
	@media (max-width: 480px) {
		.content {
			flex-direction: column;
			font-size: 16px;
		}
	}

	.carousel-item {
		height: 100vh;
		min-height: 300px;
		background: no-repeat center center scroll;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}

	.carousel-caption {
		bottom: 270px;
	}

	.carousel-caption h5 {
		font-size: 45px;
		text-transform: uppercase;
		letter-spacing: 2px;
		margin-top: 25px;
	}

	.carousel-caption p {
		width: 75%;
		margin: auto;
		font-size: 18px;
		line-height: 1.9;
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
	@media (max-width: 600px) {
	    .carousel-item {
	  height: 100px;
	  
	  
	}
	section {
		padding: 0px 0;
	}

	
	    
	}

	
</style>


<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top">
		<div class="container">
			<a class="navbar-brand fw-bold text-dark" href="home.php">KPPN YOGYAKARTA</a>
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
								<button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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


	<section class="banner">
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img alt="First slide" class="d-block w-100" src="../../img/carousel1edit.jpg">
					<div class="carousel-caption d-none d-md-block">
						<h5>MENU INTERNAL</h5>
						<p></p>
					</div>
				</div>
				<div class="carousel-item">
					<img alt="Second slide" class="d-block w-100" src="../../img/carousel2edit.jpg">
					<div class="carousel-caption d-none d-md-block">
						<h5>MENU INTERNAL</h5>
						<p></p>
					</div>
				</div>
				<div class="carousel-item">
					<img alt="Third slide" class="d-block w-100" src="../../img/carousel3editnew.jpg">
					<div class="carousel-caption d-none d-md-block">
						<h5>MENU INTERNAL</h5>
						<p></p>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
	</section>

	<div class="container">
		<section class="websitekemenkeu">
			<div class="wrapper">
				<h2>WEBSITE KEMENKEU & DJPb</h2>
				<p>Merupakan fasilitas berbasis online yang menuju langsung ke kantor pusat KEMENKEU secara dua arah</p>
			</div>
		</section>

		<section class="inovasikppnyogyakarta">
			<div class="wrapper">
				<h2>INOVASI KPPN YOGYAKARTA</h2>
				<p>Merupakan fasilitas berbasis online yang mempermudah & memberi fleksibelitas untuk setiap pegawai KPPN Yogyakarta</p>
			</div>
		</section>

		<section class="akuntabilitaskinerjakppnyog">
			<div class="wrapper">
				<h2>AKUNTABILITAS KINERJA KPPN YOGYAKARTA</h2>
				<p>Merupakan wadah informasi online untuk pegawai KPPN Yogyakarta selama periode 1 tahun</p>
			</div>
		</section>
	</div>


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

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>
<?php }else{
	header("location: ../../index.php");
} ?>