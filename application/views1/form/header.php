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
            <?php
            if($page == 'index'){
                ?>
            <div class="col-md-6">
                <a href="<?php echo site_url();?>index.php/form/basic_info"> <button type="button" class="btn btn-success float-right text-uppercase mt-4">Click here for New Registration</button></a>
            </div>
                <?php
            }
            ?>
            
            <?php
            if(isset($login_user_data) && $login_user_data){
                ?>
            <div class="col-md-3"></div>
            <div class="col-md-3 float-right">
                <div class="login_info">Welcome! <b><?php echo $login_user_data['f_name'].' '; ?><?php echo ($login_user_data['m_name'])? $login_user_data['m_name'].' ':'' ?><?php echo $login_user_data['l_name']; ?></b></div>
                <div class="login_info">UserId : <b><?php echo $login_user_data['phone_no'] ?></b></div>
                <div class="login_info">Application No : <b><?php echo $login_user_data['application_no'] ?></b></div>
                <div><a href="<?php echo base_url('index.php/form/logout'); ?>" id="logout" class="btn btn-link loginbtn">Logout</a></div>
            </div>
                <?php
            }
            ?>

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
                <div class="proccess_button">
                    <button type="button" data-page="basic_info" class="btn btn-dark stepbtn">1. Basic Info</button>
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