<!DOCTYPE html>
<html <?php echo $this->customlib->getRTL(); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $this->customlib->getAppName(); ?></title>        
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="theme-color" content="#424242" />
        <link href="<?php echo base_url(); ?>backend/images/s-favican.png" rel="shortcut icon" type="image/x-icon">
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/style-main.css">

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
        } else {
            
        }
        ?>
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/font-awesome.min.css">      
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/ionicons.min.css">       

        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/iCheck/flat/blue.css">      
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/morris/morris.css">       
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css">        
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/datepicker/datepicker3.css">       
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/daterangepicker/daterangepicker-bs3.css">      
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/sweet-alert/sweetalert2.css">
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
        <script src="<?php echo base_url(); ?>backend/datepicker/date.js"></script>       
        <script src="<?php echo base_url(); ?>backend/dist/js/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>backend/js/sstoast.js"></script>

        <!-- fullCalendar -->
        <link rel="stylesheet" href="<?php echo base_url() ?>backend/fullcalendar/dist/fullcalendar.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>backend/fullcalendar/dist/fullcalendar.print.min.css" media="print">

        <script type="text/javascript">
            var baseurl = "<?php echo base_url(); ?>";
        </script>

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
.sidebar-session{
    padding:0 !important;    
    margin-left: 27px;
}
</style>
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
  content: "§";
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

</style>

<style>
@import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);
#cssmenu,
#cssmenu ul,
#cssmenu ul li,
#cssmenu ul li a,
#cssmenu #menu-button {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  line-height: 1;
  display: block;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#cssmenu:after,
