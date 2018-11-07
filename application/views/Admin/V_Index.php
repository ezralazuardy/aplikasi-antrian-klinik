<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li><a class="active" href="<?php echo base_url('DashboardAdmin'); ?>" ><i class="lnr lnr-home"></i><span>Dashboard</span></a></li>
				<li><a href="<?php echo base_url('Admin/pegawai'); ?>" class=""><i class="lnr lnr-users "></i> <span>Atur Pegawai</span></a></li>
				<li><a href="<?php echo base_url('Layanan/index'); ?>" class=""><i class="lnr lnr-bookmark "></i> <span>Atur Layanan</span></a></li>
				<li><a href="<?php echo base_url('Jadwal/index'); ?>" class=""><i class="lnr lnr-clock "></i> <span>Atur Jadwal</span></a></li>
				<li><a href="<?php echo base_url('User/index'); ?>" class=""><i class="lnr lnr-user "></i> <span>Atur Akun Pengguna</span></a></li>
				<li><a href="<?php echo base_url('Antrian/index'); ?>" class=""><i class="lnr lnr-book "></i> <span>Lihat Antrian</span></a></li>
				<li><a href="<?php echo base_url('Jamkes/index'); ?>" class=""><i class="fa fa-book "></i> <span>Atur Jaminan Kesehatan</span></a></li>
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
					<p class="panel-subtitle">Period: <?php echo date('l,d F Y'); ?></p>
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
									<span class="number"><?php if(!empty($current_antrian[0]['antrian'])){
											echo $current_antrian[0]['antrian'];
										}else{
											echo " - ";
										}	 ?></span>
									<span class="title">Antrian Saat Ini</span>
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-bar-chart"></i></span>
								<p>
									<span class="number"><?php 
									if(!empty($current_antrian[1]['antrian'])){
											echo $current_antrian[1]['antrian'];
										}else{
											echo " - ";
										}	
										 ?></span>
										
									
									<span class="title">Antrian Berikutnya</span>
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-right">
							<?php 
								/* Encrypt ID */
								$id = '';
								$point = "";
								if(!empty($current_antrian[0]['id_antrian'])){
											$id = $current_antrian[0]['id_antrian'];
											$point = "";
										}else{
											$point =  "disabled";
										}	
								$encrypted_string = $this->encrypt->encode($id);
								$id = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);

							?>
							<a href="<?php echo base_url('Dashboard/skipAntrian/'.$id); ?>" class="btn btn-success btn-large" <?php echo $point; ?>><span class="title fa fa-play"></span> &nbsp; Next</a>
						</div>
					</div>
				</div>
			</div>
			
			</div>
		</div>
	</div>
</div>
