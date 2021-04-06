<section class="pageBanner">
  <img src="<?php echo base_url(); ?>assets/front/img/others/Fotolia_97870858_Subscription_Monthly_M-e1485188400740.jpg" alt="" class="bannerImg">
  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2><?php echo $this->lang->line('privacy_policy'); ?></h2>
        <ol>
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li><?php echo $this->lang->line('privacy_policy'); ?></li>
        </ol>
      </div>
    </div>
  </section>
</section>
<section id="about" class="about">
  <div class="container">
    <div class="section-title"><h2><?php echo $this->lang->line('privacy_policy'); ?></h2> </div>
    <div class="row no-gutters">
      <div class="col-lg-12 about-content">
        <div class="section-title text-left">
          <?php 
              $privacy_policy_description = json_decode(getPageDetailsByAlias('privacy-policy','description'),true);
              echo $privacy_policy_description[getSessionLang()];
          ?>              
        </div>
      </div>
    </div>
  </div>
</section>