#cssmenu > ul:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}
#cssmenu #menu-button {
  display: none;
}
#cssmenu {
  font-family: Montserrat, sans-serif;
  background: #333333;
}
#cssmenu > ul > li {
  float: left;
}
#cssmenu.align-center > ul {
  font-size: 0;
  text-align: center;
}
#cssmenu.align-center > ul > li {
  display: inline-block;
  float: none;
}
#cssmenu.align-center ul ul {
  text-align: left;
}
#cssmenu.align-right > ul > li {
  float: right;
}
#cssmenu > ul > li > a {
  padding: 17px;
  font-size: 12px;
  letter-spacing: 1px;
  text-decoration: none;
  color: #dddddd;
  font-weight: 700;
  text-transform: uppercase;
}
#cssmenu > ul > li:hover > a {
  color: #ffffff;
}
#cssmenu > ul > li.has-sub > a {
  padding-right: 30px;
}
#cssmenu > ul > li.has-sub > a:after {
  position: absolute;
  top: 22px;
  right: 11px;
  width: 8px;
  height: 2px;
  display: block;
  background: #dddddd;
  content: '';
  opacity:1;
  left: auto;
  transform: none;
}
#cssmenu > ul > li.has-sub > a:before {
  position: absolute;
  top: 19px;
  right: 14px;
  display: block;
  width: 2px;
  height: 8px;
  background: #dddddd;
  content: '';
  -webkit-transition: all .25s ease;
  -moz-transition: all .25s ease;
  -ms-transition: all .25s ease;
  -o-transition: all .25s ease;
  transition: all .25s ease;
}
#cssmenu > ul > li.has-sub:hover > a:before {
  top: 23px;
  height: 0;
}
#cssmenu ul ul {
  position: absolute;
  left: -9999px;
}
#cssmenu.align-right ul ul {
  text-align: right;
}
#cssmenu ul ul li {
  height: 0;
  -webkit-transition: all .25s ease;
  -moz-transition: all .25s ease;
  -ms-transition: all .25s ease;
  -o-transition: all .25s ease;
  transition: all .25s ease;
}
#cssmenu li:hover > ul {
  left: auto;
}
#cssmenu.align-right li:hover > ul {
  left: auto;
  right: 0;
}
#cssmenu li:hover > ul > li {
  height: 35px;
}
#cssmenu ul ul ul {
  margin-left: 100%;
  top: 0;
}
#cssmenu.align-right ul ul ul {
  margin-left: 0;
  margin-right: 100%;
}
#cssmenu ul ul li a {
  border-bottom: 1px solid rgba(150, 150, 150, 0.15);
  padding: 11px 15px;
  width: 170px;
  font-size: 12px;
  text-decoration: none;
  color: #dddddd;
  font-weight: 400;
  background: #333333;
}
#cssmenu ul ul li:last-child > a,
#cssmenu ul ul li.last-item > a {
  border-bottom: 0;
}
#cssmenu ul ul li:hover > a,
#cssmenu ul ul li a:hover {
  color: #ffffff;
}
#cssmenu ul ul li.has-sub > a:after {
  position: absolute;
  top: 16px;
  right: 11px;
  width: 8px;
  height: 2px;
  display: block;
  background: #dddddd;
  content: '';
  opacity:1;
  left: auto;
  transform: none;
}
#cssmenu.align-right ul ul li.has-sub > a:after {
  right: auto;
  left: 11px;
  opacity:1;
  left: auto;
  transform: none;
}
#cssmenu ul ul li.has-sub > a:before {
  position: absolute;
  top: 13px;
  right: 14px;
  display: block;
  width: 2px;
  height: 8px;
  background: #dddddd;
  content: '';
  -webkit-transition: all .25s ease;
  -moz-transition: all .25s ease;
  -ms-transition: all .25s ease;
  -o-transition: all .25s ease;
  transition: all .25s ease;
}
#cssmenu.align-right ul ul li.has-sub > a:before {
  right: auto;
  left: 14px;
}
#cssmenu ul ul > li.has-sub:hover > a:before {
  top: 17px;
  height: 0;
}
@media all and (max-width: 768px), only screen and (-webkit-min-device-pixel-ratio: 2) and (max-width: 1024px), only screen and (min--moz-device-pixel-ratio: 2) and (max-width: 1024px), only screen and (-o-min-device-pixel-ratio: 2/1) and (max-width: 1024px), only screen and (min-device-pixel-ratio: 2) and (max-width: 1024px), only screen and (min-resolution: 192dpi) and (max-width: 1024px), only screen and (min-resolution: 2dppx) and (max-width: 1024px) {
  #cssmenu {
    width: 100%;
  }
  #cssmenu ul {
    width: 100%;
    display: none;
  }
  #cssmenu.align-center > ul {
    text-align: left;
  }
  #cssmenu ul li {
    width: 100%;
    border-top: 1px solid rgba(120, 120, 120, 0.2);
  }
  #cssmenu ul ul li,
  #cssmenu li:hover > ul > li {
    height: auto;
  }
  #cssmenu ul li a,
  #cssmenu ul ul li a {
    width: 100%;
    border-bottom: 0;
  }
  #cssmenu > ul > li {
    float: none;
  }
  #cssmenu ul ul li a {
    padding-left: 25px;
  }
  #cssmenu ul ul ul li a {
    padding-left: 35px;
  }
  #cssmenu ul ul li a {
    color: #dddddd;
    background: none;
  }
  #cssmenu ul ul li:hover > a,
  #cssmenu ul ul li.active > a {
    color: #ffffff;
  }
  #cssmenu ul ul,
  #cssmenu ul ul ul,
  #cssmenu.align-right ul ul {
    position: relative;
    left: 0;
    width: 100%;
    margin: 0;
    text-align: left;
  }
  #cssmenu > ul > li.has-sub > a:after,
  #cssmenu > ul > li.has-sub > a:before,
  #cssmenu ul ul > li.has-sub > a:after,
  #cssmenu ul ul > li.has-sub > a:before {
    display: none;
    opacity:1;
  left: auto;
  transform: none;
  }
  #cssmenu #menu-button {
    display: block;
    padding: 17px;
    color: #dddddd;
    cursor: pointer;
    font-size: 12px;
    text-transform: uppercase;
    font-weight: 700;
  }
  #cssmenu #menu-button:after {
    position: absolute;
    top: 22px;
    right: 17px;
    display: block;
    height: 4px;
    width: 20px;
    border-top: 2px solid #dddddd;
    border-bottom: 2px solid #dddddd;
    content: '';
    opacity:1;
  left: auto;
  transform: none;
  -webkit-box-sizing: initial; 
    -moz-box-sizing: initial;
     box-sizing: initial; 
  }
  #cssmenu #menu-button:before {
    position: absolute;
    top: 16px;
    right: 17px;
    display: block;
    height: 2px;
    width: 20px;
    background: #dddddd;
    content: '';
  }
  #cssmenu #menu-button.menu-opened:after {
    top: 23px;
    border: 0;
    height: 2px;
    width: 15px;
    background: #ffffff;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
    opacity:1;
  left: auto;
  }
  #cssmenu #menu-button.menu-opened:before {
    top: 23px;
    background: #ffffff;
    width: 15px;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
  }
  #cssmenu .submenu-button {
    position: absolute;
    z-index: 99;
    right: 0;
    top: 0;
    display: block;
    border-left: 1px solid rgba(120, 120, 120, 0.2);
    height: 46px;
    width: 46px;
    cursor: pointer;
  }
  #cssmenu .submenu-button.submenu-opened {
    background: #262626;
  }
  #cssmenu ul ul .submenu-button {
    height: 34px;
    width: 34px;
  }
  #cssmenu .submenu-button:after {
    position: absolute;
    top: 22px;
    right: 19px;
    width: 8px;
    height: 2px;
    display: block;
    background: #dddddd;
    content: '';
    opacity:1;
  left: auto;
  transform: none;
  }
  #cssmenu ul ul .submenu-button:after {
    top: 15px;
    right: 13px;
    opacity:1;
  left: auto;
  transform: none;
  }
  #cssmenu .submenu-button.submenu-opened:after {
    background: #ffffff;
    opacity:1;
  left: auto;
  transform: none;
  }
  #cssmenu .submenu-button:before {
    position: absolute;
    top: 19px;
    right: 22px;
    display: block;
    width: 2px;
    height: 8px;
    background: #dddddd;
    content: '';

  }
  #cssmenu ul ul .submenu-button:before {
    top: 12px;
    right: 16px;
  }
  #cssmenu .submenu-button.submenu-opened:before {
    display: none;
  }
}

