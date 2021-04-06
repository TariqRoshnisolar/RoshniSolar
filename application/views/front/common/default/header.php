<style>
.blinking-img{
    width: 35px;
    display: block;
    position: absolute;
    top: 7px;
    left: 50%;
    transform: translateX(-50%);
  }
  @media screen and (max-width: 480px) {
    .blinking-img{
      display : none;
    }
  }
</style>
<?php $site = getSiteSettings(); ?>
<section id="topbar" class="">
    <div class="container d-flex justify-content-center justify-content-sm-between align-items-center">
      <div class="d-none d-sm-flex align-items-center">
        <div class="social-links d-none d-lg-flex">
          <a href="<?php echo (isset($site->facebook_link)?$site->facebook_link:'#');?>" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
          <a href="<?php echo (isset($site->twitter_link)?$site->twitter_link:'#');?>" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>          
          <a href="<?php echo (isset($site->instagram_link)?$site->instagram_link:'#');?>" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
          <a href="<?php echo (isset($site->linkedin_link)?$site->linkedin_link:'#');?>" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></i></a>
          <a href="<?php echo (isset($site->youtube_link)?$site->youtube_link:'#');?>" class="yutube" target="_blank"><i class="fa fa-youtube-play"></i></a>
          <!-- <a href="#" class="skype"><i class="fa fa-skype"></i></a> -->
          
          <span class="mr-2">| </span>
        </div>
        
        <div class="contact-info">
          <i class="icofont-envelope"></i><a href="mailto:<?php echo (isset($site->business_email)?$site->business_email:'');?>"> <?php echo (isset($site->business_email)?$site->business_email:'');?></a>
          <i class="icofont-phone"></i> <a href="tel:<?php echo (isset($site->toll_free_no)?$site->toll_free_no:'');?>">Toll Free : <?php echo (isset($site->toll_free_no)?$site->toll_free_no:'');?></a>
        </div>
      </div>
      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group btn-group-sm mr-2" role="group" aria-label="First group">
          <button type="button" class="btn btn-outline-secondary" onclick="changeLanguage('en')">EN</button>
          <button type="button" class="btn btn-outline-secondary" onclick="changeLanguage('hi')">हिं</button>
        </div>
        <div class="btn-group btn-group-sm d-none d-lg-flex mr-2" role="group" aria-label="Second group" >
          <button type="button" class="btn btn-outline-secondary" id="zoomOut">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-dash" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3.5 8a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.5-.5z"/></svg>
          </button>
          <button type="button" class="btn btn-outline-secondary" id="zoomAdj">A</button>
          <button type="button" class="btn btn-outline-secondary" id="zoomIn">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/><path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/> </svg>
          </button>
        </div>
        <div class="btn-group btn-group-sm" role="group" aria-label="Third group">
          <button type="button" class="btn btn-outline-secondary" id="adjustDN">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-circle-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 15V1a7 7 0 1 1 0 14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/></svg>
          </button>
        </div>
      </div>
    </div>
  </section>
 
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <a href="<?php echo base_url(); ?>">
          <img src="<?php echo base_url();?>assets/front/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="<?php echo (($this->uri->segment(1) == '')?'active':''); ?>"><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('home'); ?></a></li>
          <li class="drop-down <?php echo (($this->uri->segment(1) == 'about-us' || $this->uri->segment(1) == 'mission' || $this->uri->segment(1) == 'vision' || $this->uri->segment(1) == 'values' || $this->uri->segment(1) == 'who-we-are' || $this->uri->segment(1) == 'who-we-us' || $this->uri->segment(1) == 'certificatian')?'active':''); ?>"><a href="<?php echo base_url(); ?>about-us"><?php echo $this->lang->line('about_us'); ?></a>
            <ul>
              <li><a href="<?php echo base_url(); ?>mission"><?php echo $this->lang->line('mission'); ?></a></li>
              <li><a href="<?php echo base_url(); ?>vision"><?php echo $this->lang->line('vission'); ?></a></li>
              <li><a href="<?php echo base_url(); ?>values"><?php echo $this->lang->line('values'); ?></a></li>
              <li><a href="<?php echo base_url(); ?>who-we-are"><?php echo $this->lang->line('who_we_are'); ?></a></li>
              <li><a href="<?php echo base_url(); ?>who-we-us"><?php echo $this->lang->line('who_we_us'); ?></a></li>
              <li><a href="<?php echo base_url(); ?>certificatian"><?php echo $this->lang->line('certificatin'); ?></a></li>
            </ul>
          </li>
          <li class="drop-down <?php echo (($this->uri->segment(1) == 'solar-panel' || $this->uri->segment(1) == 'ongrid-system' || $this->uri->segment(1) == 'offgrid-system' || $this->uri->segment(1) == 'hybrid-system')?'active':''); ?>"><a href="<?php echo base_url(); ?>solar-panel"><?php echo $this->lang->line('know_solar'); ?></a>
            <ul>
              <li><a href="<?php echo base_url(); ?>solar-panel"><?php echo $this->lang->line('solar_panel'); ?></a></li>
              <li><a href="<?php echo base_url(); ?>ongrid-system"><?php echo $this->lang->line('on_grid_system'); ?></a></li>
              <li><a href="<?php echo base_url(); ?>offgrid-system"><?php echo $this->lang->line('off_grid_system'); ?></a></li>
              <li><a href="<?php echo base_url(); ?>hybrid-system"><?php echo $this->lang->line('hybrid_system'); ?></a></li>
            </ul>
          </li>
        
          <li class="drop-down <?php echo (($this->uri->segment(1) == 'our-services' || $this->uri->segment(1) == 'our-advantages' || $this->uri->segment(1) == 'solar-technology_solutions' || $this->uri->segment(1) == 'rooftop-solar' || $this->uri->segment(1) == 'ground-mounted-solar' || $this->uri->segment(1) == 'solar-parks' || $this->uri->segment(1) == 'floating-solar-system' || $this->uri->segment(1) == 'business-model' || $this->uri->segment(1) == 'capex' || $this->uri->segment(1) == 'resco-opex-boat-considers-ppa')?'active':''); ?>"><a href="<?php echo base_url(); ?>our-services"><?php echo $this->lang->line('our_services'); ?></a>
            <ul>
              <li><a href="<?php echo base_url(); ?>our-advantages"><?php echo $this->lang->line('our_advantages'); ?></a></li>
              <li class="drop-down"><a href="<?php echo base_url(); ?>solar-technology_solutions"><?php echo $this->lang->line('solar_technology_solutions'); ?></a>
                <ul>
                  <li><a href="<?php echo base_url(); ?>rooftop-solar"><?php echo $this->lang->line('rooftop_solar'); ?></a></li>
                  <li><a href="<?php echo base_url(); ?>ground-mounted-solar"><?php echo $this->lang->line('ground_mounted_solar'); ?></a></li>
                  <li><a href="<?php echo base_url(); ?>solar-parks"><?php echo $this->lang->line('solar_parks'); ?></a></li>
                  <li><a href="<?php echo base_url(); ?>floating-solar-system"><?php echo $this->lang->line('floating_solar_system'); ?></a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="<?php echo base_url(); ?>business-model"><?php echo $this->lang->line('business_model'); ?></a>
                <ul>
                  <li><a href="<?php echo base_url(); ?>capex"><?php echo $this->lang->line('capex'); ?></a></li>
                  <li><a href="<?php echo base_url(); ?>resco-opex-boat-considers-ppa"><?php echo $this->lang->line('resco_opex_boat_considers_ppa'); ?></a></li>
                </ul>
              </li>
            </ul>
          </li>
          
          <li class="drop-down <?php echo (($this->uri->segment(1) == 'solar-products' || $this->uri->segment(1) == 'modules' || $this->uri->segment(1) == 'monocrystaline' || $this->uri->segment(1) == 'polycrystaline' || $this->uri->segment(1) == 'mono-perc' || $this->uri->segment(1) == 'remote-monitoring' || $this->uri->segment(1) == 'solar-pumps' || $this->uri->segment(1) == 'solar-heater' || $this->uri->segment(1) == 'solar-street-light')?'active':''); ?>"><a href="<?php echo base_url(); ?>solar-products"> <?php echo $this->lang->line('solar_products'); ?></a>
            <ul>
              <li><a href="<?php echo base_url(); ?>modules"><?php echo $this->lang->line('modules'); ?></a></li>
              <li><a href="<?php echo base_url(); ?>monocrystaline"><?php echo $this->lang->line('monocrystaline'); ?></a></li>
              <li><a href="<?php echo base_url(); ?>polycrystaline"><?php echo $this->lang->line('polycrystaline'); ?></a></li>
              <li class="drop-down"><a href="<?php echo base_url(); ?>mono-perc"><?php echo $this->lang->line('mono_perc'); ?></a>
                <ul>
                  <li><a href="<?php echo base_url(); ?>remote-monitoring"><a href="#"><?php echo $this->lang->line('remote_monitoring'); ?></a></li>
                  <li><a href="<?php echo base_url(); ?>solar-pumps"><?php echo $this->lang->line('solar_pumps'); ?></a></li>
                  <li><a href="<?php echo base_url(); ?>solar-heater"><?php echo $this->lang->line('solar_heater'); ?></a></li>
                  <li><a href="<?php echo base_url(); ?>solar-street-light"><?php echo $this->lang->line('solar_street_light'); ?></a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="<?php echo (($this->uri->segment(1) == 'recruitment')?'active':''); ?> blinking">
            <img class="blinking-img" src="<?php echo base_url(); ?>assets/front/img/icon/new-gif-images-blinking.gif">            
            <a href="<?php echo base_url(); ?>recruitment"><?php echo $this->lang->line('recruitment'); ?></a>
          </li>
          <li class="<?php echo (($this->uri->segment(1) == 'contact-us')?'active':''); ?>"><a href="<?php echo base_url(); ?>contact-us"><?php echo $this->lang->line('contact_us'); ?></a></li>
           <!-- <li class="<?php echo (($this->uri->segment(1) == 'Career')?'active':''); ?>"><a href="<?php echo base_url(); ?>Career">Career</a></li> -->
        </ul>
      </nav>

    </div>
  </header>

<!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script type="text/javascript">
  var textWrapper = document.querySelector('.blinking');
  textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
  anime.timeline({loop: true})
    .add({
      targets: '.blinking .letter',
      scale: [4,1],
      opacity: [0,1],
      translateZ: 0,
      easing: "easeOutExpo",
      duration: 950,
      delay: (el, i) => 70*i
    }).add({
      targets: '.blinking',
      opacity: 0,
      duration: 1000,
      easing: "easeOutExpo",
      delay: 1000
    });
</script> -->