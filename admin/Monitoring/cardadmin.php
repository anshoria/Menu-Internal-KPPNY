<?php
session_start();
if ( $_SESSION['role'] == 'admin') {
if ( !isset($_SESSION['NIP']) && !isset($_SESSION['id'])) {
    header("Location: ../../index.php");
    exit;
} 

include '../Pegawai/functions.php';
$menu = query("SELECT * FROM monitoring ORDER BY id DESC");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inovasi KPPN Yogyakarta</title>
	<link rel="icon" href="../../img/kemenkeu.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
		rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
		crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>


<style>
    html,
    body {
        height: 100%;
		background-image: url('../../img/1.svg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		background-position: center;
    }

    .wrapper {
        display: table;
        height: 100%;
        width: 100%;
    }

    .container-fostrap {
        padding: 1em;
        text-align: center;
        vertical-align: middle;
    }

    .fostrap-logo {
        width: 100px;
        margin-bottom: 15px
    }

    h1.heading {
        color: #fff;
        font-size: 1.15em;
        font-weight: 900;
        margin: 0 0 0.5em;
        color: #505050;
    }

    @media (min-width: 450px) {
        h1.heading {
            font-size: 3.55em;
        }
    }

    @media (min-width: 760px) {
        h1.heading {
            font-size: 3.05em;
        }
    }

    @media (min-width: 900px) {
        h1.heading {
            font-size: 3.25em;
            margin: 0 0 0.3em;
        }
    }
    

    .card {
        display: block;
        margin-bottom: 20px;
        line-height: 1.42857143;
        background-color: #fff;
        border-radius: 2px;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        transition: box-shadow .25s;
    }

    .card:hover {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .img-card {
        width: 100%;
        height: 200px;
        border-top-left-radius: 2px;
        border-top-right-radius: 2px;
        display: block;
        overflow: hidden;
    }

    .img-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        transition: all .25s ease;
    }

    .card-content {
        padding: 15px;
        text-align: left;
    }

    .card-title {
        margin-top: 0px;
        font-weight: 600;
        font-size: 1.10em;
        text-align: center;

    }

    .card-title a {
        color: #000;
        text-decoration: none !important;
    }

    .card-read-more {
        border-top: 1px solid #D4D4D4;
    }

    .card-read-more a {
        text-decoration: none !important;
        padding: 10px;
        font-weight: 600;
        text-transform: uppercase
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
			.btn-group {
				display: block;
			}

			.dropdown-menu {
				position: static;
				width: 100%;
			}
			.btn {
				margin: 5px;
			}

		}

		/* Gaya CSS untuk smartphone */
		@media (max-width: 480px) {
			.btn-group {
				display: block;
			}

			.dropdown-menu {
				position: static;
				width: 100%;
			}

			.btn {
				margin: 5px;
			}

		}

	.carousel-item {
		height: 70vh;
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


</style>


<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top">
		<div class="container">
            <a class="navbar-brand" href="../Home/home.php">KPPN YOGYAKARTA</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<ul class="navbar-nav ms-auto" style="padding: 10px;">
					<li class="nav-item active">
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
							<a href="../Monitoring/cardadmin.php" class="btn btn-dark">Monitoring</a>
							<a href="../Pegawai/pegawai.php" class="btn btn-primary">Data Pegawai</a>

							<div class="btn-group" role="group">
								<button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Profile
								</button>
								<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
									<a class="dropdown-item" href="../Home/profil.php">My Profile</a>
									<a class="dropdown-item" href="../../Login/logout.php">Log Out</a>
								</div>
							</div>
						</div>
					</li>
				</ul>

			</div>
		</div>
	</nav>

    <div class="container data-mahasiswa" style="margin-top: 150px;">
		<a class="btn btn-success" aria-current="page" href="tambahinfo.php">Tambah Menu</a>
	</div>

    <section class="wrapper">
        <div class="container-fostrap">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <?php foreach ($menu as $row) : ?>
                            <div class="col-xs-10 col-sm-3">

                                <div class="card">
                                    <a class="img-card" href="<?php echo $row['link']; ?>">
                                        <img src="../../img/<?php echo $row['gambar']; ?>" />
                                    </a>
                                    <div class="card-content">
                                        <h4 class="card-title">
                                            <a class="card-title"><?php echo $row['judul']; ?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="card-read-more">
                                        <a href="<?php echo $row['link']; ?>" class="btn btn-link btn-block">Buka
                                        </a>
                        </br>
                                        <a href="editmenu.php?id=<?= $row["id"]; ?>" class="btn btn-warning btn-sm text-white">Edit
                                        </a>
                                        <a href="hapusmenu.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm text-white" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus
                                        </a>
                                    </div>
                        </br>
                                </div>

                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
            </div>
          
        </div>
    </section>

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
	header("Location: ../../index.php");
} ?>