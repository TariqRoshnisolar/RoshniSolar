<?php 
  $base_assets_url = '/uvsil/backend/themes/default/';
?>

<?php
   if (isset($banner_images) && !empty($banner_images)) {
    ?>
<div class="Banner">
  <div id="wrapper">
    <div class="slider-wrapper theme-default">
      <div id="slider" class="nivoSlider"> 
         
        <?php
            foreach ($banner_images as $banner_img_key => $banner_img_value) {
                ?>
                <img src="<?php echo base_url($banner_img_value->dir_path . $banner_img_value->img_name); ?>" alt=""/>
                <?php
            }           
        ?> 

    </div>
    </div>
  </div>
</div>   
    <?php
    }
?>