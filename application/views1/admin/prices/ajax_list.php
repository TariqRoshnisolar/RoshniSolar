<?php if($prices){ foreach($prices as $key=>$val){?>
	<tr>
		<td>
			<div class="custom-checkbox">
				<input type="checkbox" class="custom-input singleCheck" id="customCheck<?php echo $val->id;?>" value="<?php echo $val->id;?>">
				<label class="custom-label" for="customCheck<?php echo $val->id;?>"></label>
			</div>
		</td>
		<?php if(getUserDetails($this->session->userdata('user_id'),'role_manage') && in_array('edit-price', getUserDetails($this->session->userdata('user_id'),'role_manage'))){?>
            <td><a href="<?php echo base_url()?>admin/edit-price/<?php echo $val->id;?>" target="_blank"><?php echo $val->amount;?></a></td>
            <td><a href="<?php echo base_url()?>admin/edit-price/<?php echo $val->id;?>" target="_blank"><?php echo $val->category_name;?></a></td>
             <td><a href="<?php echo base_url()?>admin/edit-price/<?php echo $val->id;?>" target="_blank"><?php echo date('d M, Y',strtotime($val->created_at));?></a></td>
         <?php } else { ?>
            <td><?php echo $val->amount;?></td>
            <td><?php echo $val->category_name;?></td>
            <td><?php echo date('d M, Y',strtotime($val->created_at));?></td>
           <?php } ?>
		<td>
			<div class="dropdown">
				<button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">Action</button>
				<div class="dropdown-menu dropdown-menu-right">
					<?php if(getUserDetails($this->session->userdata('user_id'),'role_manage') && in_array('edit-price', getUserDetails($this->session->userdata('user_id'),'role_manage'))){?>
					<a class="dropdown-item" href="<?php echo base_url()?>admin/edit-price/<?php echo $val->id;?>"><i class="fas fa-fw fa-edit"></i> Edit</a>
					<?php } ?>
					<?php if(getUserDetails($this->session->userdata('user_id'),'role_manage') && in_array('delete-price', getUserDetails($this->session->userdata('user_id'),'role_manage'))){?>
					<a class="dropdown-item" href="javascript:void(0)" onclick="deleteCategory(<?php echo $val->id;?>)"><i class="fas fa-fw fa-trash"></i> Delete</a>
					<?php } ?>
				</div>
			</div>
        </td>
	</tr>
<?php } } else { ?>
	<tr><td colspan="15" align="center">No Categories Found!</td>
	</tr>
<?php } ?>