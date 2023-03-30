

			<!-- Main Content-->
			<div class="main-content pt-0">
				<div class="container">

						<!-- Page Header -->
						<div class="page-header">
							<div class="page-header-1">
								<h1 class="main-content-title tx-30" style="color:#fff">Home</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item active" aria-current="page">Roles</li>
								</ol>
								<ol class="breadcrumb">
									<li class="breadcrumb-item active" aria-current="page">Access Autentication</li>
								</ol>
							</div>
							<!-- <div class="page-header-1">
								<button  data-target="#modaldemo3" data-toggle="modal" style="background-color:#73D3DD;color: #ffff;" class="btn btn-sm ripple ">Add Roles</button>
							</div> -->
						</div>
						<!-- End Page Header -->


						<!-- Row -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-body">
										
										<div class="table-responsive">
											<table class="table" id="example1">
												<thead>
													<tr>
														<th>Sl No</th>
														
														
														<th>Route</th>
														<th>Access</th>
													</tr>
												</thead>
												<tbody>
													<?php $i=1; if($user->num_rows()>0){
                                                     foreach($user->result() as $row){
													?>
													<tr>
														<td><?php echo $i;?></td>
														<td><?php echo $row->route_name?></td>
														
														<?php if($row->status==0){?>
														<td><a href="<?php echo base_url('Welcome/insertAccess/'.$row->role_id.'/'.$row->route_id.'/'.'1')?>"><button style="background-color:red;color: #ffff;" class="btn btn-sm ripple ">Access</button></a></td>
													<?php } else{?>
														<td><a href="<?php echo base_url('Welcome/insertAccess/'.$row->role_id.'/'.$row->route_id.'/'.'1')?>"><button style="background-color:#73D3DD;color: #ffff;" class="btn btn-sm ripple ">Access</button></a></td>
													<?php }?>
													</tr>
													<?php $i++;}}?>
												
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						
				</div>
			</div>
			<!-- End Main Content-->
<!-- Large Modal -->
			