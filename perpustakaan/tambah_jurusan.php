<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  	<title></title>
</head>
<body>
	<?php 
  include "header.php";
 ?>
	<div class="container">
	<h3>Tambah data Jurusan</h3>
	<form action="proses_tambah_jurusan.php" method="post">
		Nama Jurusan :
		<input type="text" name="nama_jurusan" value="" class="form-control">
		Angkatan :
		<input type="text" name="angkatan" value="" class="form-control"><br>
		<input type="submit" name="simpan" value="simpan" class="btn btn-primary">
	</form>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>