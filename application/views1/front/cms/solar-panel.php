    <section class="pageBanner">
      <img src="<?php echo base_url(); ?>assets/front/img/slide/shutterstock_1780391507.jpg" alt="" class="bannerImg">
      <section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <h2><?php echo $this->lang->line('know_solar'); ?></h2>
            <ol>
              <li><a href="index.html">Home</a></li>
              <li><?php echo $this->lang->line('know_solar'); ?></li>
            </ol>
          </div>
        </div>
      </section>
    </section>


    <section class="inner-page aboutPage">
      <div class="container">
        <div class="section-title text-left">
          <h2><?php echo $this->lang->line('know_solar'); ?></h2>
          <?php 
              $know_solar_description = json_decode(getPageDetailsByAlias('know-solar','description'),true);
              echo $know_solar_description[getSessionLang()];
          ?>          
        </div>

        <div class="row">
          <div class="col-lg-3">
            <div class="section-title text-left">
              <h5><?php echo $this->lang->line('learn_more_about_roshni_solar'); ?></h5>
            </div>
            <ul class="nav nav-tabs flex-column sideNavTab">
              <li class="nav-item">
                <a class="nav-link <?php echo (($this->uri->segment(1) == 'solar-panel')?'show active':''); ?>" data-toggle="tab" href="#tab-1">
                  <div class="d-flex align-items-center">
                    <div class="icon"><img src="<?php echo base_url(); ?>assets/front/img/vision.png"></div>
                    <div class="ml-3">
                      <h6  class="m-0"><?php echo $this->lang->line('solar_panels'); ?></h6>
                      <p class="m-0"><i class="fa fa-long-arrow-right"></i></p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link <?php echo (($this->uri->segment(1) == 'ongrid-system')?'show active':''); ?>" data-toggle="tab" href="#tab-2">
                  <div class="d-flex align-items-center">
                    <div class="icon"><img src="<?php echo base_url(); ?>assets/front/img/goal.png"></div>
                    <div class="ml-3">
                      <h6  class="m-0"><?php echo $this->lang->line('on_grid_system'); ?></h6>
                      <p class="m-0"><i class="fa fa-long-arrow-right"></i></p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link <?php echo (($this->uri->segment(1) == 'offgrid-system')?'show active':''); ?>" data-toggle="tab" href="#tab-3">
                  <div class="d-flex align-items-center">
                    <div class="icon"><img src="<?php echo base_url(); ?>assets/front/img/diamond.png"></div>
                    <div class="ml-3">
                      <h6  class="m-0"><?php echo $this->lang->line('off_grid_system'); ?></h6>
                      <p class="m-0"><i class="fa fa-long-arrow-right"></i></p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link <?php echo (($this->uri->segment(1) == 'hybrid-system')?'show active':''); ?>" data-toggle="tab" href="#tab-4">
                  <div class="d-flex align-items-center">
                    <div class="icon"><img src="<?php echo base_url(); ?>assets/front/img/skills.png"></div>
                    <div class="ml-3">
                      <h6  class="m-0"><?php echo $this->lang->line('hybrid_system'); ?></h6>
                      <p class="m-0"><i class="fa fa-long-arrow-right"></i></p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-5">
                  <div class="d-flex align-items-center">
                    <div class="icon"><img src="<?php echo base_url(); ?>assets/front/img/choice.png"></div>
                    <div class="ml-3">
                      <h6  class="m-0"><?php echo $this->lang->line('solar_tracking'); ?></h6>
                      <p class="m-0"><i class="fa fa-long-arrow-right"></i></p>
                    </div>
                  </div>
                </a>
              </li>
               
            </ul>

          </div>
          <div class="col-lg-9">
            <div class="tab-content">
              
			  
			  <div class="tab-pane <?php echo (($this->uri->segment(1) == 'solar-panel')?'show active':''); ?>" id="tab-1">
               <h5> <?php echo $this->lang->line('solar_panels'); ?></h5> 
                <?php 
                    $solar_panel_description = json_decode(getPageDetailsByAlias('solar-panel','description'),true);
                    echo $solar_panel_description[getSessionLang()];
                ?>                 
              </div>
              
			  
			  <div class="tab-pane <?php echo (($this->uri->segment(1) == 'ongrid-system')?'show active':''); ?>" id="tab-2">
                <h5><?php echo $this->lang->line('on_grid_system'); ?></h5> 
               <?php 
                    $ongrid_system_description = json_decode(getPageDetailsByAlias('ongrid-system','description'),true);
                    echo $ongrid_system_description[getSessionLang()];
                ?>                
              </div>
              
			  
			  <div class="tab-pane <?php echo (($this->uri->segment(1) == 'offgrid-system')?'show active':''); ?>" id="tab-3">
                <h5><?php echo $this->lang->line('off_grid_system'); ?></h5> 
				        <?php 
                    $offgrid_system_description = json_decode(getPageDetailsByAlias('offgrid-system','description'),true);
                    echo $offgrid_system_description[getSessionLang()];
                ?>
               </div>
			  
			  
			  
			  <div class="tab-pane <?php echo (($this->uri->segment(1) == 'hybrid-system')?'show active':''); ?>" id="tab-4">
                <h5><?php echo $this->lang->line('hybrid_system'); ?></h5> 
				        <?php 
                    $hybrid_system_description = json_decode(getPageDetailsByAlias('hybrid-system','description'),true);
                    echo $hybrid_system_description[getSessionLang()];
                ?>
              </div>
			  
			  <div class="tab-pane" id="tab-5">
                <h5><?php echo $this->lang->line('solar_tracking'); ?></h5> 
				        <p>Solar Trackers are technology addendum to Solar PV Modules which direct solar panels in direct line of the Sun. These devices are designed to change the orientation throughout the radiant days of the Sun to follow the Sun’s path to maximize energy capture. The trackers follow the Sun vertically and horizontally to help obtaining maximum solar energy generations.</p>
                
              </div>
			  
			  
			  
            </div>
          </div>
		  
		  
		  
		  
        </div>

      </div>
    </section>

    
    