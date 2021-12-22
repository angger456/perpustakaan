<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<?php 
  include "header.php";
 ?>
 <h2>Daftar Buku</h2>
 <a href="tambah_buku.php" class="btn btn-success">Tambah Buku</a>
 <div class="row">
 	<?php
 	include "koneksi.php";
 	$qry_buku=mysqli_query($conn, "select * from buku");
 	while ($dt_buku=mysqli_fetch_array($qry_buku)) {
 	 	?>
 	 	<div class="col-md-3">
 	 		<div class="card">
 	 			<img src="buku4.jpg" class="card-img-top">
 	 			<div class="card-body">
 	 				<h5 class="card-tittle"><?=$dt_buku['judul_buku']?></h5>
 	 				<p class="card-text"><?=substr($dt_buku['deskripsi'], 0,70)?></p>
 	 				<a href="pinjam_buku.php?id_buku=<?=$dt_buku['id_buku']?>" class="btn btn-primary">Pinjam</a>	
 	 				</p>
 	 			</div>
 	 		</div>
 	 	</div>
 	 	<?php
 	 } 
 	 ?>
 </div>
 <?php
     include "footer.php";
 ?>