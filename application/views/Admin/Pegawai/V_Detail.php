<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Detail Pegawai</h3>
			<div class="row">
				<div class="col-md-12">
					<!-- INPUTS -->
					<div class="panel">
						<div class="panel-heading">
						</div>
						<div class="panel-body">
							<form action="<?php echo base_url('Admin/updatePegawai'); ?>" method="POST">
								<input type="hidden" value="<?php echo $id_dok; ?>" name="id_dok">
								<div class="col-md-6">
									<?php 
									if($list){
										foreach ($list as $value) {
											?>


											<div class="form-group">
												<label for="nama-dokter">Nama</label>
												<h4 id="nama-dokter"><?php echo $value['nama_dokter']; ?></h4>
												<hr>
											</div>

											<div class="form-group">
												<label for="tempat-lahir">Tempat Lahir</label>
												<h4 id="tempat-lahir"><?php echo $value['tempat_lahir']; ?></h4>
												<hr>
											</div>
											
											<div class="form-group">
												<label for="tanggal-lahir">Tanggal Lahir</label>
												<h4 id="tanggal-lahir"><?php echo date_format(date_create($value['tanggal_lahir']),'l, d F Y'); ?></h4>
											</div>
											<hr>
											<div class="form-group">
												<label for="alamat">Alamat</label>
												<h4 id="alamat"><?php echo $value['alamat']; ?></h4>
												<hr>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="jenis-kelamin">Jenis Kelamin</label>
												<h4 id="jenis-kelamin"><?php echo $value['jenis_kelamin']; ?></h4>
												<hr>


											</div>

											<div class="form-group">
												<label for="status">Status</label>
												<h4 id="status"><?php echo $value['status']; ?></h4>
												<hr>

											</div>

											<div class="form-group">
												<label for="pendidikan">Pendidikan Terakhir </label>
												<h4 id="tempat-lahir"><?php echo $value['pendidikan_akhir']; ?></h4>
												<hr>

											</div>

											<div class="form-group">
												<label for="layanan">Layanan </label>
												<select name="layanan" class="form-control" placeholder="Layanan" required="">
													<option disabled="" readonly>Layanan</option>
													<option value=1>OBAT</option>
												</select>
											</div>
										</div>
										<?php
									}
								}
								?>
								<div class="col-md-12">
									<a href="<?php echo base_url('Admin/pegawaiEdit/'.$id); ?>" class="btn btn-warning btn-lg" type="submit" value="Edit">Edit</a>
								</div>
							</div>
						</div>
						<!-- END INPUTS -->
					</div>
				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT -->
	</div>
	<!-- END MAIN -->
