<div class="card shadow mb-4">
	<div class="card-header py-3 forms">
		<div class="row form-row mb-2">
			<div class="col-sm-6 d-flex">
				<h6 class="title my-auto">Users list</h6>
			</div>
			<div class="col-sm-6 text-right">
				<a href="javascript:void(0)" onclick="resetSearch()" class="btn btn-sm btn-primary" data-tooltip="Reset"><i class="fa fa-sync"></i></a>
				<a href="javascript:void(0)" onclick="exportCSV()" class="btn btn-sm btn-info" data-tooltip="Report"><i class="fa fa-download"></i></a>
			</div>
		</div>
		<form id="form-search1">
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
			<div class="col-sm-8 col-md-9 col-lg-4 col-xl-3 offset-xl-1">
				<div class="form-group">
					<input type="text" class="form-control" name="keyword" id="keyword" placeholder="Search" onkeyup="searchFilter()" />
				</div>
			</div>
            <div class="col-sm-4 col-md-3 col-lg-2 col-xl-3">
				<div class="form-group">
					<select class="form-control select2-nosearch" name="posts" id="posts" onchange="searchFilter()">
						<option value="">Select Post</option>
						<?php if(count($posts)>0){ foreach ($posts as $pkey => $pval) {?>
						<option value="<?php echo $pval->id; ?>"><?php echo $pval->postname; ?></option>
					    <?php } } ?>
					</select>
				</div>
			</div>
			<div class="col-sm-4 col-md-3 col-lg-2 col-xl-3">
				<div class="form-group">
					<select class="form-control select2-nosearch" name="payment_status" id="payment_status" onchange="searchFilter()">
						<option value="">Select Payment Status</option>
						<option value="Success">Success</option>
						<option value="Pending">Pending</option>
					</select>
				</div>
			</div>
			<div class="col-sm-4 col-md-3 col-lg-2 col-xl-3 mt-3">
				<div class="form-group">
					<select class="form-control select2-nosearch" name="job_state" id="job_state" onchange="searchFilter()">
						<option value="">Select Job State</option>
						<?php if(count($job_state)>0){ foreach ($job_state as $jskey => $jsval) {?>
						<option value="<?php echo $jsval->id; ?>"><?php echo $jsval->state; ?></option>
					    <?php } } ?>
					</select>
				</div>
			</div>			
			<div class="col-sm-4 col-md-3 col-lg-2 col-xl-3 mt-3">
				<div class="form-group">
					<select class="form-control select2-nosearch" name="centre" id="centre" onchange="searchFilter()">
						<option value="">Select Centre</option>
						<?php if(count($centres)>0){ foreach ($centres as $ckey => $cval) {?>
						<option value="<?php echo $cval->id; ?>"><?php echo $cval->name; ?></option>
					    <?php } } ?>
					</select>
				</div>
			</div>
			<div class="col-sm-8 col-md-9 col-lg-4 col-xl-3 mt-3">
				<div class="form-group">
					<input type="text"  name="startEnd" id="startEnd" placeholder="Created At" class="form-control" readonly/>
				</div>
			</div>
		</div>
		</form>
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
							<th>Payment Status</th>
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