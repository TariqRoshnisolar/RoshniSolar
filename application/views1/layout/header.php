<!DOCTYPE html>

<html <?php echo $this->customlib->getRTL(); ?>>

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title><?php echo $this->customlib->getAppName(); ?></title>

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <meta http-equiv="Cache-control" content="no-cache">

        <meta name="theme-color" content="#424242" />

        <link href="<?php echo base_url(); ?>backend/images/s-favican.png" rel="shortcut icon" type="image/x-icon">

        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/style-main.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/jquery.mCustomScrollbar.min.css">

        <?php

$this->load->view('layout/theme');

?>

        <?php

if ($this->customlib->getRTL() != "") {

    ?>

            <!-- Bootstrap 3.3.5 RTL -->

            <link rel="stylesheet" href="<?php echo base_url(); ?>backend/rtl/bootstrap-rtl/css/bootstrap-rtl.min.css"/>

            <!-- Theme RTL style -->

            <link rel="stylesheet" href="<?php echo base_url(); ?>backend/rtl/dist/css/AdminLTE-rtl.min.css" />

            <link rel="stylesheet" href="<?php echo base_url(); ?>backend/rtl/dist/css/ss-rtlmain.css">

            <link rel="stylesheet" href="<?php echo base_url(); ?>backend/rtl/dist/css/skins/_all-skins-rtl.min.css" />

            <?php

}

?>

        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/font-awesome.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/ionicons.min.css">



        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/iCheck/flat/blue.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/morris/morris.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/datepicker/datepicker3.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/colorpicker/bootstrap-colorpicker.css">



        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/daterangepicker/daterangepicker-bs3.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">



        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/custom_style.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/datepicker/css/bootstrap-datetimepicker.css">

        <!--file dropify-->

        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/dropify.min.css">

        <!--file nprogress-->

        <link href="<?php echo base_url(); ?>backend/dist/css/nprogress.css" rel="stylesheet">



        <!--print table-->

        <link href="<?php echo base_url(); ?>backend/dist/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>backend/dist/datatables/css/buttons.dataTables.min.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>backend/dist/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet">

        <!--print table mobile support-->

        <link href="<?php echo base_url(); ?>backend/dist/datatables/css/responsive.dataTables.min.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>backend/dist/datatables/css/rowReorder.dataTables.min.css" rel="stylesheet">

        <script src="<?php echo base_url(); ?>backend/custom/jquery.min.js"></script>

        <script src="<?php echo base_url(); ?>backend/dist/js/moment.min.js"></script>

        <script src="<?php echo base_url(); ?>backend/datepicker/js/bootstrap-datetimepicker.js"></script>

        <script src="<?php echo base_url(); ?>backend/plugins/colorpicker/bootstrap-colorpicker.js"></script>

        <script src="<?php echo base_url(); ?>backend/datepicker/date.js"></script>

        <script src="<?php echo base_url(); ?>backend/dist/js/jquery-ui.min.js"></script>

        <script src="<?php echo base_url(); ?>backend/js/school-custom.js"></script>

         <script src="<?php echo base_url(); ?>backend/js/sstoast.js"></script>

         <script src="<?php echo base_url(); ?>backend/js/custom-script.js"></script>



        <!-- fullCalendar -->

        <link rel="stylesheet" href="<?php echo base_url() ?>backend/fullcalendar/dist/fullcalendar.min.css">

        <link rel="stylesheet" href="<?php echo base_url() ?>backend/fullcalendar/dist/fullcalendar.print.min.css" media="print">







        <script type="text/javascript">

            var baseurl = "<?php echo base_url(); ?>";

            // var chk_validate="<?php echo $this->config->item('SSLK')?>";



        </script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and me/

        <!--[if lt IE 9]>

            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

            <![endif]-->

    </head>



    <style>

.skin-blue .main-header .navbar{

    background-color: #fff !important;

}

.skin-blue .main-header .logo{

    background-color: #fff !important;

}

