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
label.radio-inline input{
        margin-top: -1px;
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
                    -->
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
                                <div class="form-bottom">
                                    <?php
                                    if (isset($error_message)) {
                                        echo "<div class='alert alert-danger'>" . $error_message . "</div>";
                                    }
                                    ?>
                                    <form class="" action="<?php echo site_url('site/ufpassword') ?>" method="post">
                                        <?php echo $this->customlib->getCSRF(); ?>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-username"><?php echo $this->lang->line('username'); ?></label>
                                            <input type="text" name="username" placeholder="<?php echo $this->lang->line('email'); ?>" class="form-username form-control" id="form-username">
                                            <span class="text-danger"><?php echo form_error('username'); ?></span>
                                        </div>
                                        <div class="form-group">


                                            <label class="radio-inline">
                                                <input  name="user[]" type="radio" value="student" <?php echo set_radio('user[]', 'student'); ?>>
                                                Student 
                                            </label>
                                            <label class="radio-inline">
                                                <input  name="user[]" type="radio" value="parent" <?php echo set_radio('user[]', 'parent'); ?>>
                                                Parent
                                            </label>
                                            <!--label class="radio-inline">
                                                <input  name="user[]" type="radio" value="teacher" <?php echo set_radio('user[]', 'teacher'); ?>>
                                                Teacher
                                            </label>
                                            <label class="radio-inline">
                                                <input  name="user[]" type="radio" value="accountant" <?php echo set_radio('user[]', 'accountant'); ?>>
                                                Accountant
                                            </label>
                                            <label class="radio-inline">
                                                <input  name="user[]" type="radio" value="librarian" <?php echo set_radio('user[]', 'librarian'); ?>>
                                                Librarian
                                            </label-->
                                            <span class="text-danger"><?php echo form_error('user[]'); ?></span>

                                        </div>
                                        <button type="submit" class="btn"><?php echo $this->lang->line('submit'); ?></button>
                                    </form>
                                    <a href="<?php echo site_url('site/userlogin') ?>" class="forgot"><i class="fa fa-key"></i> <?php echo $this->lang->line('user_login'); ?></a>
                                </div>
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
    </body>
</html>
<script type="text/javascript">
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
</script>