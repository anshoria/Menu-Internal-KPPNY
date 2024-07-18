<?php
session_start(); 
if ( $_SESSION['role'] == 'admin') {

if ( !isset($_SESSION['NIP']) && !isset($_SESSION['id'])) {
    header("Location: ../../index.php");
    exit;
} 
require 'functions.php';

if( isset($_GET["id"]) ) {
	// cek keberhasilan query
	if( hapus($_GET["id"]) > 0 ) {
		header ("Location:./pegawai.php");
	} else {
		echo "<script>
				alert('data gagal dihapus!');
				document.location.href = 'pegawai.php';
			  </script>";
	}
}
?>
<?php }else{
	header("Location: ../../index.php");
} ?>