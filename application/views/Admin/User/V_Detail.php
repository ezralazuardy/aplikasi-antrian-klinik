<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li><a href="<?php echo base_url('DashboardAdmin'); ?>" ><i class="lnr lnr-home"></i><span>Dashboard</span></a></li>
				<li><a href="<?php echo base_url('Admin/pegawai'); ?>" class=""><i class="lnr lnr-users "></i> <span>Atur Pegawai</span></a></li>
				<li><a href="<?php echo base_url('Layanan/index'); ?>" class=""><i class="lnr lnr-bookmark "></i> <span>Atur Layanan</span></a></li>
				<li><a href="<?php echo base_url('Jadwal/index'); ?>" class=""><i class="lnr lnr-user "></i> <span>Atur Jadwal</span></a></li>
				<li><a class="active" href="<?php echo base_url('User/index'); ?>" class=""><i class="lnr lnr-user "></i> <span>Atur Akun Pengguna</span></a></li>
			</ul>
		</nav>
	</div>
</div>
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
							<form action="<?php echo base_url('User/updateUser'); ?>" method="POST">
								<input type="hidden" value="<?php echo $id_user; ?>" name="id_user">
								<div class="col-md-6">
									<?php 
									if($list){
										foreach ($list as $value) {
											?>


											<div class="form-group">
												<label for="nama-dokter">Username</label>
												<h4 id="nama-dokter"><?php echo $value['username']; ?></h4>
												<hr>
											</div>

											<div class="form-group">
												<label for="tempat-lahir">Nama</label>
												<h4 id="tempat-lahir"><?php echo $value['nama']; ?></h4>
												<hr>
											</div>
											<div class="form-group">
												<label for="alamat">Hak Akses</label>
												<h4 id="alamat"><?php echo $value['akses']; ?></h4>
												<hr>
											</div>
										</div>
										
										<?php
									}
								}
								?>
								<div class="col-md-12">
									<a href="<?php echo base_url('User/userEdit/'.$id); ?>" class="btn btn-warning btn-lg" type="submit" value="Edit">Edit</a>
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
