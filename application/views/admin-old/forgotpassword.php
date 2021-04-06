<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#424242" />
        <title>Smart School : School Management System</title>
        <!--favican-->
        <link href="<?php echo base_url(); ?>backend/images/s-favican.png" rel="shortcut icon" type="image/x-icon">
        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/usertemplate/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/usertemplate/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/usertemplate/assets/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/usertemplate/assets/css/style.css">
        <style type="text/css">
            .width100, .width50{font-size: 12px !important;}  
            .discover{margin-top: -90px;position: relative;z-index: -1;}
            /*.form-bottom {box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.35);}*/
            .gradient{margin-top: 40px;text-align: right;padding: 10px;background: rgb(72,72,72);
                      background: -moz-linear-gradient(left, rgba(72,72,72,1) 1%, rgba(73,73,73,1) 44%, rgba(73,73,73,1) 100%);
                      background-image: linear-gradient(to right, rgba(72, 72, 72, 0.23) 1%, rgba(37, 37, 37, 0.64) 44%, rgba(73, 73, 73, 0) 100%);
                      background-position-x: initial;
                      background-position-y: initial;
                      background-size: initial;
                      background-repeat-x: initial;
                      background-repeat-y: initial;
                      background-attachment: initial;
                      background-origin: initial;
                      background-clip: initial;
                      background-color: initial;
                      background: -webkit-linear-gradient(left, rgba(72,72,72,1) 1%,rgb(73, 73, 73) 44%,rgba(73,73,73,1) 100%);
                      background: linear-gradient(to right, rgba(72, 72, 72, 0.02) 1%,rgba(37, 37, 37, 0.67) 30%,rgba(73, 73, 73, 0) 100%);
                      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#484848', endColorstr='#494949',GradientType=1 );}        
            @media (min-width: 320px) and (max-width: 991px){
                .width100{width: 100% !important;display: block !important;
                          float: left !important; margin-bottom: 5px !important;
                          border-radius: 2px !important;}
                .width50{width: 50% !important;
                         margin-bottom: 5px !important;
                         display: block !important;
                         border-radius:2px 0px 0px 2px !important;
                         float: left !important;
                         margin-left: 0px !important; }
                .widthright50{width: 50% !important;
                              display: block !important;
                              margin-bottom: 5px !important;
                              border-radius: 0px 2px 2px 0px !important;
                              float: left !important;margin-left: 0px !important;} }
            input[type="text"], input[type="password"], textarea, textarea.form-control {
                height: 40px;border: 1px solid #999;}

            input[type="text"]:focus, input[type="password"]:focus, textarea:focus, textarea.form-control:focus {border: 1px solid #424242;}

            button.btn {height: 40px;line-height: 40px;}
                  
            @media(max-width:767px){
                .discover{margin-top: 10px}
                .gradient {text-align: center;}
                .logowidth{padding-right:0px;}     
            }  
            @media(min-width:768px) and (max-width:992px){
                .discover{margin-top: 10px}
                .logowidth{padding-right:0px;} 
                .gradient {text-align: center;}  
            }

/*.backstretch{position: relative;}
.backstretch:after {
    position: absolute;
    z-index: 2;
    width: 100%;
    height: 100%;
    display: block;
    left: 0;
    top: 0;
    content: "";
    background-color: rgba(0, 0, 0, 0.16);
}*/
 .col-md-offset-3 { margin-left: 29%;}

 .loginbg {
    /* background: rgba(0, 0, 0, 0.81); */
    background-color: white;
    max-height: 390px;
    box-shadow: 0px 7px 12px rgba(0, 0, 0, 0.29);
    border-radius: 4px;
    border: solid 1px black;
    
}
.loginbg input{
    border: 1px solid #ccc !important;
    border-radius: 0px 6px 6px 0px !important;
    background: #fff;
    height: 34px;
    font-size: 14px;

}
.loginbg button.btn{
    background: #d9534f !important;
}
.form-bottom{
        padding-top: 0px !important;
}
.headerimg {
    position: relative;
    top: -64px;
    margin-bottom: -54px;
    border: solid 1px black;
}

.name {
    font-size: large;
    font-weight: 400;
    color: #ff9900;
}
.loginright {
    text-align: left;
    color: #fff;
    max-height: 385px;
    /* padding-right: 20px; */
    overflow: auto;
    position: relative;
    width: 100%;
    max-width: 100%;
    height: 385px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.logdivider {
    background: rgba(255, 253, 253, 0.7);
    clear: both;
    width: 100%;
    height: 1px;
    margin: 15px 0 15px;
}

.separatline {
    margin-left: 30px;
    width: 1px;
    height: 450px;
    background: rgba(255, 253, 253, 0.7);
}
.loginright h3 {
    font-size: 22px;
    color: #eae8e8;
    margin-top: 10px;
    line-height: normal;
    font-weight: 500;
    padding-bottom: 10px;
}
.col-md-offset-3 { margin-left: 29%;}
@media (max-width: 767px) {
.separatline {
    margin-left: 0;
    width: 100%;
    height: 2px;
    margin: 35px auto 0px auto;
}
.col-md-offset-3 {margin-left: 0;}
}
label.radio-inline{
    font-size: 14px;
    line-height: 30px;
}
.radio{
        margin-bottom: 15px;
}
.radio-inline{
        margin-top: -4px !important;
}
.errormsg{
    display:none;
}

.modal {
  text-align: center;
  padding: 0!important;
}

.modal:before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle;
  margin-right: -4px;
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}
.modal-body{
        border: 5px solid gray;
    border-radius: 3px;
}
.hidetextbox{
    display:none;
}
.submitmodaldialog {
    
}
#forgetpassworddiv{
    min-height: 222px;
}
        </style>
    </head>
    <body>
        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <!---
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <img src="<?php echo base_url(); ?>backend/images/s_logo.png" class="logowidth">
                        </div>
                        --->
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 form-box col-md-offset-4">
                            <div class="loginbg"> 

                    <div class="headerImg">
                        
                        <img src="<?php echo base_url(); ?>backend/usertemplate/assets/img/backgrounds/trigentlogo.png" class="headerimg img-circle center-block img-thumbnail">
                        </div>

                            <div class="form-top">
                        <div>
                            <p class="name text-center">
                        Trigent Infotech Pvt Ltd
                            </p>
                        </div>
                    
                    </div>
                            <!---
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3 class="font-white"><?php echo $this->lang->line('forgot_password'); ?></h3>

                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-key"></i>
                                </div>
                            </div>
                            --->

                            <div class="form-bottom" id="forgetpassworddiv">
                              
                        </div>

                        <div id="forgetpassworddivbody" style="display:none;">
                                <?php
                                if (isset($error_message)) {
                                    echo "<div class='alert alert-danger'>" . $error_message . "</div>";
                                }
                                ?>
                                <form action="<?php echo site_url('site/forgotpassword') ?>" method="post">
                                    <?php echo $this->customlib->getCSRF(); ?>

                                    <!---
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username"><?php echo $this->lang->line('email'); ?></label>
                                        <input type="text" name="email" placeholder="<?php echo $this->lang->line('email'); ?>" class="form-username form-control" id="form-username">
                                        <span class="text-danger"><?php echo form_error('email'); ?></span>
                                    </div>
                                    --->

<div align="center">                                  
<div class="radio">
  <label><input class="radio-inline proceedfor" type="radio" name="proceedfor" id="parent" value="parent">Parent Login&nbsp;&nbsp;</label>
</div>
<div class="radio">
  <label><input class="radio-inline proceedfor" type="radio" name="proceedfor" id="student" value="student">Student Login</label>
</div>
<div class="radio">
  <label><input class="radio-inline proceedfor" type="radio" name="proceedfor" id="staff" value="staff">Staff Login&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
</div>

<div class="text-danger errormsg" id="proceedfor_error">Please select a user</div>

<button type="button" name="proceed" onclick="getproceedfor()">Proceed</button>
<button type="button" name="cancel" onclick="cancelcredential()">Cancel</button>
</div>

<br><br>

                                    <!---
                                    <div class="form-group">
                                        <label >
                                        <input type="radio" name="parent" placeholder="<?php echo $this->lang->line('parent'); ?>" id="">Parent
                                        </label>
                                        <span class="text-danger"><?php echo form_error('parent'); ?></span>
                                    </div>
                                    

                                    <button type="submit" class="btn"><?php echo $this->lang->line('submit'); ?></button>
                                    --->
                                </form>
                                <a href="<?php echo site_url('site/userlogin') ?>" class="forgot"><i class="fa fa-key"></i> <?php echo $this->lang->line('admin_login'); ?></a>
                            </div>

                            <div id="sendpasswordondiv" style="display:none;">
<form method="post">
                                
<div class="radio">
  <label><input class="radio-inline sendpasswordon" type="radio" name="sendpasswordon" id="email" value="email"><i class="fa fa-envelope" aria-hidden="true"></i> Send password on registered email id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
</div>
<div class="radio">
  <label><input class="radio-inline sendpasswordon" type="radio" name="sendpasswordon" id="phone" value="phone"><i class="fa fa-phone" aria-hidden="true"></i> Send password on registered phone number</label>
</div>

<div class="text-danger errormsg" id="sendpasswordon_error">Please select a method</div>

<div align="center">
<button type="button" name="confirmbackbtn" id="confirmback" onclick="confirmbackbtnclick()">Back</button>

<button type="button" name="confirmbtn" id="confirmbtn" onclick="confirmpasswordon()">Confirm</button>
</div>

        </form>
        <br><br>
                            </div>

                            <div id="submitemailorphonediv" style="display:none;" >
<form method="post">

<div class="radio" id="submitemailorphonedivbody">

<!--
<input type="email" id="emailid" name="emailid" class="form-control hidetextbox">

<input type="text" id="phoneno" name="phoneno" class="form-control hidetextbox">
-->
</div>

<div class="text-danger errormsg" id="emailphone_error">Input box can't be blank</div>
<div class="text-danger errormsg" id="emailformaterror">Email ID is not valid</div>

<div align="center">
<button type="button" name="submitbackbtn" id="submitback" onclick="submitbackbtnclick()">Back</button>

<button type="button" name="submitbtn" id="submitbtn" onclick="submitemailorphone()">Submit</button>
</div>
        </form>

                            </div>


                            <div id="successmodaldiv" style="display:none;" >
<div class="radio" id="successmodalbody">

</div>

<a href="<?php echo site_url('site/userlogin') ?>" class="forgot"><i class="fa fa-key"></i> <?php echo $this->lang->line('admin_login'); ?></a>

                            </div>


<!--- Model Confirm --->



<!-- End Model--->


<!--- Model Submit Phone/Email --->


<!-- End Model--->


<!--- Model Submit Phone/Email --->



<!-- End Model--->


                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Javascript -->
        <script src="<?php echo base_url(); ?>backend/usertemplate/assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>backend/usertemplate/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>backend/usertemplate/assets/js/jquery.backstretch.min.js"></script>
        <!-- <script src="<?php echo base_url(); ?>backend/usertemplate/assets/js/scripts.js"></script> -->
        <!--[if lt IE 10]>
            <script src="<?php echo base_url(); ?>backend/usertemplate/assets/js/placeholder.js"></script>
        <![endif]-->
    </body>
</html>
<script type="text/javascript">
    
    var proceedfor;
    var email;
    var phoneno;

  function submitbackbtnclick(){
    $("#forgetpassworddiv").empty();
    $("#forgetpassworddiv").append( $("#sendpasswordondiv").html() );
  }

  function confirmbackbtnclick(){
     $("#forgetpassworddiv").empty();
     $("#forgetpassworddiv").append( $("#forgetpassworddivbody").html() );
  }


    function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}   

    function submitemailorphone(){
        $("#emailphone_error").hide();
        $("#emailformaterror").hide();
         email = $("#emailid").val();
        if( $("#emailid").length > 0 && $("#phoneno").length == 0 ){
           if( $("#emailid").val() == '' ){
              $("#emailphone_error").show();
              return false;
           }
           else if( validateEmail($("#emailid").val()) == false ){
              $("#emailformaterror").show();
              return false;
           }
           else{
               email = $("#emailid").val();
              $.ajax({
                url:'<?php echo base_url('site/sendemailcredential') ?>',
                method:'post',
                cache:false,
                data:{email:email, proceedfor:proceedfor},
                success:function(s){
                   // $("#submitmodal").modal('hide');
                    
                    
                    if(s== 'sent'){

                        $("#submitemailorphonediv").hide();
                        $("#forgetpassworddiv").empty();
                        $("#successmodalbody").empty();
                    $("#successmodalbody").append("<div class='alert alert-success'>Your Login Detail has been sent successfully</div>");
                       $("#forgetpassworddiv").append( $("#successmodaldiv").html() );
                       //alert('Login Details Sent Successfully');
                       //$(location).attr('href', "<?php echo base_url('site/login'); ?>");;
                    }
                    else if(s == 'Email ID not valid'){
                         $("#submitemailorphonediv").hide();
                        $("#forgetpassworddiv").empty();
                        $("#successmodalbody").empty();
                    $("#successmodalbody").append("<div class='alert alert-danger'>Your Email ID not valid.. Please try again </div>");
                       $("#forgetpassworddiv").append( $("#successmodaldiv").html() );
                    }
                    else if(s == 'Record Not Found'){
                         $("#submitemailorphonediv").hide();
                        $("#forgetpassworddiv").empty();
                        $("#successmodalbody").empty();
                    $("#successmodalbody").append("<div class='alert alert-danger'>No Record Found with this email id </div>");
                       $("#forgetpassworddiv").append( $("#successmodaldiv").html() );
                    }
                    else if(s == 'not sent'){
                         $("#submitemailorphonediv").hide();
                        $("#forgetpassworddiv").empty();
                        $("#successmodalbody").empty();
                    $("#successmodalbody").append("<div class='alert alert-danger'>Mail sending fail please try again </div>");
                       $("#forgetpassworddiv").append( $("#successmodaldiv").html() );
                    }
                    else{
                       // $("#successmodal").modal('show');
                        $("#submitemailorphonediv").hide();
                        $("#forgetpassworddiv").empty();
                        $("#successmodalbody").empty();
                    $("#successmodalbody").append(s);
                       $("#forgetpassworddiv").append( $("#successmodaldiv").html() );
                    }
                    //alert(s);
                    //console.log(s);
                },
                error:function(e){
                    alert(e);
                    console.log(e);
                }
              });
           }
        }

        if( $("#phoneno").length > 0 && $("#emailid").length == 0 ){
           if( $("#phoneno").val() == '' ){
              $("#emailphone_error").show();
              return false;
           }
           else{
              var phoneno = $("#phoneno").val();
              $.ajax({
                url:'<?php echo base_url('site/sendphonecredential') ?>',
                method:'post',
                cache:false,
                data:{phoneno:phoneno, proceedfor:proceedfor},
                success:function(s){

                    if(s== 'sent'){

                        $("#submitemailorphonediv").hide();
                        $("#forgetpassworddiv").empty();
                        $("#successmodalbody").empty();
                    $("#successmodalbody").append("<div class='alert alert-success'>Your Login Detail has been sent successfully</div>");
                       $("#forgetpassworddiv").append( $("#successmodaldiv").html() );
                       //alert('Login Details Sent Successfully');
                       //$(location).attr('href', "<?php echo base_url('site/login'); ?>");;
                    }
                    else if(s == 'Phone NO not valid'){
                         $("#submitemailorphonediv").hide();
                        $("#forgetpassworddiv").empty();
                        $("#successmodalbody").empty();
                    $("#successmodalbody").append("<div class='alert alert-danger'>Your Phone no is not valid.. Please try again </div>");
                       $("#forgetpassworddiv").append( $("#successmodaldiv").html() );
                    }
                    else if(s == 'Record Not Found'){
                         $("#submitemailorphonediv").hide();
                        $("#forgetpassworddiv").empty();
                        $("#successmodalbody").empty();
                    $("#successmodalbody").append("<div class='alert alert-danger'>No Record Found with this phone no </div>");
                       $("#forgetpassworddiv").append( $("#successmodaldiv").html() );
                    }
                    else if(s == 'not sent'){
                         $("#submitemailorphonediv").hide();
                        $("#forgetpassworddiv").empty();
                        $("#successmodalbody").empty();
                    $("#successmodalbody").append("<div class='alert alert-danger'>Mail sending fail please try again </div>");
                       $("#forgetpassworddiv").append( $("#successmodaldiv").html() );
                    }
                    else if(s == 'select teacher student or staff'){
                         $("#submitemailorphonediv").hide();
                        $("#forgetpassworddiv").empty();
                        $("#successmodalbody").empty();
                    $("#successmodalbody").append("<div class='alert alert-danger'>Please select a staff, student or parent</div>");
                       $("#forgetpassworddiv").append( $("#successmodaldiv").html() );
                    }
                    else{
                       // $("#successmodal").modal('show');
                        $("#submitemailorphonediv").hide();
                        $("#forgetpassworddiv").empty();
                        $("#successmodalbody").empty();
                    $("#successmodalbody").append(s);
                       $("#forgetpassworddiv").append( $("#successmodaldiv").html() );
                    }
                    //alert(s);
                    //console.log(s);

                    /*
                    //$("#submitmodal").modal('hide');
                    if(s== 'sent'){
                       alert('Login Details Sent Successfully');
                       $(location).attr('href', "<?php echo base_url('site/login'); ?>");;
                    }else{
                       // $("#successmodal").modal('show');
                       $("#successmodalbody").empty();
                    $("#successmodalbody").append(s);

                    }

                    //alert(s);
                    console.log(s);
                    */
                },
                error:function(e){
                    alert(e);
                    console.log(e);
                }
              });
           }
        }
    }

    function confirmpasswordon(){
        $("#sendpasswordon_error").hide();
        $("#emailphone_error").hide();
        $("#emailformaterror").hide();
        if( $('input[name=sendpasswordon]:checked').length <= 0 ){
           $("#sendpasswordon_error").show();
           return false;
        }
        else if( $('input[name=sendpasswordon]:checked').length > 0 ){
           var sendpasswordontype = $('input[name=sendpasswordon]:checked').val();
           if(sendpasswordontype == 'email'){
             // $('#myModal').modal('hide');
             $("#forgetpassworddiv").empty();
             $("#submitemailorphonedivbody").empty();
             $("#submitemailorphonedivbody").prepend("<input type='email' id='emailid' name='emailid' class='form-control' placeholder='Enter Your Email'>");
             $("#forgetpassworddiv").append( $("#submitemailorphonediv").html() );
             //$("#submitmodal").modal('show');

           }

           if(sendpasswordontype == 'phone'){
              //$('#myModal').modal('hide');
             $("#forgetpassworddiv").empty();
             $("#submitemailorphonedivbody").empty();
             $("#submitemailorphonedivbody").prepend("<input type='text' id='phoneno' name='phoneno' class='form-control' placeholder='Enter Your Phone'>");
             $("#forgetpassworddiv").append( $("#submitemailorphonediv").html() );

           }

        }
    }

    function validation(){
        $("#proceedfor_error").hide();
        if( $('input[name=proceedfor]:checked').length <= 0 )
       {
        $("#proceedfor_error").show();
         return false;
       }
    }

    function getproceedfor(){
       if( validation() == false){
          return false;
       }
       else{
        proceedfor = $('input[name=proceedfor]:checked').val();
        $("#forgetpassworddiv").empty();
        //$("#sendpasswordondiv").show();
        $("#forgetpassworddiv").append( $("#sendpasswordondiv").html() );
        //$('#myModal').modal('show');
       }
    }

    function cancelcredential(){
      $(location).attr('href', "<?php echo base_url('site/login'); ?>");
    }

    $(document).ready(function () {
        var base_url = '<?php echo base_url(); ?>';
        $.backstretch([
            base_url + "backend/usertemplate/assets/img/backgrounds/banner-school-min.png"
        ], {duration: 3000, fade: 750});
        $('.login-form input[type="text"], .login-form input[type="password"], .login-form textarea').on('focus', function () {
            $(this).removeClass('input-error');
        });
        $('.login-form').on('submit', function (e) {
            $(this).find('input[type="text"], input[type="password"], textarea').each(function () {
                if ($(this).val() == "") {
                    e.preventDefault();
                    $(this).addClass('input-error');
                } else {
                    $(this).removeClass('input-error');
                }
            });
        });
    });

    $(document).ready(function(){
        $("#forgetpassworddiv").empty();
        $("#forgetpassworddiv").append( $("#forgetpassworddivbody").html() );
    });
</script>

