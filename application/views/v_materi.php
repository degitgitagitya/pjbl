<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<body>
<div class="container">
	<div class="shadow-sm d-flex  p-3 mb-5 mt-4 bg-white rounded justify-content-center">	
	<h1>Daftar Materi</h1>
	
	</div>
	<div class="shadow-sm p-3 mb-5 bg-white rounded">
	<table class='table' > 
	<tr >
		<th>No.</th>
		<th>Proyek</th>
		<th>Nama Materi</th>
		<th>Materi</th>
		<th>Lampiran</th>
		<th>Tanggal Awal</th>
		<th>Tanggal Akhir</th>
		<th>Aksi</th>
	</tr>
  <?php 
	$nomor=1;
	foreach($tb_materi as $data) { ?>
		<tr>
		<td> <?php echo $nomor;?></td>
		<td> <?php echo "Proyek ". $nomor;?></td>
		<td> <?php echo $data->nama_materi;?></td>
		<td> <?php echo $data->tugas_materi;?></td>
		<td> <?php echo $data->file_materi;?></td>
		<td> <?php echo $data->tgl_dibuat;?></td>
		<td> <?php echo $data->tgl_akhir;?></td>
    
		<td><a href="http://localhost/tubes_pjbl/index.php/Detail/">Detail</td>
		</tr>
  
		
		<?php
		$nomor++;
	};
  ?>
</table>
</div>

</body>
</html>