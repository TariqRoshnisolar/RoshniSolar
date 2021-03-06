<?php $base_assets_url = '/backend/themes/default/'; ?>
<?php $base_assets_urlf = base_url().'/backend/themes/default/'; ?>
<!doctype html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $site = getSiteSettings(); ?>
    <title><?php echo isset($site->title)?$site->title:'Roshni Solar';?></title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $base_assets_urlf;?>css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $base_assets_urlf;?>css/bootstrap.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo $base_assets_urlf;?>css/form.css">
    <link rel="stylesheet" href="<?php echo $base_assets_urlf?>css/example-styles.css" type="text/css">
    <script src="<?php echo $base_assets_urlf; ?>js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url(); ?>backend/custom/jquery.min.js"></script>
    <script src="<?php echo $base_assets_urlf; ?>js/popper.min.js"></script>
    <script src="<?php echo $base_assets_urlf; ?>js/bootstrap.min.js"></script>
    <link href="<?php echo base_url(); ?>backend/plugins/datepicker/datepicker3.css" rel="stylesheet"/>
    <script src="<?php echo base_url(); ?>backend/datepicker/date.js"></script>
    <script src="<?php echo base_url(); ?>backend/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>backend/js/sstoast.js"></script>
    <link href="<?php echo base_url(); ?>backend/toast-alert/toastr.css" rel="stylesheet"/>
    <script src="<?php echo base_url(); ?>backend/toast-alert/toastr.js"></script>   

<style>
.login_info{

}
.loginbtn{
    padding: 0;
    margin: 0;
}
.formbtn{
    text-align: right;
}
.toast-message p{
    color: white !important;
}
</style>

<!---- Ajax Loader ---->



<style>

#processloading

{

    display : none;

}

#processloading.show

{

    display : block;

    position : fixed;

    z-index: 100;

    background-image : url('<?php echo base_url(); ?>uploads/other_images/ajax-loader.gif');

    opacity: 1;

    background-repeat : no-repeat;

    background-position : center;

    left : 0;

    bottom : 0;

    right : 0;

    top : 0;

}

#loadinggif.show

{

    left : 50%;

    top : 50%;

    position : absolute;

    z-index : 101;

    width : 32px;

    height : 32px;

    margin-left : -16px;

    margin-top : -16px;

}

</style>

<!--- Ajax Loader End Css --->

<!--- Ajax Loader --->

<script>

$(document).ready(function(){

      if( $("#processloading").length == 0 ){

     $("#mainBody").append(`<div id="processloading"></div>`);

   }

});

</script>

<!-- End Loader -->



<script>

var base_url = "<?php echo base_url(); ?>";

$(function($) {

    // this script needs to be loaded on every page where an ajax POST may happen

    $.ajaxSetup({

        cache:false,
        dataType:'json',
        beforeSend:function(){
        $(".ajaxStart").attr("disabled", true);
          $("#processloading").removeClass();

          $("#processloading").addClass('show');

        },

        complete:function(){
            $(".ajaxStart").attr("disabled", false);
          $("#processloading").removeClass();

          $("#processloading").addClass('hide');          

        },

        error:function(e){

           console.log(e);

        }

    });

 

 

  // now write your ajax script 

 

});

</script>

<script>

function registration_step(step){
    let next_url = '';
    switch(step)
    {
        case "1":
        next_url = 'form/details';
        break;
        case "2":
        next_url = 'form/qualification';
        break;        
        case "3":
        next_url = 'form/doc_upload';
        break;
        case "4":
        next_url = 'form/preview';
        break;   
        case "5":
        next_url = 'index.php/form/payment';
        break;  
        case "6":
        next_url = 'index.php/form/payment';
        break;                     
        default:
        next_url = 'form/basic_info';
        break;
    }
    return next_url;
}

</script>

</head>

<body id="mainBody">
<div class="ccr_header border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="logo"> <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/front/img/logo.png" style="width: 35%;" class="img-fluid"></a> </div>
            </div>            
            <?php if($page == 'index'){ ?>
            <div class="col-md-6">
              <!-- <a href="<?php echo site_url();?>index.php/form/basic_info"> <button type="button" class="btn btn-success float-right text-uppercase mt-4">Click here for New Registration</button></a> -->
                <?php 
                $site = getSiteSettings();
                if($site->opening_date <= date('Y-m-d') || $site->instant_close_timer == 1){
                ?>
                <a href="<?php echo site_url();?>index.php/form/basic_info"> <button type="button" class="btn btn-success float-right text-uppercase mt-4">Click here for New Registration</button></a>
                <?php }else{ ?>
                 <a href="javascript:void(0);"> <button type="button" class="btn btn-dark float-right text-uppercase mt-4" data-toggle="modal" data-target="#myModal">Click here for New Registration</button></a>   
                <?php } ?>
            </div>
            <?php } ?>
            
            <?php
            if(isset($login_user_data) && $login_user_data){
                ?>
            <div class="col-md-3"></div>
            <div class="col-md-3 float-right">
                <div class="login_info">Welcome! <b><?php echo $login_user_data['f_name'].' '; ?><?php echo ($login_user_data['m_name'])? $login_user_data['m_name'].' ':'' ?><?php echo $login_user_data['l_name']; ?></b></div>
                <div class="login_info">User Id : <b><?php echo $login_user_data['phone_no'] ?></b></div>
                <div class="login_info">Application No : <b><?php echo $login_user_data['application_no'] ?></b></div>
                <div><a href="<?php echo base_url('index.php/form/logout'); ?>" id="logout" class="btn btn-link loginbtn">Logout</a></div>
            </div>
                <?php
            }
            ?>

        </div>

    </div>

