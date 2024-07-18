<?php  

if (isset($_SESSION['NIP']) && isset($_SESSION['id'])) {
    
    $sql = "SELECT * FROM pegawai ORDER BY id ASC";
    $res = mysqli_query($conn, $sql);
}else{
	header("Location: ../index.php");
} 