.main-header{

    min-height: 85px !important;

    background-color: #fff;

}



.wrapper{

    background-color: #fff !important;

}

.fixed .main-header, .fixed .main-sidebar, .fixed .left-side{

        position: fixed;

}

.fixed .main-header{

    z-index: 99;

}

.main-sidebar, .left-side{

    padding-top: 13px;

}

.skin-blue .main-header .navbar .nav>li>a{

    color: #000;

}

.navbar-nav>.user-menu .topuser-image{

    width: 57px;

    height: 57px;

}

.skin-blue .main-header .navbar .sidebar-toggle{

    color: #ffffff;

    background: black;

    border-radius: 0px 0px 10px 0px;

}

.sidebar-session{

    padding:0 !important;    

    margin-left: 27px;

}

</style>



<!---- Ajax Loader ---->



<style>

#processloading

{

    display : none;

}

#processloading.show

{

    display : block;

    position : fixed;

    z-index: 100;

    background-image : url('<?php echo base_url(); ?>/uploads/other_images/ajax-loader.gif');

    opacity: 1;

    background-repeat : no-repeat;

    background-position : center;

    left : 0;

    bottom : 0;

    right : 0;

    top : 0;

}

#loadinggif.show

{

    left : 50%;

    top : 50%;

    position : absolute;

    z-index : 101;

    width : 32px;

    height : 32px;

    margin-left : -16px;

    margin-top : -16px;

}

</style>

<!--- Ajax Loader End Css --->



<style>

@import url(https://fonts.googleapis.com/css?family=EB+Garamond|Cardo:400italic);



em {

  font-family: 'EB Garamond', serif;

      font-size: 20px;

  text-transform: uppercase;

  letter-spacing: 0.1em;

  display: block;

  font-style:normal;

  text-shadow: 0.07em 0.07em 0 rgba(0, 0, 0, 0.1);

  

  &::before, &::after {

  content: "";

  display: inline-block;

  -webkit-transform: rotate(90deg);

  -moz-transform: rotate(90deg);

  -o-transform: rotate(90deg);

  -ms-transform: rotate(90deg);

  transform: rotate(90deg);

    opacity: 0.2;

  margin: 0 0.6em;

  font-size: 0.5em;

}



}

.content-wrapper{

    margin-top: 40px;

}

.line-ic {

    font-family: FontAwesome;

    text-decoration: none;

    color: #000;

    font-size: 28px;

    margin-top: 11px;

    padding-bottom: 10px;

}

.details-box {

    width: 240px;

    top: 49px;

    position: absolute;

    background-color: #fff;

    z-index: 9999;

    display: none; 

    border: 0px solid rgba(0,0,0,.15);

    border-radius: 4px;

    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);

    box-shadow: 0 6px 12px rgba(0,0,0,.175);

    padding: 5px;

    border-top-left-radius: 0;

    border-top-right-radius: 0;

    font-size: 12px;

    line-height: 24px;

    transition: top .3s;

    -moz-transition: top .3s;

    -webkit-transition: top .3s;

    -o-transition: top .3s;

        overflow-y: auto;

        overflow-x: hidden;

    height: 300px;

}

.details-box a {

    width: 96%;

    float: left;

    min-height: 20px;

    margin: 0px 0px;

        padding: 4%;

    border-bottom: 1px solid #efefef;

    font-size: 14px;

    text-decoration: none;

    color: #382c1f;

}

.details-box:before{

    background: url(<?php echo base_url(); ?>backend/images/top-arrow.png);

    content: "";

    position: absolute;

        top: -6px;

    width: 25px;

    height: 6px;

}

.details-box::-webkit-scrollbar {

    background-color: #F5F5F5;

    float: left;

    height: 300px;

    margin-bottom: 25px;

    margin-left: 22px;

    margin-top: 40px;

        width: 6px;

    overflow-y: scroll;

}

.details-box::-webkit-scrollbar-track {

    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);

    background-color: #F5F5F5;

}

