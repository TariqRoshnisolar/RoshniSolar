    <section class="pageBanner">
      <img src="<?php echo base_url(); ?>assets/front/img/others/hotel-energy.jpg" alt="" class="bannerImg">
      <section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <h2><?php echo $this->lang->line('solar_products'); ?></h2>
            <ol>
              <li><a href="<?php echo base_url(); ?>">Home</a></li>
              <li><?php echo $this->lang->line('solar_products'); ?></li>
            </ol>
          </div>
        </div>
      </section>
    </section>


    <section class="inner-page aboutPage">
      <div class="container">
        <div class="section-title text-left">
          <h2><?php echo $this->lang->line('solar_products'); ?></h2>
          <?php 
              $solar_products_description = json_decode(getPageDetailsByAlias('solar-products','description'),true);
              // echo $solar_products_description[getSessionLang()];
          ?>  
          <?php echo $this->lang->line('Solar Products'); ?>        
        </div>
        <div class="row">
          <div class="col-lg-3">
            <div class="section-title text-left">
              <h5><?php echo $this->lang->line('learn_more_about_roshni_solar'); ?></h5>
            </div>
            <ul class="nav nav-tabs flex-column sideNavTab">
              <li class="nav-item">
                <a class="nav-link <?php echo (($this->uri->segment(1) == 'modules' || $this->uri->segment(1) == 'solar-products')?'show active':''); ?>" data-toggle="tab" href="#tab-1">
                  <div class="d-flex align-items-center">
                    <div class="icon"><img src="<?php echo base_url(); ?>assets/front/img/vision.png"></div>
                    <div class="ml-3">
                      <h6  class="m-0"><?php echo $this->lang->line('modules'); ?></h6>
                      <p class="m-0"><i class="fa fa-long-arrow-right"></i></p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link <?php echo (($this->uri->segment(1) == 'monocrystaline')?'show active':''); ?>" data-toggle="tab" href="#tab-2">
                  <div class="d-flex align-items-center">
                    <div class="icon"><img src="<?php echo base_url(); ?>assets/front/img/goal.png"></div>
                    <div class="ml-3">
                      <h6  class="m-0"><?php echo $this->lang->line('monocrystaline'); ?></h6>
                      <p class="m-0"><i class="fa fa-long-arrow-right"></i></p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link <?php echo (($this->uri->segment(1) == 'polycrystaline')?'show active':''); ?>" data-toggle="tab" href="#tab-3">
                  <div class="d-flex align-items-center">
                    <div class="icon"><img src="<?php echo base_url(); ?>assets/front/img/diamond.png"></div>
                    <div class="ml-3">
                      <h6  class="m-0"><?php echo $this->lang->line('polycrystaline'); ?></h6>
                      <p class="m-0"><i class="fa fa-long-arrow-right"></i></p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link <?php echo (($this->uri->segment(1) == 'mono-perc' || $this->uri->segment(1) == 'remote-monitoring' || $this->uri->segment(1) == 'solar-pumps' || $this->uri->segment(1) == 'solar-heater' || $this->uri->segment(1) == 'solar-street-light')?'show active':''); ?>" data-toggle="tab" href="#tab-4">
                  <div class="d-flex align-items-center">
                    <div class="icon"><img src="<?php echo base_url(); ?>assets/front/img/diamond.png"></div>
                    <div class="ml-3">
                      <h6  class="m-0"><?php echo $this->lang->line('mono_perc'); ?></h6>
                      <p class="m-0"><i class="fa fa-long-arrow-right"></i></p>
                    </div>
                  </div>
                </a>
              </li>            
               
            </ul>

          </div>
          <div class="col-lg-9">
            <div class="tab-content">			  
			        <div class="tab-pane <?php echo (($this->uri->segment(1) == 'modules' || $this->uri->segment(1) == 'solar-products')?'show active':''); ?>" id="tab-1">
                <h5> <?php echo $this->lang->line('modules'); ?></h5> 
                <?php 
                    $modules_description = json_decode(getPageDetailsByAlias('modules','description'),true);
                    echo $modules_description[getSessionLang()];
                ?>
              </div>			  
			        <div class="tab-pane <?php echo (($this->uri->segment(1) == 'monocrystaline')?'show active':''); ?>" id="tab-2">
                <h5><?php echo $this->lang->line('monocrystaline'); ?></h5> 
                <?php 
                    $monocrystaline_description = json_decode(getPageDetailsByAlias('monocrystaline','description'),true);
                    echo $monocrystaline_description[getSessionLang()];
                ?>
                <div class="row">
                      <div class="col-md-6">
                        <img src="<?php echo base_url(); ?>assets/front/img/others/20180614-DSC08757.jpg" class="img-fluid mb-3">
                      </div>
                      <div class="col-md-6">
                        <img src="<?php echo base_url(); ?>assets/front/img/others/ezgif.com-webp-to-jpg (1).jpg" class="img-fluid mb-3">
                      </div>
                  </div>
              </div>			  
			        <div class="tab-pane <?php echo (($this->uri->segment(1) == 'polycrystaline')?'show active':''); ?>" id="tab-3">
                <h5><?php echo $this->lang->line('polycrystaline'); ?></h5> 
				         <?php 
                    $polycrystaline_description = json_decode(getPageDetailsByAlias('polycrystaline','description'),true);
                    echo $polycrystaline_description[getSessionLang()];
                ?>
              </div>
              <div class="tab-pane <?php echo (($this->uri->segment(1) == 'mono-perc' || $this->uri->segment(1) == 'remote-monitoring' || $this->uri->segment(1) == 'solar-pumps' || $this->uri->segment(1) == 'solar-heater' || $this->uri->segment(1) == 'solar-street-light' || $this->uri->segment(1) == 'solar-products')?'show active':''); ?>" id="tab-4">
              <div class="tab" role="tabpanel">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link <?php echo (($this->uri->segment(1) == 'remote-monitoring' || $this->uri->segment(1) == 'mono-perc' || $this->uri->segment(1) == 'solar-products')?'active':''); ?>" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true"><?php echo $this->lang->line('remote_monitoring'); ?></a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link <?php echo (($this->uri->segment(1) == 'solar-pumps')?'active':''); ?>" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><?php echo $this->lang->line('solar_pumps'); ?></a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link <?php echo (($this->uri->segment(1) == 'solar-heater')?'active':''); ?>" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><?php echo $this->lang->line('solar_heater'); ?></a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link <?php echo (($this->uri->segment(1) == 'solar-street-light')?'active':''); ?>" id="tab3-tab" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><?php echo $this->lang->line('solar_street_light'); ?></a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade <?php echo (($this->uri->segment(1) == 'remote-monitoring' || $this->uri->segment(1) == 'mono-perc' || $this->uri->segment(1) == 'solar-products')?'show active':''); ?>" id="tab1" role="tabpanel" aria-labelledby="home-tab">                      
                      <?php 
                          $remote_monitoring_description = json_decode(getPageDetailsByAlias('remote-monitoring','description'),true);
                          // echo $remote_monitoring_description[getSessionLang()];
                      ?>
                      <?php echo $this->lang->line('Remote Monitoring'); ?>
                    </div>
                    <div class="tab-pane fade <?php echo (($this->uri->segment(1) == 'solar-pumps')?'show active':''); ?>" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                      <?php 
                          $solar_pumps_description = json_decode(getPageDetailsByAlias('solar-pumps','description'),true);
                          // echo $solar_pumps_description[getSessionLang()];
                      ?>
                      <?php echo $this->lang->line('Solar Pump'); ?>

                    </div>
                    <div class="tab-pane fade <?php echo (($this->uri->segment(1) == 'solar-heater')?'show active':''); ?>" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                      <?php 
                          $solar_heater_description = json_decode(getPageDetailsByAlias('solar-heater','description'),true);
                          // echo $solar_heater_description[getSessionLang()];
                      ?>
                      <?php echo $this->lang->line('Solar Heater'); ?>

                    </div>
                    <div class="tab-pane fade <?php echo (($this->uri->segment(1) == 'solar-street-light')?'show active':''); ?>" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                      <?php 
                          $solar_street_light_description = json_decode(getPageDetailsByAlias('solar-street-light','description'),true);
                          // echo $solar_street_light_description[getSessionLang()];
                      ?>
                      <?php echo $this->lang->line('Solar Street Light'); ?>
                      
                      <div class="row">
                          <div class="col-md-6">
                            <img src="<?php echo base_url(); ?>assets/front/img/others/lampposts-solar-lights-dec062018-min.jpg" class="img-fluid mb-3">
                          </div>
                          <div class="col-md-6">
                            <img src="<?php echo base_url(); ?>assets/front/img/others/ezgif.com-webp-to-jpg.jpg" class="img-fluid mb-3">
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    