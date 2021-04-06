<section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">            
            <a href="<?php echo base_url();?>who-we-are">
              <img src="<?php echo base_url();?>assets/front/img/Artboard 1Banner11.png" class="img-fluid w-100" alt="" style="height: 93%;">
            </a>
          </div>

          <div class="col-lg-6 about-content">

            <div class="section-title text-left">
              <h2>
                <?php 
                $title = json_decode(getPageDetailsByAlias('about-us','title'),true);
                echo $title[getSessionLang()];
                ?>
              </h2>
              <p class="">
                <?php 
                $home_description = json_decode(getPageDetailsByAlias('about-us','home_description'),true);
                //echo $home_description[getSessionLang()];
                ?>
              </p>              
            </div>
            <div class="tab" role="tabpanel">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">
                  <?php 
                  $vission_title = json_decode(getPageDetailsByAlias('vission','title'),true);
                  echo $vission_title[getSessionLang()];
                  ?>
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">
                  <?php 
                  $mission_title = json_decode(getPageDetailsByAlias('mission','title'),true);
                  echo $mission_title[getSessionLang()];
                  ?>
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">
                  <?php 
                  $who_we_are_title = json_decode(getPageDetailsByAlias('who-we-are','title'),true);
                  echo $who_we_are_title[getSessionLang()];
                  ?>
                  </a>
                </li>

              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="home-tab">
                  <?php 
                  $home_description = json_decode(getPageDetailsByAlias('vission','home_description'),true);
				  // print_r($home_description);
                  echo substr($home_description[getSessionLang()],0, 344);
                  ?>
                  <a href="https://roshnisolar.in/vision" class=""><?php echo $this->lang->line('know_more'); ?></a> 
                </div>
                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                  <?php 
                  $mission_home_description = json_decode(getPageDetailsByAlias('mission','home_description'),true);
          // print_r($mission_home_description);

                  echo substr($mission_home_description[getSessionLang()],0, 344);
                  ?>
                  <a href="https://roshnisolar.in/mission" class=""><?php echo $this->lang->line('know_more'); ?></a> 
                </div>
                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                  <?php 
                  $who_we_are_home_description = json_decode(getPageDetailsByAlias('who-we-are','home_description'),true);
                   echo substr($who_we_are_home_description[getSessionLang()],0, 344);

                  ?>
                  <!--<?php echo $this->lang->line('who_we_are_detail'); ?>-->
                  <a href="<?=base_url()?>who-we-are" class=""><?php echo $this->lang->line('know_more'); ?></a> 
                </div>
    
              </div>
            </div>



          </div>
        </div>

      </div>
    </section>