<?php
if ($_POST) {
	$nama_buku=$_POST['nama_buku'];
	$deskripsi=$_POST['deskripsi'];
	if (empty($nama_buku)) {
		echo "<script>alert('Nama buku tidak boleh kosong');location.href='buku.php';</script>";

	} elseif (empty($deskripsi)) {
		echo "<script>alert('nama tidak boleh kosong');location.href='buku.php';</script>";
	} else {
		include "koneksi.php";
		$insert=mysqli_query($conn, "insert into buku (nama_buku, deskripsi) value ('".$nama_buku."', '".$deskripsi."')");
		if ($insert) {
			echo "<script>alert('Sukses menambahkan buku');location.href='buku.php';</script>";
		} else {
			echo "<script>alert('Gagal menambahkan buku');location.href='buku.php';</script>";
		}
	}
}
?>