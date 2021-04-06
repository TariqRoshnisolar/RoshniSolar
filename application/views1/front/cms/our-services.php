    <section class="pageBanner">
      <img src="<?php echo base_url(); ?>assets/front/img/slide/shutterstock_1780391507.jpg" alt="" class="bannerImg">
      <section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <h2><?php echo $this->lang->line('our_services'); ?></h2>
            <ol>
              <li><a href="<?php echo base_url(); ?>">Home</a></li>
              <li><?php echo $this->lang->line('our_services'); ?></li>
            </ol>
          </div>
        </div>
      </section>
    </section>


    <section class="inner-page aboutPage">
      <div class="container">
        <div class="section-title text-left">
          <h2><?php echo $this->lang->line('our_services'); ?></h2>
          <?php 
              $our_service_description = json_decode(getPageDetailsByAlias('our-services','description'),true);
              echo $our_service_description[getSessionLang()];
          ?>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <div class="section-title text-left">
              <h5><?php echo $this->lang->line('learn_more_about_roshni_solar'); ?></h5>
            </div>
            <ul class="nav nav-tabs flex-column sideNavTab">
              <li class="nav-item">
                <a class="nav-link <?php echo (($this->uri->segment(1) == 'our-advantages')?'show active':''); ?>" data-toggle="tab" href="#tab-1">
                  <div class="d-flex align-items-center">
                    <div class="icon"><img src="<?php echo base_url(); ?>assets/front/img/vision.png"></div>
                    <div class="ml-3">
                      <h6  class="m-0"><?php echo $this->lang->line('our_advantages'); ?></h6>
                      <p class="m-0"><i class="fa fa-long-arrow-right"></i></p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link <?php echo (($this->uri->segment(1) == 'solar-technology_solutions' || $this->uri->segment(1) == 'rooftop-solar' || $this->uri->segment(1) == 'ground-mounted-solar' || $this->uri->segment(1) == 'solar-parks' || $this->uri->segment(1) == 'floating-solar-system')?'show active':''); ?>" data-toggle="tab" href="#tab-2">
                  <div class="d-flex align-items-center">
                    <div class="icon"><img src="<?php echo base_url(); ?>assets/front/img/goal.png"></div>
                    <div class="ml-3">
                      <h6  class="m-0"><?php echo $this->lang->line('solar_technology_solutions'); ?></h6>
                      <p class="m-0"><i class="fa fa-long-arrow-right"></i></p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link <?php echo (($this->uri->segment(1) == 'business-model' || $this->uri->segment(1) == 'capex' || $this->uri->segment(1) == 'resco-opex-boat-considers-ppa')?'show active':''); ?>" data-toggle="tab" href="#tab-3">
                  <div class="d-flex align-items-center">
                    <div class="icon"><img src="<?php echo base_url(); ?>assets/front/img/diamond.png"></div>
                    <div class="ml-3">
                      <h6  class="m-0"><?php echo $this->lang->line('business_model'); ?></h6>
                      <p class="m-0"><i class="fa fa-long-arrow-right"></i></p>
                    </div>
                  </div>
                </a>
              </li>           
               
            </ul>

          </div>
          <div class="col-lg-9">
            <div class="tab-content">			  
			        <div class="tab-pane <?php echo (($this->uri->segment(1) == 'our-advantages')?'show active':''); ?>" id="tab-1">
                <h5> <?php echo $this->lang->line('our_advantages'); ?></h5> 
                <?php 
                    $our_advantages_description = json_decode(getPageDetailsByAlias('our-advantages','description'),true);
                    echo $our_advantages_description[getSessionLang()];
                ?>
              </div>			  
			        <div class="tab-pane <?php echo (($this->uri->segment(1) == 'solar-technology_solutions' || $this->uri->segment(1) == 'rooftop-solar'  || $this->uri->segment(1) == 'ground-mounted-solar' || $this->uri->segment(1) == 'solar-parks' || $this->uri->segment(1) == 'floating-solar-system')?'show active':''); ?>" id="tab-2">
                <h5><?php echo $this->lang->line('solar_technology_solutions'); ?></h5> 
                <?php 
                    $solar_technology_solutions_description = json_decode(getPageDetailsByAlias('solar-technology_solutions','description'),true);
                    echo $solar_technology_solutions_description[getSessionLang()];
                ?>                
                <div class="tab" role="tabpanel">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link <?php echo (($this->uri->segment(1) == 'rooftop-solar' || $this->uri->segment(1) == 'solar-technology_solutions')?'active':''); ?>" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true"><?php echo $this->lang->line('rooftop_solar'); ?></a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link <?php echo (($this->uri->segment(1) == 'ground-mounted-solar')?'active':''); ?>" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><?php echo $this->lang->line('ground_mounted_solar'); ?></a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link <?php echo (($this->uri->segment(1) == 'solar-parks')?'active':''); ?>" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><?php echo $this->lang->line('solar_parks'); ?></a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link <?php echo (($this->uri->segment(1) == 'floating-solar-system')?'active':''); ?>" id="tab3-tab" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><?php echo $this->lang->line('floating_solar_system'); ?></a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade <?php echo (($this->uri->segment(1) == 'rooftop-solar' || $this->uri->segment(1) == 'solar-technology_solutions')?'show active':''); ?>" id="tab1" role="tabpanel" aria-labelledby="home-tab">
                       <?php 
                          $rooftop_solar_description = json_decode(getPageDetailsByAlias('rooftop-solar','description'),true);
                          echo $rooftop_solar_description[getSessionLang()];
                      ?>
                      <div class="row">
                          <div class="col-md-6">
                            <img src="<?php echo base_url(); ?>assets/front/img/others/Installation-on-Commercial-Premises-1.jpg" class="img-fluid mb-3">
                          </div>
                          <div class="col-md-6">
                            <img src="<?php echo base_url(); ?>assets/front/img/others/35616_large.jpg" class="img-fluid mb-3">
                          </div>
                      </div>
                    </div>
                    <div class="tab-pane fade <?php echo (($this->uri->segment(1) == 'ground-mounted-solar')?'show active':''); ?>" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                      <?php 
                          $ground_mounted_solar_description = json_decode(getPageDetailsByAlias('ground-mounted-solar','description'),true);
                          echo $ground_mounted_solar_description[getSessionLang()];
                      ?>
                      <div class="row">
                          <div class="col-md-6">
                            <img src="<?php echo base_url(); ?>assets/front/img/others/27-1.jpg" class="img-fluid mb-3">
                          </div>
                          <div class="col-md-6">
                            <img src="<?php echo base_url(); ?>assets/front/img/others/SOlar-3.jpg" class="img-fluid mb-3">
                          </div>
                      </div>
                    </div>
                    <div class="tab-pane fade <?php echo (($this->uri->segment(1) == 'solar-parks')?'show active':''); ?>" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                      <?php 
                          $solar_parks_solar_description = json_decode(getPageDetailsByAlias('solar-parks','description'),true);
                          echo $solar_parks_solar_description[getSessionLang()];
                      ?>
                      <div class="row">
                          <div class="col-md-6">
                            <img src="<?php echo base_url(); ?>assets/front/img/others/ultra-tech-banner.jpg" class="img-fluid mb-3">
                          </div>
                          <div class="col-md-6">
                            <img src="<?php echo base_url(); ?>assets/front/img/others/zonnepark.jpg" class="img-fluid mb-3">
                          </div>
                      </div>
                    </div>
                    <div class="tab-pane fade <?php echo (($this->uri->segment(1) == 'floating-solar-system')?'show active':''); ?>" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                      <?php 
                          $floating_solar_system_description = json_decode(getPageDetailsByAlias('floating-solar-system','description'),true);
                          echo $floating_solar_system_description[getSessionLang()];
                      ?>
                      <div class="row">
                          <div class="col-md-6">
                            <img src="<?php echo base_url(); ?>assets/front/img/others/1588823166floatingsolar(cover).jpg" class="img-fluid mb-3">
                          </div>
                          <div class="col-md-6">
                            <img src="<?php echo base_url(); ?>assets/front/img/others/floating-solar-1280x720.jpg" class="img-fluid mb-3">
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
               
              </div>			  
			        <div class="tab-pane <?php echo (($this->uri->segment(1) == 'business-model' || $this->uri->segment(1) == 'capex' || $this->uri->segment(1) == 'resco-opex-boat-considers-ppa')?'show active':''); ?>" id="tab-3">
                <h5><?php echo $this->lang->line('business_model'); ?></h5> 
				         <div class="tab" role="tabpanel">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link <?php echo (($this->uri->segment(1) == 'business-model' || $this->uri->segment(1) == 'capex')?'active':''); ?>" id="tab5-tab" data-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="true"><?php echo $this->lang->line('capex'); ?></a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link <?php echo (($this->uri->segment(1) == 'resco-opex-boat-considers-ppa')?'active':''); ?>" id="tab6-tab" data-toggle="tab" href="#tab6" role="tab" aria-controls="tab6" aria-selected="false"><?php echo $this->lang->line('resco_opex_boat_considers_ppa'); ?></a>
                    </li>                    
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade <?php echo (($this->uri->segment(1) == 'capex' || $this->uri->segment(1) == 'business-model')?'show active':''); ?>" id="tab5" role="tabpane5" aria-labelledby="tab5-tab">
                      <?php 
                          $capex_description = json_decode(getPageDetailsByAlias('capex','description'),true);
                          echo $capex_description[getSessionLang()];
                      ?>
                    </div>
                    <div class="tab-pane fade <?php echo (($this->uri->segment(1) == 'resco-opex-boat-considers-ppa')?'show active':''); ?>" id="tab6" role="tabpane6" aria-labelledby="tab6-tab">
                      <?php 
                          $resco_opex_boat_considers_ppa_description = json_decode(getPageDetailsByAlias('resco-opex-boat-considers-ppa','description'),true);
                          echo $resco_opex_boat_considers_ppa_description[getSessionLang()];
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    