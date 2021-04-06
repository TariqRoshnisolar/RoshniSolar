<!DOCTYPE html>
<html  dir="<?php echo ($front_setting->is_active_rtl) ? "rtl" : "ltr"; ?>" lang="<?php echo ($front_setting->is_active_rtl) ? "ar" : "en"; ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $page['title']; ?></title>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
        <meta name="title" content="<?php echo $page['meta_title']; ?>">
        <meta name="keywords" content="<?php echo $page['meta_keyword']; ?>">
        <meta name="description" content="<?php echo $page['meta_description']; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php echo base_url($front_setting->fav_icon); ?>" type="image/x-icon">

        <link href="<?php echo $base_assets_url; ?>css/all.css" rel="stylesheet">
        <!-- My CSS  -------->
        <link href="<?php echo $base_assets_url; ?>css/form.css" rel="stylesheet">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- Navigation CSS -->
        <link href="<?php echo $base_assets_url; ?>plugins/nav_menu/bootstrap-4-hover-navbar.css" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="<?php echo $base_assets_url; ?>css/bootstrap.min.css" rel="stylesheet">

        <!--  Lightbox CSS  --->
        <link href="<?php echo $base_assets_url;?>css/nivo-lightbox.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo $base_assets_url; ?>css/animate.css">

        <!--Carousel-->
        <link href="<?php echo $base_assets_url; ?>plugins/crousal-script/ashwani.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $base_assets_url; ?>plugins/crousal-script/crousal.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $base_assets_url; ?>plugins/crousal-script/clientele.css" rel="stylesheet" type="text/css" />



        <!-- My CSS -->
        <link rel="stylesheet" href="<?php echo $base_assets_url; ?>css/uvsil.css">

        <?php echo $front_setting->google_analytics; ?>

    </head>
    <!-- Custome CSS For Google Translator Bar -->
    <style>
 #google_translate_element {
   position: absolute;
   left: 5px;
   z-index: 1;
 }
 #header {
   margin-top: 10px;
 }
 </style>
    
    <!--
    <style type='text/css'>
iframe.goog-te-banner-frame{ display: none !important;}
</style>

<style type='text/css'>
body {position: static !important; top:0px !important;}
</style>

<style type='text/css'>
.goog-logo-link {display:none !important;} 
.goog-te-gadget{color: transparent !important;}
</style>
    
    <!--  End Here ---->
    
    <body class="some-class-name">
<div class="top_bar">
  <div class="container">
    <div class="top_left">
            Call us:<a href="1800-103-0036"> 1800-103-0036 &nbsp;|</a> &nbsp;
           Email us:<a href="info@uvsil.in"> info@uvsil.in &nbsp;|</a>

        &nbsp; For any recruitment related enquiry give us a missed call: &nbsp;<span style="color: #f7941d">9319966006</span>

    </div>
    <div class="top_right_bar">
      <ul>
          <li><a href="https://www.facebook.com/ujjalvikassolar/" target="_blank"><i class="fab fa-facebook fa-lg" aria-hidden="true"></i></a></li>
          <li><a href="https://twitter.com/SolarUjjal?lang=en" target="_blank"><i class="fab fa-twitter fa-lg" aria-hidden="true" style="color: #1ea1f3"></i></a></li>
          <li><a href="https://www.youtube.com/channel/UCXeVSu0Ji_TwReH-GJmK6ww" target="_blank"><i class="fab fa-youtube fa-lg" aria-hidden="true" style="color:#f00;" ></i></a></li>
          <li><a href="https://www.instagram.com/ujjalvikas/" target="_blank"><i class="fab fa-instagram fa-lg" aria-hidden="true" style="color: #aa0000"></i></a></li>
          <li><a href="https://in.pinterest.com/uvsil/" target="_blank"><i class="fab fa-pinterest fa-lg" aria-hidden="true" style="color: #e60023"></i> </a></li>
          <li><a href="https://www.flickr.com/people/171166075@N07" target="_blank"><i class="fab fa-flickr fa-lg" aria-hidden="true"></i></a></li>
          <li><a href="https://www.linkedin.com/in/ujjal-vikas-049b4a186/" target="_blank"><i class="fab fa-linkedin-in fa-lg" aria-hidden="true"></i></a></li>

      <!--  <li><a style="color: white" id="jfontsize-m" href="#">A-</a></li>
        <li><a style="color: white" id="jfontsize-d" href="#">A</a></li>
        <li><a style="color: white" id="jfontsize-p" href="#">A+</a></li>  -->

          <li><a href="#googtrans(en|hi)" class="lang-hi lang-select" data-lang="hi">हिन्दी</a></li>

      </ul>
    </div>
  </div>
</div>

<?php echo $header; ?>

<?php echo $slider; ?>

<?php 
  if(isset($page['is_homepage']) && $page['is_homepage']==1 ){
?>
     <!-- <div id="backgr">
      <div  class="container">
      <p style="font-style: italic; font-size: 18px; font-family: Parkavenue, cursive;; text-align: center"><span class="dark_blue">“Our motto is to contribute maximum support to Government to achieve 175GW of solar energy by the
              year 2022 for the</span> <br> <span style="color: #3ab54a"><b>INDIA’S LARGEST RENEWABLE ENERGY EXPANSION PROGRAMME</b></span>”</p>
      </div></div>  -->
<div class="section ccr_section">
  <div class="container some-class-name">

    <div class="row">
      <div class="col-md-8">
        <div class="about_us">
          <div class="title_bar">

            <h1><span class="dark_blue">Ujjal Vikas Solar India Limited :</span>   SOLAR TURNKEY SOLUTIONS FOR
                INNOVATIVE AND CONCERNED PEOPLE</h1>
            <div class="border_blue"><span></span></div>
          </div>

<?php
$content = strip_tags($content);
if (strlen($content) > 570) {

    // truncate string
    $stringCut = substr($content, 0, 870);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $content = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $content .= '...';
}
?>
            <p><?php echo $content; ?></p>
<br>
            
    
        </div>
      </div>

      <div class="col-md-4">
        <iframe width="100%" height="330" src="https://www.youtube.com/embed/tlVHUDys5-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>     
    </div>
  </div>
</div>
<?php
  }
?> 

<?php
if(isset($page['is_homepage']) && !$page['is_homepage'] && $page['slug']!='enquiries' && $page['slug']!='franchise-and-dealership' && $page['slug']!='certificate' && $page['slug']!='mission-and-vision'){
   ?>
<div class="ccr_inner_section">
  <div class="container some-class-name">
    <div class="row border-bottom">
      <div class="col-md-6">
        <h1><?php echo $page['title']; ?></h1>
      </div>
<!--      <div class="col-md-6">-->
<!--        <div class="inner_bread_crumb">-->
<!--          <nav aria-label="breadcrumb">-->
<!--            <ol class="breadcrumb">-->
<!--              <li class="breadcrumb-item"><a href="#">Home</a></li>-->
<!--              <li class="breadcrumb-item active" aria-current="page">--><?php //echo $page['title']; ?><!--</li>-->
<!--            </ol>-->
<!--          </nav>-->
<!--        </div>-->
<!--      </div>-->
    </div>
    <div class="row mt-4 pt-2">
      <div class="col-md-12">
        <div class="inner_content "> <img src="<?php echo $page['feature_image']; ?>" class="img-fluid mb-3">
         <div class="ccr_inner_section"> <p><?php echo $page['description']; ?> </p></div>
        </div>
      </div>


    </div>
  </div>
</div>
   <?php
}
?>

<!-- Online Form Certificate -->

