<?php
session_start(); 
if ( $_SESSION['role'] == 'admin') {


if ( !isset($_SESSION['NIP']) && !isset($_SESSION['id'])) {
    header("Location: ../../index.php");
} 

require 'functions.php';

$id = $_GET['id'];
$pegawai = query("SELECT * FROM pegawai WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Data Pegawai</title>
	<link rel="icon" href="../../img/kemenkeu.png" type="image/png">
</head>

<body>
    <?php foreach ($pegawai as $row) : ?>
        <div class="container" style="margin-top: 90px;">
            <p><a href="pegawai.php">Pegawai</a> / Detail Pegawai/ <?php echo $row["nama"] ?></p>
            <div class="card">
                <div class="card-header">
                    <p class="fw-bold">Informasi Pegawai</p>
                </div>
                <div class="card-body fw-bold">
                    <p>Nama : <?php echo $row["nama"]; ?></p>
                    <p>NIP : <?php echo $row["NIP"]; ?></p>
                    <p>Unit : <?php echo  $row["unit"]; ?></p>
                    <p>Status : <?php echo  $row["status"]; ?></p>
                    <p>--->NIK : <?php echo  $row["NIK"]; ?></p>
                    <p>--->Email : <?php echo  $row["email"]; ?></p>
                    <p>--->Nomor HP : <?php echo  $row["nohp"]; ?></p>
                    <p>--->Role : <?php echo  $row["role"]; ?></p>
                    <a href="pegawai.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm text-white">Kembali</a>
                </div>
            </div>
        </div>


    <?php endforeach; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>
<?php }else{
	header("Location: ../../index.php");
} ?>