<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li><a href="<?php echo base_url('DashboardAdmin'); ?>" ><i class="lnr lnr-home"></i><span>Dashboard</span></a></li>
				<li><a class="active" href="<?php echo base_url('Admin/pegawai'); ?>" class=""><i class="lnr lnr-users "></i> <span>Atur Pegawai</span></a></li>
				<li><a href="<?php echo base_url('Layanan/index'); ?>" class=""><i class="lnr lnr-bookmark "></i> <span>Atur Layanan</span></a></li>
				<li><a href="<?php echo base_url('Jadwal/index'); ?>" class=""><i class="lnr lnr-user "></i> <span>Atur Jadwal</span></a></li>
				<li><a href="<?php echo base_url('User/index'); ?>" class=""><i class="lnr lnr-user "></i> <span>Atur Akun Pengguna</span></a></li>
			</ul>
		</nav>
	</div>
</div>
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Input Pegawai</h3>
			<div class="row">
				<div class="col-md-12">
					<!-- INPUTS -->
					<div class="panel">
						<div class="panel-heading">
						</div>
						<div class="panel-body">
							<form action="<?php echo base_url('Admin/insertPegawai'); ?>" method="POST">
								<div class="col-md-6">
									<div class="form-group">
										<label for="nama-dokter">Nama Dokter</label>
										<input id="nama-dokter" name="nama-dokter" type="text" class="form-control" placeholder="Nama Dokter" required="">
									</div>

									<div class="form-group">
										<label for="tempat-lahir">Tempat Lahir</label>
										<input id="tempat-lahir" name="tempat-lahir" type="text" class="form-control" placeholder="Tempat Lahir" required="">
									</div>

									<div class="form-group">
										<label for="tanggal-lahir">Tanggal Lahir</label>
										<input id="tanggal-lahir" name="tanggal-lahir" type="text" class="form-control tanggal-lahir" placeholder="Tanggal Lahir" required="">
									</div>

									<div class="form-group">
										<label for="alamat">Alamat</label>
										<textarea id="alamat" name="alamat" class="form-control" placeholder="Alamat" required="">
										</textarea>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="jenis-kelamin">Jenis Kelamin</label>
										<label class="fancy-radio">
											<input name="jenis-kelamin" value="male" type="radio" required="">
											<span><i></i>Laki - Laki</span>
										</label>
										<label class="fancy-radio">
											<input name="jenis-kelamin" value="female" type="radio" required="">
											<span><i></i>Perempuan</span>
										</label>

									</div>

									<div class="form-group">
										<label for="status">Status</label>
										<input id="status" name="status" type="text" class="form-control" placeholder="Status" required="">
									</div>

									<div class="form-group">
										<label for="pendidikan">Pendidikan Terakhir </label>
										<select name="pendidikan" class="form-control" placeholder="Pendidikan Terakhir" required="">
											<option disabled="" readonly>Pendidikan Terakhir</option>
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
											<?php 
											$i = 1;
											if($layanan){
												foreach ($layanan as $value) {?>
												<option value=<?php echo $value['id_layanan']; ?>><?php echo $value['nama']; ?></option>
											<?php  
												}
											} 
											?>
											</select>
										</div>
									</div>
									<div class="col-md-12">
										<input class="btn btn-success btn-lg" type="submit" value="Input">
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