</style>

<script>
(function($) {

  $.fn.menumaker = function(options) {
      
      var cssmenu = $(this), settings = $.extend({
        title: "Menu",
        format: "dropdown",
        sticky: false
      }, options);

      return this.each(function() {
        cssmenu.prepend('<div id="menu-button">' + settings.title + '</div>');
        $(this).find("#menu-button").on('click', function(){
          $(this).toggleClass('menu-opened');
          var mainmenu = $(this).next('ul');
          if (mainmenu.hasClass('open')) { 
            mainmenu.hide().removeClass('open');
          }
          else {
            mainmenu.show().addClass('open');
            if (settings.format === "dropdown") {
              mainmenu.find('ul').show();
            }
          }
        });

        cssmenu.find('li ul').parent().addClass('has-sub');

        multiTg = function() {
          cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
          cssmenu.find('.submenu-button').on('click', function() {
            $(this).toggleClass('submenu-opened');
            if ($(this).siblings('ul').hasClass('open')) {
              $(this).siblings('ul').removeClass('open').hide();
            }
            else {
              $(this).siblings('ul').addClass('open').show();
            }
          });
        };

        if (settings.format === 'multitoggle') multiTg();
        else cssmenu.addClass('dropdown');

        if (settings.sticky === true) cssmenu.css('position', 'fixed');

        resizeFix = function() {
          if ($( window ).width() > 768) {
            cssmenu.find('ul').show();
          }

          if ($(window).width() <= 768) {
            cssmenu.find('ul').hide().removeClass('open');
          }
        };
        resizeFix();
        return $(window).on('resize', resizeFix);

      });
  };
})(jQuery);

(function($){
$(document).ready(function(){

$("#cssmenu").menumaker({
   title: "Menu",
   format: "multitoggle"
});

});
})(jQuery);

</script>

<?php
/* Get Logo from Setting */
$CI = get_instance();
$settinglist = $CI->setting_model->get();

//echo '<pre>';
//print_r($settinglist);
//echo '</pre>';