.details-box::-webkit-scrollbar-thumb {

    background-color: #afafaf;;

}

.mainmenumanager:hover .details-box{display: block; }

</style>

    <body id="mainBody" class="skin-blue fixed sidebar-mini sidebar-collapse">





 <?php

 /*

if ($this->config->item('SSLK') == "") {

    ?>

 <div class="topaleart">

    <div class="slidealert">

    <div class="alert alert-dismissible topaleart-inside">

  <!-- <button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button> -->

   <p class="palert"><strong>Alert!</strong> You are using unregistered version of Smart School. Please <a  href="#" class="purchasemodal">click here</a> to register your purchase code for Smart School.</p>

</div></div>

</div>

                    <?php

}

*/

?>



<?php

/* Get Logo from Setting */

$CI = get_instance();

$settinglist = $CI->setting_model->get();



//echo '<pre>';

//print_r($settinglist);

//echo '</pre>';



/* Get Logo from Setting */

?>

       <div class="wrapper">





            

            <header class="main-header" id="alert" style="padding: 0px;display:block">



                <!---

                <a href="<?php echo base_url(); ?>admin/admin/dashboard" class="logo">

                    <span class="logo-mini">S S</span>

                    <span class="logo-lg"><img src="<?php echo base_url(); ?>backend/images/s_logo.png" alt="<?php echo $this->customlib->getAppName() ?>" /></span>

                </a>

            -->



<nav class="navbar navbar-static-top" role="navigation">

                

                

                <div class="mainmenumanager">

                    <a href="#" class="sidebar-toggle" role="button">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </a>



                    <div class="details-box">

            <?php

            /*

                if ($this->module_lib->hasActive('human_resource')) {

                    if (($this->rbac->hasPrivilege('staff', 'can_view') ||

                             $this->rbac->hasPrivilege('staff_attendance', 'can_view') ||

                              $this->rbac->hasPrivilege('staff_attendance_report', 'can_view') ||

                               $this->rbac->hasPrivilege('staff_payroll', 'can_view') ||

                                $this->rbac->hasPrivilege('payroll_report', 'can_view'))) {

                                        ?>

                    

                <a href="<?php echo base_url('manager/hrmanager'); ?>">

                HR Manager

                </a>

            

                                        <?php

                     }

                }

                */

            ?>



            <?php

                if ($this->module_lib->hasActive('front_cms')) {

                     if (($this->rbac->hasPrivilege('event', 'can_view') ||

                             $this->rbac->hasPrivilege('gallery', 'can_view') ||

                              $this->rbac->hasPrivilege('notice', 'can_view') ||

                               $this->rbac->hasPrivilege('media_manager', 'can_view') ||

                                $this->rbac->hasPrivilege('pages', 'can_view') ||

                                 $this->rbac->hasPrivilege('menus', 'can_view') || 

                                 $this->rbac->hasPrivilege('banner_images', 'can_view'))) {

                                        ?>

                    

                <a href="<?php echo base_url('manager/frontcmsmanager'); ?>">

                Front CMS Manager

                </a>

           

                                        <?php

                     }

                }

            ?>



            <?php

                if ($this->module_lib->hasActive('system_settings')) {

                     if (($this->rbac->hasPrivilege('general_setting', 'can_edit') ||

                             $this->rbac->hasPrivilege('session_setting', 'can_view') ||

                              $this->rbac->hasPrivilege('notification_setting', 'can_edit') ||

                               $this->rbac->hasPrivilege('sms_setting', 'can_edit') ||

                                $this->rbac->hasPrivilege('email_setting', 'can_edit') ||

                                 $this->rbac->hasPrivilege('payment_methods', 'can_edit') ||

                                  $this->rbac->hasPrivilege('languages', 'can_view') ||

                                   $this->rbac->hasPrivilege('languages', 'can_add') ||

                                    $this->rbac->hasPrivilege('backup_restore', 'can_view') ||

                                     $this->rbac->hasPrivilege('front_cms_setting', 'can_edit'))) {

                        

                                        ?>

                   

                <a href="<?php echo base_url('manager/systemsettingmanager'); ?>">

                System Setting Manager

                </a>

            

                                        <?php

                     }

                }

            ?>

                </div>

                </div>



                

                

                <!---

                <div>

                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </a>

                </div>

                --->

                

                    <div class="col-md-5 col-sm-4 col-xs-5">

                        <span href="#" class="sidebar-session">

                            <a href="<?php echo base_url(); ?>admin/admin/dashboard" >

                            <img style="max-width: 300px;z-index: 999;" src="<?php echo base_url() ?>uploads/other_images/front_logo-5cc2e1cb714c32.70259329.png" alt="<?php echo $this->customlib->getAppName() ?>" />

                        </a>

                        </span>



