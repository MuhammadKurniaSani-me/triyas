<?php
include "koneksi.php";

$nama = $_POST['nama_043'];
$email = $_POST['email_043'];

$sql = "INSERT INTO tbl_043 VALUES(null, '$nama','$email')";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "eksekusi tambah data mahasiswa gagal";
}
else{
    echo "eksekusi tambah data mahsiswa berhasil <br>";
    echo "<a href = 'data.php'>Show Data </a>";
}

?>