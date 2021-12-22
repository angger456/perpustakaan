<?php  
session_start();
   if ($_SESSION['status_login']!=true) {
   	header('location: login.php');
   }
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px; ">
		<div class="container">
			<a class="navbar-brand" href="#">PERPUSTAKAAN SISTEM INFORMASI</a>
		<div class="collaps navbar-collaps" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="home.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="buku.php">Buku</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="histori_peminjaman.php">Transaksi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="tampil_mahasiswa.php">Data Mahasiswa</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="tampil_jurusan.php">Data Jurusan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
				</li>
			</ul>
		</div>	
	</div>
		
</nav>
<div class="container bg-light rounded" style="margin-top: 5px">
</div>
</body>
</html>