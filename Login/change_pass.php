<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['NIP'])) {

include "db_conn.php";

if (isset($_POST['pl']) && isset($_POST['pb'])
    && isset($_POST['k_pb'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$pl = validate($_POST['pl']);
	$pb = validate($_POST['pb']);
	$k_pb = validate($_POST['k_pb']);
    
    if(empty($pl)){
      header("Location: change_password.php?error=Password Lama diperlukan");
	  exit();
    }else if(empty($pb)){
      header("Location: change_password.php?error=Password Baru diperlukan");
	  exit();
    }else if($pb !== $k_pb){
      header("Location: change_password.php?error=Konfirmasi Password tidak cocok");
	  exit();
    }else {
        $id = $_SESSION['id'];

        $sql = "SELECT password
                FROM pegawai WHERE 
                id='$id' AND password='$pl'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE pegawai
        	          SET password='$pb'
        	          WHERE id='$id'";
        	mysqli_query($conn, $sql_2);
			if ($_SESSION['role'] == 'admin') {
        	echo "<script>
				alert('password berhasil diubah!');
				document.location.href = '../admin/Home/profil.php';
			  </script>";
			}else {
			echo "<script>
				alert('password berhasil diubah!');
				document.location.href = '../user/Home/profil.php';
			  </script>";
			}
	        exit();

        }else {
        	header("Location: change_password.php?error=Password Salah!");
	        exit();
        }

    }

    
}else{
	header("Location: change_password.php");
	exit();
}

}else{
     header("Location: ../index.php");
     exit();
}
?>