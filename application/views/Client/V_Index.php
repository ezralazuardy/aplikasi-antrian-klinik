<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li><a class="active" href="<?php echo base_url('Dashboard'); ?>" ><i class="lnr lnr-home"></i><span>Dashboard</span></a></li>
				<li><a href="<?php echo base_url('AmbilAntrian'); ?>" class=""><i class="lnr lnr-users "></i> <span>Ambil Antrian</span></a></li>
				<li><a href="<?php echo base_url('LihatJadwal'); ?>"><i class="lnr lnr-bookmark "></i> <span>Jadwal Dokter</span></a></li>
			</ul>
		</nav>
	</div>
</div>
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Selamat Datang!</h3>
					<p class="panel-subtitle">21 Oktober 2018</p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-credit-card"></i></span>
								<p>
									<span class="number">1×</span>
									<span class="title">Pembayaran</span>
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-eye"></i></span>
								<p>
									<span class="number">3×</span>
									<span class="title">Kunjungan</span>
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-ticket"></i></span>
								<p>
									<span class="number">1×</span>
									<span class="title">Ambil Antrian</span>
								</p>
							</div>
						</div>
						<!-- <div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-bar-chart"></i></span>
								<p>
									<span class="number">35%</span>
									<span class="title">Conversions</span>
								</p>
							</div>
						</div> -->
					</div>
				</div>
			</div>
			<div class="panel panel-headline">
				<div>
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Riwayat Pembayaran</h3>
							<div class="right">
								<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
								<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
							</div>
						</div>
						<div class="panel-body no-padding">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>ID.</th>
										<th>Nama</th>
										<th>Biaya</th>
										<th>Tanggal &amp; Waktu</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><a href="#">000001</a></td>
										<td>Lorem</td>
										<td>Rp. 100.000</td>
										<td>Oct 21, 2018</td>
										<td><span class="label label-success">LUNAS</span></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="panel-footer">
							<div class="row">
								<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> 24 jam terakhir</span></div>
								<div class="col-md-6 text-right"><a href="#" class="btn btn-primary">Lihat Semua Riwayat</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Memo</h3>
							<div class="right">
								<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
								<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
							</div>
						</div>
						<div class="panel-body">
							<ul class="list-unstyled todo-list">
								<li>
									<label class="control-inline fancy-checkbox">
										<input type="checkbox"><span></span>
									</label>
									<p>
										<span class="title">Bayar Tagihan</span>
										<span class="short-description">Bayar tagihan pemeriksaan kesehatan bulanan sebesar Rp. 80.000.</span>
										<span class="date">25 Oktober 2018</span>
									</p>
									<div class="controls">
										<a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Riwayat Aktivitas</h3>
							<div class="right">
								<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
								<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
							</div>
						</div>
						<div class="panel-body">
							<ul class="list-unstyled activity-list">
								<li>
									<img src="assets/img/user-placeholder.webp" alt="Avatar" class="img-circle pull-left avatar">
									<p>Anda telah melunasi resi pembayaran layanan kesehatan sebesar Rp. 100.000<span class="timestamp">20 minutes ago</span></p>
								</li>
							</ul>
							<button type="button" class="btn btn-primary btn-bottom center-block">Selengkapnya</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>