<?php
if($page['slug']=='certificate') {
?>

        <style>
            #myImg {
                border-radius: 5px;
                cursor: pointer;
                transition: 0.3s;
            }

            #myImg:hover {opacity: 0.7;}

            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 60px; /* Location of the box */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
            }

            /* Modal Content (image) */
            .modal-content {
                margin: auto;
                display: block;
                width: 80%;
                max-width: 700px;
            }

            /* Caption of Modal Image */
            #caption {
                margin: auto;
                display: block;
                width: 80%;
                max-width: 700px;
                text-align: center;
                color: #ccc;
                padding: 10px 0;
                height: 150px;
            }

            /* Add Animation */
            .modal-content, #caption {
                -webkit-animation-name: zoom;
                -webkit-animation-duration: 0.6s;
                animation-name: zoom;
                animation-duration: 0.6s;
            }

            @-webkit-keyframes zoom {
                from {-webkit-transform:scale(0)}
                to {-webkit-transform:scale(1)}
            }

            @keyframes zoom {
                from {transform:scale(0)}
                to {transform:scale(1)}
            }

            /* The Close Button */
            .close {
                position: absolute;
                top: 15px;
                right: 35px;
                color: #f1f1f1;
                font-size: 40px;
                font-weight: bold;
                transition: 0.3s;
            }

            .close:hover,
            .close:focus {
                color: #bbb;
                text-decoration: none;
                cursor: pointer;
            }

            /* 100% Image Width on Smaller Screens */
            @media only screen and (max-width: 700px){
                .modal-content {
                    width: 100%;
                }
            }
        </style>
<div class="ccr_inner_section">
    <div class="container some-class-name">
    <div class="row">
<div class="col-md-3" style="box-shadow: 5px 10px 18px #888888;">
    <img src="https://www.uvsil.in/uploads/gallery/media/0001-1558636200.jpg" alt="Snow" style="width:100%; max-width: auto" onclick="openimage(this.src);" ></div>

       <div class="col-md-3" style="box-shadow: 5px 10px 18px #888888;"> <img src="https://www.uvsil.in/uploads/gallery/media/0001 (1).jpg" alt="Snow" style="width:100%; max-width: auto" onclick="openimage(this.src);"></div>
        <div class="col-md-3" style="box-shadow: 5px 10px 18px #888888;"><img src="https://www.uvsil.in/uploads/gallery/media/0001.jpg" alt="Certificate Of Incorporation" style="width:100%; max-width: auto" onclick="openimage(this.src);"></div>
        <div class="col-md-3" style="box-shadow: 5px 10px 18px #888888;"><img src="https://www.uvsil.in/uploads/gallery/media/ISO.jpg" alt="Certificate Of Incorporation" style="width:100%; max-width: auto" onclick="openimage(this.src);"></div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close" onclick="closeimage()">&times;</span>
        <img src="" id="modelimg" class="modal-content">
        <div id="caption"></div>
    </div>



<!--        <!-- The Modal -->
<!--        <div id="myModal" class="modal">-->
<!--            <span class="close">&times;</span>-->
<!--            <img src="https://www.uvsil.in/uploads/gallery/media/0001 (1).jpg" class="modal-content">-->
<!--            <div id="caption"></div>-->
<!--        </div>-->

    </div>
</div>

    <script>

        function openimage(img){
            $("#modelimg").attr('src', img);
            $("#myModal").show();
        }

        function closeimage(){
            $("#modelimg").attr('src', '');
            $("#myModal").hide();
        }


        // // Get the modal
        // var modal = document.getElementById("myModal");
        //
        // // Get the image and insert it inside the modal - use its "alt" text as a caption
        // var img = document.getElementById("myImg");
        // var modalImg = document.getElementById("img01");
        // var captionText = document.getElementById("caption");
        // img.onclick = function(){
        //     modal.style.display = "block";
        //     modalImg.src = this.src;
        //     captionText.innerHTML = this.alt;
        // }
        //
        // // Get the <span> element that closes the modal
        // var span = document.getElementsByClassName("close")[0];
        //
        // // When the user clicks on <span> (x), close the modal
        // span.onclick = function() {
        //     modal.style.display = "none";
        // }
    </script>


    <?php  } ?>
<!-- Online Application page End Here --->



<?php
if($page['slug']=='enquiries'){
    ?>
<div class="ccr_inner_section">
  <div class="container some-class-name">
      <p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14007.77896642802!2d77.2801586!3d28.6314182!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb1b21518cbe38495!2sUJJAL+VIKAS+SOLAR+INDIA+LIMITED!5e0!3m2!1sen!2sin!4v1558526034396!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></p>
<div class="row mt-4 pt-2">
    <div class="col-md-4">

<p><b style="color:red"><i class="fa fa-map-marker-alt"></i> Registered Office</b><br />
Office no – 205, 2 nd Floor, Laxman Palace, 19,<br />
Veer Savarkar Block, Shakarpur, Delhi – 110092.<br />
<b>Contact No</b> – 011 47009317 <br />
    <b>Toll-Free No.</b> 1800-103-0036<br />
<b>Email Id-</b> info@uvsil.in</p>
</div>
    
      <div class="col-md-8">
        <div class="contact_form">
          <h3>Your contact details</h3>
          <form action="<?php echo site_url();?>Contact/enquiry_send" method="post" enctype="multipart/form-data">
            <div class="main_row">
              <div class="form-group half_width">
                <input class="form-control" name="fname" placeholder="First Name" type="text" required>
              </div>
              <div class="form-group half_width">
                <input class="form-control" name="lname" placeholder="last Name" type="text" required>
              </div>
              <div class="form-group half_width">
                <input class="form-control" name="company" placeholder="Company Name" type="text">
              </div>
              <div class="form-group half_width">
                <input class="form-control" name="phone" placeholder="Mobile Number" type="text" required>
              </div>
              <div class="form-group half_width">
                <input class="form-control" name="email" placeholder="Your Email" type="email" required>
              </div>
              <div class="form-group half_width">
                <select class="form-control" name="country" required>
                  <option value="0">Select Country</option>
                  <option value="Afghanistan">Afghanistan</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Armenia">Armenia</option>
                  <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="The Bahamas">The Bahamas</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="China">China</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Egypt">Egypt</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Greece">Greece</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran">Iran</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Korea, North">Korea, North</option>
                    <option value="Korea, South">Korea, South</option>
                    <option value="Kosovo">Kosovo</option>
                    <option value="Kuwait">Kuwait</option>

                </select>
              </div>
              <div class="form-group half_width">
                <select class="form-control" name="state">
                  <option value="0">Select State</option>
                  <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                  <option value="Andhra Pradesh">Andhra Pradesh</option>
                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                  <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Pondicherry">Pondicherry</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                </select>
              </div>
              <div class="form-group half_width">
                <input class="form-control" name="city" placeholder="City/Town" type="text" required>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="4" placeholder="Your Message"></textarea>
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" name="agree" id="agree" required>
              <label class="form-check-label" for="exampleCheck1">Yes, I accept UJJAL VIKAS SOLAR INDIA LIMITED Terms of Use Agreement *</label>
            </div>
              <input class="btn btn-success mt-3 btn-lg mr-2" name="submit" type="submit" value="Submit"> <input class="btn btn-danger mt-3 btn-lg" type="reset" value="Reset">
            <!-- <a class="btn btn-success mt-3 btn-lg mr-2" href="#">Submit</a> <a class="btn btn-danger mt-3 btn-lg" href="#">Reset</a> -->
          </form>
           <?php
              if( $this->session->flashdata('send_success') ){
              ?>
            <p style="text-align: center; color: green" id="thankYouMessageDiv"> Mail has been sent successfully</p>
            <?php
            }
            else if( $this->session->flashdata('send_fail') ){
                ?>
                <p style="text-align: center; color: red" id="thankYouMessageDiv"> Mail has been not sent successfully</p>
            <?php }
            ?>
        </div>
      </div>
    </div>
  </div>
</div>
    <?php
}
?>

<!--      ---------        Dealership Form      ------------------------------------->

