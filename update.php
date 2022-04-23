<?php
include "koneksi.php";

$id = $_POST['id_043'];
$nama = $_POST['nama_043'];
$email = $_POST['email_043'];

$sql = "UPDATE tbl_043 set nama_043='$nama', email_043='$email', WHERE id_043=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "eksekusi update data mahasiswa gagal";
}
else{
    echo "eksekusi update data mahasiswa berhasil <br>";
    echo "<a href = 'data.php'>Show Data</a>";
}

?> 