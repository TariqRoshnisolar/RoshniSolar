<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="row">
      <div class="col-sm-6 d-flex"><h6 class="title my-auto"><?php echo ($prices && $prices->id)?'Edit Price':'Add Price'?></h6></div>
      <div class="col-sm-6 text-right">
        <button class="btn btn-sm btn-primary saveButton" type="button">Save</button>
        <button class="btn btn-sm btn-danger cancelButton" type="button">Cancel</button>
      </div>
    </div>
  </div>
  <div class="card-body">
    <form class="user" id="manageForm">
    	<div class="row">	
    	    <input type="hidden" name="id" value="<?php echo ($prices && $prices->id)?$prices->id:''?>">			
			<div class="col-lg-8 col-xl-12">
				<div class="row">
					<div class="col">
						<label class="control-label required">Choose Category</label>	
						<div class="form-group">
						<?php if($getCat){ foreach($getCat as $key => $val){ ?>
						<div class="custom-checkbox d-inline-block mr-3">
							<input name="categories[]" type="checkbox" class="custom-input" value="<?php echo $val->id; ?>" <?php echo ($prices && in_array($val->id, explode(',', $prices->apply_for_category)))?'checked':''; ?>>
							<label class="custom-label"><?php echo $val->category; ?></label>
						</div>	
						<?php } }?>
						</div>		
					</div>
				</div>				
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label class="control-label required">Amount</label>
							<input type="number" class="form-control validate" autocomplete="off" name="amount" id="amount" data-validate-msg="Amount field is required"  placeholder="Enter Amount" value="<?php echo ($prices && $prices->amount)?$prices->amount:''?>" min="0">
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