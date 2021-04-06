<?php
$currency_symbol = $this->customlib->getSchoolCurrencyFormat();
?>
<div class="content-wrapper">
    <div class="row">  
        <div class="col-md-12"> 
            <section class="content-header">
                <h1><i class="fa fa-sitemap"></i> <?php echo $this->lang->line('human_resource'); ?></h1>
            </section>
        </div> 
        <div >
            <?php if ($this->rbac->hasPrivilege('can_see_other_users_profile', 'can_view')) { ?>
                <a id="sidebarCollapse" class="studentsideopen"><i class="fa fa-navicon"></i></a>
            <?php } ?>
            <aside class="studentsidebar">
                <div class="stutop" id="">
                    <!-- Create the tabs -->
                    <div class="studentsidetopfixed">
                        <p class="classtap"><?php echo $this->lang->line('staff'); ?> <a href="#" data-toggle="control-sidebar" class="studentsideclose"><i class="fa fa-times"></i>
                            </a>
                        </p>

                        <ul class="nav nav-justified studenttaps">

                            <?php foreach ($roles as $role_key => $role_value) {
                                ?>
                                <li <?php
                                if ($staff["role_id"] == $role_value["id"]) {
                                    echo "class='active'";
                                }
                                ?> ><a href="#role<?php echo $role_value["id"] ?>" data-toggle="tab"><?php echo $role_value["name"] ?></a></li>
<?php } ?>
                        </ul>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <?php foreach ($roles as $rolet_key => $rolet_value) {
                            ?>
                            <div class="tab-pane <?php
                        if ($staff["role_id"] == $rolet_value["id"]) {
                            echo "active";
                        }
                            ?>"  id="role<?php echo $rolet_value['id'] ?>">

                                <?php
                                foreach ($stafflist as $skey => $svalue) {

                                    if ($rolet_value['id'] == $svalue["role_id"]) {

                                        if (!empty($svalue["image"])) {

                                            $image = $svalue['image'];
                                        } else {

                                            $image = "no_image.png";
                                        }
                                        ?>
                                        <div class="studentname">
                                            <a  href="<?php echo base_url() . "admin/staff/profile/" . $svalue["id"] ?>">
                                                <div class="icon"><img src="<?php echo base_url() . "uploads/staff_images/" . $image; ?>" alt="User Image"></div>
                                                <div class="student-tittle"><?php echo $svalue['name'] . " " . $svalue['surname']; ?></div></a>
                                        </div>
        <?php }
    }
    ?>
                            </div>
<?php } ?>      
                    </div>
                </div>
            </aside>
        </div></div>  
    <section class="content">
        <div class="row">
            <div class="col-md-3">                
                <div class="box box-primary" <?php
                        if ($staff["is_active"] == 0) {
                            echo "style='background-color:#f0dddd;'";
                        }
                        ?>>
                    <div class="box-body box-profile">
                        <?php
                        $image = $staff['image'];
                        if (!empty($image)) {

                            $file = $staff['image'];
                        } else {

                            $file = "no_image.png";
                        }
                        ?>
                        <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url() . "uploads/staff_images/" . $file ?>" alt="User profile picture">
                        <h3 class="profile-username text-center"><?php echo $staff['name'] . " " . $staff['surname']; ?></h3>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item listnoback">
                                <b><?php echo $this->lang->line('staff_id'); ?></b> <a class="pull-right text-aqua"><?php echo $staff['employee_id']; ?></a>
                            </li>
                            <li class="list-group-item listnoback">
                                <b><?php echo $this->lang->line('role'); ?></b> <a class="pull-right text-aqua"><?php echo $staff['user_type']; ?></a>
                            </li>

                            <li class="list-group-item listnoback">
                                <b><?php echo $this->lang->line('designation'); ?></b> <a class="pull-right text-aqua"><?php echo $staff['designation']; ?></a>
                            </li>
                            <li class="list-group-item listnoback">
                                <b><?php echo $this->lang->line('department'); ?></b> <a class="pull-right text-aqua"><?php echo $staff['department']; ?></a>
                            </li>

<?php if (($staff["is_active"] == 0)) { ?>
                                <li class="list-group-item listnoback">
                                    <b><?php echo $this->lang->line('date_of_leaving'); ?></b> <a class="pull-right text-aqua"><?php
    if ($staff["date_of_leaving"] != '0000-00-00') {
        echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($staff['date_of_leaving']));
    } else {
        echo "";
    }
    ?></a>
                                </li>
