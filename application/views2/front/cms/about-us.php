    <style>
    .zoomImage {cursor: zoom-in;}
    ul.product-list{ margin:2% 0; text-align:center;}
    ul.product-list li{ display:inline-table; width:330px; overflow:hidden;  margin-right:25px; position:relative; margin-bottom:25px; }
    ul.product-list li img{ width:100%;}
    ul.product-list li p{ background-color:rgba(0, 0, 0, 0.7); color:#fff; font-size:18px; text-align:center; padding:15px; position:absolute; z-index:100!important; bottom:0; display:block; overflow:hidden; width:100%; }
    .highslide-gallery{padding: 3%;margin-top: 3%;margin-bottom: 3%;border-radius: 0.5rem;background: #fff;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;}
    .highslide-gallery:hover {box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);}
    </style>
   <!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/highslide.css" />
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/highslide-with-gallery.js"></script> 
    <script type="text/javascript">
      hs.graphicsDir = 'highslide/graphics/';
      hs.align = 'center';
      hs.transitions = ['expand', 'crossfade'];
      hs.outlineType = 'glossy-dark';
      hs.wrapperClassName = 'dark';
      hs.fadeInOut = true;

      //hs.dimmingOpacity = 0.75;

      // Add the controlbar
      if (hs.addSlideshow) hs.addSlideshow({
        //slideshowGroup: 'group1',
        interval: 5000,
        repeat: false,
        useControls: true,
        fixedControls: 'fit',
        overlayOptions: {
          opacity: .4,
          position: 'bottom center',
          hideOnMouseOut: true
        }
      });
      </script> 
      -->
    
    <section class="pageBanner">
      <img src="<?php echo base_url(); ?>assets/front/img/slide/shutterstock_1204469662.jpg" alt="" class="bannerImg">
      <section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <h2><?php echo $this->lang->line('about_us'); ?></h2>
            <ol>
              <li><a href="<?php echo base_url(); ?>">Home</a></li>
              <li><?php echo $this->lang->line('about_us'); ?></li>
            </ol>
          </div>
        </div>
      </section>
    </section>


    <section class="inner-page aboutPage">
      <div class="container">
        <div class="section-title text-left">
          <h2><?php echo $this->lang->line('who_we_are'); ?></h2>
          <p class=""><!-- Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. --> </p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <div class="section-title text-left">
              <h5><?php echo $this->lang->line('learn_more_about_roshni_solar'); ?></h5>
            </div>
            <ul class="nav nav-tabs flex-column sideNavTab">
              <li class="nav-item">
                <a class="nav-link <?php echo (($this->uri->segment(1) == 'mission')?'show active':''); ?>" data-toggle="tab" href="#tab-1">
                  <div class="d-flex align-items-center">
                    <div class="icon"><img src="<?php echo base_url(); ?>assets/front/img/vision.png"></div>
                    <div class="ml-3">
                      <h6  class="m-0"><?php echo $this->lang->line('our_missions'); ?></h6>
                      <p class="m-0"><i class="fa fa-long-arrow-right"></i></p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link <?php echo (($this->uri->segment(1) == 'vision')?'show active':''); ?>" data-toggle="tab" href="#tab-2">
                  <div class="d-flex align-items-center">
                    <div class="icon"><img src="<?php echo base_url(); ?>assets/front/img/goal.png"></div>
                    <div class="ml-3">
                      <h6  class="m-0"><?php echo $this->lang->line('our_visions'); ?></h6>
                      <p class="m-0"><i class="fa fa-long-arrow-right"></i></p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link <?php echo (($this->uri->segment(1) == 'values')?'show active':''); ?>" data-toggle="tab" href="#tab-3">
                  <div class="d-flex align-items-center">
                    <div class="icon"><img src="<?php echo base_url(); ?>assets/front/img/diamond.png"></div>
                    <div class="ml-3">
                      <h6  class="m-0"><?php echo $this->lang->line('values'); ?></h6>
                      <p class="m-0"><i class="fa fa-long-arrow-right"></i></p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link <?php echo (($this->uri->segment(1) == 'who-we-are')?'show active':''); ?>" data-toggle="tab" href="#tab-4">
                  <div class="d-flex align-items-center">
                    <div class="icon"><img src="<?php echo base_url(); ?>assets/front/img/skills.png"></div>
                    <div class="ml-3">
                      <h6  class="m-0"><?php echo $this->lang->line('who_we_are'); ?>?</h6>
                      <p class="m-0"><i class="fa fa-long-arrow-right"></i></p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link <?php echo (($this->uri->segment(1) == 'who-we-us')?'show active':''); ?>" data-toggle="tab" href="#tab-5">
                  <div class="d-flex align-items-center">
                    <div class="icon"><img src="<?php echo base_url(); ?>assets/front/img/choice.png"></div>
                    <div class="ml-3">
                      <h6  class="m-0"> <?php echo $this->lang->line('who_we_us'); ?>?</h6>
                      <p class="m-0"><i class="fa fa-long-arrow-right"></i></p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link <?php echo (($this->uri->segment(1) == 'certificatian')?'show active':''); ?>" data-toggle="tab" href="#tab-6">
                  <div class="d-flex align-items-center">
                    <div class="icon"><img src="<?php echo base_url(); ?>assets/front/img/award.png"></div>
                    <div class="ml-3">
                      <h6  class="m-0"><?php echo $this->lang->line('certificatin'); ?></h6>
                      <p class="m-0"><i class="fa fa-long-arrow-right"></i></p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>

          </div>
          <div class="col-lg-9">
            <div class="tab-content">
              <div class="tab-pane <?php echo (($this->uri->segment(1) == 'about-us')?'show active':''); ?> <?php echo (($this->uri->segment(1) == 'mission')?'show active':''); ?>" id="tab-1">
               <h5> <?php echo $this->lang->line('mission'); ?></h5> 
                <?php 
                $mission_description = json_decode(getPageDetailsByAlias('mission','description'),true);
                echo $mission_description[getSessionLang()];
                ?>                
                <!-- <img style="position: unset;" src="<?php echo base_url(); ?>assets/front/img/others/shutterstock_259055471.jpg" class="img-fluid mb-3"> -->
                <!-- <p>What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?</p>
                <p>What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?</p> -->
              </div>
              <div class="tab-pane <?php echo (($this->uri->segment(1) == 'vision')?'show active':''); ?>" id="tab-2">
                <h5><?php echo $this->lang->line('vission'); ?></h5> 
                <?php 
                $vission_description = json_decode(getPageDetailsByAlias('vission','description'),true);
                echo $vission_description[getSessionLang()];
                ?>
                <!-- <img src="<?php echo base_url(); ?>assets/front/img/others/shutterstock_1780391507.jpg" class="img-fluid mb-3"> -->
				<!-- <div class="row mb-3">
                  <div class="col-sm-6">
                    <div class="card mb-3">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Button</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="card mb-3">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Button</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="card mb-3">
                      <img src="<?php echo base_url(); ?>assets/front/img/slide/slide-2.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="card mb-3">
                      <img src="<?php echo base_url(); ?>assets/front/img/slide/slide-2.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
                </div> -->
				
              </div>
              
			  
    			   <div class="tab-pane <?php echo (($this->uri->segment(1) == 'values')?'show active':''); ?>" id="tab-3">
                <h5><?php echo $this->lang->line('values'); ?></h5>
                <?php 
                $values_description = json_decode(getPageDetailsByAlias('values','description'),true);
                echo $values_description[getSessionLang()];
                ?>    				    
            </div>
    			  <div class="tab-pane <?php echo (($this->uri->segment(1) == 'who-we-are')?'show active':''); ?>" id="tab-4">
                <h5> <?php echo $this->lang->line('who_we_are'); ?>?</h5> 
                <?php 
                $who_we_wre_description = json_decode(getPageDetailsByAlias('who-we-are','description'),true);
                // echo $who_we_wre_description[getSessionLang()];
                ?>
                <?php echo $this->lang->line('who_we_are_detail'); ?>
                <img src="<?php echo base_url(); ?>assets/front/img/others/file-20170823-13293-cv4um.jpg" class="img-fluid mb-3">
            </div>	
    			  <div class="tab-pane <?php echo (($this->uri->segment(1) == 'who-we-us')?'show active':''); ?>" id="tab-5">
              <h5><?php echo $this->lang->line('our_leading_edge'); ?></h5> 
              <?php 
                $who_we_us_description = json_decode(getPageDetailsByAlias('who-we-us','description'),true);
                echo $who_we_us_description[getSessionLang()];
              ?>			
            </div>
             <div class="tab-pane <?php echo (($this->uri->segment(1) == 'certificatian')?'show active':''); ?>" id="tab-6">
                <h5><?php echo $this->lang->line('certificatin'); ?></h5>         
                <?php 
                  $certification_description = json_decode(getPageDetailsByAlias('certificatian','home_description'),true);
                  echo $certification_description[getSessionLang()];
                ?>
                <div class="row mb-3"> 
                  <ul class="product-list page-content">
                    <li class="highslide-gallery">
                        <a href="<?php echo base_url(); ?>assets/front/certification/CERTIFICATE OF INCORPORATION-1.jpg" class="highslide" onclick="return hs.expand(this)" target="_blank">
                        <img src="<?php echo base_url(); ?>assets/front/certification/CERTIFICATE OF INCORPORATION-1.jpg" class="img-responsive zoomImage" alt=""> 
                       </a>
                    </li>
                    <li class="highslide-gallery">
                       <a href="<?php echo base_url(); ?>assets/front/certification/PAN-1.jpg" class="highslide" onclick="return hs.expand(this)" target="_blank">
                        <img src="<?php echo base_url(); ?>assets/front/certification/PAN-1.jpg" class="img-responsive zoomImage" alt="">
                       </a>
                    </li>
                    <li class="highslide-gallery">
                       <a href="<?php echo base_url(); ?>assets/front/certification/TAN-1.jpg" class="highslide" onclick="return hs.expand(this)" target="_blank">
                        <img src="<?php echo base_url(); ?>assets/front/certification/TAN-1.jpg" class="img-responsive zoomImage" alt="">
                       </a>
                    </li>
                    <li class="highslide-gallery">
                       <a href="<?php echo base_url(); ?>assets/front/certification/9d820796-8856-4f7e-8971-fd1c8872d03e.jpg" class="highslide" onclick="return hs.expand(this)" target="_blank">
                        <img src="<?php echo base_url(); ?>assets/front/certification/9d820796-8856-4f7e-8971-fd1c8872d03e.jpg" class="img-responsive zoomImage" alt="">
                       </a>
                    </li>
                  </ul>
                  <!-- </ul>                 
                  <div class="col-sm-4">
                    <a href="<?php echo base_url(); ?>assets/front/certification/CERTIFICATE OF INCORPORATION-1.jpg" class="highslide" onclick="return hs.expand(this)">
                    <img src="<?php echo base_url(); ?>assets/front/certification/CERTIFICATE OF INCORPORATION-1.jpg" class="card-img-top" alt=""> 
                    </a>                   
                  </div>
                  <div class="col-sm-4">
                    <a href="<?php echo base_url(); ?>assets/front/certification/PAN-1.jpg" class="highslide" onclick="return hs.expand(this)">
                    <img src="<?php echo base_url(); ?>assets/front/certification/PAN-1.jpg" class="card-img-top" alt="">
                    </a>
                  </div>
                  <div class="col-sm-4">
                    <a href="<?php echo base_url(); ?>assets/front/certification/TAN-1.jpg" class="highslide" onclick="return hs.expand(this)">
                    <img src="<?php echo base_url(); ?>assets/front/certification/TAN-1.jpg" class="card-img-top" alt="">
                    </a>
                  </div> -->
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="videoSec pt-0">
      <div class="container">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
        </div>        
      </div>
    </section> --> 
    
    <script type="text/javascript" href="http://www.jyotysolarpower.com/js/crawler.js"></script>
    <script type="text/javascript">
      marqueeInit({
      uniqueid: 'mycrawler',
      style: {
      'width': '100%',
      'cursor':'pointer'

      },
      inc: 1, //speed - pixel increment for each iteration of this marquee's movement
      mouse: 'pause', //mouseover behavior ('pause' 'cursor driven' or false)
      moveatleast:15,
      neutral: 300,
      savedirection: false
      });
    </script>
    <script type="text/javascript" href="http://www.jyotysolarpower.com/js/simple-lightbox.js"></script>
    <script>
      $(function(){
        var gallery = $('.project-gallery a').simpleLightbox();
      });
    </script>
    
    
   
   