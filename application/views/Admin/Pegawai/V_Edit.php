<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Edit Pegawai</h3>
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
												<input id="nama-dokter" name="nama-dokter" type="text" value="<?php echo $value['nama_dokter']; ?>" class="form-control" placeholder="Nama Dokter" required="">
											</div>

											<div class="form-group">
												<label for="tempat-lahir">Tempat Lahir</label>
												<input id="tempat-lahir" value="<?php echo $value['tempat_lahir']; ?>" name="tempat-lahir" type="text" class="form-control" placeholder="Tempat Lahir" required="">
											</div>


											<div class="form-group">
												<label for="tanggal-lahir">Tanggal Lahir</label>
												<input id="tanggal-lahir" name="tanggal-lahir" type="text" class="form-control tanggal-lahir" placeholder="Tanggal Lahir" value="<?php echo htmlspecialchars($value['tanggal_lahir']); ?>" required="">
											</div>

											<div class="form-group">
												<label for="alamat">Alamat</label>
												<textarea id="alamat" name="alamat" class="form-control" placeholder="Alamat" required=""><?php echo $value['alamat']; ?>
												</textarea>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="jenis-kelamin">Jenis Kelamin</label>
												<label class="fancy-radio">
													<input name="jenis-kelamin" value="male" type="radio" <?php echo $value['jenis_kelamin'] == 'male' ? "checkdnsrr(host)" : ''; ?> required="">
													<span><i></i>Laki - Laki</span>
												</label>
												<label class="fancy-radio">
													<input name="jenis-kelamin" value="female" type="radio" <?php echo $value['jenis_kelamin'] == 'female' ? "checked" : ''; ?> required="">
													<span><i></i>Perempuan</span>
												</label>

											</div>

											<div class="form-group">
												<label for="status">Status</label>
												<input id="status" value="<?php echo $value['status']; ?>" name="status" type="text" class="form-control" placeholder="Status" required="">
											</div>

											<div class="form-group">
												<label for="pendidikan">Pendidikan Terakhir </label>
												<select name="pendidikan" class="form-control" placeholder="Pendidikan Terakhir" required="">
													<option value="<?php echo $value['pendidikan_akhir']; ?>"><?php echo $value['pendidikan_akhir']; ?></option>
													<option value="Doktor">Doktor (S3)</option>
													<option value="Magister">Magister (S2)</option>
													<option value="Sarjana">Sarjana (S1)</option>
													<option value="Diploma 3">Diploma 3</option>
													<option value="Diploma 2">Diploma 2</option>
													<option value="Diploma 1">Diploma 1</option>
													<option value="SMA">SMA</option>
													<option value="SMK">SMK</option>
													<option value="SMP">SMP</option>
													<option value="SD">SD</option>
												</select>
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
									<input class="btn btn-danger btn-lg" type="submit" value="Update">
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
