<?php
    include "database.php";
    $id = $_GET['id'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE ID='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/dataMahasiswa/index.php'>";
?>