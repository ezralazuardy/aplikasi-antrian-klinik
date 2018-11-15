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
			<h3 class="page-title">Answer Pertanyaan</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
						</div>
						<div class="panel-body">
							<form action="<?php echo base_url('Hubungi/answerHubungi'); ?>" method="POST">
							<input type="hidden" value="<?php echo $id_hubungi; ?>" name="id_hubungi">
							<?php if($list){
								foreach ($list as $value) {
							?>
							

							<div class="col-md-6">
								<div class="form-group">
									<label for="Kepada">Kepada</label>
									<input id="Kepada" name="nama" type="text" class="form-control" placeholder="Nama" value="<?php echo $value['nama']; ?>" required="" >
								</div>
								<div class="form-group">
									<label for="Email">Email</label>
									<input id="Email" name="email" type="text" class="form-control" placeholder="Layanan Medis" value="<?php echo $value['email']; ?>" readonly>
								</div>
								<div class="form-group">
									<label for="nama">Subject</label>
									<input id="nama"  name="subject" type="text" class="form-control" placeholder="Subject" value="" required="" >
								</div>
								
								<div class="form-group">
									<label for="Pesan">Pesan</label>
									<textarea id="Pesan" name="pesan" cols=10 rows=10 class="form-control" placeholder="pesan"  required="">
									</textarea>
								</div>
							</div>

							<?php
								}
							}
							?>
							<div class="col-md-12">
								<input class="btn btn-primary btn-lg" type="submit" value="Answer">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