</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">        
        <h4 class="modal-title">Attention!!</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <?php 
             $site = getSiteSettings();
            if(isset($site->opening_date) && !empty($site->opening_date)){
              $nowDate = date('Y-m-d');
              $day_number = date('N', strtotime($nowDate));
              $divDays = $site->opening_date;
              $date_cur_plus = date('d-m-Y', strtotime($divDays));
              $fullDateAndTime = $date_cur_plus.' 23:59:00';
              $dateFormat = date('l d, m Y h:i A',strtotime($fullDateAndTime));             
            ?>
            <script type="text/javascript">
              var dateString = '<?php echo $fullDateAndTime; ?>',
                dateTimeParts = dateString.split(' '),
                timeParts = dateTimeParts[1].split(':'),
                dateParts = dateTimeParts[0].split('-'),
                date;
              date = new Date(dateParts[2], parseInt(dateParts[1], 10) - 1, dateParts[0], timeParts[0], timeParts[1]);
              var count_time = date.getTime();
              var x = setInterval(function() {
              var timezone = new Date().toLocaleString('en-US', { timeZone: 'Asia/Kolkata' });
              var now = new Date(timezone).getTime();
              var distance = count_time - now;

              var days = Math.floor(distance / (1000 * 60 * 60 * 24));
              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
              var seconds = Math.floor((distance % (1000 * 60)) / 1000);
              
              // Output the result in an element with id="demo"
              document.getElementById("content-timer").innerHTML = '<div class="day"><div class="title">Day</div><span class="number">'+('0'+days).slice(-2)+'</span></div><div class="hour"><div class="title">Hour</div><span class="number">'+('0'+hours).slice(-2)+'</span></div><div class="minute"><div class="title">Minute</div><span class="number">'+('0'+minutes).slice(-2)+'</span></div><div class="second"><div class="title">Second</div><span class="number">'+('0'+seconds).slice(-2)+'</span></div>';
              // If the count down is over, write some text 
              if(distance < 0){
                  clearInterval(x);
                  document.getElementById("content-timer").innerHTML = "EXPIRED";
              }
          }, 1000);
          </script>
            <div class="countdown">
                <div class="content-timer" id="content-timer"></div>
                <p>The online application programme for various post of solar field starts from <strong style="color: #e43007"><?php echo date('dS F Y',strtotime($site->opening_date)); ?></strong> to <strong style="color: #e43007"><?php echo date('dS F Y',strtotime($site->last_date)); ?></strong>. Candidate should follow our official website www.roshnisolar.in for further updates.</p>
            </div>
            <?php } ?>
            <style type="text/css">
                .countdown .content-timer {display: flex;justify-content: center;flex-wrap: wrap;margin: 0 -5px;font-size: 20px;    font-weight: bold;color: #879cbb;}
                .countdown .content-timer .day, .countdown .content-timer .hour, .countdown .content-timer .minute, .content-timer .second { margin: 0 15px;text-align: center;}
                .countdown p{text-align: center; margin-top: 14px;color: #949090;}
            </style>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<?php 
if($page != 'index' && $page != 'success'){
?>
<div class="ccr_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-wizard-wrap proccess_button">
                    <button type="button" data-page="basic_info" class="btn btn-dark stepbtn active">1. Basic Info</button>
                    <button type="button" data-page="details" class="btn btn-dark stepbtn">2. Details</button>
                    <button type="button" data-page="qualification" class="btn btn-dark stepbtn">3. Qualification</button>
                    <button type="button" data-page="doc_upload" class="btn btn-dark stepbtn">4. Photo & Signature</button>
                    <button type="button" data-page="preview" class="btn btn-dark stepbtn">5. Preview</button>
                    <button type="button" data-page="payment" class="btn btn-dark stepbtn">6. Payment</button>
                </div>
<?php
}
?>

<script>
$(document).ready(function(){
    let active_page = "<?php echo $page; ?>";
    $(".stepbtn").each(function(k,v){
        $(this).removeClass();
        if(active_page == $(this).attr('data-page')){
            $(this).addClass('btn btn-success stepbtn');
        }
        else{
            $(this).addClass('btn btn-dark stepbtn');
        }
    });
});
</script>