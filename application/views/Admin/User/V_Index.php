<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Daftar User</h3>
			<div class="row">
				<div class="col-md-12">
					<!-- BASIC TABLE -->
					<?php if($this->session->flashdata('success')){  ?>

					<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
						<i class="fa fa-check-circle"></i> <?php echo $this->session->flashdata('success'); ?>
					</div>

					<?php }elseif($this->session->flashdata('error')) { ?>

					<div class="alert alert-danger alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
						<i class="false fa-times-circle"></i> <?php echo $this->session->flashdata('error'); ?>
					</div>

					<?php } ?>

					<div class="panel">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-10">
								</div>
								<div class="col-md-2">
									<div class="float-right" style="padding:10px;margin:5px;">
										<a href="<?php echo base_url('User/inputUser'); ?>" alt="Add" class="btn btn-success btn-lg insert-btn" "><span class="fa fa-plus"></span>
										</a>
									</div>
								</div>
							</div>
							<table class="table" id="doctor-table">
								<thead class="text-center">
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Hak Akses</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$i = 1;
									if($user){
										foreach ($user as $value) {

											/* Encrypt ID */
											$encrypted_string = $this->encrypt->encode($value['id_user']);
											$id = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);


											?>
											<tr>
												<td><?php echo $i++; ?></td>
												<td><?php echo $value['nama']; ?></td>
												<td><?php echo $value['akses']; ?></td>
												<td>

													<a href="<?php echo base_url('User/userDetail/'.$id); ?>" class="btn btn-sm btn-primary">
														<span class="fa fa-search"></span>
													</a>

													<a href="<?php echo base_url('User/userEdit/'.$id); ?>" class="btn btn-sm btn-warning">
														<span class="lnr lnr-pencil"></span>
													</a>

													<button class="btn btn-sm btn-danger" onclick="deleteThis('<?php echo base_url('User/deleteUser/'.$id); ?>');" ><span class="fa fa-trash"></span></button> 

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
					<!-- END BASIC TABLE -->
				</div>
				<!-- END CONDENSED TABLE -->
			</div>
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->
