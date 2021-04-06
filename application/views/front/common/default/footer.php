<?php $site = getSiteSettings(); ?>

<footer id="footer">

    <div class="footer-top" style="background-image: url('<?php echo base_url(); ?>assets/front/img/footer/footer.jpg');">

      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">

            <h3><?php echo (isset($site->title)?$site->title:'Roshni solar');?></h3>

            <p>

              <?php 

                  $who_we_are_home_description = json_decode(getPageDetailsByAlias('who-we-are','home_description'),true);

                  echo substr($who_we_are_home_description[getSessionLang()],0, 344);



                  ?>

              <br> 

              <a href="<?php echo base_url(); ?>who-we-are" class=""><?php echo $this->lang->line('know_more'); ?></a> </p>            

          </div>



          <div class="col-lg-2 col-md-6 footer-links">

            <h4><?php echo $this->lang->line('useful_links'); ?></h4>

            <ul>

              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url(); ?>">Home</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url(); ?>about-us"><?php echo $this->lang->line('about_us'); ?></a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url(); ?>tearms-condition"><?php echo $this->lang->line('terms_of_service'); ?></a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url(); ?>privacy-policy"><?php echo $this->lang->line('privacy_policy'); ?></a></li>

            </ul>

          </div>



          <div class="col-lg-3 col-md-6 footer-links">

            <h4><?php echo $this->lang->line('our_services'); ?></h4>

            <ul>

              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url(); ?>rooftop-solar"><?php echo $this->lang->line('rooftop_solar'); ?></a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url(); ?>ground-mounted-solar"><?php echo $this->lang->line('ground_mounted_solar'); ?></a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url(); ?>solar-parks"><?php echo $this->lang->line('solar_parks'); ?></a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url(); ?>floating-solar-system"><?php echo $this->lang->line('floating_solar_system'); ?></a></li>

            </ul>

          </div>



          <div class="col-lg-4 col-md-6 footer-newsletter">

            <h4><?php echo $this->lang->line('contact_us'); ?></h4>

            <p>

              <?php echo (isset($site->address)?$site->address:'');?><br><br>

             <strong><?php echo $this->lang->line('phone'); ?>:</strong> <?php echo (isset($site->phone)?$site->phone:'');?><br>

             <strong><?php echo $this->lang->line('email'); ?>:</strong> <?php echo (isset($site->contact_email)?$site->contact_email:'');?><br>

           </p>

           <div class="social-links mt-3">

            <a href="<?php echo (isset($site->facebook_link)?$site->facebook_link:'#');?>" class="facebook"><i class="bx bxl-facebook"></i></a>

             <a href="<?php echo (isset($site->twitter_link)?$site->twitter_link:'#');?>" class="twitter"><i class="bx bxl-twitter"></i></a>             

             <a href="<?php echo (isset($site->instagram_link)?$site->instagram_link:'#');?>" class="instagram"><i class="bx bxl-instagram"></i></a>             

             <a href="<?php echo (isset($site->linkedin_link)?$site->linkedin_link:'#');?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>

             <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->

           </div>

          </div>



        </div>

      </div>

    </div>



    <div class="container">

      <div class="copyright">

        <?php echo (isset($site->copyright)?$site->copyright:'');?>

      </div>

    </div>

  </footer>



  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>



  <div class="sticky-container">

    <ul class="sticky">

        <li>

            <i class="fa fa-phone-square"></i>

            <p><a href="javascript:void(0);">Call us (Toll free)<br><?php echo (isset($site->toll_free_no)?$site->toll_free_no:'');?></a></p>

        </li>

        <li>

            <i class="fa fa-envelope-open"></i>

            <p><a href="<?php echo base_url(); ?>contact-us"><b>Contact</b><br>Us</a></p>

        </li>

        <li>

            <i class="fa fa-whatsapp"></i>

            <p><a href="https://api.whatsapp.com/send?phone=+919311775816" target="_blank"><b>Whatsapp</b><br>9311775816</a></p>

        </li>

        <!-- <li>

            <i class="fa fa-map-marker"></i>

            <p><a href="#" target="_blank"><b>Delar</b><br>Locator</a></p>

        </li> -->

    </ul>

  </div>



  <?php if($this->uri->segment(1) == ''){?>

  <div class="modal fade" id="coronaModal" tabindex="-1" aria-labelledby="coronaModal" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-xl">

      <div class="modal-content">

        <div class="modal-body">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

          <img src="<?php echo base_url();?>assets/front/img/corona.jpg" class="img-fluid">

        </div>

      </div>

    </div>

  </div>

  <?php } ?>