<!--

                        <span href="#" class="sidebar-session">

                            <?php /* echo $this->setting_model->getCurrentSchoolName(); */ ?>

                        </span>

-->

                    </div>



<!--

<div class="col-md-3 col-sm-3 col-xs-3" style="padding-top: 26px;">

  <span style="clear:both;text-align:center;" class="heading heading-correct-pronounciation">

    <em><?php echo $settinglist[0]['name']; ?></em>

  </span>

</div>

-->



                    <div class="col-md-7 col-sm-8 col-xs-7">

                        <div class="pull-right">

                          

                            <img style="max-height:85px;" src="<?php echo base_url(); ?>backend/usertemplate/assets/img/backgrounds/trigentlogo.png">

                        

                            <?php /* if ($this->rbac->hasPrivilege('student', 'can_view')) {?>

                                <form class="navbar-form navbar-left search-form" role="search"  action="<?php echo site_url('admin/admin/search'); ?>" method="POST">

                                    <?php echo $this->customlib->getCSRF(); ?>

                                    <div class="input-group" style="padding-top:3px;">

                                        <input type="text" name="search_text" class="form-control search-form search-form3" placeholder="<?php echo $this->lang->line('search_by_student_name'); ?>">

                                        <span class="input-group-btn">

                                            <button type="submit" name="search" id="search-btn" style="padding: 3px 12px !important;border-radius: 0px 30px 30px 0px; background: #fff;" class="btn btn-flat"><i class="fa fa-search"></i></button>

                                        </span>

                                    </div>

                                </form>

                            <?php } */ ?>

                            <div class="navbar-custom-menu">

                                <ul class="nav navbar-nav headertopmenu">

                                    <?php

                   /*                 

if ($this->module_lib->hasActive('calendar_to_do_list')) {

    if ($this->rbac->hasPrivilege('calendar_to_do_list', 'can_view')) {

        ?>

                                            <li class="cal15"><a href="<?php echo base_url() ?>admin/calendar/events" title="<?php echo $this->lang->line('calendar') ?>"><i class="fa fa fa-calendar"></i></a></li>

                                            <?php

}

}

*/

?>

                                    <?php

                                    /*

if ($this->module_lib->hasActive('calendar_to_do_list')) {

    if ($this->rbac->hasPrivilege('calendar_to_do_list', 'can_view')) {

        ?>

                                            <li class="dropdown">

                                                <a href="#" title="<?php echo $this->lang->line('task') ?>" class="dropdown-toggle todoicon" data-toggle="dropdown">

                                                    <i class="fa fa-check-square-o"></i>

                                                    <?php

$userdata = $this->customlib->getUserData();

        $count    = $this->customlib->countincompleteTask($userdata["id"]);

        if ($count > 0) {

            ?>



                                                        <span class="todo-indicator"><?php echo $count ?></span>

                                                    <?php }?>

                                                </a>

                                                <ul class="dropdown-menu menuboxshadow">



                                                    <li class="todoview plr10 ssnoti"><?php echo $this->lang->line('today_you_have'); ?> <?php echo $count; ?> <?php echo $this->lang->line('pending_task'); ?><a href="<?php echo base_url() ?>admin/calendar/events" class="pull-right pt0"><?php echo $this->lang->line('view'); ?> <?php echo $this->lang->line('all'); ?></a></li>

                                                    <li>

                                                        <ul class="todolist">

                                                            <?php

$tasklist = $this->customlib->getincompleteTask($userdata["id"]);

        foreach ($tasklist as $key => $value) {

            ?>

                                                                <li><div class="checkbox">

                                                                        <label><input type="checkbox" id="newcheck<?php echo $value["id"] ?>" onclick="markc('<?php echo $value["id"] ?>')" name="eventcheck"  value="<?php echo $value["id"]; ?>"><?php echo $value["event_title"] ?></label>

                                                                    </div></li>

                                                            <?php }?>



                                                        </ul>

                                                    </li>

                                                </ul>

                                            </li>

                                            <?php

}

}



*/

