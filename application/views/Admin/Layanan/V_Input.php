<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Input Layanan</h3>
			<div class="row">
				<div class="col-md-12">
					<!-- INPUTS -->
					<div class="panel">
						<div class="panel-heading">
						</div>
						<div class="panel-body">
							<form action="<?php echo base_url('Layanan/insertLayanan'); ?>" method="POST">
							<div class="col-md-6">
								<div class="form-group">
									<label for="nama">Nama</label>
									<input id="nama" name="nama" type="text" class="form-control" placeholder="Nama" required="">
								</div>

								<div class="form-group">
									<label for="layanan_medis">Layanan Medis</label>
									<input id="layanan_medis" name="layanan_medis" type="text" class="form-control" placeholder="Layanan Medis" required="">
								</div>

								<div class="form-group">
									<label for="info_medis">Info Medis</label>
									<textarea id="info_medis" name="info_medis" class="form-control" placeholder="Info Medis" required="">
									</textarea>
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