/* Get Logo from Setting */
?>
    <body class="hold-transition skin-blue fixed sidebar-mini sidebar-collapse">
        <div class="wrapper">
            <header class="main-header" id="alert">   
                  <!---     
                <a href="<?php echo base_url(); ?>user/user/dashboard" class="logo">                  
                    <span class="logo-mini">S S</span>                   
                    <span class="logo-lg"><img src="<?php echo base_url(); ?>backend/images/s_logo.png" alt="<?php echo $this->customlib->getAppName() ?>" /></span>
                </a>  
                --->           
                <nav class="navbar navbar-static-top" role="navigation">                  
                    
                    <!--
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                -->


                    <div class="col-md-5 col-sm-4 col-xs-5">  

                    <span href="#" class="sidebar-session">
                        <a href="<?php echo base_url(); ?>parent/parents/dashboard" >
                            <img style="max-width: 350px;z-index: 999;" src="<?php echo base_url() ?>uploads/other_images/rosevally-logo.png" alt="<?php echo $this->customlib->getAppName() ?>" />
                        </a>
                        </span> 
                        <!---
                        <span href="#" class="sidebar-session">
                            <?php echo $this->setting_model->getCurrentSchoolName(); ?>
                        </span>
                        --->
                    </div>

<!---
<div class="col-md-3 col-sm-3 col-xs-3" style="padding-top: 26px;">
  <span style="clear:both;text-align:center;" class="heading heading-correct-pronounciation">
    <em><?php echo $settinglist[0]['name']; ?></em>
  </span>
