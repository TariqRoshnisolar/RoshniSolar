<?php $site = getSiteSettings(); ?>
<section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2><?php echo $this->lang->line('contact_us'); ?></h2>
        </div>
        <div class="row">
          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3><?php echo $this->lang->line('our_address'); ?></h3>
              <p><?php echo (isset($site->address)?$site->address:'');?></p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3><?php echo $this->lang->line('email_us'); ?></h3>
              <p><?php echo (isset($site->contact_email)?$site->contact_email:'');?><!-- <br>contact@example.com --></p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3><?php echo $this->lang->line('call_us'); ?></h3>
              <p><?php echo (isset($site->phone)?$site->phone:'');?><!-- <br>+91 9836627402 --></p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <h4 class="text-center text-uppercase mb-4"><?php echo $this->lang->line('fill_free_to_message_us'); ?></h4>
            <form action="javascript:void(0)" method="post" role="form" class="php-email-form" id="contactForm">
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control validatation" id="name" placeholder="<?php echo $this->lang->line('your_name'); ?>" data-rule="minlen:4" data-msg="Please enter at least 4 chars" data-validate-msg="<?php echo $this->lang->line('name_field_is_required'); ?>"/>
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control validatation" name="email" id="email" placeholder="<?php echo $this->lang->line('your_email'); ?>" data-rule="email" data-msg="Please enter a valid email" data-validate-msg="<?php echo $this->lang->line('email_field_is_required'); ?>"/>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control validatation" name="subject" id="subject" placeholder="<?php echo $this->lang->line('subject'); ?>" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" data-validate-msg="<?php echo $this->lang->line('subject_field_is_required'); ?>"/>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control validatation" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="<?php echo $this->lang->line('message'); ?>" data-validate-msg="<?php echo $this->lang->line('message_field_is_required'); ?>"></textarea>
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