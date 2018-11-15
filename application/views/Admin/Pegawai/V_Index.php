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
			<div class="row">
				<div class="col-md-10">
					<h3 class="page-title">Daftar Pegawai</h3>
				</div>
				<div class="col-md-2" align="right">
        			<a href="<?php echo base_url('Admin/inputPegawai'); ?>" class="btn btn-raised btn-primary"><span class="fa fa-plus" style="margin-right: 10px;"></span>Tambah</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?php echo $status; ?>
					<div class="panel">
						<div class="panel-body">
							<table id="doctor-table" class="table">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama</th>
										<th>Tanggal Lahir</th>
										<th>Status</th>
										<th>Layanan</th>
										<th>Opsi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$i = 1;
									if ($pegawai){
										foreach ($pegawai as $value) {
											$encrypted_string = $this->encrypt->encode($value['id_dok']);
											$id = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);
											?>
											<tr>
												<td><?php echo $i++ . "."; ?></td>
												<td><?php echo $value['nama_dokter']; ?></td>
												<td><?php echo $value['tanggal_lahir']; ?></td>
												<td><?php echo $value['status']; ?></td>
												<td><?php echo $value['nama']; ?></td>
												<td align="center">
													<a href="<?php echo base_url('Admin/pegawaiDetail/'.$id); ?>" class="btn btn-sm btn-primary"><span class="fa fa-info"></span></a>
													<a href="<?php echo base_url('Admin/pegawaiEdit/'.$id); ?>" class="btn btn-sm btn-warning"><span class="fa fa-pencil"></span></a>
													<button class="btn btn-sm btn-danger" onclick="deleteThis('<?php echo base_url('Admin/deletePegawai/'.$id); ?>');" ><span class="fa fa-trash"></span></button>
												</td>
											</tr>
											<?php
										}
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>