<div class="card shadow mb-4">
	<div class="card-header py-3 forms">
		<div class="row form-row mb-2">
			<div class="col-sm-6 d-flex">
				<h6 class="title my-auto">Users list</h6>
			</div>
			<div class="col-sm-6 text-right">
				<!-- <?php if(getUserDetails($this->session->userdata('user_id'),'role_manage') && in_array('delete-user', getUserDetails($this->session->userdata('user_id'),'role_manage'))){?>
				<a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="deleteUser('all')" data-tooltip="Delete"><i class="fa fa-trash"></i></a>
				<?php } ?> -->
				<a href="javascript:void(0)" onclick="resetSearch()" class="btn btn-sm btn-primary" data-tooltip="Reset"><i class="fa fa-sync"></i></a>
			</div>
		</div>
		<div class="row form-row mb-2">
			<input type="hidden" id="sortByField" value="">
			<input type="hidden" id="sortBy" value="">
			<div class="col-sm-4 col-md-3 col-lg-2 col-xl-2">
				<div class="form-group">
					<select class="form-control select2-nosearch" id="perPage" onchange="searchFilter()">
						<option disabled>Show Per Page</option>
						<option value="5">5 Per Page</option>
						<option value="10" selected>10 Per Page</option>
						<option value="20">20 Per Page</option>
						<option value="50">50 Per Page</option>
						<option value="100">100 Per Page</option>
						<option value="10000000000">All</option>
					</select>
				</div>
			</div>
			<div class="col-sm-8 col-md-9 col-lg-4 col-xl-4 offset-xl-2">
				<div class="form-group">
					<input type="text" class="form-control" id="keyword" placeholder="Search" onkeyup="searchFilter()" />
				</div>
			</div>
            <!-- <div class="col-sm-4 col-md-3 col-lg-2 col-xl-2">
				<div class="form-group">
					<select class="form-control select2-nosearch" id="status" onchange="searchFilter()">
						<option value="">Select Status</option>
						<option value="1">Active</option>
						<option value="2">In-Active</option>
					</select>
				</div>
			</div> -->
			<div class="col-sm-8 col-md-9 col-lg-4 col-xl-4">
				<div class="form-group">
					<input type="text"  name="startEnd" id="startEnd" placeholder="Created At" class="form-control" readonly/>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="table-wrap">
			<div class="preloader">
				<?php $this->load->view('admin/common/default/loader');?>
			</div>
			<div>
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th width="50">
									<div class="custom-checkbox">
										<input type="checkbox" class="custom-input checkAll" id="customCheckcheckAll">
										<label class="custom-label" for="customCheckcheckAll"></label>
									</div>
								</th>
								<th width="100">Profile</th>
								<th>
									<a href="javascript:void(0)" class="sorting name" onclick="sortBy('name','users_info.f_name','ASC')">
										<span class="title">Name</span>
										<span class="sorting-icon">
											<i class="fas fa-sort-up commonSorting name_DESC"></i>
											<i class="fas fa-sort-down commonSorting name_ASC"></i>
										</span>
									</a>
								</th>
								<th>
									<a href="javascript:void(0)" class="sorting phone_no" onclick="sortBy('phone_no','users_info.phone_no','ASC')">
										<span class="title">Phone</span>
										<span class="sorting-icon">
											<i class="fas fa-sort-up commonSorting phone_no_DESC"></i>
											<i class="fas fa-sort-down commonSorting phone_noASC"></i>
										</span>
									</a>
								</th>
								<th>
									<a href="javascript:void(0)" class="sorting email_id" onclick="sortBy('email_id','users_info.email_id','ASC')">
										<span class="title">Email</span>
										<span class="sorting-icon">
											<i class="fas fa-sort-up commonSorting email_id_DESC"></i>
											<i class="fas fa-sort-down commonSorting email_id_ASC"></i>
										</span>
									</a>
								</th>
								
                                <th>
								<a href="javascript:void(0)" class="sorting created_at" onclick="sortBy('created_at','users_info.created_at','ASC')">
									<span class="title">Member Since</span>
									<span class="sorting-icon">
										<i class="fas fa-sort-up commonSorting created_at_DESC"></i>
										<i class="fas fa-sort-down commonSorting created_at_ASC"></i>
									</span>
								</a>
							</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody id="usersList">
							<tr><td colspan="15" align="center">Searching Datas...</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="row" id="paginationDiv"></div>
			</div>
		</div>
	</div>
</div>