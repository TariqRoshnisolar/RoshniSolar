<?php
$base_assets_url = '/backend/themes/default/';
?>
<style>
.otpsenttext{
	color: #20b126;
}
.otpbtn{
	padding: 6px 10px 6px 10px;
    font-size: 13px;
}
.otpverified{
	color: green;
    padding: 4px 0 0 110px;
    padding-left: 9px;
    display:none;
}
</style>
        <div class="form_part">
          <form id="basic_registration_form">
            <div class="table-responsive">
              <table class="table table-striped table-bordered">
                <tbody>
                  <tr>
                    <th scope="row" width="30%">
                      First Name / पहला नाम <span style="color: red">*</span>
                    </th>
                    <td width="40%"><input type="text" name="fname" class="form-control fullname required" id="fname" placeholder="First Name" data-error="First Name" required></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <th scope="row">Middle Name / मध्य नाम</th>
                    <td><input type="text" name="mname" class="form-control fullname" id="mname" placeholder="Middle Name"></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <th scope="row">Last Name / अंतिम नाम <span style="color: red">*</span></th>
                    <td><input type="text" name="lname" class="form-control fullname required" id="lname" placeholder="Last Name" required data-error="Last Name"></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <th scope="row">Full Name / पूरा नाम </th>
                    <td><input type="text" name="fullname" class="form-control" id="fullname" placeholder="Full Name" readonly></td>
                    <td>&nbsp;</td>
                  </tr>

                  <tr>
                    <th scope="row">Mobile Number / मोबाइल नंबर <span style="color: red">*</span></th>
                    <td><div class="input-group mb-3">
                        <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1">91</span> </div>
                        <input type="text" class="form-control required" id="phone" name="phone" placeholder="Mobile Number" maxlength="10" minlength="10" data-error="Mobile Number" onkeypress="digitonly(this.value)" required>
                      </div></td>
                    <td>Please Do not prefix zero (0) / कृपया उपसर्ग शून्य न करें (0)</td>
                  </tr>


                  <tr>
                    <th scope="row">Email ID / ईमेल आईडी <span style="color: red">*</span></th>
                    <td><input type="email" class="form-control required" name="email" id="email" placeholder="example@example.com" data-error="Email ID" required></td>
                    <td>(Maximum 60 Charactor / अधिकतम 60 वर्ण )</td>
                  </tr>


                  <tr>
                      <th scope="row"></th>
                      <td colspan="2" class="text-primary"> Are you sure that the data entered is correct as no change | edit of application will be allowed after
                      "Final Selection". If Yes click "Verify", otherwise click "Cancel"</td>
                  </tr>
                  <tr>
                    <th colspan="3"> <!-- <input type="button" id="save_basic_info" class="btn btn-success float-right ajaxStart" value="Save & Next"> -->
                      <div class="float-right">
                      <input type="button" id="verify_details" class="btn btn-success  ajaxStart" value="Verify"> &nbsp;&nbsp;&nbsp;
                      <input type="button" id="cancel" onclick="cancelbtn()" class="btn btn-success ajaxStart" value="Cancel">
                    </div>
                    </th>
                  </tr>
                </tbody>
              </table>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- OTP Verify Modal -->
<div class="modal" id="otpverifymodal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Verify Mobile No.</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      	<p class="otpsenttext">
      		OTP Sent to Mobile No <b><span id="mobileno"></span></b>
      	</p>

          <div class="form-group">
          <input type="text" class="form-control" id="mobileotp" placeholder="Mobile OTP">
          </div>
          <button type="button" class="btn btn-dark otpbtn float-left ajaxStart" id="verifymobileotp">Verify Mobile</button>
          <span class="otpverified">&#10004; Verified</span>
          <button type="button" id="resendotp" class="btn btn-link otpbtn float-right ajaxStart">Resend Mobile OTP</button>
          <br><br>
 
      </div>

      <!-- Modal footer -->
<!--       <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> -->

    </div>
  </div>
</div>
<!-- End Modal -->

<script type="text/javascript">

var user_mobile, user_email, user_fname, user_mname, user_lname;
var user_mobile_unique = false;
var user_mobile_varified = false;

function cancelbtn(){
  javascript:window.location= base_url+'form/basic_info';
}

function form_validation(){
  let validate = 0;
  $(".required").each(function(k,v){
    if( $(this).val() == '' ){
      toastr.error( $(this).attr('data-error')+' is required' );
      validate++;
    }
  });

  if( $("#email").val() != '' ){
    if( !validateEmail($("#email").val()) ){
      validate++;
      toastr.error('Email format is not correct');
    }
  }

  if( $("#phone").val() != '' ){
    if( $("#phone").val().length != 10 ){
      validate++;
      toastr.error('Mobile no. should be 10 digits');
    }
  }

  if(validate != 0){
    return false;
  }
}

function validateEmail(email){
  var atpos = email.indexOf("@");
  var dotpos = email.lastIndexOf(".");
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length){
      return false;
  }
  return true;
}

function digitonly(value){   
    value.replace(/[^\d].+/, "");
      if ((event.which < 48 || event.which > 57)) {
        event.preventDefault();
      }
}

  $(document).ready(function(){
    $(".fullname").on('keyup keypress blur change', function(){
        var fname, mname, lname;
        fname = document.getElementById("fname").value;
        mname = document.getElementById("mname").value;
        lname = document.getElementById("lname").value;
        let fullname = fname+" "+mname+" "+lname;
        document.getElementById("fullname").value = fullname;
    });

    $("#verifymobileotp").click(function(){
    	let mobileotp = $("#mobileotp").val().trim();
    	$.ajax({
    		url:base_url+'index.php/user/registration/sms/verifyotp',
    		method:'post',
    		data:{mobileotp:mobileotp, fname:user_fname, mname:user_mname, lname:user_lname, phone:user_mobile, email:user_email},
    		success:function(s){
    			//console.log(s);
    			if(s['type']){
    				if(s['type']=='success'){
      	        $("#mobileno").text('');
      	        $("#emailid").text('');
      	        $('#otpverifymodal').modal('hide');
                $("#mobileotp").val('');	
                $("#basic_registration_form").trigger('reset');
                toastr.success(s['message']['msg']);
                $(location).attr('href', base_url+'index.php/form/details');			
    				}
      				else if(s['type']=='error'){
      					toastr.error(s['message']);
      				}    				
    			}
    		}
    	});
    });

    $("#verify_details, #resendotp").click(function(){
      if(form_validation() == false){
        return false;
      }
      else{
        user_fname = $("#fname").val().trim();
        user_mname = $("#mname").val().trim();
        user_lname = $("#lname").val().trim(); 
        user_mobile = $("#phone").val().trim();
      	user_email = $("#email").val().trim();      	

      	// Send OTP //

      	$.ajax({
      		url:base_url+'index.php/user/registration/sms/sendotp',
      		method:'post',
      		data:{contactno:user_mobile, email:user_email},
      		success:function(s){
      			//console.log(s);
      			if(s['type']){
      				if(s['type']=='success'){
      					try{
      					let mobile_response = JSON.parse(s['message']['mobile']);
      					if(mobile_response['type'] == 'success'){
      	                    $("#mobileno").text(user_mobile);
      	                    $("#emailid").text(user_email);
      	                    $('#otpverifymodal').modal('show');
      					}
      					}
      					catch(e){

      					}
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
</body>
