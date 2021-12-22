<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  	<title></title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px; ">
		<div class="container-flaud">
			<a class="navbar-brand" href="#">PERPUSTAKAAN</a>
			<button class="navbar_toggler" type="button" data-bs-toggle="collaps" data-bs-target="#navbarNav" arial_controls="navbarNav" aria-expanded="false" arial-label="toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collaps navbar-collaps" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="home.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="tampil_mahasiswa.php">Data Mahasiswa</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="buku.php">Buku</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="histori_peminjaman.php">Transaksi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
				</li>
			</ul>
		</div>	
	</div>
		
</nav>
<div class="container bg-light rounded" style="margin-top: 10px">


	<h3>Tambah Buku</h3>
	<form action="proses_tambah_buku.php" method="post">
		Nama Buku :
		<input type="text" name="nama_buku" value="" class="form-control">
		Deskripsi :
		<input type="text" name="deskripsi" value="" class="form-control"><br>
		<input type="submit" name="simpan" value="simpan" class="btn btn-primary">
	</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>