</div>   
--->
                    <div class="col-md-7 col-sm-8 col-xs-7">
                        <div class="pull-right"> 

                            <img style="max-height:85px;" src="<?php echo base_url(); ?>backend/usertemplate/assets/img/backgrounds/trigentlogo.png">

                            <div class="navbar-custom-menu">
                                <ul class="nav navbar-nav headertopmenu"> 
                                <!---
                                    <li class="cal15"><a href="<?php echo base_url() ?>user/calendar/"><i class="fa fa fa-calendar"></i></a></li>
                                --->
                                <!---
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle todoicon" data-toggle="dropdown">
                                            <i class="fa fa-check-square-o"></i>
                                            <?php
                                            $userdata = $this->customlib->getLoggedInUserData();
                                            $count = $this->customlib->countincompleteTask($userdata["id"]);
                                            if ($count > 0) {
                                                ?>

                                                <span class="todo-indicator"><?php echo $count ?></span>
                                            <?php } ?>
                                        </a>
                                        <ul class="dropdown-menu menuboxshadow">

                                            <li class="todoview plr10 ssnoti"><?php echo "Today you have " . $count . " pending task." ?><a href="<?php echo base_url() ?>user/calendar/" class="pull-right pt0">View all</a></li>
                                            <li>
                                                <ul class="todolist">
                                                    <?php
                                                    $tasklist = $this->customlib->getincompleteTask($userdata["id"]);
                                                    foreach ($tasklist as $key => $value) {
                                                        ?>
                                                        <li><div class="checkbox">
                                                                <label><input type="checkbox" id="newcheck<?php echo $value["id"] ?>" onclick="markc('<?php echo $value["id"] ?>')" name="eventcheck"  value="<?php echo $value["id"]; ?>"><?php echo $value["event_title"] ?></label>
                                                            </div></li>
                                                    <?php } ?>

                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                 ---->
                                    <?php
                                    $student_data = $this->customlib->getLoggedInUserData();
                                    $file = $student_data["image"];

                                    $image = $student_data["image"];
                                    if (!empty($image)) {

                                        $file = $image;
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
                                                        <img src="<?php echo base_url() . $file; ?>" alt="User Image">
                                                    </div>

                                                    <div class="sstopuser-test">
                                                        <h4 style="text-transform: capitalize;"><?php echo $this->customlib->getStudentSessionUserName(); ?></h4>
                                                        <h5><?php echo $this->lang->line("student"); ?></h5>
                                                        <!--p>demo</p-->
                                                    </div>
                                                    <div class="divider"></div>
                                                    <div class="sspass">  
                                                        <a class="" href="<?php echo base_url(); ?>user/user/changepass"><i class="fa fa-key"></i> <?php echo $this->lang->line('change_password'); ?></a> <a class="pull-right" href="<?php echo base_url(); ?>site/logout"><i class="fa fa-sign-out fa-fw"></i> <?php echo $this->lang->line('logout'); ?></a>
                                                    </div>  
                                                </div><!--./sstopuser--></li>

                                        </ul>                             
                                    </li>   
                                </ul>
                            </div>

                            <!--div class="navbar-custom-menu">
                                <ul class="nav navbar-nav"> 

                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"><?php echo $this->customlib->getStudentSessionUserName(); ?>
                                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-user">
                                            <li ><a href="<?php echo base_url(); ?>user/user/changepass"><i class="fa fa-key"></i> <?php echo $this->lang->line('change_password'); ?></a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>site/logout"><i class="fa fa-sign-out fa-fw"></i> <?php echo $this->lang->line('logout'); ?></a>
                                            </li>
                                        </ul>                         
                                    </li>   
                                </ul>
                            </div-->
                        </div>
                    </div>
                </nav>

<div id='cssmenu'>
<ul>
                        <?php
                        if ($this->module_lib->hasActive('student_information')) {
                            ?>

                            <li class="<?php echo set_Topmenu('My Children'); ?>">
                                <a href="#">
                                   <span>
                                        <?php echo $this->lang->line('my_children'); ?></span> 
                                </a>
                                <ul>
                                    <?php
                                    $ch = $this->session->userdata('parent_childs');
                                    foreach ($ch as $key_ch => $value_ch) {
                                        ?>
                                        <li class="<?php echo set_Submenu('parent/parents/getStudent'); ?>" ><a href="<?php echo base_url(); ?>parent/parents/getstudent/<?php echo $value_ch['student_id'] ?>"> <?php echo $value_ch['name'] ?></a></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                            <?php
                        }

                        if ($this->module_lib->hasActive('fees_collection')) {
                            ?>
                            <li class="<?php echo set_Topmenu('Fees'); ?>">
                                <a href="#">
                                   <span><?php echo $this->lang->line('fees'); ?></span>
                                </a>
                                <ul>
                                    <?php
                                    $ch = $this->session->userdata('parent_childs');
                                    foreach ($ch as $key_ch => $value_ch) {
                                        ?>
                                        <li class="<?php echo set_Submenu('parent/parents/getFees'); ?>" ><a href="<?php echo base_url(); ?>parent/parents/getfees/<?php echo $value_ch['student_id'] ?>"> <?php echo $value_ch['name'] ?></a></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                            <?php
                        }

                        if ( $this->module_lib->hasActive('academics') || $this->module_lib->hasActive('homework') || $this->module_lib->hasActive('communicate') || $this->module_lib->hasActive('transport') || $this->module_lib->hasActive('hostel') ) {
                            ?>
<li><a href="javascript:void(0)">
<span>Academics</span> 
</a>
<ul>
  <li class="<?php echo set_Topmenu('Time Table'); ?>">
                                <a href="#">
                                     <span><?php echo $this->lang->line('class_timetable'); ?></span> 
                                </a>
                                <ul>
                                    <?php
                                    $ch = $this->session->userdata('parent_childs');
                                    foreach ($ch as $key_ch => $value_ch) {
                                        ?>
                                        <li class="<?php echo set_Submenu('parent/parents/gettimetable'); ?>"><a href="<?php echo base_url(); ?>parent/parents/gettimetable/<?php echo $value_ch['student_id'] ?>"> <?php echo $value_ch['name'] ?></a></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </li>
   <?php if ($this->module_lib->hasActive('homework')) {
                            ?>
                            <li class="<?php echo set_Topmenu('Homework'); ?>">
                                <a href="#">
                                     <span><?php echo $this->lang->line('homework'); ?></span> 
                                </a>
                                <ul>
                                    <?php
                                    $ch = $this->session->userdata('parent_childs');
                                    foreach ($ch as $key_ch => $value_ch) {
                                        ?>
                                        <li class="<?php echo set_Submenu('parent/homework/student_homework/' . $value_ch["student_id"]); ?>"><a href="<?php echo base_url(); ?>parent/homework/student_homework/<?php echo $value_ch['student_id'] ?>"><?php echo $value_ch['name'] ?></a></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                        <?php
                        }

    if ($this->module_lib->hasActive('communicate')) {
    ?>
                            <li class="<?php echo set_Topmenu('Notification'); ?>">
                                <a href="<?php echo base_url(); ?>parent/notification">
                                     <span><?php echo $this->lang->line('notice_board'); ?></span>
                                    <?php
                                    $ntf = $this->customlib->getParentunreadNotification();

                                    if ($ntf) {
                                        ?>
                                        <small class="label pull-right bg-red">
                                        <?php echo $ntf; ?>
                                        </small>
                                <?php
                            }
                            ?>
                                </a>
                            </li>
<?php
}

if ($this->module_lib->hasActive('academics')) {
    ?>
                            <li class="<?php echo set_Topmenu('Subjects'); ?>">
                                <a href="#">
                                    <span><?php echo $this->lang->line('subjects'); ?></span> 
                                </a>
                                <ul>
                                    <?php
                                    $ch = $this->session->userdata('parent_childs');
                                    foreach ($ch as $key_ch => $value_ch) {
                                        ?>
                                        <li class="<?php echo set_Submenu('parent/parents/getsubject'); ?>"><a href="<?php echo base_url(); ?>parent/parents/getsubject/<?php echo $value_ch['student_id'] ?>"> <?php echo $value_ch['name'] ?></a></li>
                                <?php
                            }
                            ?>
                                </ul>
                            </li>
                            <li class="<?php echo set_Submenu('teacher/index'); ?>"><a href="<?php echo base_url(); ?>parent/teacher"> <?php echo $this->lang->line('teachers'); ?></a></li>
                        <?php
                        }

  if ($this->module_lib->hasActive('transport')) {
                            ?>
                            <li class="<?php echo set_Topmenu('Transport'); ?>"><a href="<?php echo base_url(); ?>parent/route"><?php echo $this->lang->line('transport_routes'); ?></a></li>
<?php
}

if ($this->module_lib->hasActive('hostel')) {
    ?>
                            <li class="<?php echo set_Submenu('hostel/index'); ?>"><a href="<?php echo base_url(); ?>parent/hostel"> <?php echo $this->lang->line('hostel'); ?></a></li>
<?php }
                        ?>
</ul>
</li>
                            <?php
                        }


                        

                        if ($this->module_lib->hasActive('download_center')) {
                            ?>
                            <li class="<?php echo set_Topmenu('Downloads'); ?>">
                                <a href="#">
                                     <span><?php echo $this->lang->line('download_center'); ?></span>
                                </a>
                                <ul>
                                    <li class="<?php echo set_Submenu('content/assignment'); ?>"><a href="<?php echo base_url(); ?>parent/parents/assignment"> <?php echo $this->lang->line('assignments'); ?></a></li>
                                    <li class="<?php echo set_Submenu('content/studymaterial'); ?>"><a href="<?php echo base_url(); ?>parent/parents/studymaterial"> <?php echo $this->lang->line('study_material'); ?></a></li>
                                    <li class="<?php echo set_Submenu('content/syllabus'); ?>"><a href="<?php echo base_url(); ?>parent/parents/syllabus"> <?php echo $this->lang->line('syllabus'); ?></a></li>
                                    <li class="<?php echo set_Submenu('content/other'); ?>"><a href="<?php echo base_url(); ?>parent/parents/other"> <?php echo $this->lang->line('other_downloads'); ?></a></li>
                                </ul>
                            </li>
                        <?php
                        }
                        if ($this->module_lib->hasActive('student_attendance')) {
                            ?>

                            <li class="<?php echo set_Topmenu('Attendance'); ?>">
                                <a href="#">
                                     <span><?php echo $this->lang->line('attendance'); ?></span> 
                                </a>
                                <ul>
                                    <?php
                                    $ch = $this->session->userdata('parent_childs');
                                    foreach ($ch as $key_ch => $value_ch) {
                                        ?>
                                        <li class="<?php echo set_Submenu('parent/parents/getattendence'); ?>"><a href="<?php echo base_url(); ?>parent/parents/getattendence/<?php echo $value_ch['student_id'] ?>"> <?php echo $value_ch['name'] ?></a></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                        <?php
                        }
                        if ($this->module_lib->hasActive('examination')) {
                            ?>
                            <li class="<?php echo set_Topmenu('Examination'); ?>">
                                <a href="#">
                                    <span><?php echo $this->lang->line('examinations'); ?></span> 
                                </a>
                                <ul>
                                    <?php
                                    $ch = $this->session->userdata('parent_childs');
                                    foreach ($ch as $key_ch => $value_ch) {
                                        ?>
                                        <li class="<?php echo set_Submenu('parent/parents/getexams'); ?>"><a href="<?php echo base_url(); ?>parent/parents/getexams/<?php echo $value_ch['student_id'] ?>"> <?php echo $value_ch['name'] ?></a></li>
        <?php
    }
    ?>
                                </ul>
                            </li>
<?php
}

                        if ($this->module_lib->hasActive('library')) {
                            ?>
                            <li class="<?php echo set_Topmenu('Library'); ?>"><a href="<?php echo base_url(); ?>parent/book"> <?php echo $this->lang->line('library'); ?></a></li>
                        <?php
                        }
?>
                    </ul>
                  </div>

            </header>
            <!----
            <aside class="main-sidebar" id="alert2">               
                <section class="sidebar">  

                    <ul class="sessionul fixedmenu">    

                        <li class="removehover accurrent">

                            <a data-toggle="modal" data-target="#user_sessionModal"><?php echo $this->lang->line('current_session') . ": " . $this->setting_model->getCurrentSessionName(); ?><i class="fa fa-pencil pull-right"></i></a>
                        </li>   
                    </ul>                
                    <ul class="sidebar-menu verttop38" id="sibe-box">

                        <li class="<?php echo set_Topmenu('Dashboard'); ?>"><a href="<?php echo base_url(); ?>user/user/dashboard"><i class="fa fa-user-plus"></i> <?php echo $this->lang->line('my_profile'); ?></a></li>
                        <?php
                        if ($this->module_lib->hasActive('fees_collection')) {
                            ?>
                            <li class="<?php echo set_Topmenu('user/user/getfees'); ?>"><a href="<?php echo base_url(); ?>user/user/getfees"><i class="fa fa-user-plus"></i> <?php echo $this->lang->line('fees'); ?></a></li>
                            <?php
                        }

                        if ($this->module_lib->hasActive('academics')) {
                            ?>

                            <li class="<?php echo set_Topmenu('Time_table'); ?>"><a href="<?php echo base_url(); ?>user/timetable"><i class="fa fa-calendar-times-o"></i> <?php echo $this->lang->line('class_timetable'); ?></a></li>
                            <?php
                        }

                        if ($this->module_lib->hasActive('homework')) {
                            ?>
                            <li class="<?php echo set_Topmenu('Homework'); ?>"><a href="<?php echo base_url(); ?>user/homework"><i class="fa fa-calendar-times-o"></i> <?php echo $this->lang->line('homework'); ?></a></li>
                            <?php
                        }
                        if ($this->module_lib->hasActive('download_center')) {
                            ?>
                            <li class="treeview <?php echo set_Topmenu('Downloads'); ?>">
                                <a href="#">
                                    <i class="fa fa-download"></i> <span><?php echo $this->lang->line('download_center'); ?></span> <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="<?php echo set_Submenu('content/assignment'); ?>"><a href="<?php echo base_url(); ?>user/content/assignment"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('assignments'); ?></a></li>
                                    <li class="<?php echo set_Submenu('content/studymaterial'); ?>"><a href="<?php echo base_url(); ?>user/content/studymaterial"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('study_material'); ?></a></li>
                                    <li class="<?php echo set_Submenu('content/syllabus'); ?>"><a href="<?php echo base_url(); ?>user/content/syllabus"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('syllabus'); ?></a></li>
                                    <li class="<?php echo set_Submenu('content/other'); ?>"><a href="<?php echo base_url(); ?>user/content/other"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('other_downloads'); ?></a></li>
                                </ul>
                            </li>
                            <?php
                        }
                        if ($this->module_lib->hasActive('student_attendance')) {
                            ?>
                            <li class="treeview <?php echo set_Topmenu('Attendence'); ?>"><a href="<?php echo base_url(); ?>user/attendence"><i class="fa fa-calendar-check-o"></i> <?php echo $this->lang->line('attendance'); ?></a></li>
                            <?php
                        }

                        if ($this->module_lib->hasActive('examination')) {
                            ?>
                            <li class="treeview <?php echo set_Topmenu('Examinations'); ?>">
                                <a href="#">
                                    <i class="fa fa-map-o"></i> <span><?php echo $this->lang->line('examinations'); ?></span> <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="<?php echo set_Submenu('mark/marklist'); ?>"><a href="<?php echo base_url(); ?>user/mark/marklist"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('report_card'); ?></a></li>
                                    <li class="<?php echo set_Submenu('examSchedule/index'); ?>"><a href="<?php echo base_url(); ?>user/examschedule"><i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('exam_schedule'); ?></a></li>
                                </ul>
                            </li>
                            <?php
                        }

                        if ($this->module_lib->hasActive('communicate')) {
                            ?>
                            <li class="treeview <?php echo set_Submenu('user/notification'); ?>">
                                <a href="<?php echo base_url(); ?>user/notification">
                                    <i class="fa fa-envelope"></i> <span><?php echo $this->lang->line('notice_board'); ?></span>
                                    <?php
                                    $ntf = $this->customlib->getStudentunreadNotification();
                                    if ($ntf) {
                                        ?>
                                        <small class="label pull-right bg-red">
                                            <?php echo $ntf; ?>
                                        </small>
                                        <?php
                                    }
                                    ?>
                                </a>
                            </li>
                            <?php
                        }


                        if ($this->module_lib->hasActive('academics')) {
                            ?>
                            <li class="<?php echo set_Topmenu('Subjects'); ?>"><a href="<?php echo base_url(); ?>user/subject"><i class="fa fa-language"></i> <?php echo $this->lang->line('subjects'); ?></a></li>

                            <li class="<?php echo set_Topmenu('Teachers'); ?>"><a href="<?php echo base_url(); ?>user/teacher"><i class="fa fa-user-secret"></i> <?php echo $this->lang->line('teachers'); ?></a></li>
                            <?php
                        }

                        if ($this->module_lib->hasActive('library')) {
                            ?>
                            <li class="treeview <?php echo set_Topmenu('Library'); ?>">
                                <a href="#">
                                    <i class="fa fa-book"></i> <span><?php echo $this->lang->line('library'); ?></span> <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="<?php echo set_Submenu('book/index'); ?>">
                                        <a href="<?php echo base_url(); ?>user/book">
                                            <i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('books'); ?></a>
                                    </li>
                                    <li class="<?php echo set_Submenu('book/issue'); ?>">
                                        <a href="<?php echo base_url(); ?>user/book/issue">
                                            <i class="fa fa-angle-double-right"></i> <?php echo $this->lang->line('book_issued'); ?></a>
                                    </li>
                                </ul>
                            </li>
                            <?php
                        }
                        if ($this->module_lib->hasActive('transport')) {
                            ?>
                            <li class="<?php echo set_Submenu('route/index'); ?>"><a href="<?php echo base_url(); ?>user/route"><i class="fa fa-bus"></i> <?php echo $this->lang->line('transport_routes'); ?></a></li>
                            <?php
                        }
                        if ($this->module_lib->hasActive('hostel')) {
                            ?>
                            <li class="<?php echo set_Submenu('hostelroom/index'); ?>"><a href="<?php echo base_url(); ?>user/hostelroom"><i class="fa fa-building-o"></i> <?php echo $this->lang->line('hostel_rooms'); ?></a></li>

                        <?php }
                        ?>

                    </ul>
                </section>              
            </aside> 
            --->