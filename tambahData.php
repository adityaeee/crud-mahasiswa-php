<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
        <div class="col-md-3">
            <a href="http://localhost/dataMahasiswa/index.php" class="btn btn-success badge"
            >&laquo; Kembali</a
            >
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold text-center">TAMBAH DATA MAHASISWA</h2>
        </div>
        </div>
        <div class="row mt-3 justify-content-center">
        <div class="col-md-6">
            <form
            action="" method="POST" class="form-item"
            >
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Mahasiswa</label>
                <input
                type="text"
                class="form-control"
                id="nama"
                name="nama"
                required
                />
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Mahasiswa</label>
                <input
                type="text"
                class="form-control"
                id="alamat"
                name="alamat"
                required
                />
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">Umur Mahasiswa</label>
                <input
                type="text"
                class="form-control"
                id="umur"
                name="umur"
                required
                />
            </div>
            <button type="submit" name="simpan" class="btn btn-success mb-5">Tambah</button>
            </form>
        </div>
        </div>
    </div>
</body>
</html>


<?php
    include "database.php";
    if(isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $umur = $_POST['umur'];

        $query = "INSERT INTO mahasiswa (nama, alamat, umur) VALUES ('$nama', '$alamat', '$umur')";

        if(mysqli_query($koneksi, $query)) {
            echo "<div align='center'><h5>Tunggu sebentar ...</h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/dataMahasiswa/index.php'>";
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    }
?>