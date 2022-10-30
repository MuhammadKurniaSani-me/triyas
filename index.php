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
		a {
			text-decoration: none; font-size: 20px;font-family: verdana;padding: 14px 20px
		}
		ul { 
			padding: 14px
		}
	    li { 
			list-style: none; display: inline;
		}
	    li a { 
			background: #123c69; color:#d4d4d4;
		}
	    li a:hover { 
			background: #4da4ff; color:#fff;
		}
	    .navi { 
			background: #123c69; height: 55px
		}
		.center {
			text-align: center;
			display: block;
		}
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
	<div class="center">
		<?php 
		    $FIRST_IDX = 0;
			$numOfSpaces = 8;
		    for ($i=FIRST_IDX; $i < $numOfSpaces; $i++) { 
				echo "<br>";
			}
		?>
		<img src="inpostor.png" width="200px height="200px /> <br>
		<p>Sistem Informasi Mahasiswa</p>
		<p>Teknik Informatika 2020</p>
	</div>
</body>
</html>