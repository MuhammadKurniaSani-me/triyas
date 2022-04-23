<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistem Informasi Teknik Informatika 2020</title>
	<link rel="icon" href="inpostor.png"/>
</head>
<body>
	<style type="text/css">
		a{text-decoration: none; font-size: 20px;font-family: verdana;padding: 14px 20px}
	    ul{padding: 14px}
	    li{list-style: none; display: inline;}
	    li a{background: #123c69; color:#d4d4d4;}
	    li a:hover{background: #4da4ff; color:#fff;}
	    .navi{background: #123c69; height: 55px}
	</style>
	<div class="navi">
		<ul>
			<li>
				<a href="index.php">Home</a>
			</li>
			<li>
				<a href="data.php">Data Mahasiswa</a>
			</li>
			<li>
				<a href="form.php">Tambah Data</a>
			</li>
			<li>
				<a href="info.php">Tentang Kami</a>
			</li>
		</ul>
	</div>
	<h1>Data Mahasiswa</h1>
        <a href="form.php">Tambah Data</a> 
        <!-- boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <table class="table table-dark table-striped">
            <tr>
                <td>ID MHS</td>
                <td>Nama Mahasiswa</td>
                <td>NIM Mahasiswa</td>
                <td>Action</td>
            </tr>
                <?php
                include 'koneksi.php';
                $sql = "SELECT * FROM tbl_043";
                $hasil = mysqli_query($koneksi, $sql);
                while ($row = mysqli_fetch_array($hasil))
                {
                ?>
                <tr>
                    <td><?=$row['id_043'];?></td>
                    <td><?=$row['nama_043'];?></td>
                    <td><?=$row['email_043'];?></td>
                    <td> <a href="form_edit.php?id=<?=$row['id_043']?>">Edit | <a href="delete.php?id=<?=$row['id_043']?>"> Delete</td>
                </tr>
                <?php }
                ?>
        </table>
</body>
</html>