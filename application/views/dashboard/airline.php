

			<!-- Main Content-->
			<div class="main-content pt-0">
				<div class="container">

						<!-- Page Header -->
						<div class="page-header">
							<div class="page-header-1">
								<h1 class="main-content-title tx-30" style="color:#fff">Home</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item active" aria-current="page">Airlines</li>
								</ol>
							</div>
							<div class="page-header-1">
								<button  data-target="#modaldemo3" data-toggle="modal" style="background-color:#73D3DD;color: #ffff;" class="btn btn-sm ripple ">Add Airline</button>
							</div>
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
														<th>Name</th>
														
														<th>Action</th>
														
													</tr>
												</thead>
												<tbody>
													<?php $i=1; if($user->num_rows()>0){
                                                     foreach($user->result() as $row){
													?>
													<tr>
														<td><?php echo $i;?></td>
														<td><?php echo $row->airname?></td>
														
														<td>
															<a  style="color:green;cursor: pointer;" onclick="setDataFunction(
                                                              '<?php echo $row->aid?>',
                                                              '<?php echo $row->airname?>',
															)"><i class="zmdi zmdi-edit"></i></a>
															<a style="color:red;cursor: pointer;" onclick="setDeleteFunction('<?php echo $row->aid?>')"><i class="zmdi zmdi-delete"></i></a>	
														</td>
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
			<div class="modal" id="modaldemo3">
				<div class="modal-dialog " role="document">
					<div class="modal-content modal-content-demo">
						<div class="modal-header">
							<h6 class="modal-title">Add Airline</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						<form class="" action="<?php echo base_url('insert-airline')?>" method="post">
						<div class="modal-body">
							
											<div class="row">
												<div class="col-lg-12">
													<div class="form-group ">
														<p class="mg-b-10">Airline Name</p>
														<input class="form-control" placeholder="Airline Name" required="" type="text" required name="name">
														
													</div>
												</div>
												
											</div>
										
						</div>
						<div class="modal-footer">
							<button class="btn ripple btn-primary" type="submit">Submit</button>
							<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div>
			<!--End Large Modal -->
			<!-- Large Modal -->
			<div class="modal" id="editmodaldemo3">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-content-demo">
						<div class="modal-header">
							<h6 class="modal-title">Edit Airline</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						<form class="" action="<?php echo base_url('update-airline')?>" method="post">
						<div class="modal-body">
							
											<div class="row">
												<div class="col-lg-12">
													<div class="form-group ">
														<p class="mg-b-10">Airline Name</p>
														<input class="form-control" placeholder="Airline name" required="" type="text" required name="ename" id="ename">
														<input type="hidden" name="id" id="id">
													</div>
												</div>
												
											</div>
										
						</div>
						<div class="modal-footer">
							<button class="btn ripple btn-primary" type="submit">Update</button>
							<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div>
			<!--End Large Modal -->
		<!-- Basic modal -->
			<div class="modal" id="deletemodaldemo1">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-content-demo">
						<div class="modal-header">
							<h6 class="modal-title">Delete Airline</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						<form method="post" action="<?php echo base_url('delete-airline')?>">
						<div class="modal-body">
							<h6>Are you sure you want to delete this row?</h6>
							<input type="hidden" name="did" id="did">
						</div>
						<div class="modal-footer">
							<button class="btn ripple btn-primary" type="submit">Delete</button>
							<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div>
			<!-- End Basic modal -->
<script>
	function setDataFunction(id,name){

	 $('#id').val(id);
     // alert(d_id);
     $('#ename').val(name);
     $('#editmodaldemo3').modal('show');
 }
</script>

<script>
	function setDeleteFunction(id){

	 $('#did').val(id);
     $('#deletemodaldemo1').modal('show');
 }
</script>