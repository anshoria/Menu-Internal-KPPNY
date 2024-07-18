<?php 
session_start();
include "db_conn.php";
if (isset($_SESSION['id']) && isset($_SESSION['NIP'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ganti Password</title>
		<link rel="icon" href="../../img/kemenkeu.png" type="image/png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<style>
	body {
		background-image: url('../img/background_login.png');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		background-position: center;
		height: 80%;
	}
</style>
<body>
    <div class="container d-flex justify-content-center align-items-center"style="min-height: 100vh">
        <form class="border shadow p-3 rounded bg-light" action="change_pass.php" method="post" style="width: 450px;">
     	<h2 class="text-center p-3 text-dark">Ganti Password</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
        <div class="mb-1">
            <label class="form-label text-dark" >Password Lama</label>
     	    <input class="form-control"type="password" 
     	        name="pl" 
     	        placeholder="Password Lama">
     	        <br>
        </div>
        <div class="mb-1">
        <label class="form-label text-dark" >Password Baru</label>
     	<input class="form-control" type="password" 
     	       name="pb" 
     	       placeholder="Password Baru">
     	       <br>
        </div>
        <div class="mb-1">
            <label class="form-label text-dark">Konfirmasi Password Baru</label>
     	    <input class="form-control" type="password" 
     	        name="k_pb" 
     	        placeholder="Konfirmasi Password Baru">
     	        <br>
        </div>
        <button type="submit" class="btn btn-success">GANTI</button>
          <a href="kembali.php" class="btn btn-primary">Kembali</a>
     </form>
    </div>
</body>
</html>

<?php 
}else{
     header("Location: ../index.php");
     exit();
}
?>