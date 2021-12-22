<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <title></title>
</head>
<body>
    <?php 
  include "header.php";
 ?>
    <h3>Data Jurusan</h3>
    <a href="tambah_jurusan.php" class="btn btn-success">Tambah Jurusan</a>
    <table class="table table-hover table-striped">
    	<thead>
    		<tr>
    			<th>NO</th><th>JURUSAN</th><th>ANGKATAN</th><th>AKSI</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php 
    		include "koneksi.php";
    		$qry_jurusan=mysqli_query($conn,"select * from jurusan");
    		$no=0;
    		while ($data_jurusan=mysqli_fetch_array($qry_jurusan)) {
    		$no++;?>
    		<tr>
    		<td><?=$no?></td><td><?=$data_jurusan['nama_jurusan']?></td> <td><?=$data_jurusan['angkatan']?></td>	

    		<td><a href="hapus_mhs.php?id_jurusan=<?=$data_jurusan['id_jurusan']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
    	    </tr>	
    	    <?php
    		}
    		 ?>
    	</tbody>
    </table>
</body>
</html>