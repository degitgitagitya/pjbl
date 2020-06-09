<div class="container">
	<h3>
		Daftar Materi
	</h3>
	<hr>
	<?php 
		if (isset($listMateri)){
			foreach ($listMateri as $data) {
				?>
				<div class="w-100 bg-white mb-3">
					<div class="p-3 shadow-sm">
						<div class="d-flex justify-content-between">
							<div class="font-weight-bold">
								<?php echo $data->nama_materi?>
							</div>
							<div>
								<?php echo ($data->tgl_dibuat." s/d ".$data->tgl_akhir)?> 
							</div>
						</div>
						<hr>
						<div class="d-flex">
							<div class="w-25">
								<img src="https://cdn.lynda.com/course/424947/424947-637038167982369627-16x9.jpg" class="img-fluid" alt="">
							</div>
							<div class="w-25 pl-3">
								<div class="font-weight-bold">
									Materi
								</div>
								<hr>
								<a href="" class="btn btn-info">
									Download File Materi
								</a>
							</div>
							<div class="w-50 pl-3">
								<div class="font-weight-bold">
									Tugas
								</div>
								<hr>
								<div>
									<?php echo $data->tugas_materi ?>
								</div>
								<hr>
								<a href="" class="btn btn-warning">
									Kirim Tugas
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
		}
	?>
</div>