<?php } ?>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true"><?php echo $this->lang->line('profile'); ?></a></li>
<?php

    $a = 0 ;
          $sessionData = $this->session->userdata('admin');
            $userdata = $this->customlib->getUserData();
         // if(($userdata["role_id"] == 7)){

            
             if($staff["role_id"] == 7){
                $a = 0;
                if($userdata["email"] == $staff["email"]){
                    $a = 1;    
                }
            }else{
                $a = 1 ;
            }
            


 ?>
<?php
if ($staff["is_active"] == 1) {
    if ($this->rbac->hasPrivilege('disable_staff', 'can_view')) {
        if($a == 1){
     ?> 
                                <li class="pull-right"><a href="<?php echo base_url('admin/staff/disablestaff/' . $id); ?>" class="text-red" data-toggle="tooltip" title="<?php echo "Disable"; ?>" title="<?php echo $this->lang->line('disable'); ?>" onclick="return confirm('Are you sure you want to Disable this Record?');"></i> <i class="fa fa-thumbs-o-down"></i></a></li>



    <?php } }
} else if ($staff["is_active"] == 0) {
    if($a == 1){
    ?>

                            <li class="pull-right"><a href="<?php echo base_url('admin/staff/delete/' . $id); ?>" class="text-red" data-toggle="tooltip" title="<?php echo "Delete"; ?>" title="<?php echo $this->lang->line('delete'); ?>" onclick="return confirm('Are you sure you want to Delete this Record?');"></i><i class="fa fa-trash"></i></a></li>  


                            <li class="pull-right"><a href="<?php echo base_url('admin/staff/enablestaff/' . $id); ?>" class="text-green" data-toggle="tooltip" title="<?php echo "Enable"; ?>" title="<?php echo $this->lang->line('enable'); ?>" onclick="return confirm('Are you sure you want to Enable this Record?');"><i class="fa fa-thumbs-o-up"></i></a></li>  


<?php }} ?>


 <li class="pull-right">
    <?php if($a == 1){ ?>
    <a href="#" class="change_password text-green" data-toggle="tooltip" title="<?php echo $this->lang->line('change_password'); ?>" ></i> <i class="fa fa-key"></i></a></li>
<?php } ?>


<?php if ($this->rbac->hasPrivilege('staff', 'can_add')) {

    
          if($a == 1){

 ?>


                            <li class="pull-right"><a href="<?php echo base_url('admin/staff/edit/' . $id); ?>" data-toggle="tooltip" title="<?php echo "Edit"; ?>" title="<?php echo $this->lang->line('edit'); ?>" class="text-light" ><i class="fa fa-pencil"></i></a></li>
<?php } } ?>


                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="activity">
                            <div class="tshadow mb25 bozero">
                                <div class="table-responsive around10 pt0">
                                    <table class="table table-hover table-striped tmb0">
                                        <tbody>  


                                            <tr>
                                                <td><?php echo $this->lang->line('phone'); ?></td>
                                                <td><?php echo $staff['contact_no']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $this->lang->line('emergency_contact_number'); ?></td>
                                                <td><?php echo $staff['emergency_contact_no']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $this->lang->line('email'); ?></td>
                                                <td><?php echo $staff['email']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $this->lang->line('gender'); ?></td>
                                                <td><?php echo $staff['gender']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $this->lang->line('date_of_birth'); ?></td>
                                                <td><?php
                                                    if (!empty($staff["dob"])) {
                                                        echo date($this->customlib->getSchoolDateFormat(), $this->customlib->dateyyyymmddTodateformat($staff['dob']));
                                                    }
