<?php $base_assets_url = '/backend/themes/default/'; ?>
<style>
.captchabtn{
    border-color: transparent;
    background-color: transparent;
    border-width: 0px;
}
</style>
<?php $site = getSiteSettings(); ?>
<div class="ccr_section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="form_part">
                   <!--  <h1>RECRUITMENT FOR SOLAR GREEN JOBS 2019-2020</h1> -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr class="bg-primary">
                                <th scope="col">Important Events</th>
                                <th scope="col">Dates</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Opening Date & Time for Online Registration and Submission of Applications</th>
                                    <td><?php echo (isset($site->opening_date)?date('dS F Y l',strtotime($site->opening_date)):'');?></td>
                                </tr>   
                                <tr>
                                    <th scope="row">Closing Date & Time for Online Registration and Submission of Applications</th>
                                    <td><?php echo (isset($site->closing_date)?date('dS F Y l',strtotime($site->closing_date)):'');?>  </td>
                                </tr>  
                                <tr>
                                    <th scope="row">Last Date & Time for Payment of Application Fee -Online payment (Net Banking/Credit Card/Debit Card)</th>
                                    <td><?php echo (isset($site->last_date)?date('dS F Y l',strtotime($site->last_date)):'');?> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="login_details">
                    <h4 class="mb-4">Login for Already Registered Candidates</h4>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputtext">Registration Number</label>
                            <input type="text" class="form-control required" data-error="Mobile Number" name="regno" id="phone_no" placeholder="Enter Registred Mobile Number">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label for="exampleInputPassword1">Password</label>
                                </div>
                                <div class="col-6 text-right"> <a href="#" data-toggle="modal" data-target="#forgetpassword"><i class="fas fa-angle-double-right"></i> Forgot Password
                                    </a>
                                </div>
                            </div>
                            <input type="password" class="form-control required" data-error="Password" name="password" id="password" placeholder="Password">
                        </div>

                        <div class="form-group">                            
                            <label for="exampleInputtext">Captcha Code</label><br>
                            <img id="captcha_code_img" src="form/gererate_captch" />
                            <button type="button" class="captchabtn" onclick="refreshCaptcha()"><img style="width: 20px;" src="<?php echo base_url(); ?>uploads/other_images/refresh-captcha.png"/>Refresh</button>
                            <input type="text" name="captchacode" data-error="Captcha Code" class="form-control required" id="captchacode">
                        </div>
                        <button type="button" id="login_btn" class="btn btn-success ajaxStart">Submit</button>

                    </form>

                </div>
                <br>
                <div class="login_details">

                    <h4 class="mb-4" style="text-align: center">Reference Documents</h4>

                    <ul>

                       <a href="#"> <li>How to apply</li> </a>

                       <!-- <a href="#"> <li>Frequently Asked Questions: For On-Line Registration Process.</li></a> -->

                    </ul>





                </div>                

            </div>

            <div class="col-md-8">

            </div>


        </div>

    </div>

</div>

<!-- Forget Password Modal -->
<div class="modal" id="forgetpassword">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Get Your Password on Mobile</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <input type="text" class="form-control" id="enter_mobileno" placeholder="Enter Registered Mobile Number" />
        <br>
        <button type="button" class="btn btn-dark ajaxStart" id="getyourpassword">Reset Passord</button>
      </div>

    </div>
  </div>
</div>
<!-- Forget Password Modal -->

<script>

    function form_validation(){
        let validate = 0;
        $(".required").each(function(k,v){ 
            if( $(this).val() == '' ){
                validate++;
                toastr.error( $(this).attr('data-error')+' is required' );
            }
        });
        if(validate != 0){
            return false;
        }
    }

    function refreshCaptcha() {
        $("#captcha_code_img").attr('src','form/gererate_captch');
    }    

    $(document).ready(function(){

        $("#getyourpassword").click(function(){
            if($("#enter_mobileno").val() == ''){
                toastr.error("Enter your mobile number");
                return false;
            }
            else{
                let valid_phone_no = $("#enter_mobileno").val();
                $.ajax({
                    url:base_url+'index.php/user/registration/sms/forgetpassword',
                    method:'post',
                    data:{valid_phone_no:valid_phone_no},
                    success:function(s){
                        //console.log(s);
                        if(s['type']){
                            if(s['type']=='success'){
                                $("#enter_mobileno").val('');
                                $("#forgetpassword").modal('hide');
                                let msg = s['message'];
                                toastr.success(msg['msg']);
                            }
                            else if(s['type']=='error'){
                                toastr.error(s['message']);
                            }
                        }
                    }
                });
            }
        });

        $("#login_btn").on('click submit', function(){
            if( form_validation() == false ){
                return false;
            }
            else{
                let captchacode = $("#captchacode").val().trim();
                let phone_no = $("#phone_no").val().trim();
                let password = $("#password").val().trim();
                $.ajax({
                    url:base_url+'index.php/form/userauthentication',
                    method:'post',
                    data:{phone_no:phone_no, password:password, captchacode:captchacode},
                    success:function(s){
                        //console.log(s);
                        if(s['type']){
                            if(s['type']=='success'){
                                $("#phone_no").val('');
                                $("#password").val('');
                                $("#captchacode").val('');
                                let next_url = registration_step(s['message'].registration_step);
                                //console.log(next_url);
                                $(location).attr('href', base_url+next_url);
                            }
                            else if(s['type']=='error'){
                                toastr.error(s['message']);
                            }
                        }
                    }
                });
            }
        });
    });
</script>
