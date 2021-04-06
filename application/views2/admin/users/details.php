<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-sm-6 d-flex"><h6 class="title my-auto">User Details</h6></div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6">
                <div class="">			  		
                    <table class="table">
                        <thead><tr >
                            <th>Basic Info</th><th></th></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>First Name</td>
                                <td><?php echo $users->f_name; ?></td>
                            </tr>
                            <tr>
                                <td>Middle Name</td>
                                <td><?php echo (!empty($users->m_name)?$users->m_name:'----'); ?></td>
                            </tr>
                            <tr>
                                <td>Last name</td>
                                <td><?php echo (isset($users->l_name)?$users->l_name:'-'); ?></td>
                            </tr>
                            <tr>
                                <td>Mobile Number</td>
                                <td><?php echo (isset($users->phone_no)?$users->phone_no:'-'); ?></td>
                            </tr>
                            <tr>
                                <td>Email ID</td>
                                <td><?php echo (isset($users->email_id)?$users->email_id:'-'); ?></td>
                            </tr>
                            <tr>
                                <td>Registration Date</td>
                                <td><?php echo date('d M, Y',strtotime($users->registration_date));?></td>
                            </tr>
                            <tr>
                                <td>Application No.</td>
                                <td><?php echo $users->application_no;?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="">
                    <table class="table">
                        <thead><tr>
                            <th>Post Applied</th><th></th></tr></thead>
                            <tbody>
                                <tr>
                                    <td>Post Applying for</td>
                                    <td>Group D</td>
                                </tr>
                                <tr>
                                    <td>Preferred Job State</td>
                                    <td>West Bengal</td>
                                </tr>
                                <tr>
                                    <td>Preferred test centre</td>
                                    <td>Kolkata</td>
                                </tr>
                            </tbody>
                            <thead><tr><th>Basic Details</th><th></th></tr></thead>
                            <tbody>
                                <tr>
                                    <td>Category</td>
                                    <td><?php echo $users->category_name;?></td>
                                </tr>
                                <tr>
                                    <td>Religion to which you belong</td>
                                    <td><?php echo $users->religion_name;?></td>
                                </tr>
                                <tr>
                                    <td>PAN No.</td>
                                    <td><?php echo $users->pancard;?></td>
                                </tr>
                                <tr>
                                    <td>Aadhar No.</td>
                                    <td><?php echo $users->aadharno;?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                <div class="">
                    <table class="table">
                        <thead><tr>
                            <th>Personal Details</th><th></th></tr></thead>
                            <tbody>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td><?php echo $users->dob;?></td>
                                </tr>
                                <tr>
                                    <?php 
                                    $date1 = $users->dob;
                                    $date2 = date('Y-m-d');
                                    $diff = abs(strtotime($date2) - strtotime($date1));
                                    $years = floor($diff / (365*60*60*24));
                                    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                                    ?>
                                    <td>Age</td>
                                    <td id="age"><?php printf("%d years, %d months, %d days\n", $years, $months, $days); ?></td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td><?php echo $users->gender_name;?></td>
                                </tr>
                                <tr>
                                    <td>Marital status</td>
                                    <td><?php echo $users->maritalstatus_name;?></td>
                                </tr>
                                <tr>
                                    <td>Father's Name</td>
                                    <td><?php echo $users->father_name;?></td>
                                </tr>
                                <tr>
                                    <td>Mother's Name</td>
                                    <td><?php echo $users->mother_name;?></td>
                                </tr>
                                <tr>
                                    <td>Spouse's Name</td>
                                    <td><?php echo $users->spouse_name;?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                   <div class="">
                        <table class="table">
                            <thead>
                                <tr>
                                <thead><tr><th>Present Address</th><th></th></tr></thead>
                                <tbody>
                                    <tr>
                                        <td>Address Line 1</td>
                                        <td><?php echo $users->present_addressline1;?></td>
                                    </tr>
                                    <tr>
                                        <td>Address Line 2</td>
                                        <td><?php echo $users->present_addressline2;?></td>
                                    </tr>
                                    <tr>
                                        <td>State</td>
                                        <td><?php echo $users->present_state_name;?></td>
                                    </tr>
                                    <tr>
                                        <td>District</td>
                                        <td><?php echo $users->present_district;?></td>
                                    </tr>
                                    <tr>
                                        <td>Pin Code</td>
                                        <td><?php echo $users->present_pincode;?></td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                   <div class="">
                        <table class="table">
                            <thead>
                                <tr>
                                <thead><tr><th>Permanent Address</th><th></th></tr></thead>
                                <tbody>
                                    <tr>
                                        <td>Address Line 1</td>
                                        <td><?php echo $users->permanent_addressline1;?></td>
                                    </tr>
                                    <tr>
                                        <td>Address Line 2</td>
                                        <td><?php echo $users->permanent_addressline2;?></td>
                                    </tr>
                                    <tr>
                                        <td>State</td>
                                        <td><?php echo $users->permanent_state_name;?></td>
                                    </tr>
                                    <tr>
                                        <td>District</td>
                                        <td><?php echo $users->permanent_district;?></td>
                                    </tr>
                                    <tr>
                                        <td>Pin Code</td>
                                        <td><?php echo $users->permanent_pincode;?></td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-3">
                   <div class="">
                        <table class="table">
                            <thead>
                                <tr>
                                <thead><tr><th>Photo of the Candidate</th><th></th></tr></thead>
                                <tbody>
                                    <tr>
                                        <td><img src="<?php echo base_url();?>uploads/user_documents/user_photos/<?php echo $users->photo;?>" class="img-thumbnail"></td>
                                    </tr>                                   
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-3">
                   <div class="">
                        <table class="table">
                            <thead>
                                <tr>
                                <thead><tr><th>Mark Sheet / Certificate</th><th></th></tr></thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?php 
                                            $ext = pathinfo($users->marksheet, PATHINFO_EXTENSION); 
                                            if($ext == 'pdf' || $ext == 'PDF'){
                                            ?>
                                            <a href="<?php echo base_url();?>uploads/user_documents/user_marksheet/<?php echo $users->marksheet;?>" target="_blank"><img src="<?php echo base_url();?>assets/admin/img/acrobatpdf.jpg" class="img-thumbnail"></a>
                                            <?php }else{?>
                                              <img src="<?php echo base_url();?>uploads/user_documents/user_marksheet/<?php echo $users->marksheet;?>" class="img-thumbnail">  
                                            <?php } ?>
                                        </td>

                                    </tr>                                   
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h5>Education Qualification </h5>
                    <table class="table table-bordered track_tbl">
                        <thead>
                            <tr>                
                                <th>Degree/Subject/Steam</th>
                                <th>Name of Institution/College/University</th>
                                <th>Year Of Passing</th>
                                <th>% of Marks</th>
                                <th>Reasult</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="active">
                                <td><?php echo $users->degree_name; ?></td>
                                <td><?php echo $users->university; ?></td>
                                <td><?php echo $users->passing_year; ?></td>
                                <td><?php echo $users->marks; ?></td>
                                <td><?php echo (($users->result == 1)?'Passed':'Appeared'); ?></td>
                            </tr>
                            <tr class="active">
                                <td><?php echo $users->degree_name2; ?></td>
                                <td><?php echo $users->university2; ?></td>
                                <td><?php echo $users->passing_year2; ?></td>
                                <td><?php echo $users->marks2; ?></td>
                                <td><?php echo (($users->result == 1)?'Passed':'Appeared'); ?></td>
                            </tr>
                            <tr class="active">
                                <td><?php echo $users->degree_name3; ?></td>
                                <td><?php echo $users->university3; ?></td>
                                <td><?php echo $users->passing_year3; ?></td>
                                <td><?php echo $users->marks3; ?></td>
                                <td><?php echo (($users->result == 1)?'Passed':'Appeared'); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php if(count($language_known)>0){?>
                <div class="col-lg-9">
                    <h5>Language Known </h5>
                    <table class="table table-bordered track_tbl">
                        <thead>
                            <tr>                
                                <th>Language</th>
                                <th>Read</th>
                                <th>Write</th>
                                <th>Speak</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($language_known as $key => $val){?>
                            <tr class="active">
                                <td><?php echo $val->language_name; ?></td>
                                <td><?php echo (isset($val->can_read) && $val->can_read == 1)?'<i class="fa fa-fw fa-check" aria-hidden="true"></i>':'<i class="fa fa-fw fa-times" aria-hidden="true"></i>'; ?></td>
                                <td><?php echo (isset($val->can_write) && $val->can_write == 1)?'<i class="fa fa-fw fa-check" aria-hidden="true"></i>':'<i class="fa fa-fw fa-times" aria-hidden="true"></i>'; ?></td>
                                <td><?php echo (isset($val->can_speak) && $val->can_speak == 1)?'<i class="fa fa-fw fa-check" aria-hidden="true"></i>':'<i class="fa fa-fw fa-times" aria-hidden="true"></i>'; ?></td>
                            </tr>
                           <?php }?>
                        </tbody>
                    </table>
                </div>
            <?php }?>
            <div class="col-lg-3">
                <h5>&nbsp; </h5>
               <div class="">
                    <table class="table">
                        <thead>
                            <tr>
                            <thead><tr><th>Signature</th><th></th></tr></thead>
                            <tbody>
                                <tr>
                                    <td><img src="<?php echo base_url();?>uploads/user_documents/user_signatures/<?php echo $users->signature;?>" class="img-thumbnail"></td>
                                </tr>                                   
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

