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
	<!-- boostrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <?php
        include "koneksi.php";
        $id=$_GET['id'];
        $sql = "SELECT * FROM tbl_043 WHERE id_043=$id";
        $hasil = mysqli_query($koneksi, $sql);
        if (!$hasil){
            echo "Query Salah";
        }
        ?>
        <h1>Form tambah data mahasiswa</h1>
        <?php
        while ($row = mysqli_fetch_array($hasil))
        {
        ?>
        <form method="post" action="update.php">
            <input type="hidden" name="id_043" value="<?php echo $row["id_043"]?>">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nama</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nama Lengkap" name="nama_043" value="<?php echo $row['nama_043']?>">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Email</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Email" name="email_043" value="<?php echo $row['email_043']?>">
            </div>
            <button type="submit">Update</button> 
        </form>
        <?php } ?>
</body>
</html>