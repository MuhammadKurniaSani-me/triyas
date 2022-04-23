<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql = "DELETE FROM tbl_043 WHERE id_043=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Delete data gagal";
}
else {
    echo "Data mahasiswa berhasil dihapus <br>";
    echo "<a href='data.php'>Show Data </a>";
}

?>