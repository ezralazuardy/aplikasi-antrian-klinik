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
				<li><a href="<?php echo base_url('Antrian/index'); ?>" class=""><i class="lnr lnr-eye"></i> <span>Lihat Antrian</span></a></li>
				<li><a class="active" href="<?php echo base_url('Hubungi/index'); ?>" class=""><i class="lnr lnr-phone"></i> <span>Kotak Masuk</span></a></li>
			</ul>
		</nav>
	</div>
</div>
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Input Hubungi</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
						</div>
						<div class="panel-body">
							<form action="<?php echo base_url('Hubungi/inserthubungi'); ?>" method="POST">
							<div class="col-md-6">
								<div class="form-group">
									<label for="nama">Nama</label>
									<input id="nama" name="nama" type="text" class="form-control" placeholder="Nama" required="">
								</div>
								<div class="form-group">
									<label for="nama">Email</label>
									<input id="nama" maxlength="3" name="email" type="email" class="form-control" placeholder="Email" style="width:30%" required="">
								</div>

								<div class="form-group">
									<label for="layanan_medis">Pesan</label>
									<textarea id="layanan_medis" name="pesan" type="text" class="form-control" placeholder="Pesan" required=""> </textarea>
								</div>
							</div>
							<div class="col-md-12">
								<input class="btn btn-success btn-lg" type="submit" value="Input">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
