<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li><a href="<?php echo base_url('DashboardAdmin'); ?>" ><i class="lnr lnr-home"></i><span>Dashboard</span></a></li>
				<li><a href="<?php echo base_url('Admin/pegawai'); ?>" class=""><i class="lnr lnr-users"></i> <span>Atur Dokter</span></a></li>
				<li><a href="<?php echo base_url('User/index'); ?>" class=""><i class="lnr lnr-user"></i> <span>Atur Akun</span></a></li>
				<li><a href="<?php echo base_url('Layanan/index'); ?>" class=""><i class="lnr lnr-book"></i> <span>Atur Layanan</span></a></li>
				<li><a href="<?php echo base_url('Jamkes/index'); ?>" class=""><i class="lnr lnr-plus-circle"></i> <span>Atur Jaminan Kesehatan</span></a></li> 
				<li><a class="active" href="<?php echo base_url('Jadwal/index'); ?>" class=""><i class="lnr lnr-clock"></i> <span>Atur Jadwal</span></a></li>
				<li><a href="<?php echo base_url('Antrian/index'); ?>" class=""><i class="lnr lnr-eye"></i> <span>Lihat Antrian</span></a></li>
				<li><a ref="<?php echo base_url('Hubungi/index'); ?>" class=""><i class="lnr lnr-phone"></i> <span>Kotak Masuk</span></a></li>
			</ul>
		</nav>
	</div>
</div>
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Tambah Jadwal</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-body">
							<form action="<?php echo base_url('Jadwal/insertJadwal'); ?>" method="POST">
								<div class="col-md-6">
									<div class="form-group">
										<label for="id_dokter">Dokter</label>
										<select id="id_dokter" name="id_dokter"  class="form-control">
											<?php 
											if($dokter){
												foreach ($dokter as $value) { ?>
												<option value="<?php echo $value['id_dok']; ?>"><?php echo $value['nama_dokter']; ?></option>
												<?php }} ?>
											</select>
										</div>
										<div class="form-group">
											<label for="bagian">Bagian</label>
											<input id="bagian" name="bagian" type="text" class="form-control" placeholder="Bagian" required="">
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-2">
													<label for=time_awal>Hari</label>
												</div>

												<div class="col-md-4">
													<select id="hari" name="hari_pertama"  class="form-control">
														<option value=1>Senin</option>
														<option value=2>Selasa</option>
														<option value=3>Rabu</option>
														<option value=4>Kamis</option>
														<option value=5>Jumat</option>
														<option value=6>Sabtu</option>
														<option value=7>Minggu</option>
													</select>
												</div>
												<div class="col-md-2 text-center"><label>s/d</label></div>
												<div class="col-md-4">
													<select id="hari" name="hari_terakhir"  class="form-control">
														<option value=1>Senin</option>
														<option value=2>Selasa</option>
														<option value=3>Rabu</option>
														<option value=4>Kamis</option>
														<option value=5>Jumat</option>
														<option value=6>Sabtu</option>
														<option value=7>Minggu</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-2">
													<label for=time_awal>Jam</label>
												</div>
												<div class="col-md-4">
													<input id="time_awal" name="time_awal" type="time" class="form-control" placeholder="Bagian" required="">
												</div>
												<div class="col-md-2 text-center"><label>s/d</label></div>
												<div class="col-md-4">
													<input id="time_akhir" name="time_akhir" type="time" class="form-control" placeholder="Bagian" required="">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<input class="btn btn-raised btn-primary" type="submit" value="Tambah">
									</div>
								</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
