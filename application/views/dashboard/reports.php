

			<!-- Main Content-->
			<div class="main-content pt-0">
				<div class="container">

						<!-- Page Header -->
						<div class="page-header">
							<div class="page-header-1">
								<h1 class="main-content-title tx-30" style="color:#fff">Home</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item active" aria-current="page">Bill</li>
								</ol>
							</div>
							
						</div>
						<!-- End Page Header -->
  <script type="text/javascript">
						function printDiv(printableArea) {
   				 		var printContents = document.getElementById(printableArea).innerHTML;
    					var originalContents = document.body.innerHTML;
    					document.body.innerHTML = printContents;
    					window.print();
    					document.body.innerHTML = originalContents;
					}
				</script>
						<!-- Row -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-body">
										<div  id="printableArea" class="table-responsive">

											<table class="table" id="example1">
												<button type="submit" onclick="printDiv('printableArea')" class="btn btn-primary" style="margin-bottom: 10">Print</button>
												<thead>
													<tr>
														<th>Sl No</th>
														<th>Porter ID</th>
														<th>Porter Type</th>
														<th>Airline name</th>
														<th>Login</th>
														<th>Logout</th>
														<th>Total time taken</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$i=1; 
													if (is_array($results)) {
                                                     foreach($results as $row){
													?>
													<tr>
														<td><?php echo $i;?></td>
														<td><?php echo $row->port_id?></td>
                                                        <td><?php echo $row->ptype?></td> 
														<td><?php echo $row->airlineName?></td>
														<td><?php echo $login=$row->date?></td>
														<td><?php echo $logout=$row->enddate?></td>
														<!-- <td><?php echo $totaltime=$logout-$login?></td> -->
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
			<!-- <div class="modal" id="modaldemo3">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content modal-content-demo">
						<div class="modal-header">
							<h6 class="modal-title">Add Porter</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						<form class="" action="<?php echo base_url('insert-porter')?>" method="post">
						<div class="modal-body">
							
											<div class="row">
												<div class="col-lg-4">
													<div class="form-group ">
														<p class="mg-b-10">First Name</p>
														<input class="form-control" placeholder="First name" required="" type="text" required name="fname">
														
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<p class="mg-b-10">Last Name</p>
														<input class="form-control" placeholder="Last name" required="" type="text" name="lname">
														
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<p class="mg-b-10">Mobile Number</p>
														<input class="form-control" placeholder="Mobile number" required="" type="text" required name="mobile">
														
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<p class="mg-b-10">Joining Date</p>
														<input class="form-control" placeholder="Date of Joining" required="" type="date" required name="date">
														
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<p class="mg-b-10">Shift</p>
														<input class="form-control" placeholder="Shift" required="" type="text" required name="shift">
														
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<p class="mg-b-10">Salary</p>
														<input class="form-control" placeholder="Salary" required="" step="any" type="number" required name="salary">
														
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
			</div> -->
			<!--End Large Modal -->
			<!-- Large Modal -->
			<!-- <div class="modal" id="editmodaldemo3">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content modal-content-demo">
						<div class="modal-header">
							<h6 class="modal-title">Edit Porter</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						<form class="" action="<?php echo base_url('update-porter')?>" method="post">
						<div class="modal-body">
							
											<div class="row">
												<div class="col-lg-4">
													<div class="form-group ">
														<p class="mg-b-10">First Name</p>
														<input class="form-control" placeholder="First name" required="" type="text" required name="efname" id="efname">
														<input type="hidden" name="id" id="id">
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<p class="mg-b-10">Last Name</p>
														<input class="form-control" placeholder="Last name" required="" type="text" name="elname" id="elname">
														
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<p class="mg-b-10">Mobile Number</p>
														<input class="form-control" placeholder="Mobile number" required="" type="text" required name="emobile" id="emobile">
														
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<p class="mg-b-10">Joining Date</p>
														<input class="form-control" placeholder="Date of Joining" required="" type="date" required name="edate" id="edate">
														
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<p class="mg-b-10">Shift</p>
														<input class="form-control" placeholder="Shift" required="" type="text" required name="eshift" id="eshift">
														
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<p class="mg-b-10">Salary</p>
														<input class="form-control" placeholder="Salary" required="" step="any" type="number" required name="esalary" id="esalary">
														
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
			</div> -->
			<!--End Large Modal -->
		<!-- Basic modal -->
		<!-- 	<div class="modal" id="deletemodaldemo1">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-content-demo">
						<div class="modal-header">
							<h6 class="modal-title">Delete Manager</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						<form method="post" action="<?php echo base_url('delete-porter')?>">
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
			</div> -->
			<!-- End Basic modal -->
<!-- <script>
	function setDataFunction(id,fname,lname,mobile,date,salary,shift){

	 $('#id').val(id);
     // alert(d_id);
     $('#efname').val(fname);
     $('#elname').val(lname);
     $('#emobile').val(mobile);
     $('#edate').val(date);
     $('#esalary').val(salary);
     $('#eshift').val(shift);
     $('#editmodaldemo3').modal('show');
 }
</script> -->

<!-- <script>
	function setDeleteFunction(id){

	 $('#did').val(id);
     $('#deletemodaldemo1').modal('show');
 }
</script> -->