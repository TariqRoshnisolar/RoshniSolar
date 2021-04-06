<div class="card mb-4">
	<div class="card-header">
		<div class="row">
			<div class="col-sm-6 d-flex"><h6 class="title my-auto"><?php echo ($pages && $pages->id)?'Edit Page':'Add Page'?></h6></div>
			<div class="col-sm-6 text-right">
				<button class="btn btn-sm btn-primary saveButton" type="button">Save</button>
				<button class="btn btn-sm btn-danger cancelButton" type="button">Cancel</button>
			</div>
		</div>
	</div>
	<div class="card-body">
		<form class="user" id="manageForm">
			<div class="row">
				<input type="hidden" name="id" value="<?php echo ($pages && $pages->id)?$pages->id:''?>">
				<div class="col-md-12">

                   <div class="row">
					<div class="col-md-12">
							<div class="form-group">
								<label class="control-label required">Alias</label>
								<input type="text" class="form-control slug validate" autocomplete="off" name="slug" data-validate-msg="Alias field is required"  placeholder="Enter Alias" value="<?php echo ($pages && $pages->slug)?$pages->slug:''?>" <?php if($pages && $pages->id){?> readonly <?php }?>>
							</div> 
						</div>
					</div>

					<div class="col-md-12 mb-4">
							<ul class="nav nav-tabs tab-basic" role="tablist">
								<?php foreach ($site_langs as $key => $value) { ?>
									<li class="nav-item">
										<a class="nav-link <?php echo ($value['lang_code'] == 'en')?'active required':''; ?>" id="<?php echo $value['lang_code'];?>-tab" data-toggle="tab" href="#<?php echo $value['lang_code'];?>-tab-href" role="tab" aria-controls="<?php echo $value['lang_code'];?>-tab-href" aria-selected="false" data-lang="<?php echo $value['lang_code'];?>"><?php echo $value['language'];?></a>
									</li>
								<?php } ?>
							</ul>
						</div>
                          <?php
							if(isset($pages) && isset($pages->title)){
								$title = json_decode($pages->title,true);
							}
							if(isset($pages) && isset($pages->description)){
								$description = json_decode($pages->description,true);
							}
							if(isset($pages) && isset($pages->home_description)){
								$home_descriptions = json_decode($pages->home_description,true);
							}
						   ?>
						<div class="tab-content tab-content-basic">
					    <?php foreach ($site_langs as $key => $value) { ?>
						<div class="tab-pane fade <?php echo ($value['lang_code'] == 'en')?'active show':''; ?>" id="<?php echo $value['lang_code']; ?>-tab-href" role="tabpanel" aria-labelledby="<?php echo $value['lang_code'];?>-tab">

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="control-label <?php echo ($value['lang_code'] == 'en')?'required':''; ?>">Title</label>
									<input type="text" class="form-control <?php echo (($value['lang_code'] == 'en')?'validate':''); ?>" autocomplete="off" name="title[<?php echo $value['lang_code'];?>]" data-validate-msg="Title field is required" placeholder="Enter page title" value="<?php echo (isset($title) && isset($title[$value['lang_code']]))?$title[$value['lang_code']]:''?>">
								</div>
							</div>					
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="control-label <?php echo ($value['lang_code'] == 'en')?'required':''; ?>">Home description</label>
									<textarea class="form-control <?php echo (($value['lang_code'] == 'en')?'validate':''); ?>" name="home_description[<?php echo $value['lang_code'];?>]" data-validate-msg="Home description field is required" rows="5"><?php echo (isset($home_descriptions) && isset($home_descriptions[$value['lang_code']]))?$home_descriptions[$value['lang_code']]:''?></textarea>
								</div>
							</div>					
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="control-label <?php echo ($value['lang_code'] == 'en')?'required':''; ?>">Description</label>
									<textarea class="form-control tinymce <?php echo (($value['lang_code'] == 'en')?'validate':''); ?>" name="description[<?php echo $value['lang_code'];?>]" data-validate-msg="Description field is required" rows="5"><?php echo (isset($description) && isset($description[$value['lang_code']]))?$description[$value['lang_code']]:''?></textarea>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
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