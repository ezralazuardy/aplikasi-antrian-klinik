<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li><a href="<?php echo base_url('DashboardAdmin'); ?>" ><i class="lnr lnr-home"></i><span>Dashboard</span></a></li>
				<li><a href="<?php echo base_url('Admin/pegawai'); ?>" class=""><i class="lnr lnr-users"></i> <span>Atur Dokter</span></a></li>
				<li><a href="<?php echo base_url('User/index'); ?>" class=""><i class="lnr lnr-user"></i> <span>Atur Akun</span></a></li>
				<li><a href="<?php echo base_url('Layanan/index'); ?>" class=""><i class="lnr lnr-book"></i> <span>Atur Layanan</span></a></li>
				<li><a href="<?php echo base_url('Jamkes/index'); ?>" class=""><i class="lnr lnr-plus-circle"></i> <span>Atur Jaminan Kesehatan</span></a></li> 
				<li><a href="<?php echo base_url('Jadwal/index'); ?>" class=""><i class="lnr lnr-clock"></i> <span>Atur Jadwal</span></a></li>
				<li><a class="active" href="<?php echo base_url('Antrian/index'); ?>" class=""><i class="lnr lnr-eye"></i> <span>Lihat Antrian</span></a></li>
				<li><a href="<?php echo base_url('Hubungi/index'); ?>" class=""><i class="lnr lnr-phone"></i> <span>Kotak Masuk</span></a></li>
			</ul>
		</nav>
	</div>
</div>
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Tambah Antrian</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-body">
							<form action="<?php echo base_url('Jadwal/insertJadwal'); ?>" method="POST">
							<div class="col-md-6">
								<div class="form-group">
									<label for="nama_lengkap">Nama Lengkap</label>
									<input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap" required="">
								</div>
								<div class="form-group">
									<label for="Umur">Umur</label>
									<input id="Umur" name="umur" type="text" class="form-control" placeholder="Bagian" required="">
								</div>
								<div class="form-group">
									<label for="berat">Berat</label>
									<input id="berat" name="berat" type="text" class="form-control" placeholder="Bagian" required="">
								</div>
								<div class="form-group">
									<label for="jenis_kelamin">Jenis Kelamin</label>
									<select id="jenis_kelamin" name="jenis_kelamin"  class="form-control">
										<option value="Laki - Laki">Laki - Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input id="alamat" name="alamat" type="text" class="form-control" placeholder="Bagian" required="">
								</div>
								<div class="form-group">
									<label for="penyakit">Penyakit</label>
									<input id="penyakit" name="penyakit" type="text" class="form-control" placeholder="Bagian" required="">
								</div>
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
									<label for="id_jamkes">Jaminan Kesehatan</label>
									<select id="id_jamkes" name="id_jamkes"  class="form-control">
									<?php 
									if($jamkes){
									foreach ($jamkes as $value) { ?>
										<option value="<?php echo $value['id_jamkes']; ?>"><?php echo $value['singkatan']; ?>&nbsp;(<?php echo $value['nama_jamkes']; ?>)</option>
									<?php }} ?>
									</select>
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