<?php
if($page['slug']=='franchise-and-dealership'){
    ?>
    <div class="ccr_inner_section">
        <div class="container some-class-name">
            <h1>Please fill up this form and we will get back to you</h1>
            <div class="row mt-4 pt-2">
                <div class="col-md-12">
                    <div class="contact_form">
                        <h3>Your details</h3>
                        <form action="<?php echo site_url();?>Contact/dealer_mail_send" method="post" enctype="multipart/form-data">
                            <div class="main_row">
                                <div class="form-group half_width">
                                    <input class="form-control" name="name" placeholder="Name of the contact person *" type="text" required>
                                </div>

                                <div class="form-group half_width">
                                    <input class="form-control" name="company" placeholder="Company Name *" type="text" required>
                                </div>
                                <div class="form-group half_width">
                                    <input class="form-control" name="gst" placeholder="GST No. *" type="text" required>
                                </div>
                                <div class="form-group half_width">
                                    <input class="form-control" name="phone" placeholder="Mobile Number *" type="text" required>
                                </div>
                                <div class="form-group half_width">
                                    <input class="form-control" name="email" placeholder="Your Email *" type="email" required>
                                </div>
                                <div class="form-group half_width">
                                    <input class="form-control" name="address"  placeholder="Address *" type="text"></input>
                                </div>
                                <div class="form-group half_width">
                                    <select class="form-control" name="state">
                                        <option value="0">Select State *</option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Pondicherry">Pondicherry</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>
                                <div class="form-group half_width">
                                    <input class="form-control" name="city" placeholder="City/Town *" type="text" required>
                                </div>
                                <div class="form-group half_width">
                                    <input class="form-control" name="pincode" placeholder="Pin Code *" type="number" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="4" placeholder="Your Message"></textarea>
                            </div>

                            <input class="btn btn-success mt-3 btn-lg mr-2" name="submit" type="submit" value="Submit"> <input class="btn btn-danger mt-3 btn-lg" type="reset" value="Reset">
                            <!-- <a class="btn btn-success mt-3 btn-lg mr-2" href="#">Submit</a> <a class="btn btn-danger mt-3 btn-lg" href="#">Reset</a> -->
                        </form>
                        <?php
                        if( $this->session->flashdata('send_success') ){
                            ?>
                            <p style="text-align: center; color: green" id="thankYouMessageDiv"> Thank you. We will get you shortly</p>
                            <?php
                        }
                        else if( $this->session->flashdata('send_fail') ){
                            ?>
                            <p style="text-align: center; color: red" id="thankYouMessageDiv"> Mail has been not sent successfully</p>
                        <?php }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>


<!-- End Here ----->


<!--      ---------       About Us Mission and Vision Page     ------------------------------------->

<?php
if($page['slug']=='about-us'){
    ?>
   <!-- <div class="innerpage_banner"> <img src="<?php // echo $base_assets_url; ?>images/vision-mission.jpg" class="img-fluid"> </div> -->
   
        <div class="container">
            <div class="row border-bottom">
                <div class="col-md-6">
                    <h1>Vision, Mission & Values</h1>
                </div>

            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="left_item">
                        <h3 class="text-uppercase">Learn more about Ujjal Vikas</h3>
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                <div class="media"> <img src="<?php echo $base_assets_url; ?>images/vision.jpg" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Mission</h5>
                                    </div>
                                </div>
                            </a> <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                <div class="media"> <img src="<?php echo $base_assets_url; ?>images/vision.jpg" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Vision</h5>
                                    </div>
                                </div>
                            </a> <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                <div class="media"> <img src="<?php echo $base_assets_url; ?>images/vision.jpg" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Values</h5>
                                    </div>
                                </div>
                            </a> <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                <div class="media"> <img src="<?php echo $base_assets_url; ?>images/vision.jpg" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Who are we?</h5>
                                    </div>
                                </div>
                            </a> <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings_2" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                <div class="media"> <img src="<?php echo $base_assets_url; ?>images/vision.jpg" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Why Us?</h5>
                                    </div>
                                </div>
                            </a> </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="inner_content">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="vission_right">
                                    <div class="vission_back">
                                        <h3 class="mb-0"></h3>
                                        <p>We, the team of qualified and experienced management at UJJAL VIKAS SOLAR INDIA LIMITED (UVSIL) is focused to
                                            be India’s one of the leading renewable energy company in following years with prime objective to support the
                                            Government of India in achieving the milestone of 175 GW Solar Energy under the “ World’s Largest Renewable
                                            Energy Expansion Program” by the year 2022 to deliver electrification to the distant rural and backward areas where
                                            delivering electricity through grid power is not an easy task. Also, to espouse a culture of trust, collaboration,
                                            perform to achieve business goals and be an employer of choice.</p>
                                        <h5 style="color: white" class="mt-3 mb-0">We strive to live out our vision by</h5>
                                        <ul class="list_square">
                                            <li>Serving our clients by being most trusted provider of solar energy solutions</li>
                                            <li>Creating an environment of continuous learning and leadership development</li>
                                            <li>Integrating core values into relationships</li>
                                            <li>Develop and build teams based on trust, commitment ,results, healthy conflicts and accountability</li>
                                            <li>Cultivating a profitable and enduring company making positive impact on the world around us.</li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                    <h3 class="pt-5">Values</h3>
                                    <ul class="values">
                                        <li>
                                            <div class="value_box"> <i class="fas fa-shield-alt"></i>
                                                <h4>Safety</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-clock"></i>
                                                <h4>Agility</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-hand-holding-heart"></i>
                                                <h4>Care</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-handshake"></i>
                                                <h4>Respect</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-balance-scale"></i>
                                                <h4>Ethics</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-chart-line"></i>
                                                <h4>Diligence</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="vission_right">
                                    <div class="vission_back">
                                        <h3 class="mb-0"></h3>
                                        <p>To unleash the power of solar energy technology by adhering to best practices in usance of solar power responsibly
                                            and provide best solar solution for communities by serving at an affordable cost with global footprint . Currently, we
                                            are pledged to make major contribution in support to government of India in the drive maximum adoption of Solar
                                            Energy in India.</p>


                                    </div>
                                    <div class="clearfix"></div>
                                    <h3 class="pt-5">Values</h3>
                                    <ul class="values">
                                        <li>
                                            <div class="value_box"> <i class="fas fa-shield-alt"></i>
                                                <h4>Safety</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-clock"></i>
                                                <h4>Agility</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-hand-holding-heart"></i>
                                                <h4>Care</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-handshake"></i>
                                                <h4>Respect</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-balance-scale"></i>
                                                <h4>Ethics</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-chart-line"></i>
                                                <h4>Diligence</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <div class="vission_right">
                                    <div class="vission_back">
                                        <h3 class="mb-0"></h3>
                                        <p>The core values of our leadership team are focused on Integrity, Quality, Innovation, Teamwork and Stewardship.</p>

                                        <ul class="list_square">
                                            <li> Integrity – We deliver on our promises. Honesty, respect and fairness in dealings are the standard way of doing
                                                business</li>
                                            <li> Quality – We strive for excellence in what we do.</li>
                                               <li> Innovation – We exercise creativity, resourcefulness and recurrently seek new ways to combat and prudently
                                                   solve challenges.</li>
                                               <li> Teamwork – We realize the power of an energized team and experiences that come together with passion,
                                                   enthusiasm and commitment to fulfill a common purpose </li>
                                              <li> Stewardship – We believe in investing in people, our community and the future trend.</li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                    <h3 class="pt-5">Values</h3>
                                    <ul class="values">
                                        <li>
                                            <div class="value_box"> <i class="fas fa-shield-alt"></i>
                                                <h4>Safety</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-clock"></i>
                                                <h4>Agility</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-hand-holding-heart"></i>
                                                <h4>Care</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-handshake"></i>
                                                <h4>Respect</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-balance-scale"></i>
                                                <h4>Ethics</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-chart-line"></i>
                                                <h4>Diligence</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="vission_right">
                                    <div class="vission_back">
                                        <h3 class="mb-0"></h3>
                                        <p>Near insatiable demand for clean and more sustainable energy future have paved way for phenomenal growth in
                                            renewable energy. We are solar power developer having an industry-experienced team of professionals who have
                                            led project development, finance and construction and operation activities.</p>
                                            <p>Founded in 2014, UVSIL is helping to lead the nation towards cleaner and more sustainable energy future. Our
                                            success is derived from the power of communities where we conduct business, our company&#39;s leadership who
                                            develops unique partnerships and innovative programs, our projects and our unlimited energy source – the Sun –
                                                which we develop to fulfill the energy needs for today and tomorrow.</p>
                                           <p> At UVSIL, our commitment is to continue aggressive development of projects to meet the currently India’s growing
                                            need for solar energy. The future of our country depends on it.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <h3 class="pt-5">Values</h3>
                                    <ul class="values">
                                        <li>
                                            <div class="value_box"> <i class="fas fa-shield-alt"></i>
                                                <h4>Safety</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-clock"></i>
                                                <h4>Agility</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-hand-holding-heart"></i>
                                                <h4>Care</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-handshake"></i>
                                                <h4>Respect</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-balance-scale"></i>
                                                <h4>Ethics</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-chart-line"></i>
                                                <h4>Diligence</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings_2" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="vission_right">
                                    <div class="vission_back">
                                        <h3 class="mb-0"></h3>
                                        <p>Our proficient team from diverse backgrounds has thorough technological knowhow that provides turnkey, grid-tied,
                                            off grid and hybrid solar solutions throughout the nation for businesses, farmers, and homeowners and leave no
                                            stone unturned in bringing to you hassle free and efficient solutions. Our awe striking services include:-</p>

                                        <ul class="list_square">
                                            <li> Free Consultation – Reach us</li>
                                            <li> Complete Assistance in Government Subsidy documentation and applications.</li>
                                            <li> Manufacturing and supply of premium quality solar products</li>
                                            <li> Installation and commissioning premium services</li>
                                            <li> Operations &amp; Maintenance</li>
                                            <li> Easy &amp; Flexible Finance options.</li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                    <h3 class="pt-5">Values</h3>
                                    <ul class="values">
                                        <li>
                                            <div class="value_box"> <i class="fas fa-shield-alt"></i>
                                                <h4>Safety</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-clock"></i>
                                                <h4>Agility</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-hand-holding-heart"></i>
                                                <h4>Care</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-handshake"></i>
                                                <h4>Respect</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-balance-scale"></i>
                                                <h4>Ethics</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-chart-line"></i>
                                                <h4>Diligence</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <?php
}
?>


<!-- End Here ----->

<!--      ---------       Solar Technology Solution Page     ------------------------------------->

<?php
if($page['slug']=='solar-technology-solution'){
    ?>
    <!-- <div class="innerpage_banner"> <img src="<?php // echo $base_assets_url; ?>images/vision-mission.jpg" class="img-fluid"> </div> -->
    <div class="ccr_inner_section">
        <div class="container">
            <div class="row border-bottom">
                <div class="col-md-6">
                    <h1>Solar Technology Solution</h1>
                </div>

            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="left_item">
                        <h3 class="text-uppercase">Learn more about Ujjal Vikas</h3>
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                <div class="media"> <img src="<?php echo $base_assets_url; ?>images/vision.jpg" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Rooftop Solar</h5>
                                    </div>
                                </div>
                            </a> <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                <div class="media"> <img src="<?php echo $base_assets_url; ?>images/vision.jpg" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Ground Mounted Solar</h5>
                                    </div>
                                </div>
                            </a> <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                <div class="media"> <img src="<?php echo $base_assets_url; ?>images/vision.jpg" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Solar Parks</h5>
                                    </div>
                                </div>
                            </a> <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                <div class="media"> <img src="<?php echo $base_assets_url; ?>images/vision.jpg" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Floating Solar System</h5>
                                    </div>
                                </div>
                            </a>  </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="inner_content">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="vission_right">
                                    <div class="vission_back">
                                        <h5 style="color: white;" class="mb-0">Rooftop Solar system :-</h5>
                                        <p>A rooftop solar system is a photovoltaic system that has its electricity generating solar
                                            panels mounted on the rooftop of a residential or commercial building or structure. It has
                                            following components: photovoltaic modules, mounting systems, cables, solar inverters
                                            and other electrical accessories. It has capacity of 5 to 20 kilowatts (kW) for residential
                                            purpose, whereas, it has capacity of 100 kilowatts or more for commercial purpose.</p>
                                        <h5 style="color: white" class="mt-3 mb-0">Following conditions to be considered before installing a solar system:</h5>
                                        <ul class="list_square">
                                            <li>Time of the year</li>
                                            <li>Latitude</li>
                                            <li>Weather conditions</li>
                                            <li>Roof slope</li>
                                            <li>Roof aspect</li>
                                            <li>Shading from adjacent buildings and vegetation</li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                    <h3 class="pt-5">Values</h3>
                                    <ul class="values">
                                        <li>
                                            <div class="value_box"> <i class="fas fa-shield-alt"></i>
                                                <h4>Safety</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-clock"></i>
                                                <h4>Agility</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-hand-holding-heart"></i>
                                                <h4>Care</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-handshake"></i>
                                                <h4>Respect</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-balance-scale"></i>
                                                <h4>Ethics</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-chart-line"></i>
                                                <h4>Diligence</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="vission_right">
                                    <div class="vission_back">
                                        <h5 style="color: white" class="mb-0">Ground Mounted solar system :-</h5>
                                        <p>Ground mounted solar systems are usually large and are mounted on the ground of your
                                            property, rather than on the roof of your house. It consists of solar modules held in place
                                            by racks or frames that are attached to ground-based mounting supports. This type of
                                            system includes:</p>
                                        <ul class="list_square">
                                            <li>Pole mounts – It is driven directly into the ground or embedded in concrete.</li>
                                            <li> Foundation mounts– Refers to concrete slabs or poured footings.</li>
                                            <li>Ballasted footing mounts– This type of mounting is well suited for sites where excavation
                                                is not possible such as capped landfills and relocation of solar module systems.</li>
                                        </ul>


                                    </div>
                                    <div class="clearfix"></div>
                                    <h3 class="pt-5">Values</h3>
                                    <ul class="values">
                                        <li>
                                            <div class="value_box"> <i class="fas fa-shield-alt"></i>
                                                <h4>Safety</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-clock"></i>
                                                <h4>Agility</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-hand-holding-heart"></i>
                                                <h4>Care</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-handshake"></i>
                                                <h4>Respect</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-balance-scale"></i>
                                                <h4>Ethics</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-chart-line"></i>
                                                <h4>Diligence</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <div class="vission_right">
                                    <div class="vission_back">
                                        <h5 style="color: white" class="mb-0">SOLAR PARKS :- </h5>
                                        <p>The Solar Park is a concentrated zone of development of solar power generation
                                            projects. As part of Solar park development, land required for development of Solar
                                            Power Projects with cumulative capacity generally 500 MW and above will be
                                            identified and acquired and various infrastructures like transmission system,
                                            water, road connectivity and communication network etc. will be developed. The
                                            parks will be characterized by well developed proper infra-structure where the
                                            risk & gestation period of the projects will be minimized. At the state level, the
                                            solar park will enable the states to bring in significant investment from project
                                            developers in Solar Power sector, to meet its Solar Purchase Obligation (SPO)
                                            mandates and provide employment opportunities to local population. The state will
                                            also be able to reduce its carbon footprint by avoiding emissions equivalent to the
                                            solar park’s generated capacity.</p>

                                    </div>
                                    <div class="clearfix"></div>
                                    <h3 class="pt-5">Values</h3>
                                    <ul class="values">
                                        <li>
                                            <div class="value_box"> <i class="fas fa-shield-alt"></i>
                                                <h4>Safety</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-clock"></i>
                                                <h4>Agility</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-hand-holding-heart"></i>
                                                <h4>Care</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-handshake"></i>
                                                <h4>Respect</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-balance-scale"></i>
                                                <h4>Ethics</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-chart-line"></i>
                                                <h4>Diligence</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="vission_right">
                                    <div class="vission_back">
                                        <h5 style="color: white" class="mb-0">Floating solar system :-</h5>
                                        <p>This system refers to a solar power production where installation of solar panel is mounted
                                            on a structure that floats on a body of water, typically an artificial basin or a lake. There are
                                            two types of floating solar system, as follows:</p>
                                        <ul class="list_square">
                                            <li>1. FPV or Floating photovoltaic: This system uses photovoltaic panels mounted on the
                                                platform</li>
                                              <li>  2. Floating CSP or Floating concentrated solar power: This system uses mirrors that
                                                redirect the solar power to a tower.</li>
                                        </ul>
                                        <h5 style="color: white">Merits of floating solar system :-</h5>
                                        <ul class="list_square">
                                            <li>1. Minimal use of land</li>
                                            <li>2. More efficient: Many studies claim that there is a significant improvement in
                                                efficiency putting solar panels over water.</li>
                                        </ul>

                                    </div>
                                    <div class="clearfix"></div>
                                    <h3 class="pt-5">Values</h3>
                                    <ul class="values">
                                        <li>
                                            <div class="value_box"> <i class="fas fa-shield-alt"></i>
                                                <h4>Safety</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-clock"></i>
                                                <h4>Agility</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-hand-holding-heart"></i>
                                                <h4>Care</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-handshake"></i>
                                                <h4>Respect</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-balance-scale"></i>
                                                <h4>Ethics</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-chart-line"></i>
                                                <h4>Diligence</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings_2" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="vission_right">
                                    <div class="vission_back">
                                        <h3 class="mb-0"></h3>
                                        <p>Our proficient team from diverse backgrounds has thorough technological knowhow that provides turnkey, grid-tied,
                                            off grid and hybrid solar solutions throughout the nation for businesses, farmers, and homeowners and leave no
                                            stone unturned in bringing to you hassle free and efficient solutions. Our awe striking services include:-</p>

                                        <ul class="list_square">
                                            <li> Free Consultation – Reach us</li>
                                            <li> Complete Assistance in Government Subsidy documentation and applications.</li>
                                            <li> Manufacturing and supply of premium quality solar products</li>
                                            <li> Installation and commissioning premium services</li>
                                            <li> Operations &amp; Maintenance</li>
                                            <li> Easy &amp; Flexible Finance options.</li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                    <h3 class="pt-5">Values</h3>
                                    <ul class="values">
                                        <li>
                                            <div class="value_box"> <i class="fas fa-shield-alt"></i>
                                                <h4>Safety</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-clock"></i>
                                                <h4>Agility</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-hand-holding-heart"></i>
                                                <h4>Care</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-handshake"></i>
                                                <h4>Respect</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-balance-scale"></i>
                                                <h4>Ethics</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-chart-line"></i>
                                                <h4>Diligence</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>


<!-- End Here ----->

<!--      ---------       Business Model Page     ------------------------------------->

<?php
if($page['slug']=='business-model'){
    ?>
     <div class="innerpage_banner"> <img id="myImage" src="<?php  echo $base_assets_url; ?>images/vision-mission.jpg" class="img-fluid"> </div>
    <div class="ccr_inner_section">
        <div class="container">
            <div class="row border-bottom">
                <div class="col-md-6">
                    <h1>Business Model</h1>
                </div>

            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="left_item">
                        <h3 class="text-uppercase">Learn more about Ujjal Vikas</h3>
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a onclick="document.getElementById('myImage').src='<?php  echo $base_assets_url; ?>images/vision-mission.jpg'" class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                <div class="media"> <img src="<?php echo $base_assets_url; ?>images/vision.jpg" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">CAPEX</h5>
                                    </div>
                                </div>
                            </a> <a onclick="document.getElementById('myImage').src='<?php  echo $base_assets_url; ?>images/visionmission.jpg'" class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                <div class="media"> <img src="<?php echo $base_assets_url; ?>images/vision.jpg" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">RESCO</h5>
                                    </div>
                                </div>
                            </a> <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                <div class="media"> <img src="<?php echo $base_assets_url; ?>images/vision.jpg" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">OPEX</h5>
                                    </div>
                                </div>
                            </a> <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                <div class="media"> <img src="<?php echo $base_assets_url; ?>images/vision.jpg" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">PPA</h5>
                                    </div>
                                </div>
                            </a>  </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="inner_content">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="vission_right">
                                    <div class="vission_back">
                                        <h5 style="color: white;" class="mb-0">CAPEX :-</h5>
                                        <p>CAPEX model refers to Capital expenditure where upfront investment for ownership of a
                                            solar plant is a necessity on consumer / client’s premises be it roof or land area,
                                            engineered, procured and commissioned by certified installer. Under this model client get
                                            benefitted in electrical power savings by since of solar power generated from his/her
                                            owned solar plant as well as available different government schemes and policies. Typically
                                            Return on Investment (ROI) is derived in 3-7 years in way of capacity of solar plant
                                            installed. Here, after successful commissioning of the Solar Plant the ownership of the asset
                                            (solar plant) rests with client / consumer from the very first day of its functioning. The EPC
                                            player also does annual operation & maintenance in mutually agreed terms & conditions.</p>
                                    <p> CAPEX Model of operation is available for commercial, industrial and domestic clients
                                            where government subsidy is available for domestic users while industrial & commercial
                                            users get benefitted in accelerated depreciation and tax holidays</p>

                                    </div>
                                    <div class="clearfix"></div>
                                    <h3 class="pt-5">Values</h3>
                                    <ul class="values">
                                        <li>
                                            <div class="value_box"> <i class="fas fa-shield-alt"></i>
                                                <h4>Safety</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-clock"></i>
                                                <h4>Agility</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-hand-holding-heart"></i>
                                                <h4>Care</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-handshake"></i>
                                                <h4>Respect</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-balance-scale"></i>
                                                <h4>Ethics</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-chart-line"></i>
                                                <h4>Diligence</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="vission_right">
                                    <div class="vission_back">
                                        <h5 style="color: white" class="mb-0">RESCO :-</h5>
                                        <p>In difference to CAPEX Model, RESCO model refers to zero investment model where the
                                            developer owns the solar plant in client’s jurisdiction and premises while a
                                            consumer/client purchases and pays for the electricity generated at a pre-decided monthly
                                            tariff rate from the electricity power producer. The consumer/client does not need to be
                                            troubled or feel anxious about the associated operations and maintenance of the solar
                                            plant, the onus of which lies with the power producer for the lifetime of the power
                                            producer / developer.</p>
                                            <p>The model is so designed where the developer is the seller of the power generations to the
                                            host customer at a predetermined and mutually agreed fixed rate which stands to be
                                            typically lower than the local utility’s (grid) retail rate. This lower electricity price serves to
                                            counterbalance the client’s purchase of electricity from the utility grid while the
                                            developer generates income from the sales procedure of electricity as well as receives tax
                                                credits and other incidental initiatives from the system through Power Purchase</p>

                                            <p>Agreement (PPA) which typically range from 10 to 25 years where the power developer
                                            remains responsible for the operation and maintenance of the system for entire duration of
                                            the agreement. Reaching the end of the PPA contract term, consumer/client may extend the
                                            term of contract or opt to discontinue with the power developer and the get the system
                                            removed</p>

                                    </div>
                                    <div class="clearfix"></div>
                                    <h3 class="pt-5">Values</h3>
                                    <ul class="values">
                                        <li>
                                            <div class="value_box"> <i class="fas fa-shield-alt"></i>
                                                <h4>Safety</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-clock"></i>
                                                <h4>Agility</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-hand-holding-heart"></i>
                                                <h4>Care</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-handshake"></i>
                                                <h4>Respect</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-balance-scale"></i>
                                                <h4>Ethics</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-chart-line"></i>
                                                <h4>Diligence</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <div class="vission_right">
                                    <div class="vission_back">
                                        <h5 style="color: white" class="mb-0">OPEX:- </h5>
                                        <p>OPEX refers to Operational Expenditure. It is the money a company spends on an ongoing,
                                            day-to-day basis in order to run a business or system. As per the organization’s needs,
                                            these expenses can range from the ink used to print documents to the wages paid to
                                            employees.</p>
                                            <p>Opex and the value of the enterprise are inversely proportional to each other, as when the
                                            Opex decreases, while maintaining the same level of production and quality, the overall
                                            value of the enterprise increases.</p>

                                    </div>
                                    <div class="clearfix"></div>
                                    <h3 class="pt-5">Values</h3>
                                    <ul class="values">
                                        <li>
                                            <div class="value_box"> <i class="fas fa-shield-alt"></i>
                                                <h4>Safety</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-clock"></i>
                                                <h4>Agility</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-hand-holding-heart"></i>
                                                <h4>Care</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-handshake"></i>
                                                <h4>Respect</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-balance-scale"></i>
                                                <h4>Ethics</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-chart-line"></i>
                                                <h4>Diligence</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="vission_right">
                                    <div class="vission_back">
                                        <h5 style="color: white" class="mb-0">PPA :-</h5>
                                        <p>PPA stands for power purchase agreement. It is a contract between a government agency
                                            and a private organization. Here, private organization agrees to produce electricity, or
                                            some other power source, for the government agency over a long period of time. Most PPA
                                            partners are locked into contracts that last between 15 and 25 years, but they can
                                            otherwise vary dramatically in terms of the commissioning process, curtailments,
                                            transmission issue resolution, credit, insurance, and environmental regulations.</p>
                                        <p>It is basically a “third party” ownership. Where, the government agency becomes the sole
                                            client of the private energy company, but there is often a separate investor to act as the
                                            system owner. This system owner offers investment capital to the project in return for tax
                                            benefits or other favors.</p>
                                        <p>This system is designed to mitigate costs and provide access to capital where it otherwise
                                            would not exist in a single-provider, government-monopolized utility arrangement. The
                                            developer receives access to capital and a competition-free consumer base, the investor
                                            receives returns and tax benefits, and the government agency maintains control over the
                                            distribution of energy in its jurisdiction.</p>

                                    </div>
                                    <div class="clearfix"></div>
                                    <h3 class="pt-5">Values</h3>
                                    <ul class="values">
                                        <li>
                                            <div class="value_box"> <i class="fas fa-shield-alt"></i>
                                                <h4>Safety</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-clock"></i>
                                                <h4>Agility</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-hand-holding-heart"></i>
                                                <h4>Care</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-handshake"></i>
                                                <h4>Respect</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-balance-scale"></i>
                                                <h4>Ethics</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-chart-line"></i>
                                                <h4>Diligence</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings_2" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="vission_right">
                                    <div class="vission_back">
                                        <h3 class="mb-0"></h3>
                                        <p>Our proficient team from diverse backgrounds has thorough technological knowhow that provides turnkey, grid-tied,
                                            off grid and hybrid solar solutions throughout the nation for businesses, farmers, and homeowners and leave no
                                            stone unturned in bringing to you hassle free and efficient solutions. Our awe striking services include:-</p>

                                        <ul class="list_square">
                                            <li> Free Consultation – Reach us</li>
                                            <li> Complete Assistance in Government Subsidy documentation and applications.</li>
                                            <li> Manufacturing and supply of premium quality solar products</li>
                                            <li> Installation and commissioning premium services</li>
                                            <li> Operations &amp; Maintenance</li>
                                            <li> Easy &amp; Flexible Finance options.</li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                    <h3 class="pt-5">Values</h3>
                                    <ul class="values">
                                        <li>
                                            <div class="value_box"> <i class="fas fa-shield-alt"></i>
                                                <h4>Safety</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-clock"></i>
                                                <h4>Agility</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-hand-holding-heart"></i>
                                                <h4>Care</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="far fa-handshake"></i>
                                                <h4>Respect</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-balance-scale"></i>
                                                <h4>Ethics</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="value_box"> <i class="fas fa-chart-line"></i>
                                                <h4>Diligence</h4>
                                                <p>Safety is a core value over which no business objective can have a higher priority</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>


<!-- End Here ----->

<?php 
  if(isset($page['is_homepage']) && $page['is_homepage']){
            ?>
<div class="section ccr_sponsorship">
  <div class="container some-class-name">
    <div class="row">
      <div class="col-md-8">
        <div class="title_bar">
          <h2><span class="dark_blue">Latest </span> Updates</h2>
          <div class="border_blue"><span></span></div>
        </div>
        <div class="tabs_section">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#notice_board" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-bullhorn"></i> Notice Board</a> </li>
            <li class="nav-item"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#government_order" role="tab" aria-controls="profile" aria-selected="false"><i class="far fa-calendar-alt"></i> Recruitment</a> </li>
            <li class="nav-item"> <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-users"></i> Our Partners</a> </li>
             <li class="nav-item"> <a class="nav-link" id="download-tab" data-toggle="tab" href="#download" role="tab" aria-controls="download" aria-selected="false"><i class="fas fa-download"></i> Download</a> </li> 
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="notice_board" role="tabpanel" aria-labelledby="home-tab">
              <ul class="tab_news">
                <?php 
                    if(isset($updates) && !empty($updates)){
                        $count=0;
                        foreach($updates as $update){
                          if($update['update_type']==1){
                              $count++;
                              if ($count>4){
                                  break;
                              }
                            ?>
                      <li>
                        <a href="<?php echo $update['link']; ?>"><?php echo $update['title']; ?><img src="<?php echo $base_assets_url; ?>images/new_red.gif" width="33" height="16"></a> <span>Post Date : <?php echo date('l , F d , Y',strtotime($update['from_date'])); ?></span>
                      </li>
                            <?php
                          }
                        }
                    }
                ?>
              </ul>
            </div>
            <div class="tab-pane fade" id="government_order" role="tabpanel" aria-labelledby="profile-tab">



                    <div class="form_part">
                        <h1>RECRUITMENT FOR SOLAR GREEN JOBS 2019-2020</h1>


                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr class="bg-primary">
                                    <th scope="col">Important Events</th>
                                    <th scope="col">Dates</th>
                                </tr>
                                </thead>

                                <tbody>

                              <!--  ?php
                                if(isset($updates) && !empty($updates)){
                                $count=0;
                                foreach($updates as $update){

                                if($update['update_type']==2){
                                $count++;
                                if ($count>5){
                                    break;
                                }
                                ?> -->
                                <tr>
                                    <th scope="row">Commencement of on-line registration of application</th>
                                    <td>Coming Soon</td>
                                   <!-- <th scope="row">  <?php echo $update['title']; ?></th>
                                    <td><?php echo date('d-m-Y', strtotime($update['from_date'])); ?></td> -->
                                </tr>
                                  <!--  ?php
                                       }
                                    }
                                }
                                ?>  -->
                                </tbody>

                            </table>
                        </div>
                      <!--  <h4 class="text-danger mb-1 mt-3">Disclaimer</h4>
                        <p>On-Line Application validation rules and design are based on the Notification requirement. Candidates are advised to read the Notification carefully and refer &quot;How to
                            Apply&quot;. Application submitted through On-Line form does not imply that candidate has fulfilled all the criteria given in the notification . Application is subject to subsequent
                            scrutiny and can be rejected if found to be ineligible at any point of time.</p> -->
                    </div>





            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <ul class="tab_news">
                <?php 
                    if(isset($updates) && !empty($updates)){
                        $count=0;
                        foreach($updates as $update){
                          if($update['update_type']==3){
                              $count++;
                              if ($count>3){
                                  break;
                              }
                            ?>
                      <li>
                        <a href="<?php echo $update['link']; ?>"><?php echo $update['title']; ?> <img src="<?php echo $base_assets_url; ?>images/new_red.gif" width="33" height="16"></a> <span>Post Date : <?php echo date('l , F d , Y',strtotime($update['from_date'])); ?></span>
                      </li>
                            <?php
                          }
                        }
                    }
                ?>
              </ul>
            </div>
              <div class="tab-pane fade " id="download" role="tabpanel" aria-labelledby="download-tab">
                  <ul class="tab_news">


                          <li><a href="<?php echo $base_assets_url; ?>images/Profile.pdf">Ujjal Vikas Profile <img src="<?php echo $base_assets_url; ?>images/new_red.gif" width="33" height="16"></a> </li>
                        <!--  <li><a href="<?php echo $base_assets_url; ?>images/Ujjal_Vikas_Notification_Job_Post.pdf">Notice <img src="<?php echo $base_assets_url; ?>images/new_red.gif" width="33" height="16"></a> </li> -->

                  </ul>
              </div>
          </div>
        </div>
<!----    Survey Form    -->

          <div class="contact_form">
              <h3>Product Enquiry:</h3>
              <form action="<?php echo site_url();?>Contact/survey_send" method="post" enctype="multipart/form-data">
                  <div class="main_row">
                      <div class="form-group half_width">
                          <input class="form-control" name="name" placeholder="Your Name *" type="text" required>
                      </div>

                      <div class="form-group half_width">
                          <input class="form-control" name="phone" id="phone" placeholder="Mobile Number *" type="text" required>
                      </div>
                      <div class="form-group half_width">
                          <input class="form-control" name="email" id="email" placeholder="Your Email *" type="email" required>
                      </div>
                      <div class="form-group half_width">
                          <select class="form-control" id="quiry" name="survey" required>
                              <option value="">Type of Query *</option>
                              <option value="Technical issues">Technical issues</option>
                              <option value="New solar">New solar</option>

                          </select>
                      </div>
                      <div class="form-group half_width">
                          <select class="form-control" name="state" required>
                              <option value="">Select State *</option>

                              <option value="Andhra Pradesh">Andhra Pradesh</option>
                              <option value="Assam">Assam</option>
                              <option value="Bihar">Bihar</option>
                              <option value="Chhattisgarh">Chhattisgarh</option>
                              <option value="Jharkhand">Jharkhand</option>
                              <option value="Karnataka">Karnataka</option>
                              <option value="Maharashtra">Maharashtra</option>
                              <option value="Madhya Pradesh">Madhya Pradesh</option>
                              <option value="Orissa">Orissa</option>
                              <option value="Uttar Pradesh">Uttar Pradesh</option>

                          </select>
                      </div>
                      <div class="form-group half_width">
                          <input class="form-control" name="city" id="city" placeholder="City/Town *" type="text" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <textarea class="form-control" name="message" id="message" rows="3" placeholder="Your Message"></textarea>
                  </div>

                  <input class="btn btn-success mt-3 btn-lg mr-2" id="submit" name="submit" type="submit" value="Submit"> <input class="btn btn-danger mt-3 btn-lg" type="reset" value="Reset">
                  <!-- <a class="btn btn-success mt-3 btn-lg mr-2" href="#">Submit</a> <a class="btn btn-danger mt-3 btn-lg" href="#">Reset</a> -->
              </form>
              <?php
              if( $this->session->flashdata('send_success') ){
                  ?>
                  <p style="text-align: center; color: green" id="thankYouMessageDiv"> Thank you. We will get you shortly</p>
                  <?php
              }
              else if( $this->session->flashdata('send_fail') ){
                  ?>
                  <p style="text-align: center; color: red" id="thankYouMessageDiv"> Mail has been not sent successfully</p>
              <?php }
              ?>
          </div>

<!-- End Here  -->

      </div>
      <div class="col-md-4">
        <div class="news_box">
          <div class="title_bar">
            <h2><span class="dark_blue">Latest</span> News</h2>
            <div class="border_blue"><span></span></div>
          </div>
          <div class="latest_news">
            <ul>
          <?php
              if (!empty($banner_notices)) {
                  $count = 0;
                foreach ($banner_notices as $banner_notice_key => $banner_notice_value) {
                    $count++;
                    if($count > 5){
                        break;
                    }
                  ?>
              <li>
                <div class="media"> <img src="<?php echo $banner_notice_value['feature_image']; ?>" class="mr-3" alt="...">
                  <div class="media-body">
                    <h5 class="mb-0"><?php echo $banner_notice_value['title']; ?></h5>
                    <?php
$string = strip_tags($banner_notice_value['description']);
if (strlen($banner_notice_value['description']) > 75) {

    // truncate string
    $stringCut = substr($banner_notice_value['description'], 0, 75);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
}
echo $string;
                    ?><a href="<?php echo  $banner_notice_value['url'] ?>" target="_blank">Read More ›</a>
                    <p class="text-muted">(Posted on <?php echo date('d-M-Y', strtotime($banner_notice_value['from_date'])); ?>)</p>
                  </div>
                </div>
              </li>      
                    <?php
                       }
                    }
            ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <?php
}
?>


<?php

if(isset($page['type']) && $page['type']=='notice'){
    ?>
<div class="ccr_inner_section">
  <div class="container some-class-name">
    <div class="row border-bottom">
      <div class="col-md-6">
        <h1><?php echo $page['title']; ?></h1>
      </div>
      <div class="col-md-6">
        <div class="inner_bread_crumb">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Notice</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?php echo $page['title']; ?></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <div class="row mt-4 pt-2">
      <div class="col-md-8">
        <div class="inner_content"> <img src="<?php echo $page['feature_image'] ?>" class="img-fluid mb-3">
          <?php echo $page['description']; ?>
        </div>
      </div>
      <div class="col-md-4">
        <div class="ryt_side">
          <div class="list-group"><a href="https://uvsil.in/page/about-us" class="list-group-item list-group-item-action active"> About Us </a>
              <a href="https://uvsil.in/page/know-solar" class="list-group-item list-group-item-action">Know Solar</a>
              <a href="https://uvsil.in/page/our-products" class="list-group-item list-group-item-action">Our Products</a>
              <a href="https://uvsil.in/page/our-advantages" class="list-group-item list-group-item-action">Our Advantages</a>
              <a href="#" class="list-group-item list-group-item-action">Our Solutions</a>
              <a href="https://uvsil.in/page/grid-rooftop-system" class="list-group-item list-group-item-action">Grid & Rooftop System</a>
              <a href="https://uvsil.in/page/solar-for-rural-energy-system" class="list-group-item list-group-item-action">Solar For Rural Energy System</a>
              <a href="https://uvsil.in/page/new-innovations" class="list-group-item list-group-item-action">New Innovations</a>
              <a href="#" class="list-group-item list-group-item-action">Recruitment</a>
              <a href="#" class="list-group-item list-group-item-action">Franchise & Dealership</a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <?php
}

?>

<div class="section ccr_committee">
  <div class="container some-class-name">
    <div class="title_bar text-center">
      <h2><span class="dark_blue text-white">our </span> Branches </h2>
      <div class="border_blue bg-white"><span></span></div>
    </div>
    <ul id="crousalDemo1">
<?php 
    if(isset($branches_list) && !empty($branches_list)){
      foreach($branches_list as $branch){
        ?>
      <li>
        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
          <div class="flipper">
            <div class="front"> <span class="name"><?php echo $branch['state'] ?></span> </div>
            <div class="back">
              <p><?php echo $branch['address'] ?></p>
            </div>
          </div>
        </div>
      </li>           
        <?php
      }
    }
?>
    </ul>
  </div>
</div>

<?php
          if(isset($partner_images) && !empty($partner_images)){
            ?>
<div class="section ccr_section">
  <div class="container some-class-name">
    <div class="title_bar text-center">
      <h2><span class="dark_blue">Our </span> ASSOCIATES</h2>
      <div class="border_blue"><span></span></div>
    </div>
    <ul id="ashwani">
          <?php
            foreach($partner_images as $partner){
          ?>
        <li>
        <div class="ccr_clients">
          <div class="img_box"> <img src="<?php echo base_url().$partner->dir_path.$partner->img_name; ?>" class="img-fluid" alt="uvsil"> </div>
        </div>
        </li>
          <?php
            }
      ?>
    </ul>
  </div>
</div>
          <?php
            }
      ?>

<div class="ccr_footer">
  <div class="container some-class-name">
    <div class="row">
      <div class="col-md-3">
        <div class="our_links some-class-name">
          <ul>
            <h5>About us</h5>
            <li><a href="https://uvsil.in/page/about-us">Vision, Mission and values</a></li>
            <li><a href="#">Corporate Policies</a></li>
            <li><a href="https://uvsil.in/page/our-products">Our Products</a></li>
            <li><a href="#">Press Release</a></li>

            <li><a href="#">Gallery</a></li>

          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="our_links some-class-name">
          <ul>
            <h5>Rooftops</h5>
            <li><a href="https://uvsil.in/page/residential">Residential</a></li>
            <li><a href="https://uvsil.in/page/commercial-industrial">Commercial & Industrial</a></li>

            <li><a href="https://uvsil.in/page/financing">Financing</a></li>
            <li><a href="https://uvsil.in/page/subsidy">Subsidy</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="our_links some-class-name">
          <ul>
            <h5>Help and Support</h5>
            <li><a href="https://uvsil.in/form">Online Application</a></li>
            <li><a href="#">Book a survey</a></li>
            <li><a href="https://uvsil.in/page/faq">FAQ’s</a></li>
            <li><a href="https://uvsil.in/page/terms-of-use">Terms of Use</a></li>
            <li><a href="https://uvsil.in/page/privacy">Privacy</a></li>
              <li><a href="https://uvsil.in/page/disclaimer">Disclaimer</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="our_links some-class-name">

            <h5>Contact us</h5>
            <p style="color:red"><i class="fa fa-map-marker-alt"></i> Registered Office</p>
               <p style="color: white;">Office no – 205, 2 nd Floor, <br /> Laxman Palace, 19,
                   Veer Savarkar Block, Shakarpur, Delhi – 110092.<br />
                   <b>Contact No</b> – 011 47009317 <br />
                   <b>Toll-Free No.</b> 1800-103-0036<br />
                   <b>Email Id-</b> info@uvsil.in</p>



        </div>

      </div>
    </div>
    <div class="bottom_footer">
      <div class="copy_right some-class-name"> Copyright © Ujjal Vikas Solar India Limited solar panels 2019. &nbsp; All Rights Reserved. </div>
      <div class="design_by some-class-name"> D & D by :<a href="http://www.trigent.in" target="_blank"> Trigent Infotech Pvt. Ltd.</a> </div>
    </div>
  </div>
</div>
<div class="right_product">
  <div class="skool-icon some-class-name">
    <ul>
      <li class="qlCallus"><a href="#">Call us (Toll free) <span>1800-103-0036</span></a></li>
      <li class="qlCu"><a href="<?php echo base_url('page/enquiries'); ?>">Contact <br>
        Us</a></li>
      
      <li class="qlDl"><a href="#"> Solar<br>
              Calculator</a></li>
        <li class="whatS"><a href="https://wa.me/919319511088">Whatsapp <br>
                Us</a></li>
    </ul>
  </div>
</div>

<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="<?php echo $base_assets_url; ?>js/jquery-3.3.1.slim.min.js"></script> 
<script src="<?php echo $base_assets_url; ?>js/popper.min.js"></script> 
<script src="<?php echo $base_assets_url; ?>js/bootstrap.min.js"></script> 

<!-- Navigation JavaScript --> 
<script src="<?php echo $base_assets_url; ?>plugins/nav_menu/bootstrap-4-hover-navbar.js"></script> 

<!--nivo slider---------------------------------------------> 
<!-- <script src="<?php echo $base_assets_url; ?>js/jquery-1.11.3.min.js"></script>  -->
<link rel="stylesheet" href="<?php echo $base_assets_url; ?>plugins/nivoslider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $base_assets_url; ?>plugins/nivoslider/nivo-css/nivo-slider.css" type="text/css" media="screen" />

<!--<script type="text/javascript" src="plugins/nivoslider/nivo-js/jquery.min.js"></script>--> 

<script>
$(window).scroll(function() {   
    var scroll = $(window).scrollTop(); 
        if(scroll >= 200) { 
        $(".navigtaion_bar").addClass("darkHeader");
        } else {    
        $(".navigtaion_bar").removeClass("darkHeader");
    }   
});
</script>



<!-- carousel--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.js"></script>
<script type="text/javascript" src="<?php echo $base_assets_url; ?>plugins/crousal-script/jquery.ashwani.js"></script> 
<script type="text/javascript" src="<?php echo $base_assets_url; ?>plugins/crousal-script/jquery.crousal.js"></script> 
<script type="text/javascript" src="<?php echo $base_assets_url; ?>plugins/crousal-script/jquery.clientele.js"></script> 
<script type="text/javascript">    
    $(window).load(function() {
        $("#crousalDemo1").crousal({
            visibleItems:6,
            animationSpeed:1200,
            autoPlay: true,
            autoPlaySpeed: 3000,            
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: { 
                portrait: { 
                    changePoint:550,
                    visibleItems: 2
                }, 
                landscape: { 
                    changePoint:800,
                    visibleItems:3
                },
                tablet: { 
                    changePoint:1024,
                    visibleItems:4
                }
            }
        }); 
        $("#clienteleDemo1").clientele({
            visibleItems:3,
            animationSpeed:1200,
            autoPlay: true,
            autoPlaySpeed: 3000,            
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: { 
                portrait: { 
                    changePoint:550,
                    visibleItems: 1
                }, 
                landscape: { 
                    changePoint:800,
                    visibleItems:2
                },
                tablet: { 
                    changePoint:1024,
                    visibleItems:3
                }
            }
        }); 
        
           $("#ashwani").vaish({
            visibleItems:6,
            animationSpeed:1200,
            autoPlay: true,
            autoPlaySpeed: 3000,            
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: { 
                portrait: { 
                    changePoint:550,
                    visibleItems: 2
                }, 
                landscape: { 
                    changePoint:800,
                    visibleItems:3
                },
                tablet: { 
                    changePoint:1024,
                    visibleItems:4
                }
            }
        });
        
                    
       });     
</script>


<!--  Font Size Changeing Script --->

<script type="text/javascript" language="javascript" src="<?php echo $base_assets_url; ?>js/jquery.jfontsize-1.0.js"></script>
<!--  End Here --->

    <!----     Font Size Changing script ----------------->
<script type="text/javascript" language="javascript">
    $('.some-class-name').jfontsize({
        btnMinusClasseId: '#jfontsize-m',
        btnDefaultClasseId: '#jfontsize-d',
        btnPlusClasseId: '#jfontsize-p'
    });

</script>

<script>
    function sayThanks() {
        document.getElementById("thankYouMessageDiv").innerHTML = "Thank you for your message. It has been sent.";
    }
</script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
    }

    function triggerHtmlEvent(element, eventName) {
        var event;
        if (document.createEvent) {
            event = document.createEvent('HTMLEvents');
            event.initEvent(eventName, true, true);
            element.dispatchEvent(event);
        } else {
            event = document.createEventObject();
            event.eventType = eventName;
            element.fireEvent('on' + event.eventType, event);
        }
    }

    jQuery('.lang-select').click(function() {
        var theLang = jQuery(this).attr('data-lang');
        jQuery('.goog-te-combo').val(theLang);

        //alert(jQuery(this).attr('href'));
        window.location = jQuery(this).attr('href');
        location.reload();

    });
</script>

<script type="text/javascript">
    $(".langselect").click(function(){
        $(this).text(function(i, v){
            return v === 'हिन्दी' ? 'English' : 'हिन्दी'
        });
    });
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>




    </body>
</html>