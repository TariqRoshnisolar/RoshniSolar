<?php if($users){ foreach($users as $key=>$val){?>
	<tr>
		<td>
			<div class="custom-checkbox">
					<input type="checkbox" class="custom-input singleCheck" id="customCheck<?php echo $val->id;?>" value="<?php echo $val->id;?>">
					<label class="custom-label" for="customCheck<?php echo $val->id;?>"></label>
				</div>
		</td>
		<td width="100"><div class="img-container"><a href="<?php echo userFileExists($val->photo);?>" class="d-block w-100 h-100" data-fancybox=""><img src="<?php echo userFileExists($val->photo);?>" alt=""/></a></div></td>
		<?php if(getUserDetails($this->session->userdata('user_id'),'role_manage') && in_array('edit-user', getUserDetails($this->session->userdata('user_id'),'role_manage'))){?>
			<td><a href="<?php echo base_url()?>admin/edit-user/<?php echo $val->id;?>" target="_blank"><?php echo $val->f_name;?> <?php echo $val->m_name;?> <?php echo $val->l_name;?></a></td>
			<td><?php echo $val->phone_no;?></td>
			<td><a href="<?php echo base_url()?>admin/edit-user/<?php echo $val->id;?>" target="_blank"><?php echo $val->email_id;?></a>
				<td><a href="<?php echo base_url()?>admin/edit-user/<?php echo $val->id;?>" target="_blank"><?php echo date('d M, Y',strtotime($val->created_at));?></a></td>
        </td>
		<?php } else { ?>            
			<td><?php echo $val->f_name;?> <?php echo $val->m_name;?> <?php echo $val->l_name;?></td>
			<td><?php echo $val->phone_no;?></td>
			<td><?php echo $val->email_id;?></td>
			<td><?php echo date('d M, Y',strtotime($val->created_at));?></td>
		<?php } ?>	
		<td>
			<?php if($val->payment_status == 'Success'){?>
				<span class="badge badge-pill badge-success">Success</span>
			<?php }else{ ?>
				<span class="badge badge-pill badge-danger">Danger</span>
			<?php } ?>
		</td>	
		<td>
			<div class="dropdown">
				<button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">Action</button>
				<div class="dropdown-menu dropdown-menu-right">
					<?php if(getUserDetails($this->session->userdata('user_id'),'role_manage') && in_array('user-details', getUserDetails($this->session->userdata('user_id'),'role_manage'))){?>
					<a class="dropdown-item" href="<?php echo base_url()?>admin/user-details/<?php echo $val->id;?>"><i class="fas fa-fw fa-user"></i> Details</a>
					<?php } ?>
					<!-- <?php if(getUserDetails($this->session->userdata('user_id'),'role_manage') && in_array('delete-user', getUserDetails($this->session->userdata('user_id'),'role_manage'))){?>
					<a class="dropdown-item" href="javascript:void(0)" onclick="deleteUser(<?php echo $val->id;?>)"><i class="fas fa-fw fa-trash"></i> Delete</a>
					<?php } ?> -->
				</div>
			</div>
		</td>
	</tr>
<?php } } else { ?>
	<tr><td colspan="15" align="center">No Users Found!</td>
	</tr>
<?php } ?>
		