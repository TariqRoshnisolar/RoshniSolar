<section class="pageBanner">
      <img src="<?php echo base_url(); ?>assets/front/img/slide/slide-3.jpg" alt="" class="bannerImg">
      <section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <h2><?php echo $this->lang->line('Career'); ?></h2>
            <ol>
              <li><a href="<?php echo base_url(); ?>">Home</a></li>
              <li><?php echo $this->lang->line('Career'); ?></li>
            </ol>
          </div>
        </div>
      </section>
    </section>


    <section class="inner-page">
      <div class="container">
        <div class="card text-white bg-temp mb-3" >
          <div class="card-header"><h5 class="m-0"><?php echo $this->lang->line('Career'); ?></h5></div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                 
                  <h3><?php echo $this->lang->line('Career'); ?></h3>
                 <?php 
              $career = json_decode(getPageDetailsByAlias('career','description'),true);
              echo $career[getSessionLang()];
          ?>
                </div>
              </div>
             
            </div>
          </div>
        </div>

       
      </div>
    </section>
    <?php $site = getSiteSettings(); ?>
    <section id="contact" class="contact pt-0">
      <div class="container">
        <div class="section-title">
          <h2><?php echo $this->lang->line('contact_us'); ?></h2>
        </div>
        <div class="row">
          <div class="col-sm-6 d-flex align-items-stretch">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3><?php echo $this->lang->line('email_us'); ?></h3>
              <p><?php echo (isset($site->contact_email)?$site->contact_email:'');?></p>
            </div>
          </div>

          <div class="col-sm-6 d-flex align-items-stretch">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3><?php echo $this->lang->line('call_us'); ?></h3>
              <p><?php echo (isset($site->phone)?$site->phone:'');?></p>
            </div>
          </div>

          <div class="col-lg-12" >
            <h4 class="text-center text-uppercase mb-4"><?php echo $this->lang->line('fill_free_to_message_us'); ?></h4>
            <form action="javascript:void(0)" method="post" role="form" class="php-email-form" id="contactForm">
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control validatation" id="name" placeholder="<?php echo $this->lang->line('your_name'); ?>" data-rule="minlen:4" data-msg="Please enter at least 4 chars" data-validate-msg="<?php echo $this->lang->line('name_field_is_required'); ?>">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control validatation" name="email" id="email" placeholder="<?php echo $this->lang->line('your_email'); ?>" data-rule="email" data-msg="Please enter a valid email" data-validate-msg="<?php echo $this->lang->line('email_field_is_required'); ?>">
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control validatation" name="subject" id="subject" placeholder="<?php echo $this->lang->line('subject'); ?>" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"  data-validate-msg="<?php echo $this->lang->line('subject_field_is_required'); ?>">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control validatation" name="message" rows="5" data-rule="required" data-msg="Please write something for us"  placeholder="<?php echo $this->lang->line('message'); ?>" data-validate-msg="<?php echo $this->lang->line('message_field_is_required'); ?>"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="button" class="contactButton"><?php echo $this->lang->line('send_message'); ?></button></div>
            </form>
          </div>

        </div>

      </div>
    </section>

    <script type="text/javascript">
      function initMap() {
        var lat = parseFloat(document.getElementById('street_latitude').value);
        var lng = parseFloat(document.getElementById('street_longitude').value);
        var map = new google.maps.Map(document.getElementById('googleMap'), {
            center: {
                lat: lat,
                lng: lng
            },
            zoom: 13,
            mapTypeId: 'roadmap'
        });
      }          
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAuZA-VkSgLw4kVXu_7gIeKExFIful-0k&callback=initMap"></script>
    