?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $this->lang->line('marital_status'); ?></td>
                                                <td><?php echo $staff['marital_status']; ?></td>
                                            </tr>

                                            <tr>
                                                <td  class="col-md-4"><?php echo $this->lang->line('father_name'); ?></td>
                                                <td  class="col-md-5"><?php echo $staff['father_name']; ?></td>
                                            </tr>


                                            <tr>
                                                <td><?php echo $this->lang->line('mother_name'); ?></td>
                                                <td><?php echo $staff['mother_name']; ?></td>
                                            </tr>

                                            <tr>
                                                <td><?php echo $this->lang->line('qualification'); ?></td>
                                                <td><?php echo $staff['qualification']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $this->lang->line('work_experience'); ?></td>
                                                <td><?php echo $staff['work_exp']; ?></td>
                                            </tr>

                                            <tr>
                                                <td><?php echo $this->lang->line('note'); ?></td>
                                                <td><?php echo $staff['note']; ?></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div> 
                            </div> 
                            <div class="tshadow mb25 bozero">   
                                <h3 class="pagetitleh2"><?php echo $this->lang->line('address'); ?> <?php echo $this->lang->line('detail'); ?></h3>
                                <div class="table-responsive around10 pt0">  
                                    <table class="table table-hover table-striped tmb0"><tbody>
                                            <tr>
                                                <td class="col-md-4"><?php echo $this->lang->line('current_address'); ?></td>
                                                <td class="col-md-5"><?php echo $staff['local_address']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $this->lang->line('permanent_address'); ?></td>
                                                <td><?php echo $staff['permanent_address']; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>  
                            <div class="tshadow mb25 bozero">      
                                <h3 class="pagetitleh2"><?php echo $this->lang->line('bank_account_details'); ?></h3>
                                <div class="table-responsive around10 pt10">
                                    <table class="table table-hover table-striped tmb0">
                                        <tbody>
                                            <tr>
                                                <td class="col-md-4"><?php echo $this->lang->line('account_title'); ?></td>
                                                <td class="col-md-5"><?php echo $staff['account_title']; ?></td>
                                            </tr>

                                            <tr>
                                                <td><?php echo $this->lang->line('bank_name'); ?></td>
                                                <td><?php echo $staff['bank_name']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $this->lang->line('bank_branch_name'); ?></td>
                                                <td><?php echo $staff['bank_branch']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $this->lang->line('bank_account_no'); ?></td>
                                                <td><?php echo $staff['bank_account_no']; ?></td>
                                            </tr>

                                            <tr>
                                                <td><?php echo $this->lang->line('ifsc_code'); ?></td>
                                                <td><?php echo $staff['ifsc_code']; ?></td>
                                            </tr>   


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tshadow mb25  bozero">    
                                <h3 class="pagetitleh2"><?php echo $this->lang->line('social_media'); ?></h3>
                                <div class="table-responsive around10 pt0">
                                    <table class="table table-hover table-striped tmb0">
                                        <tbody>
                                            <tr>
                                                <td class="col-md-4"><?php echo $this->lang->line('facebook_url'); ?></td>
                                                <td class="col-md-5"><a href="<?php echo $staff['facebook']; ?>" target="_blank"><?php echo $staff['facebook']; ?></a></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $this->lang->line('twitter_url'); ?></td>
                                                <td><a href="<?php echo $staff['twitter']; ?>" target="_blank"><?php echo $staff['twitter']; ?></a></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $this->lang->line('linkedin_url'); ?></td>
                                                <td><a href="<?php echo $staff['linkedin']; ?>" target="_blank"><?php echo $staff['linkedin']; ?></a></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $this->lang->line('instagram_url'); ?></td>
                                                <td><a href="<?php echo $staff['instagram']; ?>" target="_blank"><?php echo $staff['instagram']; ?></a></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div> 
                            <!--   <div class="tshadow mb25  bozero">    
                                  <h3 class="pagetitleh2"><?php echo $this->lang->line('miscellaneous_details'); ?></h3>
                                  <div class="table-responsive around10 pt0">
                                      <table class="table table-hover table-striped tmb0">
                                          <tbody>
                                       
                                             
                                          </tbody>
                                      </table>
                                  </div>
                              </div>   -->
                        </div>
                                               
                        </div>                      
                    </div>
                </div>
            </div>
    </section>
</div>
<script type="text/javascript">
    $(".myTransportFeeBtn").click(function () {
        $("span[id$='_error']").html("");
        $('#transport_amount').val("");
        $('#transport_amount_discount').val("0");
        $('#transport_amount_fine').val("0");
        var student_session_id = $(this).data("student-session-id");
        $('.transport_fees_title').html("<b>Upload Document</b>");
        $('#transport_student_session_id').val(student_session_id);
        $('#myTransportFeesModal').modal({
            backdrop: 'static',
            keyboard: false,
            show: true

        });
    });
