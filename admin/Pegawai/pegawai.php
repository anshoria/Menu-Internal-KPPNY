<?php
session_start(); 
if ( $_SESSION['role'] == 'admin') {

if ( !isset($_SESSION['NIP']) && !isset($_SESSION['id'])) {
    header("Location: ../../index.php");
    exit;
} 
require 'functions.php';
$pegawai = query("SELECT * FROM pegawai ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
	<title>Data Pegawai</title>
	<link rel="icon" href="../../img/kemenkeu.png" type="image/png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
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
		position: relative;
		flex-direction: column;
  		min-height: 20vh;
		display: flex;
	}

	#content-wrap {
		padding-bottom: 10px;
		/* Footer height */
	}

	#footer {
			position: fixed;
			bottom: 0;
			width: 100%;
			height: 40px;
		
			
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
	/* Gaya CSS untuk tampilan desktop */
table {
  border-collapse: collapse;
  width: 100%;
}

th,
td {
  border: 1px solid #ddd;
  padding: 8px;
}

th {
  background-color: #f2f2f2;
}

/* Gaya CSS untuk tampilan mobile */
@media (max-width: 600px) {
  table,
  thead,
  tbody,
  th,
  td,
  tr {
    display: block;
  }
  
  thead tr {
    position: absolute;
    top: -9999px;
    left: -9999px;
  }
  
  td {
    border: none;
    border-bottom: 1px solid #ddd;
    position: relative;
    padding-left: 50%;
  }
  
  td::before {
    position: absolute;
    top: 6px;
    left: 6px;
    width: 45%;
    padding-right: 10px;
    white-space: nowrap;
    content: attr(data-label);
    font-weight: bold;
  }
}



    </style>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top">
		<div class="container">
			<a class="navbar-brand" href="../Home/home.php">KPPN YOGYAKARTA</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
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
							<a href="../Monitoring/cardadmin.php" class="btn btn-primary">Monitoring</a>
							<a href="pegawai.php" class="btn btn-dark">Data Pegawai</a>

							<div class="btn-group" role="group">
								<button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

	<div class="container data-mahasiswa mb-4" style="margin-top: 110px;">
		<a class="btn btn-success" aria-current="page" href="tambah.php">Tambah Data Pegawai</a>
	</div>



	<!--tabel-->
	<div class="container">
		<table class="table table-striped" id="tabelPegawai">
			<thead>
				<tr>
					<th scope="col">No.</th>
					<th scope="col">Nama</th>
					<th scope="col">NIP</th>
					<th scope="col">Unit</th>
					<th scope="col">Status</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php $i = 1; ?>
				<?php foreach ($pegawai as $row) : ?>

					<tr>
						<td><?php echo $i++; ?> </td>
						<td><?php echo $row["nama"]; ?> </td>
						<td><?php echo $row["NIP"]; ?> </td>
						<td><?php echo $row["unit"]; ?> </td>
						<td><?php echo $row["status"]; ?> </td>
						<td>
							<a href="detail.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm text-white">DETAIL</a>
							<a href="ubah.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm text-white">EDIT</a>
							<a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ini?')">HAPUS</a>
						</td>
					</tr>

				<?php endforeach; ?>
			</tbody>

		</table>


	</div>


	<div id="page-container">
		<footer id="footer">
			<p>
				©-Kantor Pelayanan Perbendaharaan Negara Yogyakarta
			</p>
		</footer>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#tabelPegawai').DataTable();
		});
	</script>



</body>

</html>
<?php }else{
	header("Location: ../../index.php");
} ?>