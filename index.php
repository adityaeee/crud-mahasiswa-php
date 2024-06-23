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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body>


<div class="container mt-3">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h2 class="fw-bold text-center">DAFTAR MAHASISWA</h2>
		</div>
	</div>
     <div class="row mt-4">
		<div class="col-md-2">
			<form id="formCluster" method="post" action="tambahData.php">
				<button type="submit" class="btn btn-success">Tambah mahasiswa</button>
			</form>
		</div>
     </div>
<div class="row mt-4">
		<div class="col-md">
			<table class="table table-striped text-center">
				<thead>
					<tr>
						 <th>ID</th>
                              <th>Nama</th>
                              <th>Alamat</th>
                              <th>Umur</th>
                              <th>Ket</th>
					</tr>
				</thead>
                    
				<tbody>
					<?php
                         //  include "database.php";
                         $nama = "";
                         if (isset($_GET['s']))
                         {
                              $nama = $_GET['s'];
                              $tampil = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nama LIKE '%$nama'");
                         }else
                              $tampil = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                              while ($data = mysqli_fetch_array($tampil))
                         {

                          ?>
                         <tr>
                              <td><?php echo $data ['id']?></td>
                              <td><?php echo $data ['nama']?></td>
                              <td><?php echo $data ['alamat']?></td>
                              <td><?php echo $data ['umur']?></td>
                              <td>
                                   <a href="ubahData.php?id=<?php echo $data['id'];?>" class="btn btn-success badge">Ubah</a>
                                   <a href="hapusData.php?id=<?php echo $data['id'];?>" class="btn btn-danger badge">Hapus</a>
                              </td>
                     
                          </tr>

                         <?php } ?>
			     </tbody>
			</table>
		</div>
    </body>
</html>