<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li><a class="active" href="<?php echo base_url('DashboardAdmin'); ?>" ><i class="lnr lnr-home"></i><span>Dashboard</span></a></li>
				<li><a href="<?php echo base_url('Admin/pegawai'); ?>" class=""><i class="lnr lnr-users "></i> <span>Atur Pegawai</span></a></li>
				<li><a href="<?php echo base_url('Layanan/index'); ?>" class=""><i class="lnr lnr-bookmark "></i> <span>Atur Layanan</span></a></li>
				<li><a href="<?php echo base_url('Jadwal/index'); ?>" class=""><i class="lnr lnr-user "></i> <span>Atru Jadwal</span></a></li>
				<li><a href="<?php echo base_url('User/index'); ?>" class=""><i class="lnr lnr-user "></i> <span>Atur Akun Pengguna</span></a></li>
				<li><a href="<?php echo base_url('Antrian/index'); ?>" class=""><i class="lnr lnr-book "></i> <span>Lihat Antrian</span></a></li>
			</ul>
		</nav>
	</div>
</div>
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Day Overview</h3>
					<p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-download"></i></span>
								<p>
									<span class="number"><?php echo $total_antrian; ?></span>
									<span class="title">Total Antrian (day)</span>
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-shopping-bag"></i></span>
								<p>
									<span class="number"><?php echo $sisa_antrian; ?></span>
									<span class="title">Sisa Antrian</span>
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-eye"></i></span>
								<p>
									<span class="number"><?php echo $current_antrian[0]['antrian']; ?></span>
									<span class="title">Antrian Saat Ini</span>
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-bar-chart"></i></span>
								<p>
									<span class="number"><?php echo $current_antrian[1]['antrian']; ?></span>
									<span class="title">Antrian Berikutnya</span>
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-9">
							<div id="headline-chart" class="ct-chart"></div>
						</div>
						<div class="col-md-3">
							<div class="weekly-summary text-right">
								<span class="number">2,315</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 12%</span>
								<span class="info-label">Total Sales</span>
							</div>
							<div class="weekly-summary text-right">
								<span class="number">$5,758</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 23%</span>
								<span class="info-label">Monthly Income</span>
							</div>
							<div class="weekly-summary text-right">
								<span class="number">$65,938</span> <span class="percentage"><i class="fa fa-caret-down text-danger"></i> 8%</span>
								<span class="info-label">Total Income</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			</div>
		</div>
	</div>
</div>