?>





                                    <?php

$file   = "";

$result = $this->customlib->getUserData();



$image = $result["image"];

$role  = $result["user_type"];

$id    = $result["id"];

if (!empty($image)) {



    $file = "uploads/staff_images/" . $image;

} else {



    $file = "uploads/student_images/no_image.png";

}

?>

                                    <li class="dropdown user-menu">

                                        <a class="dropdown-toggle" style="padding: 15px 13px;" data-toggle="dropdown" href="#" aria-expanded="false">

                                            <img src="<?php echo base_url() . $file; ?>" class="topuser-image" alt="User Image">

                                        </a>

                                        <ul class="dropdown-menu dropdown-user menuboxshadow">

                                            <li>

                                                <div class="sstopuser">

                                                    <div class="ssuserleft">

                                                        <a href="<?php echo base_url() . "admin/staff/profile/" . $id ?>"><img src="<?php echo base_url() . $file; ?>" alt="User Image"></a>

                                                    </div>



                                                    <div class="sstopuser-test">

                                                        <h4 style="text-transform: capitalize;"><?php echo $this->customlib->getAdminSessionUserName(); ?></h4>

                                                        <h5><?php echo $role; ?></h5>

                                                       <!-- <div class="sspass pt15"><a class="pull-right" href="<?php //echo base_url()."admin/staff/profile/".$id         ?>"><i class="fa fa-user"></i> My Profile</a></div>   -->

                                                    </div>



                                                    <div class="divider"></div>

                                                    <div class="sspass">

                                                        <a href="<?php echo base_url() . "admin/staff/profile/" . $id ?>" data-toggle="tooltip" title="" data-original-title="My Profile"><i class="fa fa-user"></i>Profile</a>

                                                        <a class="pl25" href="<?php echo base_url(); ?>admin/admin/changepass" data-toggle="tooltip" title="" data-original-title="Change Password"><i class="fa fa-key"></i><?php echo $this->lang->line('password'); ?></a> <a class="pull-right" href="<?php echo base_url(); ?>site/logout"><i class="fa fa-sign-out fa-fw"></i><?php echo $this->lang->line('logout'); ?></a>

                                                    </div>

                                                </div><!--./sstopuser--></li>

                                        </ul>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </nav>



<!--- Menu --->



<?php $this->load->view('layout/menu');?>



<!-- End Menu --->



</header>



          <!---  <?php //$this->load->view('layout/sidebar');?> -->





<!--- Ajax Loader --->

<script>

$(document).ready(function(){

      if( $("#processloading").length == 0 ){

     $("#mainBody").append(`<div id="processloading"></div>`);

   }

});

</script>

<!-- End Loader -->



<script>

$(function($) {

var base_url = "<?php echo base_url(); ?>";

    // this script needs to be loaded on every page where an ajax POST may happen

    $.ajaxSetup({

        cache:false,

        beforeSend:function(){

          $("#processloading").removeClass();

          $("#processloading").addClass('show');

        },

        complete:function(){

          $("#processloading").removeClass();

          $("#processloading").addClass('hide');          

        },

        error:function(e){

           console.log(e);

        }

    });

 

 

  // now write your ajax script 

 

});

</script>