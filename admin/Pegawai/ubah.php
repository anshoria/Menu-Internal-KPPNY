<?php
session_start();
if ($_SESSION['role'] == 'admin') {

    if (!isset($_SESSION['NIP']) && !isset($_SESSION['id'])) {
        header("Location: ../../index.php");
        exit;
    }

    require 'functions.php';

    $id = $_GET["id"];
    $pegawai = query("SELECT * FROM pegawai WHERE id = $id");
    $kry = $pegawai[0];

    if (isset($_POST["ubah"])) {
        if (ubah($_POST) > 0) {
            echo "<script>
				alert('data berhasil diubah!');
				document.location.href = 'pegawai.php';
			  </script>";
        } else {
            echo "<script>
				alert('data gagal diubah!');
				document.location.href = 'pegawai.php';
			 </script>";
        }
    }

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Data Pegawai</title>
        <link rel="icon" href="../../img/kemenkeu.png" type="image/png">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    </head>

    <body>

        <form action="" method="post">
            <div class="container" style="margin-top: 50px;">
                <h2 class="mb-3">Edit Pegawai</h2>
                <input type="hidden" name="id" value="<?php echo $kry["id"]; ?>">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input value="<?php echo $kry["nama"]; ?>" type="text" class="form-control" id="nama" name="nama" required autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="NIP" class="form-label">NIP</label>
                    <input value="<?php echo $kry["NIP"]; ?>" type="number" class="form-control" id="NIP" name="NIP" required maxlength="20">
                </div>
                <div class="mb-3">
                    <label for="NIK" class="form-label">NIK</label>
                    <input value="<?php echo $kry["NIK"]; ?>" type="number" class="form-control" id="NIK" name="NIK" required maxlength="20">
                </div>
                <label for="unit" class="form-label">Unit</label>
                <div class="input-group">
                    <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="unit" required>
                        <option selected value="<?php echo $kry["unit"]; ?>"><?php echo $kry["unit"]; ?></option>
                        <option value="Subbagian Umum">Subbagian Umum</option>
                        <option value="Seksi Pencairan Dana">Seksi Pencairan Dana</option>
                        <option value="Seksi Bank">Seksi Bank</option>
                        <option value="Seksi Manajemen SATKER dan Kepatuhan Internal">Seksi Manajemen SATKER dan Kepatuhan Internal</option>
                        <option value="Seksi Verifikasi dan Akuntansi">Seksi Verifikasi dan Akuntasnsi</option>
                        <option value="Fungsional">Fungsional</option>
                    </select>
                </div>
                <div class=" mb-3 mt-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="<?php echo $kry["email"]; ?>" type="email" class="form-control" id="email" name="email" required></input>
                </div>
                <div class="mb-3">
                    <label for="nohp" class="form-label">Nomor HP</label>
                    <input value="<?php echo $kry["nohp"]; ?>" type="number" class="form-control" id="nohp" name="nohp" required></input>
                </div>
                <label for="status" class="form-label">Status</label>
                <div class="input-group">
                    <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="status" required>
                        <option selected value="<?php echo $kry["status"]; ?>"><?php echo $kry["status"]; ?></option>
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
                    </select>
                </div>
                <label for="role" class="form-label mt-3">Role</label>
                <div class="input-group">
                    <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="role" id="role" required>
                        <option selected value="<?php echo $kry["role"]; ?>"><?php echo $kry["role"]; ?></option>
                        <option value="admin">Admin</option>
                        <option value="pegawai">Pegawai</option>
                    </select>
                </div>
                </br>
                <button type="submit" name="ubah" class="btn btn-success">Simpan</button>
                <a type="button" class="btn btn-primary" href="pegawai.php">Tutup</a>

            </div>

        </form>



    </body>

    </html>
<?php } else {
    header("Location: ../../index.php");
} ?>