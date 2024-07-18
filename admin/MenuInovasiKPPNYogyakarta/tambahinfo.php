<?php
session_start();
if ( $_SESSION['role'] == 'admin') {
if ( !isset($_SESSION['NIP']) && !isset($_SESSION['id'])) {
    header("Location: ../../index.php");
    exit;
} 
// Koneksi ke database
require '../Pegawai/functions.php';

// Cek apakah pengguna admin telah melakukan submit form
if( isset($_POST["tambahmenu"]) ) {
	// cek keberhasilan query
	if( tambahmenu2($_POST) > 0 ) {
		echo "<script>
				alert('data berhasil diinputkan!');
				document.location.href = 'cardadmin.php';
			  </script>";
	} else {
		echo "<script>
				alert('data gagal diinputkan!');
				document.location.href = 'cardadmin.php';
			  </script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inovasi KPPN Yogyakarta</title>
	<link rel="icon" href="../../img/kemenkeu.png" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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
    }

    .wrapper {
        width: 1200px;
        margin: auto;
        position: relative;
    }

    .banner {
        height: 60vh;
        font-size: 25px;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .banner:after {
        content: '';
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('../img/banner.jpg');
        -webkit-mask-image: linear-gradient(black, transparent);
        mask-image: linear-gradient(black, transparent);
    }

    .banner h1 {
        color: #fff;
        z-index: 1;
        padding: 20px 25px;
        border: 3px solid #fff;
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

    .websitekemenkeu,
    .inovasikppnyogyakarta,
    .akuntabilitaskinerjakppnyog {
        padding-bottom: 100px;
    }

    .websitekemenkeu,
    .inovasikppnyogyakarta,
    .akuntabilitaskinerjakppnyog p {
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
        text-align: center;
    }

    .dropdown-menu {
        display: none;
    }
</style>


<body>
<section class="section" style="margin-top: 30px;" id="sectionBeranda">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 fade-in">
                        <br>
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <ul>
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <h1>Tambah Menu</h1>
                                                <div class="container">
                                                    <input type="hidden" name="id">
                                                    <div class="mb-3 mt-3">
                                                        <label for="judul" class="form-label">Judul</label>
                                                        <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul Menu" name="judul" required autocomplete="off" autofocus>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="link" class="form-label">Link</label>
                                                        <input type="url" class="form-control" id="link" placeholder="Masukkan Link Menu" name="link" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="gambar" class="form-label">Gambar</label>
                                                        <input type="file" class="form-control" id="gambar" placeholder="Masukkan Gambar/Logo Menu" name="gambar" required>
                                                    </div>
                                                    <div class="mb-5">
                                                        <em>*Upload gambar dengan rasio 1:2 atau 2:1</em>
                                                        <br>
                                                        <em>*Batas upload file maksimal 10 mb</em>
                                                        <br>
                                                        <em>*Format file jpg, jpeg, png</em>
                                                    </div>
                                                    <button type="submit" name="tambahmenu" class="btn btn-success">Simpan</button>
                                                    <a type="button" class="btn btn-primary" href="cardadmin.php">Tutup</a>
                                                </div>
                                            </form>
                                            </br>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  
</body>
</html>

<?php }else{
	header("Location: ../../index.php");
} ?>