</script>
<div id="leavedetails" class="modal fade " role="dialog">
    <div class="modal-dialog modal-dialog2 modal-lg">
        <div class="modal-dialog modal-dialog2 modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><?php echo $this->lang->line('details'); ?></h4>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <form role="form" id="leavedetails_form" action="">
                            <div class="col-md-12 table-responsive">  
                                <table class="table mb0 table-striped table-bordered examples">
                                    <tr>
                                        <th width="15%"><?php echo $this->lang->line('name'); ?></th>
                                        <td width="35%"><span id='name'></span></td>
                                        <th width="15%"><?php echo $this->lang->line('staff_id'); ?></th>
                                        <td width="35%"><span id="employee_id"></span>
                                            <span class="text-danger"><?php echo form_error('leave_request_id'); ?></span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th><?php echo $this->lang->line('leave'); ?></th>
                                        <td><span id='leave_from'></span> - <label for="exampleInputEmail1"> </label><span id='leave_to'> </span> (<span id='days'></span>)
                                            <span class="text-danger"><?php echo form_error('leave_from'); ?></span></td>
                                        <th><?php echo $this->lang->line('leave_type'); ?></th>
                                        <td><span id="leave_type"></span>
                                            <input id="leave_request_id" name="leave_request_id" placeholder="" type="hidden" class="form-control" />
                                            <span class="text-danger"><?php echo form_error('leave_request_id'); ?></span></td>
                                    </tr>
                                    <tr>
                                        <th><?php echo $this->lang->line('status'); ?></th>
                                        <td>
                                            <span id="status"></span>
                                        </td>

                                        <th><?php echo $this->lang->line('apply'); ?> <?php echo $this->lang->line('date'); ?></th>
                                        <td><span id="applied_date"></span></td>
                                    </tr>
                                    <tr>
                                        <th><?php echo $this->lang->line('reason'); ?></th>
                                        <td><span id="reason"> </span></td>

                                        <th><?php echo $this->lang->line('note'); ?></th>
                                        <td>
                                            <span id="remark"> </span>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </form>                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myTimelineModal" role="dialog">
    <div class="modal-dialog modal-sm400">      
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title title text-center transport_fees_title"></h4>
            </div>
            <div class="">
                <div class="">
                    <div class="">

                        <form  id="timelineform" name="timelineform" method="post" action="<?php echo base_url() . "admin/timeline/add_staff_timeline" ?>"  enctype="multipart/form-data">
<?php echo $this->customlib->getCSRF(); ?>
                            <div id='timeline_hide_show'>                                                    
                                <input type="hidden" name="staff_id" value="<?php echo $staff["id"] ?>" id="staff_id">
                                <h4></h4>
                                <div class=" col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('title'); ?></label>
                                        <input id="timeline_title" name="timeline_title" placeholder="" type="text" class="form-control"  />
                                        <span class="text-danger"><?php echo form_error('timeline_title'); ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('date'); ?></label><small class="req"> *</small>
                                        <input id="timeline_date" name="timeline_date" value="<?php echo set_value('timeline_date', date($this->customlib->getSchoolDateFormat())); ?>" placeholder="" type="text" class="form-control"  />
                                        <span class="text-danger"><?php echo form_error('timeline_date'); ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('description'); ?></label>
                                        <textarea id="timeline_desc" name="timeline_desc" placeholder=""  class="form-control"></textarea>
                                        <span class="text-danger"><?php echo form_error('description'); ?></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('attach_document'); ?></label>
                                        <div class="" style="margin-top:-5px; border:0; outline:none;"><input id="timeline_doc_id" name="timeline_doc" placeholder="" type="file"  class="filestyle form-control" data-height="40"  value="<?php echo set_value('timeline_doc'); ?>" />
                                            <span class="text-danger"><?php echo form_error('timeline_doc'); ?></span></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('visible'); ?></label>
                                        <input id="visible_check" checked="checked" name="visible_check" value="yes" placeholder="" type="checkbox"   />

                                    </div>


                                </div>
                            </div>
                            <div class="modal-footer" style="clear:both">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></button>
                                <button type="submit"  class="btn btn-info pull-right"><?php echo $this->lang->line('save'); ?></button>

                                <button type="reset" id="reset" style="display: none"  class="btn btn-info pull-right">Reset</button>                            </div>
                        </form>
                    </div>                 
                </div>
            </div>
        </div>
    </div>
</div>
<div id="scheduleModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title_logindetail"></h4>
            </div>
            <div class="modal-body_logindetail">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></button>
            </div>
        </div>
    </div>
</div>

<div id="payslipview"  class="modal fade" role="dialog">

    <div class="modal-dialog modal-dialog2 modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo $this->lang->line('details'); ?>   <span id="print"></span></h4>
            </div>
            <div class="modal-body" id="testdata">


            </div>
        </div>
    </div>
</div>


