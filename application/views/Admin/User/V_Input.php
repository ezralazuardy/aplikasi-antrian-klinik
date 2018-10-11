<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Input User</h3>
			<div class="row">
				<div class="col-md-12">
					<!-- INPUTS -->
					<div class="panel">
						<div class="panel-heading">
						</div>
						<div class="panel-body">
							<form action="<?php echo base_url('User/insertUser'); ?>" method="POST">
							<div class="col-md-6">
								<div class="form-group">
									<label for="username">Username</label>
									<input id="username" name="username" type="text" class="form-control" placeholder="Username" required="">
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" name="password" type="password" class="form-control" placeholder="Password" required="">
								</div>

								<div class="form-group">
									<label for="nama">Nama</label>
									<input id="nama" name="nama" type="text" class="form-control tanggal-lahir" placeholder="Nama" required="">
								</div>

								<div class="form-group">
									<label for="akses">Hak Akses</label>
									<select name="akses" class="form-control">
										<option value="Admin">Admin</option>
										<option value="Pengurus">Pengurus</option>
										<option value="Pegawai">Pegawai</option>
										<option value="User">User</option>
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
