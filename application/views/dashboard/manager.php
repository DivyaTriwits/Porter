

			<!-- Main Content-->
			<div class="main-content pt-0">
				<div class="container">

						<!-- Page Header -->
						<div class="page-header">
							<div class="page-header-1">
								<h1 class="main-content-title tx-30" style="color:#fff">Employee Management</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item active" aria-current="page">Manager</li>
								</ol>
							</div>
							<div class="page-header-1">
								<button  data-target="#modaldemo3" data-toggle="modal" style="background-color:#73D3DD;color: #ffff;" class="btn btn-sm ripple ">Add Manager</button>
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
														<th>First name</th>
														<th>Last name</th>
														<th>Mobile Number</th>
														<th>Joining Date</th>
														<th>Salary</th>
														<th>Shift</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<?php $i=1; if($user->num_rows()>0){
                                                     foreach($user->result() as $row){
													?>
													<tr>
														<td><?php echo $i;?></td>
														<td><?php echo $row->first_name?></td>
														<td><?php echo $row->last_name?></td>
														<td><?php echo $row->mobile?></td>
														<td><?php echo $row->joining_date?></td>
														<td><?php echo $row->salary?></td>
														<td><?php echo $row->shift?></td>
														<td>
															<a  style="color:green;cursor: pointer;" onclick="setDataFunction(
                                                              '<?php echo $row->id?>',
                                                              '<?php echo $row->first_name?>',
                                                              '<?php echo $row->last_name?>',
                                                              '<?php echo $row->mobile?>',
                                                              '<?php echo $row->joining_date?>',
                                                              '<?php echo $row->salary?>',
                                                              '<?php echo $row->shift?>',
															)"><i class="zmdi zmdi-edit"></i></a>
															<a style="color:red;cursor: pointer;" onclick="setDeleteFunction('<?php echo $row->id?>')"><i class="zmdi zmdi-delete"></i></a>	
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
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content modal-content-demo">
						<div class="modal-header">
							<h6 class="modal-title">Add Manager</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						<form id="contact_form" name="contact_form" class="" action="<?php echo base_url('insert-manager')?>" method="post">
						<div class="modal-body">
							
											<div class="row">
												<div class="col-lg-4">
													<div class="form-group ">
														<p class="mg-b-10">First Name</p>
														<input class="form-control" placeholder="First name" id="fname" type="text" name="fname">
														
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
			</div>
			<!--End Large Modal -->
			<!-- Large Modal -->
			<div class="modal" id="editmodaldemo3">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content modal-content-demo">
						<div class="modal-header">
							<h6 class="modal-title">Edit Manager</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						<form class="" action="<?php echo base_url('update-manager')?>" method="post">
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
			</div>
			<!--End Large Modal -->
		<!-- Basic modal -->
			<div class="modal" id="deletemodaldemo1">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-content-demo">
						<div class="modal-header">
							<h6 class="modal-title">Delete Manager</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						<form method="post" action="<?php echo base_url('delete-manager')?>">
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
</script>

<script>
	function setDeleteFunction(id){

	 $('#did').val(id);
     $('#deletemodaldemo1').modal('show');
 }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
    <script>
        if ($("#contact_form").length > 0) {
            $("#contact_form").validate({
                rules: {
                    fname: {
                        required: true,
                        minlength: 4,
                        maxlength: 20,
                        regExp:'[A-Za-z]'
                    },
                    lname: {
                        required: true,
                        minlength: 4,
                        maxlenght: 20,
                        regExp:'[A-Za-z]'
                    },
                    mobile: {
                        required: true,
                        minlength: 10,
                        maxlenght: 10
                    },
                     date: {
                        required: true,
                    },
                     shift: {
                        required: true,
                    },
                     salary: {
                        required: true,
                    },
                },
                messages: {
                    fname: {
                        required: "First Name is required",
                         maxlength: "Upto 20 characters are allowed",
                    },
                    lname: {
                        required: "Last Name is required",
                        maxlength: "Upto 20 characters are allowed",
                    },
                     mobile: {
                        required: "Mobile Number is required",
                        minlength: "Enter valid mobile number",
                        maxlenght: "Enter valid mobile number"
                    },
                     date: {
                        required: "Date is required",
                    },
                     shift: {
                        required: "Shift is required",
                    },
                     salary: {
                        required: "Salary is required",
                    },
                },
            })
        }
    </script>