<div id="changepwdmodal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Change Password</h4>
            </div>
            <form method="post" id="changepassbtn" action="">
                
            <div class="modal-body">
                <div class="form-group">
    <label for="email">Password</label>
    <input type="password" class="form-control" name="new_pass" id="pass">
  </div>
  <div class="form-group">
    <label for="pwd">Confirm Password</label>
    <input type="password" class="form-control" name="confirm_pass" id="pwd">
  </div>

 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit"  class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $("#myTimelineButton").click(function () {

        $("#reset").click();

        $('.transport_fees_title').html("<b><?php echo $this->lang->line('add'); ?> <?php echo $this->lang->line('timeline'); ?></b>");
        $('#myTimelineModal').modal({
            backdrop: 'static',
            keyboard: false,
            show: true

        });
    });
    $(document).ready(function (e) {
        $("#timelineform").on('submit', (function (e) {
            var staff_id = $("#staff_id").val();

            e.preventDefault();
            $.ajax({
                url: "<?php echo site_url("admin/timeline/add_staff_timeline") ?>",
                type: "POST",
                data: new FormData(this),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {

                    if (data.status == "fail") {

                        var message = "";
                        $.each(data.error, function (index, value) {

                            message += value;
                        });
                        errorMsg(message);
                    } else {

                        successMsg(data.message);

                        $.ajax({
                            url: '<?php echo base_url(); ?>admin/timeline/staff_timeline/' + staff_id,
                            success: function (res) {
                                $('#timeline_list').html(res);
                                $('#myTimelineModal').modal('toggle');
                            },
                            error: function () {
                                alert("Fail")
                            }
                        });
                        //window.location.reload(true);
                    }

                },
                error: function (e) {
                    alert("Fail");
                    console.log(e);
                }
            });


        }));
    });


    $(document).ready(function (e) {
        $("#changepassbtn").on('submit', (function (e) {
            var staff_id = $("#staff_id").val();

            e.preventDefault();
            $.ajax({
                url: "<?php echo site_url('admin/staff/change_password/') ?>"+staff_id,
                type: "POST",
                data: new FormData(this),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {

                    if (data.status == "fail") {

                        var message = "";
                        $.each(data.error, function (index, value) {

                            message += value;
                        });
                        errorMsg(message);
                    } else {

                        successMsg(data.message);

                        window.location.reload(true);
                    }

                },
                error: function (e) {
                    alert("Fail");
                    console.log(e);
                }
            });


        }));
    });

    function delete_timeline(id) {

        var staff_id = $("#staff_id").val();
        if (confirm('<?php echo $this->lang->line("delete_confirm") ?>')) {

            $.ajax({
                url: '<?php echo base_url(); ?>admin/timeline/delete_staff_timeline/' + id,
                success: function (res) {
                    $.ajax({
                        url: '<?php echo base_url(); ?>admin/timeline/staff_timeline/' + staff_id,
                        success: function (res) {
                            $('#timeline_list').html(res);

                        },
                        error: function () {
                            alert("Fail")
                        }
                    });

                },
                error: function () {
                    alert("Fail")
                }
            });
        }

    }

    $(document).ready(function () {
$(document).on('click','.change_password',function(){

$('#changepwdmodal').modal('show');
});



        $("#attendancetable").DataTable({
            searching: false,
            ordering: false,
            paging: false,
            bSort: false,
            info: false,
            dom: "Bfrtip",
            buttons: [

                {
                    extend: 'copyHtml5',
                    text: '<i class="fa fa-files-o"></i>',
                    titleAttr: 'Copy',
                    title: $('.download_label').html(),
                    exportOptions: {
                        columns: ':visible'
                    }
                },

                {
                    extend: 'excelHtml5',
                    text: '<i class="fa fa-file-excel-o"></i>',
                    titleAttr: 'Excel',

                    title: $('.download_label').html(),
                    exportOptions: {
                        columns: ':visible'
                    }
                },

                {
                    extend: 'csvHtml5',
                    text: '<i class="fa fa-file-text-o"></i>',
                    titleAttr: 'CSV',
                    title: $('.download_label').html(),
                    exportOptions: {
                        columns: ':visible'
                    }
                },

                {
                    extend: 'pdfHtml5',
                    text: '<i class="fa fa-file-pdf-o"></i>',
                    titleAttr: 'PDF',
                    title: $('.download_label').html(),
                    exportOptions: {
                        columns: ':visible'

                    }
                },

                {
                    extend: 'print',
                    text: '<i class="fa fa-print"></i>',
                    titleAttr: 'Print',
                    title: $('.download_label').html(),
                    customize: function (win) {
                        $(win.document.body)
                                .css('font-size', '10pt');

                        $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                    },
                    exportOptions: {
                        columns: ':visible'
                    }
                },

                {
                    extend: 'colvis',
                    text: '<i class="fa fa-columns"></i>',
                    titleAttr: 'Columns',
                    title: $('.download_label').html(),
                    postfixButtons: ['colvisRestore']
                },
            ]
        });
    });



