<section class="pageBanner">
      <img src="<?php echo base_url(); ?>assets/front/img/slide/slide-3.jpg" alt="" class="bannerImg">
      <section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <h2><?php echo $this->lang->line('contact_us'); ?></h2>
            <ol>
              <li><a href="<?php echo base_url(); ?>">Home</a></li>
              <li><?php echo $this->lang->line('contact_us'); ?></li>
            </ol>
          </div>
        </div>
      </section>
    </section>


    <section class="inner-page">
      <div class="container">
        <div class="card text-white bg-temp mb-3" >
          <div class="card-header"><h5 class="m-0"><?php echo $this->lang->line('head_office_address'); ?></h5></div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6 mb-3 mb-md-0">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3><?php echo $this->lang->line('our_address'); ?></h3>
                  <p>Rz-d3/50, old no. 2a t/floor, kh. No. 69 gali no.8, mahavir enclave delhi south west delhi dl 110045 in</p>
                </div>
              </div>
              <div class="col-md-6">
                <input type="hidden" id="street_latitude" value="28.648755">
                <input type="hidden" id="street_longitude" value="77.198626">
                <div id="googleMap" style="width: 100%; height: 200px;"></div>
               <!--  <iframe style="width: 100%; height: 200px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3562.9404836827443!2d88.43537381487938!3d26.746275283199513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e44104d4cdb0fd%3A0xa25bc3007c53987c!2sSevoke%20Rd%2C%20Don%20Bosco%20Colony%2C%20Siliguri%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1597507673142!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
              </div>
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-xl-4 mb-3">
              <div class="card text-white bg-green-gradient " >
                <div class="card-header"><h5 class="m-0">Assam - Guwahati (ITag Plaza)</h5></div>
                <div class="card-body">
                  <div class="info-box p-0">
                    <i class="bx bx-map"></i>
                    <h3><?php echo $this->lang->line('address'); ?></h3>
                    <p>Office Nos 16 17 , 2C 2nd Floor, ITag Plaza,Nr.Rajiv Bhawan, ABC, G S Road, Main Road Bhangagarh, Guwahati, Assam - 781005</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4 mb-3">
              <div class="card text-white bg-orange-gradient " >
                <div class="card-header"><h5 class="m-0">Gujarat - Ahmedabad (akar-2)</h5></div>
                <div class="card-body">
                  <div class="info-box p-0">
                    <i class="bx bx-map"></i>
                    <h3><?php echo $this->lang->line('address'); ?></h3>
                    <p>704,7th floor, Sakar - 2 Bhikhabai Park, Ellis bridge Corner, Ashram Road, Ahmedabad ??? 380009</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4 mb-3">
              <div class="card text-white bg-pink-gradient " >
                <div class="card-header"><h5 class="m-0">Jharkhand - Ranchi (Church Complex)</h5></div>
                <div class="card-body">
                  <div class="info-box p-0">
                    <i class="bx bx-map"></i>
                    <h3><?php echo $this->lang->line('address'); ?></h3>
                    <p>Church Complex, Saluja Tower,6th Floor, Above Vasan Eye Care, Peepe Compund, Main Road, Sujata Chowk, Ranchi, Jharkhand - 834001</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-6 col-xl-4 mb-3">
              <div class="card text-white bg-indigo-gradient " >
                <div class="card-header"><h5 class="m-0">Branch Office </h5></div>
                <div class="card-body">
                  <div class="info-box p-0">
                    <i class="bx bx-map"></i>
                    <h3>Address</h3>
                    <p>Rz-d3/50, old no. 2a t/floor, kh. No. 69 gali no.8, mahavir enclave delhi south west delhi dl 110045 in</p>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="col-md-6 col-xl-4 mb-3">
              <div class="card text-white bg-info bg-teal-gradient" >
                <div class="card-header"><h5 class="m-0">Madhya Pradesh - Bhopal (Guru Arcade)</h5></div>
                <div class="card-body">
                  <div class="info-box p-0">
                    <i class="bx bx-map"></i>
                    <h3><?php echo $this->lang->line('address'); ?></h3>
                    <p>2nd Floor, Guru Arcade,Plot No-153, Ramgopal Maheshwari Marg, Zone 1-MP Nagar, Bhopal, Madhya Pradesh - 462011</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4 mb-3">
              <div class="card text-white bg-purple-gradient " >
                <div class="card-header"><h5 class="m-0">Karnataka - Bangalore (Patton house) </h5></div>
                <div class="card-body">
                  <div class="info-box p-0">
                    <i class="bx bx-map"></i>
                    <h3><?php echo $this->lang->line('address'); ?></h3>
                    <p>3rd floor, Patton house, 4th B cross Rd, KHB Colony, 5th Block, koramangala, Bengaluru, Karnataka 560034</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4 mb-3">
              <div class="card text-white bg-green-gradient " >
                <div class="card-header"><h5 class="m-0">Odisha - Bhubaneswar (BMC Bhawani Office Complex)</h5></div>
                <div class="card-body">
                  <div class="info-box p-0">
                    <i class="bx bx-map"></i>
                    <h3><?php echo $this->lang->line('address'); ?></h3>
                    <p>Office Nos 16 17, BMC Bhawani Office Complex,1st Floor, Block 1 & 2, Saheed Nagar, Bhubaneshwar, Orissa - 751007</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4 mb-3">
              <div class="card text-white bg-orange-gradient " >
                <div class="card-header"><h5 class="m-0">Punjab - Chandigarh (Chandigarh)</h5></div>
                <div class="card-body">
                  <div class="info-box p-0">
                    <i class="bx bx-map"></i>
                    <h3><?php echo $this->lang->line('address'); ?></h3>
                    <p>Sector-8C, SCO-171-172,Madhya Marg, Chandigarh, Punjab and Haryana - 160009</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4 mb-3">
              <div class="card text-white bg-pink-gradient " >
                <div class="card-header"><h5 class="m-0">Rajasthan - Jaipur (Geejgarh Tower)</h5></div>
                <div class="card-body">
                  <div class="info-box p-0">
                    <i class="bx bx-map"></i>
                    <h3><?php echo $this->lang->line('address'); ?></h3>
                    <p>S-3 to S-7, S-10 Geejgarh Tower,First Floor, Hawa Sarak, Civil Lines, Jaipur, Rajasthan - 302006</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4 mb-3">
              <div class="card text-white bg-indigo-gradient " >
                <div class="card-header"><h5 class="m-0">Uttar Pradesh - Lucknow (BBD Viraj Towers) </h5></div>
                <div class="card-body">
                  <div class="info-box p-0">
                    <i class="bx bx-map"></i>
                    <h3><?php echo $this->lang->line('address'); ?></h3>
                    <p>Plot No-TCG/1-A/V/3, BBD Viraj Towers,Vibhuti Khand, Shaheed Path, Gomti Nagar, Lucknow, Uttar Pradesh - 226010</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4 mb-3">
              <div class="card text-white bg-info bg-teal-gradient" >
                <div class="card-header"><h5 class="m-0">Tamil Nadu - Chennai - Bhopal (Capital Towers)</h5></div>
                <div class="card-body">
                  <div class="info-box p-0">
                    <i class="bx bx-map"></i>
                    <h3><?php echo $this->lang->line('address'); ?></h3>
                    <p>3rd Floor, Capital Towers, Bearing Door No. 180, Kodambakkam High Road, Nungambakkam, Chennai??? 600034</p>
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
    