<?php
if ( $_SESSION['role'] == 'pegawai') {
if ( !isset($_SESSION['NIP']) && !isset($_SESSION['id'])) {
    header("location: ../../Login/index.php");
    exit;
} 

// koneksi ke database
function koneksi() {
	$conn = mysqli_connect("localhost", "n1574776_menu_internal", "rahasia2023", "n1574776_menu_internal") or die("koneksi gagal");

	return $conn;
}


function query($query) {
	$conn = koneksi();
	
	$result = mysqli_query($conn, $query);
	$rows = array();
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}

	return $rows;

}

function tambah($data) {
	$conn = koneksi();

	// menangkap data dari form
	$nama = htmlspecialchars($data["nama"]);
	$NIP = htmlspecialchars((int)$data["NIP"]);
	$NIK = htmlspecialchars($data["NIK"]);
	$unit = htmlspecialchars($data["unit"]);
	$email = htmlspecialchars($data["email"]);
	$nohp = htmlspecialchars($data["nohp"]);
	$status = htmlspecialchars($data["status"]);
	$role = htmlspecialchars($data["role"]);
	$password = htmlspecialchars($data["password"]);

	// insert data ke database
	$query = "INSERT INTO pegawai
				VALUES
			('', '$nama', '$NIP', '$NIK', '$unit', '$email', '$nohp', '$status', '$role', '$password')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id) {
	$conn = koneksi();
	
	mysqli_query($conn, "DELETE FROM pegawai WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function ubah($data) {
	$conn = koneksi();
	
	$id = ($data["id"]);	
	$nama = htmlspecialchars($data["nama"]);
	$NIP = htmlspecialchars($data["NIP"]);
	$NIK = htmlspecialchars($data["NIK"]);
	$unit = htmlspecialchars($data["unit"]);
	$email = htmlspecialchars($data["email"]);
	$nohp = htmlspecialchars($data["nohp"]);
	$status = htmlspecialchars($data["status"]);
	$role = htmlspecialchars($data["role"]);

	$query = "UPDATE pegawai SET 	
				nama = '$nama',
				NIP = '$NIP',
				NIK = '$NIK',
				unit = '$unit',
				email = '$email',
				nohp = '$nohp',
				status = '$status',
				role = '$role'
			  WHERE id = $id";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if( $ukuranFile > 1000000 ) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, '../../img/' . $namaFileBaru);

	return $namaFileBaru;
}

function tambahmenu1($data){
	$conn = koneksi();

	$judul = htmlspecialchars($data["judul"]);
	$link = htmlspecialchars($data["link"]);

	// upload gambar
	$gambar = upload();
	if( !$gambar ) {
		return false;
	}
	
	  // Query untuk menyimpan data ke dalam database
	  $query = "INSERT INTO menuwebsitekemenkeu VALUES ('', '$judul', '$link', '$gambar')";
	  mysqli_query($conn, $query);

	  return mysqli_affected_rows($conn);
}


function hapusmenu1($id) {
	$conn = koneksi();
	
	mysqli_query($conn, "DELETE FROM menuwebsitekemenkeu WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function ubahmenu1($data) {
	$conn = koneksi();
	
	$id = ($data["id"]);	
	$judul = htmlspecialchars($data["judul"]);
	$link = htmlspecialchars($data["link"]);
	$gambarlama = htmlspecialchars($data["gambarlama"]);

	if( $_FILES['gambar']['error'] === 4 ) {
		$gambar = $gambarlama;
	} else {
		$gambar = upload();
	}

	$query = "UPDATE menuwebsitekemenkeu SET 	
				judul = '$judul',
				link = '$link',
				gambar = '$gambar'
			  WHERE id = $id";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function tambahmenu2($data){
	$conn = koneksi();

	$judul = htmlspecialchars($data["judul"]);
	$link = htmlspecialchars($data["link"]);

	// upload gambar
	$gambar = upload();
	if( !$gambar ) {
		return false;
	}
	
	  // Query untuk menyimpan data ke dalam database
	  $query = "INSERT INTO menuinovasikppnyogyakarta VALUES ('', '$judul', '$link', '$gambar')";
	  mysqli_query($conn, $query);

	  return mysqli_affected_rows($conn);
}

function hapusmenu2($id) {
	$conn = koneksi();
	
	mysqli_query($conn, "DELETE FROM menuinovasikppnyogyakarta WHERE id = $id");

	return mysqli_affected_rows($conn);
}


function ubahmenu2($data) {
	$conn = koneksi();
	
	$id = ($data["id"]);	
	$judul = htmlspecialchars($data["judul"]);
	$link = htmlspecialchars($data["link"]);
	$gambarlama = htmlspecialchars($data["gambarlama"]);

	if( $_FILES['gambar']['error'] === 4 ) {
		$gambar = $gambarlama;
	} else {
		$gambar = upload();
	}

	$query = "UPDATE menuinovasikppnyogyakarta SET 	
				judul = '$judul',
				link = '$link',
				gambar = '$gambar'
			  WHERE id = $id";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function tambahmenu3($data){
	$conn = koneksi();

	$judul = htmlspecialchars($data["judul"]);
	$link = htmlspecialchars($data["link"]);

	// upload gambar
	$gambar = upload();
	if( !$gambar ) {
		return false;
	}
	
	  // Query untuk menyimpan data ke dalam database
	  $query = "INSERT INTO menuakuntabilitaskinerja VALUES ('', '$judul', '$link', '$gambar')";
	  mysqli_query($conn, $query);

	  return mysqli_affected_rows($conn);
}


function hapusmenu3($id) {
	$conn = koneksi();
	
	mysqli_query($conn, "DELETE FROM menuakuntabilitaskinerja WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function ubahmenu3($data) {
	$conn = koneksi();
	
	$id = ($data["id"]);	
	$judul = htmlspecialchars($data["judul"]);
	$link = htmlspecialchars($data["link"]);
	$gambarlama = htmlspecialchars($data["gambarlama"]);

	if( $_FILES['gambar']['error'] === 4 ) {
		$gambar = $gambarlama;
	} else {
		$gambar = upload();
	}

	$query = "UPDATE menuakuntabilitaskinerjaa SET 	
				judul = '$judul',
				link = '$link',
				gambar = '$gambar'
			  WHERE id = $id";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}



?>

<?php }else{
	header("location: ../../Login/index.php");
} ?>