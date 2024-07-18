<?php
session_start();
if ( $_SESSION['role'] == 'admin') {
if ( !isset($_SESSION['NIP']) && !isset($_SESSION['id'])) {
    header("Location: ../../index.php");
    exit;
} 
require '../Pegawai/functions.php';

if( isset($_GET["id"]) ) {
	// cek keberhasilan query
	if( hapusmenu4($_GET["id"]) > 0 ) {
		header ("Location:./cardadmin.php");
	} else {
		echo "<script>
				alert('data gagal dihapus!');
				document.location.href = 'cardadmin.php';
			  </script>";
	}
}
?>
<?php }else{
	header("Location: ../../index.php");
} ?>