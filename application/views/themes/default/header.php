<?php 
  $base_assets_url = '/backend/themes/default/';
?>
<div class="main_header">
  <div class="container some-class-name">
    <div class="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url($front_setting->logo); ?>" class="img-fluid" alt="uvsil logo"></a>
        </div>
     
    <!-- <div class="top_right"><img src="<?php echo $base_assets_url; ?>images/under.jpg" height="90px"></div> -->
     <!-- <div class="top_right">

      <ul id="clienteleDemo1">
          
           <li>
          <div class="ccr_clients">
            <div class="img_box"><a href="https://www.germi.org/" target="_blank"><img src="<?php echo $base_assets_url; ?>images/c1.jpg" class="img-fluid" alt="uvsil"></a> </div>
          </div>
        </li>
        <li>
          <div class="ccr_clients">
            <div class="img_box"><a href="https://nsdcindia.org/" target="_blank"><img src="<?php echo $base_assets_url; ?>images/c2.jpg" class="img-fluid" alt="uvsil"></a> </div>
          </div>
        </li>
        <li>
          <div class="ccr_clients">
            <div class="img_box"><a href="https://www.pmindia.gov.in/en/major_initiatives/swachh-bharat-abhiyan/" target="_blank"><img src="<?php echo $base_assets_url; ?>images/c3.jpg" class="img-fluid" alt="uvsil"></a> </div>
          </div>
        </li>
        <li>
          <div class="ccr_clients">
            <div class="img_box"><a href="https://mnre.gov.in/" target="_blank"><img src="<?php echo $base_assets_url; ?>images/c4.jpg" class="img-fluid" alt="uvsil"></a> </div>
          </div>
        </li>
        <li>
          <div class="ccr_clients">
            <div class="img_box"><a href="http://www.skillindia.gov.in/" target="_blank"><img src="<?php echo $base_assets_url; ?>images/c5.jpg" class="img-fluid" alt="uvsil"></a> </div>
          </div>
        </li>
        <li>
          <div class="ccr_clients">
            <div class="img_box"><a href="https://msme.gov.in" target="_blank"><img src="<?php echo $base_assets_url; ?>images/c6.jpg" class="img-fluid" alt="uvsil"></a> </div>
          </div>
        </li>
             
      </ul>
    </div>  -->
  </div>
</div>

<div class="navigtaion_bar">
  <div class="container some-class-name">
    <nav class="navbar navbar-expand-md navbar-light btco-hover-menu"> 
      <!--<a class="navbar-brand" href="#">Navbar</a>-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
                        <?php
                            foreach ($main_menus as $menu_key => $menu_value) {
                                $submenus = false;
                                $csubmenus = false;
                                $cls_menu_dropdown = "";
                                $menu_selected = "";
                                if ($menu_value['page_slug'] == $active_menu) {
                                    $menu_selected = "active";
                                }
                                if (!empty($menu_value['submenus'])) {
                                    $submenus = true;
                                    $cls_menu_dropdown = "dropdown";
                                }
                                ?>

                                <li class="nav-item <?php echo $menu_selected . " " . $cls_menu_dropdown; ?>" >
                                    <?php
                                    if (!$submenus) {
                                        $top_new_tab = '';
                                        $url = '#';

                                        if ($menu_value['open_new_tab']) {
                                            $top_new_tab = "target='_blank'";
                                        }
                                        if ($menu_value['ext_url']) {
                                            $url = $menu_value['ext_url_link'];
                                        } else {
                                            $url = site_url($menu_value['page_url']);
                                        }
                                        ?>

                                        <a class="nav-link" href="<?php echo $url; ?>" <?php echo $top_new_tab; ?>><?php echo $menu_value['menu']; ?></a>

                                        <?php
                                    } else {
                                        $child_new_tab = '';
                                        $url = '#';                                       
                                        ?>
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $menu_value['menu']; ?> <b class="caret"></b></a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <?php
                                            foreach ($menu_value['submenus'] as $submenu_key => $submenu_value) {
                                                if ($submenu_value['open_new_tab']) {
                                                    $child_new_tab = "target='_blank'";
                                                }
                                                if ($submenu_value['ext_url']) {
                                                    $url = $submenu_value['ext_url_link'];
                                                } else {
                                                    $url = site_url($submenu_value['page_url']);
                                                }
                                                ?>
                                <?php
								if (!empty($submenu_value['submenus'])) {
                                    $csubmenus = true;
                                    $ccls_menu_dropdown = "dropdown";
                                }           
                                
                                 if (!$csubmenus){
                                    ?>
                                    <li><a class="dropdown-item" href="<?php echo $url; ?>" <?php echo $child_new_tab; ?> ><?php echo $submenu_value['menu'] ?></a></li>
                                    <?php
                                 }
                                 else{
                                     ?>
                                     <li><a class="dropdown-item dropdown-toggle" href="<?php echo $url; ?>" <?php echo $child_new_tab; ?> ><?php echo $submenu_value['menu'] ?></a>
                                         <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <?php
                                     foreach($submenu_value['submenus'] as $ckey=>$cval){
                                                 if ($cval['open_new_tab']) {
                                                    $child_new_tab = "target='_blank'";
                                                }
                                                if ($cval['ext_url']) {
                                                    $url = $cval['ext_url_link'];
                                                } else {
                                                    $url = site_url($cval['page_url']);
                                                }
                                         ?>
                                         <li><a class="dropdown-item" href="<?php echo $url; ?>" <?php echo $child_new_tab; ?> ><?php echo $cval['menu'] ?></a></li>
                                         <?php
                                     }
                                     ?>
                                     </ul>
                                     </li>
									 <?php
									 }
									 ?>                                               
                                                <?php
                                            }
                                            ?>

                                        </ul>

                                        <?php
                                    }
                                    ?>


                                </li>
                                <?php
                            }
                            ?>
        </ul>
      </div>
    </nav>
  </div>
</div>