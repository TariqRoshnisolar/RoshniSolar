<style>

@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

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

  /* width: 170px; */

  font-size: 12px;

  text-decoration: none;

  color: #dddddd;

  font-weight: 400;

  background: #333333;

  white-space: nowrap;

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











    if( $this->session->userdata('active_menu') == 'hrmenu'){

       ?>

       <div id='cssmenu'>

          <ul>



<li><a href="#">Staff</a>

<ul>

<?php

if ($this->rbac->hasPrivilege('staff', 'can_add')) { ?>

                                            <li><a href="<?php echo base_url(); ?>admin/staff/create"> <span class="human_resource">Define Staff</span></a></li>



                                            <?php

                                        }

if ($this->rbac->hasPrivilege('staff', 'can_view')) { ?>

                                            <li><a href="<?php echo base_url(); ?>admin/staff"> <span class="human_resource"><?php echo $this->lang->line('staff_directory'); ?></span></a></li>



                                            <?php

                                        }

                                        if ($this->rbac->hasPrivilege('staff_login_credential', 'can_view')) {

                                            ?>



                                            <li><a href="<?php echo base_url(); ?>admin/staff/stafflogincredential"> <span class="human_resource"><?php echo "Staff Login Credential" ?></span></a></li>

                                            <?php

                                        }

                                        if ($this->rbac->hasPrivilege('disable_staff', 'can_view')) {

                                            ?>



                                            <li><a href="<?php echo base_url(); ?>admin/staff/disablestafflist"> <span class="human_resource"><?php echo $this->lang->line('disabled_staff'); ?></span></a></li>

                                            <?php 

                                        }

?>

</ul>

</li>

                                    </ul>

                                  </div>

       <?php

    }



    if($this->session->userdata('active_menu') == 'frontcmsmenu'){

?>

<div id='cssmenu'>

<ul >

                                        <?php 

                                        if ($this->rbac->hasPrivilege('event', 'can_view')) { ?>

                                            <li><a href="<?php echo base_url(); ?>admin/front/events"> <span class="front_cms"><?php echo $this->lang->line('event'); ?></span></a></li>

                                            <?php

                                        }

                                        if ($this->rbac->hasPrivilege('gallery', 'can_view')) {

                                            ?>

                                            <li><a href="<?php echo base_url(); ?>admin/front/gallery"> <span class="front_cms"><?php echo $this->lang->line('gallery'); ?></span></a></li>

                                            <?php

                                        }

                                          ?>

                                            <li><a href="#"> <span class="front_cms">Notice</span></a>

                                              <ul>

                                            <?php

                                        if ($this->rbac->hasPrivilege('notice', 'can_view')) {

                                            ?>

                                            <li><a href="<?php echo base_url(); ?>admin/front/notice"> <span class="front_cms">Latest <?php echo $this->lang->line('notice'); ?></span></a></li>

                                            <?php

                                        }

                                        if ($this->rbac->hasPrivilege('updates', 'can_view')) {

                                            ?>

                                            <li><a href="<?php echo base_url(); ?>admin/front/updates"> <span class="front_cms">Latest Updates</span></a></li>

                                            <?php

                                        }                                        

                                            ?>

                                              </ul>

                                            </li>

                                          <?php

                                        if ($this->rbac->hasPrivilege('media_manager', 'can_view')) {

                                            ?>

                                            <li><a href="<?php echo base_url(); ?>admin/front/media"> <span class="front_cms"><?php echo $this->lang->line('media_manager'); ?></span></a></li>

                                            <?php

                                        }

                                        if ($this->rbac->hasPrivilege('pages', 'can_view')) {

                                            ?>

                                            <li><a href="<?php echo base_url(); ?>admin/front/page"> <span class="front_cms"><?php echo $this->lang->line('page'); ?></span></a></li>

                                            <?php

                                        }

                                        if ($this->rbac->hasPrivilege('menus', 'can_view')) {

                                            ?>

                                            <li><a href="<?php echo base_url(); ?>admin/front/menus"> <span class="front_cms"><?php echo $this->lang->line('menus'); ?></span></a></li>

                                            <?php

                                        }

                                        if ($this->rbac->hasPrivilege('banner_images', 'can_view')) {

                                            ?>

                                            <li><a href="<?php echo base_url(); ?>admin/front/banner"> <span class="front_cms"><?php echo $this->lang->line('banner_images'); ?></span></a></li>

                                        <?php } ?>

                                      <li><a href="#"> <span class="front_cms">Other</span></a>

                                          <ul>

                                        <?php

                                        if ($this->rbac->hasPrivilege('branches', 'can_view')) {

                                            ?>

                                            <li><a href="<?php echo base_url(); ?>admin/front/branches"> <span class="front_cms">Our Branches</span></a></li>

                                        <?php }

                                        if ($this->rbac->hasPrivilege('partners', 'can_view')) {

                                            ?>

                                            <li><a href="<?php echo base_url(); ?>admin/front/partners"> <span class="front_cms">Our Partners</span></a></li>

                                        <?php }



                                        if ($this->rbac->hasPrivilege('partners', 'can_view')) {

                                            ?>

                                            <li><a href="<?php echo base_url(); ?>admin/front/headerpartners"> <span class="front_cms">Partner Header Logos</span></a></li>

                                        <?php }                                        



                                         ?>                                            

                                          </ul>

                                      </li>

                                    </ul>

                                  </div>

<?php

    }

    if($this->session->userdata('active_menu') == 'reportmenu'){
?>
<div id='cssmenu'>
<ul>
<li><a href="<?php echo base_url(); ?>admin/registrationreport"> Registration Report</a></li>
</ul>
</div>
<?php
    }

    if($this->session->userdata('active_menu') == 'systemsettingmenu'){

?>

<div id='cssmenu'>

<ul >



<li><a href="#">Global Master</a>

<ul>

<?php

if ($this->rbac->hasPrivilege('general_setting', 'can_edit')) {

                                            ?>

                                            <li><a href="<?php echo base_url(); ?>schsettings"> <span class="system_settings"><?php echo $this->lang->line('general_settings'); ?></span></a></li>

                                            <?php

                                        }

                                      if ($this->module_lib->hasActive('front_cms')) {

                                        if ($this->rbac->hasPrivilege('front_cms_setting', 'can_edit')) {

                                            ?>

                                            <li><a href="<?php echo base_url(); ?>admin/frontcms"> <span class="system_settings"><?php echo $this->lang->line('front_cms_setting'); ?></span></a></li>

                                        <?php } 

                                    }



?>

</ul>

</li>

                                        <?php

                                        



                                        if ($this->rbac->hasPrivilege('payment_methods', 'can_edit')) {

                                            ?>

                                            <li><a href="<?php echo base_url(); ?>admin/paymentsettings"> <span class="system_settings"><?php echo $this->lang->line('payment_methods'); ?></span></a></li>

                                            <?php

                                        }

                                         

                                        ?>

<li><a href="#">Permission</a>

<ul>

  <?php if ($this->rbac->hasPrivilege('superadmin')) { ?>

                                            <li><a href="<?php echo base_url(); ?>admin/roles"> <span class="system_settings"><?php echo $this->lang->line('roles_permissions'); ?></span></a></li>

                                        <?php } ?>

</ul>

</li>

                                        

                                        <?php

                                        if ($this->rbac->hasPrivilege('backup', 'can_view')) {

                                            ?>

                                            <li><a href="<?php echo base_url(); ?>admin/admin/backup"> <span class="system_settings"><?php echo $this->lang->line('backup / restore'); ?></span></a></li>

                                            <?php

                                        }

                                        if ($this->rbac->hasPrivilege('languages', 'can_add')) {

                                            ?>

                                            <li><a href="<?php echo base_url(); ?>admin/language"> <span class="system_settings"><?php echo $this->lang->line('languages'); ?></span></a></li> 

                                            <?php

                                        }

                                        ?>

                                       <?php if ($this->rbac->hasPrivilege('superadmin')) { ?>

                                        <li><a href="<?php echo base_url(); ?>admin/module"> <span class="system_settings"><?php echo $this->lang->line('modules'); ?></span></a></li>

                                    <?php  } ?>

                                    </ul>

                                  </div>

<?php

    }

   

}

?>





