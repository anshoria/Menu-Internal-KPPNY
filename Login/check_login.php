<?php  
session_start();
include "db_conn.php";

if (isset($_POST['NIP']) && isset($_POST['password']) && isset($_POST['role'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$NIP = test_input($_POST['NIP']);
	$password = test_input($_POST['password']);
	$role = test_input($_POST['role']);

	if (empty($NIP)) {
		header("Location: ../index.php?error=NIP diperlukan");
	}else if (empty($password)) {
		header("Location: ../index.php?error=Password diperlukan");
	}else {
						

        
        $sql = "SELECT * FROM pegawai WHERE NIP='$NIP' AND password='$password' AND status='Aktif'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
        	if ($row['password'] === $password && $row['role'] == $role) {
        		$_SESSION['nama'] = $row['nama'];
        		$_SESSION['id'] = $row['id'];
        		$_SESSION['role'] = $row['role'];
        		$_SESSION['NIP'] = $row['NIP'];

				if ($_SESSION['role'] == 'admin') {
        		header("Location: ../admin/Home/home.php");
				}else{
					header("Location: ../user/Home/home.php");
				} 

        	}else {
        		header("Location: ../index.php?error=NIP atau Password anda salah");
        	}
        }else {
        	header("Location: ../index.php?error=NIP atau Password salah atau Akun anda tidak Aktif");
        }

	}
	
}else {
	header("Location: ../index.php");
}