</script>
<script>
    $(document).ready(function () {
        $('.detail_popover').popover({
            placement: 'right',
            title: '',
            trigger: 'hover',
            container: 'body',
            html: true,
            content: function () {
                return $(this).closest('td').find('.fee_detail_popover').html();
            }
        });

        var date_format = '<?php echo $result = strtr($this->customlib->getSchoolDateFormat(), ['d' => 'dd', 'm' => 'mm', 'Y' => 'yyyy',]) ?>';

        $("#timeline_date").datepicker({
            format: date_format,
            autoclose: true

        });
    });

    function getRecord(id) {
        $('input:radio[name=status]').attr('checked', false);
        var base_url = '<?php echo base_url() ?>';
        $.ajax({
            url: base_url + 'admin/leaverequest/leaveRecord',
            type: 'POST',
            data: {id: id},
            dataType: "json",
            success: function (result) {

                $('inputs[name="leave_request_id"]').val(result.id);
                $('#name').html(result.name + ' ' + result.surname);
                $('#leave_from').html(new Date(result.leave_from).toString("MM/dd/yyyy"));
                $('#leave_to').html(new Date(result.leave_to).toString("MM/dd/yyyy"));
                $('#leave_type').html(result.type);
                $('#reason').html(result.employee_remark);
                $('#applied_date').html(new Date(result.date).toString("MM/dd/yyyy"));
                $('#days').html(result.leave_days + ' Days');
                $("#remark").html(result.admin_remark);
                $("#employee_id").html(' ' + result.employee_id);
                $("#status").html(' ' + result.status);


            }
        });

        $('#leavedetails').modal({
            show: true,
            backdrop: 'static',
            keyboard: false
        });
    }
    ;


    function ajax_attendance(id, year) {


        var base_url = '<?php echo base_url() ?>';
        $.ajax({
            url: base_url + 'admin/staff/ajax_attendance/' + id,
            type: 'POST',
            data: {id: id, year: year},
            //dataType: "json",
            success: function (result) {

                $("#ajaxattendance").html(result);

            }
        });
    }


    function getPayslip(id) {



        var base_url = '<?php echo base_url() ?>';
        $.ajax({
            url: base_url + 'admin/payroll/payslipView',
            type: 'POST',
            data: {payslipid: id},
            //dataType: "json",
            success: function (result) {
                $("#print").html("<a href='#' class='pull-right modal-title moprint' onclick='printData(" + id + ")'  title='Print'><i class='fa fa-print'></i></a>");
                $("#testdata").html(result);

            }
        });



        $('#payslipview').modal({
            show: true,
            backdrop: 'static',
            keyboard: false
        });

    }
    ;

    function printData(id) {

        var base_url = '<?php echo base_url() ?>';
        $.ajax({
            url: base_url + 'admin/payroll/payslipView',
            type: 'POST',
            data: {payslipid: id},
            //dataType: "json",
            success: function (result) {

                $("#testdata").html(result);
                popup(result);
            }
        });
    }

    function popup(data)
    {
        var base_url = '<?php echo base_url() ?>';
        var frame1 = $('<iframe />');
        frame1[0].name = "frame1";
        frame1.css({"position": "absolute", "top": "-1000000px"});
        $("body").append(frame1);
        var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
        frameDoc.document.open();
        //Create a new HTML document.
        frameDoc.document.write('<html>');
        frameDoc.document.write('<head>');
        frameDoc.document.write('<title></title>');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/bootstrap/css/bootstrap.min.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/dist/css/font-awesome.min.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/dist/css/ionicons.min.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/dist/css/AdminLTE.min.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/dist/css/skins/_all-skins.min.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/plugins/iCheck/flat/blue.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/plugins/morris/morris.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/plugins/datepicker/datepicker3.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/plugins/daterangepicker/daterangepicker-bs3.css">');
        frameDoc.document.write('</head>');
        frameDoc.document.write('<body>');
        frameDoc.document.write(data);
        frameDoc.document.write('</body>');
        frameDoc.document.write('</html>');
        frameDoc.document.close();
        setTimeout(function () {
            window.frames["frame1"].focus();
            window.frames["frame1"].print();
            frame1.remove();
        }, 500);


        return true;
    }
</script>