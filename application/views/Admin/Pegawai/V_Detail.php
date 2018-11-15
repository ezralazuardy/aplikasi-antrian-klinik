<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li><a href="<?php echo base_url('DashboardAdmin'); ?>" ><i class="lnr lnr-home"></i><span>Dashboard</span></a></li>
				<li><a class="active" href="<?php echo base_url('Admin/pegawai'); ?>" class=""><i class="lnr lnr-users"></i> <span>Atur Dokter</span></a></li>
				<li><a href="<?php echo base_url('User/index'); ?>" class=""><i class="lnr lnr-user"></i> <span>Atur Akun</span></a></li>
				<li><a href="<?php echo base_url('Layanan/index'); ?>" class=""><i class="lnr lnr-book"></i> <span>Atur Layanan</span></a></li>
				<li><a href="<?php echo base_url('Jamkes/index'); ?>" class=""><i class="lnr lnr-plus-circle"></i> <span>Atur Jaminan Kesehatan</span></a></li> 
				<li><a href="<?php echo base_url('Jadwal/index'); ?>" class=""><i class="lnr lnr-clock"></i> <span>Atur Jadwal</span></a></li>
				<li><a href="<?php echo base_url('Antrian/index'); ?>" class=""><i class="lnr lnr-eye"></i> <span>Lihat Antrian</span></a></li>
				<li><a ref="<?php echo base_url('Hubungi/index'); ?>" class=""><i class="lnr lnr-phone"></i> <span>Kotak Masuk</span></a></li>
			</ul>
		</nav>
	</div>
</div>
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Detail Dokter</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
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
									<a href="<?php echo base_url('Admin/pegawaiEdit/'.$id); ?>" class="btn btn-raised btn-primary" type="submit" value="Edit">Edit</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
