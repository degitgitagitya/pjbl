<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="shadow-sm d-flex  p-3 mb-5 mt-4 bg-white rounded justify-content-center">	
	<h1>Project Based Learning!</h1>
	</div>
	<div class="shadow-sm p-3 mb-5 bg-white rounded">
	<table class='table' > 
	<tr >
    <th>No.</th>
    <th>Proyek</th>
		<th>Nama Materi</th>
		<th>Materi</th>
    <th>Nama Kelompok</th>
    <th>Aksi</th>
	</tr>
  <?php 
	$nomor=1;
	foreach($tb_pjbl as $data) { ?>
		<tr>
		<td> <?php echo $nomor;?></td>
		<td> <?php echo "Proyek ". $nomor;?></td>
		<td> <?php echo $data->nama_materi;?></td>
		<td> <?php echo $data->materi;?></td>
    <td > <?php echo $data->nama_kelompok;?></td>
		<td><a href="http://localhost/tubes_pjbl/index.php/Detail/">Detail</td>
		</tr>
  </table>
		<?php
		$nomor++;
	};
  ?>

</div>