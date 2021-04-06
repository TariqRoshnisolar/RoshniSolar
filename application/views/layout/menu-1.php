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

if($this->session->userdata('active_menu')){

    if( $this->session->userdata('active_menu') == 'frontofficemenu'){
        ?>
        <div id='cssmenu'>
          <ul>
            <li><a href="#">Master Settings</a>
<ul>
<?php
                                        if ($this->rbac->hasPrivilege('setup_font_office', 'can_view')) {
                                            ?>

                                            <li class="<?php echo set_Submenu('admin/visitorspurpose'); ?>"><a href="<?php echo base_url(); ?>admin/visitorspurpose"> <span class="front_office"><?php echo $this->lang->line('setup_front_office'); ?></span></a></li>

                                        <?php } ?>
</ul> 
</li>

<li><a href="#">Master Settings</a>
<ul>
<?php if ($this->rbac->hasPrivilege('admission_enquiry', 'can_view')) { ?>

                                            <li class="<?php echo set_Submenu('admin/enquiry'); ?>"><a href="<?php echo base_url(); ?>admin/enquiry"> <span class="front_office"><?php echo $this->lang->line('admission_enquiry'); ?></span> </a></li>

                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('visitor_book', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/visitors'); ?>"><a href="<?php echo base_url(); ?>admin/visitors"> <span class="front_office"><?php echo $this->lang->line('visitor_book'); ?></span></a></li>

                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('phone_call_log', 'can_view')) {
                                            ?>

                                            <li class="<?php echo set_Submenu('admin/generalcall'); ?>"><a href="<?php echo base_url(); ?>admin/generalcall"> <span class="front_office"><?php echo $this->lang->line('phone_call_log'); ?></span></a></li>

                                            <?php
                                        }
                                        ?>
</ul>
</li>

<li><a href="#">Postal</a>
  <ul>
<?php
                                        if ($this->rbac->hasPrivilege('postal_dispatch', 'can_view')) {
                                            ?>

                                            <li class="<?php echo set_Submenu('admin/dispatch'); ?>"><a href="<?php echo base_url(); ?>admin/dispatch"> <span class="front_office"><?php echo $this->lang->line('postal_dispatch'); ?></span></a></li>

                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('postal_receive', 'can_view')) {
                                            ?>

                                            <li class="<?php echo set_Submenu('admin/receive'); ?>"><a href="<?php echo base_url(); ?>admin/receive"> <span class="front_office"><?php echo $this->lang->line('postal_receive'); ?></span></a></li>

                                            <?php
                                        }
                                        ?>
</ul>
</li>

<li><a href="#">Prospectous</a>
<ul>
<?php
                                        if ($this->rbac->hasPrivilege('prospectus_entry', 'can_view')) {
                                            ?>

                                            <li class="<?php echo set_Submenu('admin/prospectusentry'); ?>"><a href="<?php echo base_url(); ?>admin/prospectusentry"> <span class="front_office"><?php echo 'Prospectus Entry'; ?></span></a></li>

                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('prospectus_entry', 'can_view')) {
                                            ?>

                                            <li class="<?php echo set_Submenu('admin/prospectusentry/report'); ?>"><a href="<?php echo base_url(); ?>admin/prospectusentry/report"> <span class="front_office"><?php echo 'Prospectus Report'; ?></span></a></li>

                                            <?php
                                        }
                                        ?>  
</ul>
</li>
                                        <?php
                                        if ($this->rbac->hasPrivilege('complaint', 'can_view')) {
                                            ?>

                                            <li class="<?php echo set_Submenu('admin/complaint'); ?>"><a href="<?php echo base_url(); ?>admin/complaint"> <span class="front_office"><?php echo $this->lang->line('complain'); ?></span></a></li>
<?php                                      }
?>
                                            
                                    </ul>
                                  </div>
        <?php
    }

    if( $this->session->userdata('active_menu') == 'studentinformationmenu'){
      ?>
      <div id='cssmenu'>
         <ul>
<li><a href="#"> Global Master</a>
<ul>
  <?php
if ($this->rbac->hasPrivilege('student_houses', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/schoolhouse'); ?>"><a href="<?php echo base_url(); ?>admin/schoolhouse"> <span class="student_information"><?php echo $this->lang->line('house'); ?></span></a></li>
                                            <?php
                                        }
if ($this->rbac->hasPrivilege('student_categories', 'can_view')) {
                                            ?>

                                            <li class="<?php echo set_Submenu('category/index'); ?>"><a href="<?php echo base_url(); ?>category"> <span class="student_information"><?php echo $this->lang->line('student_categories'); ?></span></a></li>
                                            
                                            <?php
                                        }
if ($this->rbac->hasPrivilege('religion', 'can_view')) {
                                            ?>

                                            <li class="<?php echo 'Religion'; ?>"><a href="<?php echo base_url(); ?>religion"> <span class="human_resource"><?php echo 'Religion'; ?></span></a></li>
                                        <?php }
if ($this->rbac->hasPrivilege('caste', 'can_view')) {
                                            ?>

                                            <li class="<?php echo 'Caste'; ?>"><a href="<?php echo base_url(); ?>caste"> <span class="human_resource"><?php echo 'Caste'; ?></span></a></li>
                                        <?php } 
                                        ?>
</ul>
</li>

<li><a href="#"> Admission</a>
<ul>
<?php
if ($this->rbac->hasPrivilege('student', 'can_add')) {
                                            ?>

                                            <li class="<?php echo set_Submenu('student/create'); ?>"><a href="<?php echo base_url(); ?>student/create"> <span class="student_information"><?php echo $this->lang->line('student_admission'); ?></span></a></li>

                                            <?php
                                        }
if ($this->rbac->hasPrivilege('student', 'can_view')) { ?>

                                            <li class="<?php echo set_Submenu('student/search'); ?>"><a href="<?php echo base_url(); ?>student/search"> <span class="student_information"><?php echo $this->lang->line('student_details'); ?></span></a></li>

                                            <?php
                                        }
if ($this->rbac->hasPrivilege('disable_student', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('student/disablestudentslist'); ?>"><a href="<?php echo base_url(); ?>student/disablestudentslist"> <span class="student_information"><?php echo $this->lang->line('disabled_students'); ?></span></a></li>
                                            <?php
                                        }
if ($this->rbac->hasPrivilege('student_history', 'can_view')) {
                                            ?>

                                            <li class="<?php echo set_Submenu('admin/users/admissionreport'); ?>"><a href="<?php echo base_url(); ?>admin/users/admissionreport"><span class="student_information"><?php echo $this->lang->line('student_history'); ?></span></a></li>

                                        <?php }
                                        ?>
</ul>
</li>

<?php
if ($this->rbac->hasPrivilege('student', 'can_view')) { ?>

                                            <li class="<?php echo set_Submenu('student/exportstudents'); ?>"><a href="<?php echo base_url(); ?>student/exportstudents"> <span class="student_information">Export Students</span></a></li>

                                            <?php
                                        } 
                                        ?>
<li><a href="#"> Report</a>
<ul>
<?php 
                                        
                                        if ($this->rbac->hasPrivilege('student_report', 'can_add')) {
                                            ?>

                                        <li class="<?php echo set_Submenu('student/studentreport'); ?>"><a href="<?php echo base_url(); ?>student/studentreport">
                                                <span class="student_information"><?php echo $this->lang->line('student_report'); ?></a></span></li>

                                        <?php }
                                        if ($this->rbac->hasPrivilege('guardian_report', 'can_view')) {
                                            ?>

                                            <li class="<?php echo set_Submenu('student/guardianreport'); ?>"><a href="<?php echo base_url(); ?>student/guardianreport"><span class="student_information"> <?php echo $this->lang->line('guardian_report'); ?></span></a></li>

                                            <?php
                                        }
                                        
                                        if ($this->rbac->hasPrivilege('student_login_credential', 'can_view')) {
                                            ?>

<li class="<?php echo set_Submenu('admin/users/logindetailreport'); ?>">
    <a href="<?php echo base_url(); ?>admin/users/logindetailreport"><span class="student_information"> <?php echo $this->lang->line('student'); ?> <?php echo $this->lang->line('login_credential'); ?></span></a></li>
                                        <?php }
?>
</ul>
</li>
</ul>
</div>
      <?php
    }


    if( $this->session->userdata('active_menu') == 'feemenu'){
         ?>
         <div id='cssmenu'>
          <ul>
<li><a href="#">Master Setting</a>
</li>

<li><a href="#">Manage Fee</a>
<ul>
<?php if ($this->rbac->hasPrivilege('collect_fees', 'can_view')) { ?>
                                            <li class="<?php echo set_Submenu('studentfee/index'); ?>"><a href="<?php echo base_url(); ?>studentfee"> <span class="fees_collection"><?php echo $this->lang->line('collect_fees'); ?></span></a></li>
                                            <?php
                                        }
                                        ?>
</ul>
</li>                                       

<li><a href="#"> <span class="fees_collection">Fee Master</span></a>

<ul>

<li><a href="#"> <span class="fees_collection">Define Fee Master</span></a>
<ul>
<?php
if ($this->rbac->hasPrivilege('fee_head', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('feehead/index'); ?>"><a href="<?php echo base_url(); ?>admin/feehead"> <span class="fees_collection">Fee Head</span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('fees_type', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('feetype/index'); ?>"><a href="<?php echo base_url(); ?>admin/feetype"> <span class="fees_collection"><?php echo $this->lang->line('fees_type'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('fees_group', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/feegroup'); ?>"><a href="<?php echo base_url(); ?>admin/feegroup"> <span class="fees_collection"><?php echo $this->lang->line('fees_group'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('fee_installment', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('feeinstallment/index'); ?>"><a href="<?php echo base_url(); ?>admin/feeinstallment"> <span class="fees_collection">Fee Installment</span></a></li>
                                            <?php
                                        }
                                        ?>
</ul>
</li>

<?php
                                        if ($this->rbac->hasPrivilege('assign_amount_group', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('assignamountgroup/index'); ?>"><a href="<?php echo base_url(); ?>admin/assignamountgroup"> <span class="fees_collection">Assign Amount Group</span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('pay_schedule', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('payschedule/index'); ?>"><a href="<?php echo base_url(); ?>admin/payschedule"> <span class="fees_collection">Pay Schedule</span></a></li>
                                            <?php
                                        }
                                        

                                        if ($this->rbac->hasPrivilege('add_bank', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('addbank/index'); ?>"><a href="<?php echo base_url(); ?>admin/addbank"> <span class="fees_collection"><?php echo 'Add Bank'; ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('bank_account_type', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('addaccounttype/index'); ?>"><a href="<?php echo base_url(); ?>admin/addaccounttype"> <span class="fees_collection"><?php echo 'Account Type'; ?></span></a></li>
                                            <?php
                                        }
                                        ?>

</ul>
</li>

<li><a href="#">Transaction Report</a>
  <ul>
    <?php
if ($this->rbac->hasPrivilege('transaction_report', 'can_view')) {
                                            ?>                               
                                            <li class="<?php echo set_Submenu('transaction/searchtransaction'); ?>"> <a href="<?php echo base_url(); ?>admin/transaction/dailytransactionreport"><span class="reports"><?php echo 'Daily Fee Report'; ?></span></a></li>
                                       <?php }
                                       ?>
  <li><a href="#">Defaulter List</a></li>
    <li><a href="#">Defaulter Installment</a></li>
  </ul>
</li>

                                    </ul>
                                  </div>
         <?php
    }

    if( $this->session->userdata('active_menu') == 'incomemenu'){
        ?>
        <div id='cssmenu'>
           <ul>
                                        <?php if ($this->rbac->hasPrivilege('income', 'can_view')) { ?>
                                            <li class="<?php echo set_Submenu('income/index'); ?>"><a href="<?php echo base_url(); ?>admin/income"><span class="income"><?php echo $this->lang->line('add_income'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('search_income', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('income/incomesearch'); ?>"><a href="<?php echo base_url(); ?>admin/income/incomesearch"><span class="income"><?php echo $this->lang->line('search_income'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('income_head', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('incomeshead/index'); ?>"><a href="<?php echo base_url(); ?>admin/incomehead"><span class="income"><?php echo $this->lang->line('income_head'); ?></span></a></li>
                                        <?php } ?>
                                    </ul>
                                  </div>
        <?php
    }

    if($this->session->userdata('active_menu') == 'expensemenu'){
       ?>
       <div id='cssmenu'>
<ul >
                                        <?php if ($this->rbac->hasPrivilege('expense', 'can_view')) { ?>
                                            <li class="<?php echo set_Submenu('expense/index'); ?>"><a href="<?php echo base_url(); ?>admin/expense"> <span class="expense"><?php echo $this->lang->line('add_expense'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('search_expense', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('expense/expensesearch'); ?>"><a href="<?php echo base_url(); ?>admin/expense/expensesearch"> <span class="expense"><?php echo $this->lang->line('search_expense'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('expense_head', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('expenseshead/index'); ?>"><a href="<?php echo base_url(); ?>admin/expensehead"> <span class="expense"><?php echo $this->lang->line('expense_head'); ?></span></a></li>
                                        <?php } ?>
                                    </ul>
                                  </div>
       <?php
    }

    if( $this->session->userdata('active_menu') == 'attendancemenu'){
         ?>
         <div id='cssmenu'>
                                    <ul>
                                        <?php if ($this->rbac->hasPrivilege('student_attendance', 'can_view')) { ?>
                                            <li class="<?php echo set_Submenu('stuattendence/index'); ?>"><a href="<?php echo base_url(); ?>admin/stuattendence"><span class="student_attendance"> <?php echo $this->lang->line('student_attendance'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('attendance_by_date', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('stuattendence/attendenceReport'); ?>"><a href="<?php echo base_url(); ?>admin/stuattendence/attendencereport"> <span class="student_attendance"><?php echo $this->lang->line('attendance_by_date'); ?></span></a></li>
                                        <?php } if ($this->rbac->hasPrivilege('student_attendance_report', 'can_view')) { ?>
                                            <li class="<?php echo set_Submenu('stuattendence/classattendencereport'); ?>"><a href="<?php echo base_url(); ?>admin/stuattendence/classattendencereport"> <span class="student_attendance"><?php echo $this->lang->line('attendance_report'); ?></span></a></li>
                                        <?php } 
                                        /*
                                        if ($this->rbac->hasPrivilege('send_attendance_sms', 'can_view')) { ?>
                                            <li class="<?php echo set_Submenu('stuattendence/classattendancesms'); ?>"><a href="<?php echo base_url(); ?>admin/stuattendence/classattendencesms"> <?php echo "Attendence SMS"; ?></a></li>
                                        <?php }
                                        */
                                        if ($this->rbac->hasPrivilege('absent_student_sms', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('absentstudentsms/index'); ?>"><a href="<?php echo base_url(); ?>admin/absentstudentsms"><span class="student_attendance"><?php echo 'Send SMS to Absentee'; ?></span></a></li>
                                            <?php

                                        }
                                        /* 
                                        if ($this->rbac->hasPrivilege('sms_templates', 'can_view')) { ?>
                                            <li class="<?php echo set_Submenu('stuattendence/smstemplates'); ?>"><a href="<?php echo base_url(); ?>admin/stuattendence/smstemplates"> <?php echo "SMS Templates"; ?></a></li>
                                        <?php }
                                         */
                                         ?>
                                    </ul>
                                  </div>
                                
         <?php
    }

    if($this->session->userdata('active_menu') == 'examinationmenu'){
?>
<div id='cssmenu'>
<ul >
                                        <?php if ($this->rbac->hasPrivilege('exam', 'can_view')) { ?>
                                            <li class="<?php echo set_Submenu('exam/index'); ?>"><a href="<?php echo base_url(); ?>admin/exam"> <span class="examination"><?php echo $this->lang->line('exam_list'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('exam_schedule', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('examschedule/index'); ?>"><a href="<?php echo base_url(); ?>admin/examschedule"> <span class="examination"><?php echo $this->lang->line('exam_schedule'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('marks_register', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('mark/index'); ?>"><a href="<?php echo base_url(); ?>admin/mark"> <span class="examination"><?php echo $this->lang->line('marks_register'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('marks_grade', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('grade/index'); ?>"><a href="<?php echo base_url(); ?>admin/grade"> <span class="examination"><?php echo $this->lang->line('marks_grade'); ?></span></a></li> <?php } ?>

                                    </ul>
                                  </div>
<?php
    }

    if($this->session->userdata('active_menu') == 'academicsmenu'){
?>
<div id='cssmenu'>
<ul >

<li><a href="#"> Define Fee Master</a>
  <ul>
    <?php
if ($this->rbac->hasPrivilege('class', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('classes/index'); ?>"><a href="<?php echo base_url(); ?>classes"> <span class="academics">Define Class</span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('section', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('sections/index'); ?>"><a href="<?php echo base_url(); ?>sections"> <span class="academics">Define Section</span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('subject', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('subject/index'); ?>"><a href="<?php echo base_url(); ?>admin/subject"> <span class="academics">Define Subjects</span></a></li>
                                            <?php
                                        }
                                        ?>
  </ul>
</li>
                                        <?php if ($this->rbac->hasPrivilege('class_timetable', 'can_view')) { ?>
                                            <li class="<?php echo set_Submenu('timetable/index'); ?>"><a href="<?php echo base_url(); ?>admin/timetable"> <span class="academics"><?php echo $this->lang->line('class_timetable'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('assign_class_teacher', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/teacher/assign_class_teacher'); ?>"><a href="<?php echo base_url(); ?>admin/teacher/assign_class_teacher"> <span class="academics"><?php echo $this->lang->line('assign_class_teacher'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('assign_subject', 'can_view')) {
                                            ?>                
                                            <li class="<?php echo set_Submenu('admin/teacher/viewassignteacher'); ?>"><a href="<?php echo base_url(); ?>admin/teacher/viewassignteacher"> <span class="academics"><?php echo $this->lang->line('assign_subjects'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('promote_student', 'can_view')) {
                                            ?>

                                            <li class="<?php echo set_Submenu('stdtransfer/index'); ?>"><a href="<?php echo base_url(); ?>admin/stdtransfer"> <span class="academics"><?php echo $this->lang->line('promote_students'); ?></span></a></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                  </div>
<?php
    }

    if( $this->session->userdata('active_menu') == 'hrmenu'){
       ?>
       <div id='cssmenu'>
          <ul>
                                        <?php if ($this->rbac->hasPrivilege('staff', 'can_view')) { ?>
                                            <li class="<?php echo set_Submenu('admin/staff'); ?>"><a href="<?php echo base_url(); ?>admin/staff"> <span class="human_resource"><?php echo $this->lang->line('staff_directory'); ?></span></a></li>

                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('staff_attendance', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/staffattendance'); ?>"><a href="<?php echo base_url(); ?>admin/staffattendance"> <span class="human_resource"><?php echo $this->lang->line('staff_attendance'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('staff_attendance_report', 'can_view')) {
                                            ?>

                                            <li class="<?php echo set_Submenu('admin/staffattendance/attendancereport'); ?>"><a href="<?php echo base_url(); ?>admin/staffattendance/attendancereport"> <span class="human_resource"><?php echo $this->lang->line('staff_attendance_report'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('staff_login_credential', 'can_view')) {
                                            ?>

                                            <li class="<?php echo set_Submenu('admin/staffattendance/stafflogincredential'); ?>"><a href="<?php echo base_url(); ?>admin/staff/stafflogincredential"> <span class="human_resource"><?php echo "Staff Login Credential" ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('staff_payroll', 'can_view')) {
                                            ?>


                                            <li class="<?php echo set_Submenu('admin/payroll'); ?>"><a href="<?php echo base_url(); ?>admin/payroll"> <span class="human_resource"><?php echo $this->lang->line('payroll'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('payroll_report', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/payroll/payrollreport'); ?>"><a href="<?php echo base_url(); ?>admin/payroll/payrollreport"> <span class="human_resource"><?php echo $this->lang->line('payroll_report'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('approve_leave_request', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/leaverequest/leaverequest'); ?>"><a href="<?php echo base_url(); ?>admin/leaverequest/leaverequest"> <span class="human_resource"><?php echo $this->lang->line('approve_leave_request'); ?></span></a></li>

                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('apply_leave', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/staff/leaverequest'); ?>"><a href="<?php echo base_url(); ?>admin/staff/leaverequest"> <span class="human_resource"><?php echo $this->lang->line('apply_leave'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('leave_types', 'can_view')) {
                                            ?>

                                            <li class="<?php echo set_Submenu('admin/leavetypes'); ?>"><a href="<?php echo base_url(); ?>admin/leavetypes"> <span class="human_resource"><?php echo $this->lang->line('leave_type'); ?></span></a></li>

                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('department', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/department/department'); ?>"><a href="<?php echo base_url(); ?>admin/department/department"> <span class="human_resource"><?php echo $this->lang->line('department'); ?></span></a></li>

                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('designation', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/designation/designation'); ?>"><a href="<?php echo base_url(); ?>admin/designation/designation"> <span class="human_resource"><?php echo $this->lang->line('designation'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('disable_staff', 'can_view')) {
                                            ?>

                                            <li class="<?php echo set_Submenu('admin/staff/disablestafflist'); ?>"><a href="<?php echo base_url(); ?>admin/staff/disablestafflist"> <span class="human_resource"><?php echo $this->lang->line('disabled_staff'); ?></span></a></li>
                                            <?php 
                                        }
                                         ?>
                                    </ul>
                                  </div>
       <?php
    }

    if($this->session->userdata('active_menu') == 'communicatemenu'){
?>
<div id='cssmenu'>
<ul >
                                        <?php
                                        if ($this->rbac->hasPrivilege('notice_board', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('notification/index'); ?>"><a href="<?php echo base_url(); ?>admin/notification"> <span class="communicate"><?php echo $this->lang->line('notice_board'); ?></span></a></li>
                                            <?php
                                        }
                                        /*
                                        if ($this->rbac->hasPrivilege('email_sms', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('notification/add'); ?>"><a href="<?php echo base_url(); ?>admin/notification/add"> <?php echo $this->lang->line('send_message'); ?></a></li>
                                            <?php
                                        }
                                        */
                                        if ($this->rbac->hasPrivilege('compose_sms', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('composesms/index'); ?>"><a href="<?php echo base_url(); ?>admin/composesms"> <span class="communicate"><?php echo 'Compose SMS'; ?></span></a></li>
                                            <?php
                                        }
                                        
                                        if ($this->rbac->hasPrivilege('send_to_a_number', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('sendtoanumber/index'); ?>"><a href="<?php echo base_url(); ?>admin/sendtoanumber"><span class="communicate"><?php echo 'Send To a Number'; ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('send_credential', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('sendcredential/index'); ?>"><a href="<?php echo base_url(); ?>admin/sendcredential"><span class="communicate"><?php echo 'Send Credential'; ?></span></a></li>
                                            <?php
                                        }
                                        /*
                                        if ($this->rbac->hasPrivilege('email_sms', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('mailsms/compose'); ?>"><a href="<?php echo base_url(); ?>admin/mailsms/compose"> <?php echo $this->lang->line('send_email_/_sms'); ?></a></li>
                                            <?php
                                        }

                                        if ($this->rbac->hasPrivilege('email_sms_log', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('mailsms/index'); ?>"><a href="<?php echo base_url(); ?>admin/mailsms/index"> <?php echo $this->lang->line('email_/_sms_log'); ?></a></li>
                                        <?php }
                                        */
                                        if ($this->rbac->hasPrivilege('sms_types', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('smstypes/index'); ?>"><a href="<?php echo base_url(); ?>admin/smstypes"> <span class="communicate"><?php echo 'SMS Types'; ?></span></a></li>
                                            <?php
                                        } 
                                        if ($this->rbac->hasPrivilege('sms_templates', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('smstemplates/index'); ?>"><a href="<?php echo base_url(); ?>admin/smstemplates"> <span class="communicate"><?php echo 'SMS Templates'; ?></span></a></li>
                                            <?php
                                        } 
                                        if ($this->rbac->hasPrivilege('upload_voice_sms', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('uploadvoicesms/index'); ?>"><a href="<?php echo base_url(); ?>admin/uploadvoicesms"> <span class="communicate"><?php echo 'Upload Voice SMS'; ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('send_voice_sms', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('sendvoicesms/index'); ?>"><a href="<?php echo base_url(); ?>admin/sendvoicesms"> <span class="communicate"><?php echo 'Send Voice SMS'; ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('sms_report', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('smsreport/index'); ?>"><a href="<?php echo base_url(); ?>admin/smsreport"> <span class="communicate"><?php echo 'SMS Report'; ?></span></a></li>
                                            <?php
                                        } ?>
                                    </ul>
                                  </div>
<?php
    }

    if($this->session->userdata('active_menu') == 'downloadcentermenu'){
?>
<div id='cssmenu'>
<ul >
                                        <?php if ($this->rbac->hasPrivilege('upload_content', 'can_view')) { ?>
                                            <li class="<?php echo set_Submenu('admin/content'); ?>"><a href="<?php echo base_url(); ?>admin/content"> <span class="download_center"><?php echo $this->lang->line('upload_content'); ?></span></a></li>
                                        <?php } ?>
                                        <li class="<?php echo set_Submenu('content/assignment'); ?>"><a href="<?php echo base_url(); ?>admin/content/assignment"> <span class="download_center"><?php echo $this->lang->line('assignments'); ?></span></a></li>
                                        <li class="<?php echo set_Submenu('content/studymaterial'); ?>"><a href="<?php echo base_url(); ?>admin/content/studymaterial"> <span class="download_center"><?php echo $this->lang->line('study_material'); ?></span></a></li>
                                        <li class="<?php echo set_Submenu('content/syllabus'); ?>"><a href="<?php echo base_url(); ?>admin/content/syllabus"> <span class="download_center"><?php echo $this->lang->line('syllabus'); ?></span></a></li>
                                        <li class="<?php echo set_Submenu('content/other'); ?>"><a href="<?php echo base_url(); ?>admin/content/other"> <span class="download_center"><?php echo $this->lang->line('other_downloads'); ?></span></a></li>
                                    </ul>
                                  </div>
<?php
    }

    if($this->session->userdata('active_menu') == 'homeworkmenu'){
?>
<div id='cssmenu'>
<ul >
                                        <?php if ($this->rbac->hasPrivilege('homework', 'can_view')) { ?>
                                            <li class="<?php echo set_Submenu('homework'); ?>"><a href="<?php echo base_url(); ?>homework"> <span class="homework"><?php echo $this->lang->line('add_homework'); ?></span></a></li>
                                        <?php } if ($this->rbac->hasPrivilege('homework_report', 'can_view')) { ?>
                                            <li class="<?php echo set_Submenu('homework/evaluation_report'); ?>"><a href="<?php echo base_url(); ?>homework/evaluation_report"> <span class="homework"><?php echo $this->lang->line('evaluation_report'); ?></span></a></li>
                                        <?php } ?>
                                    </ul>
                                  </div>
<?php
    }

    if($this->session->userdata('active_menu') == 'librarymenu'){
?>
<div id='cssmenu'>
<ul >
                                        <?php if ($this->rbac->hasPrivilege('books', 'can_add')) { ?>
                                            <li class="<?php echo set_Submenu('book/index'); ?>"><a href="<?php echo base_url(); ?>admin/book"><span class="library"><?php echo $this->lang->line('add_book'); ?></span></a></li>
                                        <?php } if ($this->rbac->hasPrivilege('books', 'can_view')) { ?>
                                            <li class="<?php echo set_Submenu('book/getall'); ?>">
                                                <a href="<?php echo base_url(); ?>admin/book/getall"><span class="library"><?php echo $this->lang->line('book_list'); ?></span></a></li>
                                        <?php } if ($this->rbac->hasPrivilege('issue_return_student', 'can_view')) { ?>
                                            <li class="<?php echo set_Submenu('member/index'); ?>"><a href="<?php echo base_url(); ?>admin/member"><span class="library"><?php echo $this->lang->line('issue_return'); ?></span></a></li>
                                        <?php } ?>
                                        <?php if ($this->rbac->hasPrivilege('add_student', 'can_view')) { ?>
                                            <li class="<?php echo set_Submenu('member/student'); ?>"><a href="<?php echo base_url(); ?>admin/member/student"><span class="library"><?php echo $this->lang->line('add_student'); ?></span></a></li> 
                                        <?php } ?>
                                        <?php if ($this->rbac->hasPrivilege('add_staff_member', 'can_view')) { ?>
                                            <li class="<?php echo set_Submenu('member/teacher'); ?>"><a href="<?php echo base_url(); ?>admin/member/teacher"><span class="library"><?php echo $this->lang->line('add_staff_member'); ?></span></a></li>
                                        <?php } ?>


                                    </ul>
                                  </div>
<?php
    }

    if($this->session->userdata('active_menu') == 'inventorymenu'){
?>
<div id='cssmenu'>
<ul >
                                        <?php if ($this->rbac->hasPrivilege('issue_item', 'can_view')) { ?>
                                            <li class="<?php echo set_Submenu('issueitem/index'); ?>"><a href="<?php echo base_url(); ?>admin/issueitem"><span class="inventory"><?php echo $this->lang->line('issue_item'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('item_stock', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('Itemstock/index'); ?>"><a href="<?php echo base_url(); ?>admin/itemstock"><span class="inventory"><?php echo $this->lang->line('add_item_stock'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('item', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('Item/index'); ?>"><a href="<?php echo base_url(); ?>admin/item"><span class="inventory"><?php echo $this->lang->line('add_item'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('item_category', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('itemcategory/index'); ?>"><a href="<?php echo base_url(); ?>admin/itemcategory"><span class="inventory"><?php echo $this->lang->line('item_category'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('store', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('itemstore/index'); ?>"><a href="<?php echo base_url(); ?>admin/itemstore"><span class="inventory"><?php echo $this->lang->line('item_store'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('supplier', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('itemsupplier/index'); ?>"><a href="<?php echo base_url(); ?>admin/itemsupplier"><span class="inventory"><?php echo $this->lang->line('item_supplier'); ?></span></a></li>
                                        <?php } ?>
                                    </ul>
                                  </div>
<?php
    }

    if($this->session->userdata('active_menu') == 'transportmenu'){
?>
<div id='cssmenu'>
<ul >
                                        <?php
                                        if ($this->rbac->hasPrivilege('routes', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('route/index'); ?>"><a href="<?php echo base_url(); ?>admin/route"> <span class="transport"><?php echo $this->lang->line('routes'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('vehicle', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('vehicle/index'); ?>"><a href="<?php echo base_url(); ?>admin/vehicle"> <span class="transport"><?php echo $this->lang->line('vehicles'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('assign_vehicle', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('vehroute/index'); ?>"><a href="<?php echo base_url(); ?>admin/vehroute"> <span class="transport"><?php echo $this->lang->line('assign_vehicle'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('student_transport_report', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/route/studenttransportdetails'); ?>"><a href="<?php echo base_url(); ?>admin/route/studenttransportdetails"> <span class="transport"><?php echo $this->lang->line('student_transport_report'); ?></span></a></li>
                                        <?php } ?>


                                    </ul>
                                  </div>
<?php
    }

    if($this->session->userdata('active_menu') == 'hostelmenu'){
?>
<div id='cssmenu'>
<ul >
                                        <?php
                                        if ($this->rbac->hasPrivilege('hostel_rooms', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('hostelroom/index'); ?>"><a href="<?php echo base_url(); ?>admin/hostelroom"> <span class="hostel"><?php echo $this->lang->line('hostel_rooms'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('room_type', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('roomtype/index'); ?>"><a href="<?php echo base_url(); ?>admin/roomtype"> <span class="hostel"><?php echo $this->lang->line('room_type'); ?></span></a></li>
                                            <?php
                                        }

                                        if ($this->rbac->hasPrivilege('hostel', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('hostel/index'); ?>"><a href="<?php echo base_url(); ?>admin/hostel"> <span class="hostel"><?php echo $this->lang->line('hostel'); ?></span></a></li> 
                                            <?php
                                        }

                                        if ($this->rbac->hasPrivilege('student_hostel_report', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/hostelroom/studenthosteldetails'); ?>"><a href="<?php echo base_url(); ?>admin/hostelroom/studenthosteldetails"> <span class="hostel"><?php echo $this->lang->line('student') . " " . $this->lang->line('hostel') . " " . $this->lang->line('report'); ?></span></a></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                  </div>
<?php
    }

    if($this->session->userdata('active_menu') == 'certificatemenu'){
?>
<div id='cssmenu'>
<ul >
                                        <?php
                                        if ($this->rbac->hasPrivilege('student_certificate', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/certificate'); ?>"><a href="<?php echo base_url(); ?>admin/certificate/"><span class="certificate"><?php echo $this->lang->line('student'); ?> <?php echo $this->lang->line('certificate'); ?></span></a></li>   
                                            <?php
                                        }

                                        if ($this->rbac->hasPrivilege('generate_certificate', 'can_view')) {
                                            ?>                             
                                            <li class="<?php echo set_Submenu('admin/generatecertificate'); ?>"><a href="<?php echo base_url(); ?>admin/generatecertificate/"><span class="certificate"><?php echo $this->lang->line('generate'); ?> <?php echo $this->lang->line('certificate'); ?></span></a></li>
                                            <?php
                                        }

                                        if ($this->rbac->hasPrivilege('student_id_card', 'can_view')) {
                                            ?> 
                                            <li class="<?php echo set_Submenu('admin/studentidcard'); ?>"><a href="<?php echo base_url('admin/studentidcard/'); ?>"><span class="certificate"><?php echo $this->lang->line('student'); ?> <?php echo $this->lang->line('icard'); ?></span></a></li>
                                            <?php
                                        }

                                        if ($this->rbac->hasPrivilege('generate_id_card', 'can_view')) {
                                            ?> 
                                            <li class="<?php echo set_Submenu('admin/generateidcard'); ?>"><a href="<?php echo base_url('admin/generateidcard/'); ?>"><span class="certificate"><?php echo $this->lang->line('generate'); ?> <?php echo $this->lang->line('icard'); ?></span></a></li>
                                        <?php } ?>
                                    </ul>
                                  </div>
<?php
    }

    if($this->session->userdata('active_menu') == 'frontcmsmenu'){
?>
<div id='cssmenu'>
<ul >
                                        <?php if ($this->rbac->hasPrivilege('event', 'can_view')) { ?>
                                            <li class="<?php echo set_Submenu('admin/front/events'); ?>"><a href="<?php echo base_url(); ?>admin/front/events"> <span class="front_cms"><?php echo $this->lang->line('event'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('gallery', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/front/gallery'); ?>"><a href="<?php echo base_url(); ?>admin/front/gallery"> <span class="front_cms"><?php echo $this->lang->line('gallery'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('notice', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/front/notice'); ?>"><a href="<?php echo base_url(); ?>admin/front/notice"> <span class="front_cms"><?php echo $this->lang->line('notice'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('media_manager', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/front/media'); ?>"><a href="<?php echo base_url(); ?>admin/front/media"> <span class="front_cms"><?php echo $this->lang->line('media_manager'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('pages', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/front/page'); ?>"><a href="<?php echo base_url(); ?>admin/front/page"> <span class="front_cms"><?php echo $this->lang->line('page'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('menus', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/front/menus'); ?>"><a href="<?php echo base_url(); ?>admin/front/menus"> <span class="front_cms"><?php echo $this->lang->line('menus'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('banner_images', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/front/banner'); ?>"><a href="<?php echo base_url(); ?>admin/front/banner"> <span class="front_cms"><?php echo $this->lang->line('banner_images'); ?></span></a></li>
                                        <?php } ?>
                                    </ul>
                                  </div>
<?php
    }

    if($this->session->userdata('active_menu') == 'reportmenu'){
?>
<div id='cssmenu'>
<ul >
<?php if ($this->rbac->hasPrivilege('student_report', 'can_view')) {
                                            ?>
                                        <li class="<?php echo set_Submenu('student/studentreport'); ?>"><a href="<?php echo base_url(); ?>student/studentreport">
                                                <span class="reports"><?php echo $this->lang->line('student_report'); ?></span></a></li>

                                        <?php } if ($this->rbac->hasPrivilege('guardian_report', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('student/guardianreport'); ?>"><a href="<?php echo base_url(); ?>student/guardianreport"> <span class="reports"><?php echo $this->lang->line('guardian_report'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('student_history', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/users/admissionreport'); ?>"><a href="<?php echo base_url(); ?>admin/users/admissionreport"> <span class="reports"><?php echo $this->lang->line('student_history'); ?></span></a></li>
                                            <?php
                                        }


                                        if ($this->rbac->hasPrivilege('student_login_credential', 'can_view')) {
                                            ?>

                                            <li class="<?php echo set_Submenu('admin/users/logindetailreport'); ?>"><a href="<?php echo base_url(); ?>admin/users/logindetailreport"> <span class="reports"><?php echo $this->lang->line('student'); ?> <?php echo $this->lang->line('login_credential'); ?></span></a></li>
                                      
                                         <?php
                                        }

                                        /*
                                        if ($this->rbac->hasPrivilege('fees_statement', 'can_view')) {
                                            ?>
                                        <li class="<?php echo set_Submenu('reportbyname/index'); ?>"><a href="<?php echo base_url(); ?>studentfee/reportbyname"> <span class="reports"><?php echo $this->lang->line('fees_statement'); ?></span></a></li>
<?php
                                        }



                                        if ($this->rbac->hasPrivilege('balance_fees_report', 'can_view')) {
                                            ?>

                                        <li class="<?php echo set_Submenu('transaction/studentacademicreport'); ?>"><a href="<?php echo base_url(); ?>admin/transaction/studentacademicreport">
                                                <span class="reports"><?php echo $this->lang->line('balance_fees_report'); ?></span></a></li>
                                        <?php }
                                        */
                                        
                                        if ($this->rbac->hasPrivilege('attendance_report', 'can_view')) {
                                            ?> 
                                        <li class="<?php echo set_Submenu('stuattendence/classattendencereport'); ?>"><a href="<?php echo base_url(); ?>admin/stuattendence/classattendencereport"> <span class="reports"><?php echo $this->lang->line('attendance_report'); ?></span></a></li>
                                        <?php }
                                        if ($this->rbac->hasPrivilege('exam_marks_report', 'can_view')) {
                                            ?> 
                                        <li class="<?php echo set_Submenu('mark/index'); ?>"><a href="<?php echo base_url(); ?>admin/mark"> <span class="reports"><?php echo $this->lang->line('exam_marks_report'); ?></span></a></li>

                                        <?php }
                                        if ($this->rbac->hasPrivilege('payroll_report', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/payroll/payrollreport'); ?>"><a href="<?php echo base_url(); ?>admin/payroll/payrollreport"> <span class="reports"><?php echo $this->lang->line('payroll_report'); ?></span></a></li>
                                            <?php
                                        }

                                        if ($this->rbac->hasPrivilege('staff_attendance_report', 'can_view')) {
                                            ?>

                                            <li class="<?php echo set_Submenu('admin/staffattendance/attendancereport'); ?>"><a href="<?php echo base_url(); ?>admin/staffattendance/attendancereport"> <span class="reports"><?php echo $this->lang->line('staff_attendance_report'); ?></span></a></li>
                                            <?php
                                        }




                                        if ($this->rbac->hasPrivilege('homework_report', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('homework/evaluation_report'); ?>"><a href="<?php echo base_url(); ?>homework/evaluation_report"> <span class="reports"><?php echo $this->lang->line('evaluation_report'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('student_transport_report', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/route/studenttransportdetails'); ?>"><a href="<?php echo base_url(); ?>admin/route/studenttransportdetails"> <span class="reports"><?php echo $this->lang->line('student_transport_report'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('student_hostel_report', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/hostelroom/studenthosteldetails'); ?>"><a href="<?php echo base_url(); ?>admin/hostelroom/studenthosteldetails"> <span class="reports"><?php echo $this->lang->line('student') . " " . $this->lang->line('hostel') . " " . $this->lang->line('report'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('user_log', 'can_view')) {
                                            ?>   
                                            <li class="<?php echo set_Submenu('userlog/index'); ?>"><a href="<?php echo base_url(); ?>admin/userlog"> <span class="reports"><?php echo $this->lang->line('user_log'); ?></span></a></li>
                                        <?php }
                                        ?>
                                    </ul>
                                  </div>
<?php
    }

    if($this->session->userdata('active_menu') == 'systemsettingmenu'){
?>
<div id='cssmenu'>
<ul >
                                        <?php
                                        if ($this->rbac->hasPrivilege('general_setting', 'can_edit')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('schsettings/index'); ?>"><a href="<?php echo base_url(); ?>schsettings"> <span class="system_settings"><?php echo $this->lang->line('general_settings'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('session_setting', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('sessions/index'); ?>"><a href="<?php echo base_url(); ?>sessions"> <span class="system_settings"><?php echo $this->lang->line('session_setting'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('notification_setting', 'can_edit')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('notification/setting'); ?>"><a href="<?php echo base_url(); ?>admin/notification/setting"> <span class="system_settings"><?php echo $this->lang->line('notification_setting'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('sms_setting', 'can_edit')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('smsconfig/index'); ?>"><a href="<?php echo base_url(); ?>smsconfig"> <span class="system_settings"><?php echo $this->lang->line('sms_setting'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('email_setting', 'can_edit')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('emailconfig/index'); ?>"><a href="<?php echo base_url(); ?>emailconfig"> <span class="system_settings"><?php echo $this->lang->line('email_setting'); ?></span></a></li>
                                            <?php
                                        }

                                        if ($this->rbac->hasPrivilege('payment_methods', 'can_edit')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/paymentsettings'); ?>"><a href="<?php echo base_url(); ?>admin/paymentsettings"> <span class="system_settings"><?php echo $this->lang->line('payment_methods'); ?></span></a></li>
                                            <?php
                                        }
                                         if ($this->module_lib->hasActive('front_cms')) {
                                        if ($this->rbac->hasPrivilege('front_cms_setting', 'can_edit')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/frontcms/index'); ?>"><a href="<?php echo base_url(); ?>admin/frontcms"> <span class="system_settings"><?php echo $this->lang->line('front_cms_setting'); ?></span></a></li>
                                        <?php } 
                                    }
                                        ?>
                                        <?php if ($this->rbac->hasPrivilege('superadmin')) { ?>
                                            <li class="<?php echo set_Submenu('admin/roles'); ?>"><a href="<?php echo base_url(); ?>admin/roles"> <span class="system_settings"><?php echo $this->lang->line('roles_permissions'); ?></span></a></li>
                                        <?php } ?>
                                        <?php
                                        if ($this->rbac->hasPrivilege('backup', 'can_view')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('admin/backup'); ?>"><a href="<?php echo base_url(); ?>admin/admin/backup"> <span class="system_settings"><?php echo $this->lang->line('backup / restore'); ?></span></a></li>
                                            <?php
                                        }
                                        if ($this->rbac->hasPrivilege('languages', 'can_add')) {
                                            ?>
                                            <li class="<?php echo set_Submenu('language/index'); ?>"><a href="<?php echo base_url(); ?>admin/language"> <span class="system_settings"><?php echo $this->lang->line('languages'); ?></span></a></li> 
                                            <?php
                                        }
                                        ?>
                                         <?php if ($this->rbac->hasPrivilege('user_status')) { ?>
                                        <li class="<?php echo set_Submenu('users/index'); ?>"><a href="<?php echo base_url(); ?>admin/users"> <span class="system_settings"><?php echo $this->lang->line('users'); ?></span></a></li>
                                         <?php } if ($this->rbac->hasPrivilege('superadmin')) { ?>
                                        <li class="<?php echo set_Submenu('admin/module'); ?>"><a href="<?php echo base_url(); ?>admin/module"> <span class="system_settings"><?php echo $this->lang->line('modules'); ?></span></a></li>
                                    <?php  } ?>
                                    </ul>
                                  </div>
<?php
    }
   
}
?>


