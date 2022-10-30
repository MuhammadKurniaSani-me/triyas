<?php
// meta data about RDBMS
$host = "localhost";
$user = "root";
$password = "";
$dbname = "db_triyas";

$koneksi = mysqli_connect($host,$user,$password,$dbname);
if (!$koneksi){
    echo "koneksi gagal";
}
?>