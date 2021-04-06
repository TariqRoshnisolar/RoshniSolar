<section class="pageBanner">
  <img src="<?php echo base_url(); ?>assets/front/img/others/shutterstock_753111403.jpg" alt="" class="bannerImg">
  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2><?php echo $this->lang->line('terms_of_service'); ?></h2>
        <ol>
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li><?php echo $this->lang->line('terms_of_service'); ?></li>
        </ol>
      </div>
    </div>
  </section>
</section>
<section id="about" class="about">
  <div class="container">
    <div class="section-title"><h2><?php echo $this->lang->line('terms_of_service'); ?></h2> </div>
    <div class="row no-gutters">
      <div class="col-lg-12 about-content">
        <div class="section-title text-left">
          <?php 
              $terms_of_service_description = json_decode(getPageDetailsByAlias('tearms-condition','description'),true);
              echo $terms_of_service_description[getSessionLang()];
          ?>              
        </div>
      </div>
    </div>
  </div>
</section>