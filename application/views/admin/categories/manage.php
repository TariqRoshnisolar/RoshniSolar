<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="row">
      <div class="col-sm-6 d-flex"><h6 class="title my-auto"><?php echo ($categories && $categories->id)?'Edit Category':'Add Category'?></h6></div>
      <div class="col-sm-6 text-right">
        <button class="btn btn-sm btn-primary saveButton" type="button">Save</button>
        <button class="btn btn-sm btn-danger cancelButton" type="button">Cancel</button>
      </div>
    </div>
  </div>
  <div class="card-body">
    <form class="user" id="manageForm">
    	<div class="row">	
    	    <input type="hidden" name="id" value="<?php echo ($categories && $categories->id)?$categories->id:''?>">			
			<div class="col-lg-8 col-xl-12">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label class="control-label required">Category Name</label>
							<input type="text" class="form-control validate" autocomplete="off" name="category" id="category" data-validate-msg="Category Name field is required"  placeholder="Enter Category Name" value="<?php echo ($categories && $categories->category)?$categories->category:''?>">
						</div>
					</div>
			    </div>
			    <div class="row">
					<div class="col text-right">
						<button class="btn btn-primary saveButton" type="button">Save</button>
						<button class="btn btn-danger cancelButton" type="button">Cancel</button>
					</div>
				</div>
		    </div>
		</div>
    </form>
  </div>
</div>