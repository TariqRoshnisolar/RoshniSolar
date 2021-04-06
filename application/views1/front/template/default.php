<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta id="viewport" content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Roshni Solar | <?php echo isset($title)?$title:'Home';?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/front/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/front/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/front/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/front/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/front/vendor/fancybox/jquery.fancybox.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/front/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/front/vendor/owl.carousel/assets/owl.theme.green.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/front/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/admin/vendor/fancybox/jquery.fancybox.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/css/toastr.min.css">
  <link href="<?php echo base_url();?>assets/front/css/style.css" rel="stylesheet">
  <?php if(isset($cssFiles)){ foreach ($cssFiles as $cssKey => $cssValue) { ?>
      <link href="<?php echo base_url();?>assets/front/css/<?php echo $cssValue;?>.css" rel="stylesheet">
  <?php } } ?>
  <script src="<?php echo base_url();?>assets/front/vendor/jquery/jquery.min.js"></script>
</head>
<body id="body">
  <?php $this->load->view('front/common/default/header'); ?>
  <?php $this->load->view((isset($viewPage)?'front/'.$viewPage:''));?>
  <?php $this->load->view('front/common/default/partner_logo'); ?>
  <?php $this->load->view('front/common/default/footer'); ?>
  
  <script src="<?php echo base_url();?>assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/front/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url();?>assets/front/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="<?php echo base_url();?>assets/front/vendor/fancybox/jquery.fancybox.min.js"></script>
  <script src="<?php echo base_url();?>assets/front/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/front/vendor/aos/aos.js"></script>
  <script defer="defer" src="<?php echo base_url();?>assets/admin/vendor/fancybox/jquery.fancybox.min.js"></script>
  <script defer="defer" type="text/javascript" src="<?php echo base_url();?>assets/admin/js/toastr.min.js"></script>
  <script src="<?php echo base_url();?>assets/front/js/main.js"></script>
  
  <?php if(isset($jsFiles)){ foreach ($jsFiles as $jsKey => $jsValue) { ?>
    <script src="<?php echo base_url();?>assets/front/js/<?php echo $jsValue;?>.js"></script>
  <?php } } ?>
  <script type="text/javascript">
      var BASE_URL = '<?php echo base_url(); ?>';
      var globalLang = <?php echo json_encode($this->lang->language); ?>;
  </script>
</body>
</html>