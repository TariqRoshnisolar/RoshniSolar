<style>

.alert-warning{

    color: #000000;

    background-color: #e3ffe185;

    border-color: #86ff7e85;

}

.alert-warning p{

    font-size:15px;

}

.draft_input{

    display:none;

}

#blah{

    display:none;

}

#online_mode{

    display:none;

}

.online_input{

    display:none;

}

</style>

<?php

$productinfo = 'First we need to create account on Razorpay and generate KeyId and Secret Key. We will keep created Razorpay account in test mode to test payment functionality';

$txnid = time();

$surl = base_url().'success';

$furl = base_url().'failed';        

$key_id = RAZOR_KEY_ID;

$currency_code = 'INR';            

$total = (10* 100); 

$amount = 10;

$merchant_order_id = 1234567890;

$card_holder_name = 'Chinmoy Ghosh';

$email = 'chinmoyghosh721201@gmail.com';

$phone = '8170988321';

$name = 'Chinmoy Ghosh';

$return_url = base_url().'front/razorpay/callback';

?>

<form name="razorpay-form" id="razorpay-form" action="<?php echo $return_url; ?>" method="POST">

  <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" />

  <input type="hidden" name="merchant_order_id" id="merchant_order_id" value="<?php echo $merchant_order_id; ?>"/>

  <input type="hidden" name="merchant_trans_id" id="merchant_trans_id" value="<?php echo $txnid; ?>"/>

  <input type="hidden" name="merchant_product_info_id" id="merchant_product_info_id" value="<?php echo $productinfo; ?>"/>

  <input type="hidden" name="merchant_surl_id" id="merchant_surl_id" value="<?php echo $surl; ?>"/>

  <input type="hidden" name="merchant_furl_id" id="merchant_furl_id" value="<?php echo $furl; ?>"/>

  <input type="hidden" name="card_holder_name_id" id="card_holder_name_id" value="<?php echo $card_holder_name; ?>"/>

  <input type="hidden" name="merchant_total" id="merchant_total" value="<?php echo $total; ?>"/>

  <input type="hidden" name="merchant_amount" id="merchant_amount" value="<?php echo $amount; ?>"/>

</form>

                <div class="form_part">

                    <form id="payment_form" method="post" action="<?=base_url()?>api/paymentdetail">

                         <input type="hidden" name="id" id="id">

                         <input type="hidden" name="amount" id="amount">

                    <input type="hidden" name="transaction_id" id="transaction_id">

                    <!-- <input type="hidden" name="order_id" id="order_id"> -->

                    <input type="hidden" name="signature" id="signature">

                        <input type="hidden" name="merchant_id" value="209560">

                         <input type="hidden" name="order_id" id="order_id" value="<?php echo $login_user_data['application_no'].'_'.time(); ?>"></td> 

                      <!--   <input type="hidden" name="amount" value="<?php if(isset($registration_amt)){ echo $registration_amt; } ?>"> -->

                        <!-- <input type="hidden" name="currency" value="INR"> -->

                        <input type="hidden" name="redirect_url" value="<?php echo base_url().'form/paymentstatus'; ?>">

                        <input type="hidden" name="cancel_url" value="<?php echo base_url().'form/paymentstatus'; ?>">

                        <input type="hidden" name="language" value="EN">

                        <!-- <div class="table-responsive">

                            <table class="table table-striped table-bordered">

                                <tbody>    

                                <tr>

                                    <th scope="row">Amount / धनराशि </th>

                                    <td colspan="2">

                                     <input type="text" id="amount" data-error="Amount" class="form-control required" value="<?php if(isset($registration_amt)){ echo $registration_amt; } ?>" readonly>

                                    </td>

                                </tr>



                                <tr>

                                    <th scope="row">Payment Option / भुगतान विकल्प</th>

                                    <td colspan="2" class="text-primary"> 

                                    <select id="select_payment_option" data-error="Payment Option" class="form-control required" onchange="getpaymentoption(this.value)">

                                        <option value="">Select</option>

                                        <option value="1">Razorpay</option>

                                    </select>

                                    <div id="draft_notice">

                                    </div>

                                    </td>

                                </tr>



                                <tr class="draft_input">

                                    <th scope="row">Demand Draft No.</th>

                                    <td colspan="2" class="text-primary"> 

                                        <input type="text" id="draft_no" data-error="Demand Draft No." class="form-control required">

                                    </td>

                                </tr>



                                <tr class="draft_input">

                                    <th scope="row">Issuing Bank</th>

                                    <td colspan="2" class="text-primary"> 

                                        <input type="text" id="issuing_bank" data-error="Issuing Bank" class="form-control required">

                                    </td>

                                </tr>



                                <tr class="draft_input">

                                    <th scope="row">Date of Issue</th>

                                    <td colspan="2" class="text-primary"> 

                                        <input type="text" id="date_of_issue" data-error="Date of Issue" class="form-control date required">

                                    </td>

                                </tr>



                                <tr class="draft_input">

                                    <th scope="row">Upload Draft Image (100 KB)<br>

                                        <span>(Only JPEG, PNG format is allowed)*</span>

                                    </th>

                                    <td colspan="2" class="text-primary"> 

                                        <input type="file" id="draft_image" onchange="readURL(this);" data-error="Draft Image" class="form-control required">

                                        <img id="blah" src="" alt="your image" style="max-width: 600px;"/>

                                    </td>

                                </tr>                

                                </tbody>

                            </table>

                            <div class="formbtn">

                                <div id="offline_mode">

                                <button type="button" id="save_payment_detail" class="btn btn-success float-right">Submit</button>

                                </div>



                                <div id="online_mode">

                                <button type="button" name="submit_online_payment" id="save_payment_details" onclick="payonline(<?php if(isset($registration_amt)){ echo $registration_amt; } ?>);" class="btn btn-success float-right">Submit</button>

                                </div>

                            </div>

                        </div> -->





                        <div class="form-table-wrap">
                                <div class="form-table-row">
                                    <div class="form-table-col">Amount / धनराशि </div>
                                    <div class="form-table-col w-75-text">
                                        <input type="text" id="amount" data-error="Amount" class="form-control required" value="<?php if(isset($registration_amt)){ echo $registration_amt; } ?>" readonly>
                                    </div>
                                </div>
                                <?php 
                                $site = getSiteSettings();
                                $payment = $this->db->get_where('payment_settings',array('is_active' => 'yes'))->result();
                                $allPayment = array();
                                if(count($payment)){
                                    foreach ($payment as $key => $value) {
                                        $allPayment[] = $value->id;
                                    }
                                }
                                //echo '<pre>'; print_r($site);
                                //echo '<pre>'; print_r($payment); die();
                                ?>
                                <div class="form-table-row">
                                    <div class="form-table-col">Payment Option / भुगतान विकल्प</div>
                                    <div class="form-table-col w-75-text">
                                        <div class="payment-option-wrap">
                                            <?php if($site->default_payment == 2 && in_array($site->default_payment, $allPayment)){?>
                                            <div class="custom-radio">
                                                <input type="radio" class="custom-radio-input" value="1" name="payment_type">
                                                <div class="custom-radio-label">
                                                    <div class="img-wrap"><img src="<?php echo base_url();?>assets/front/img/icon/razorpay.png" alt=""></div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <?php if($site->default_payment == 3 && in_array($site->default_payment, $allPayment)){?>
                                            <div class="custom-radio">
                                                <input type="radio" class="custom-radio-input" value="2" name="payment_type">
                                                <div class="custom-radio-label">
                                                    <div class="img-wrap"><img src="<?php echo base_url();?>assets/front/img/icon/payumony.png" alt=""></div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <?php if($site->default_payment == 4 && in_array($site->default_payment, $allPayment)){?>
                                            <div class="custom-radio">
                                                <input type="radio" class="custom-radio-input" value="3" name="payment_type">
                                                <div class="custom-radio-label">
                                                    <div class="img-wrap"><img src="<?php echo base_url();?>assets/front/img/icon/ccavinue.png" alt=""></div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div id="draft_notice"></div>
                                    </div>
                                </div>



                                <!-- <div class="form-table-row draft_input">
                                    <div class="form-table-col">Demand Draft No.</div>
                                    <div class="form-table-col w-75-text">
                                        <input type="text" id="draft_no" data-error="Demand Draft No." class="form-control required">
                                    </div>
                                </div>

                                <div class="form-table-row draft_input">
                                    <div class="form-table-col">Issuing Bank</div>
                                    <div class="form-table-col w-75-text">
                                        <input type="text" id="issuing_bank" data-error="Issuing Bank" class="form-control required">
                                    </div>
                                </div>



                                <div class="form-table-row draft_input">
                                    <div class="form-table-col">Date of Issue</div>
                                    <div class="form-table-col w-75-text">
                                        <input type="text" id="date_of_issue" data-error="Date of Issue" class="form-control date required">
                                    </div>
                                </div>



                                <div class="form-table-row draft_input">
                                    <div class="form-table-col">Upload Draft Image (100 KB)<br>
                                        <span>(Only JPEG, PNG format is allowed)*</span>
                                    </div>
                                    <div class="form-table-col w-75-text">
                                        <input type="file" id="draft_image" onchange="readURL(this);" data-error="Draft Image" class="form-control required">
                                        <img id="blah" src="" alt="your image" style="max-width: 600px;"/>
                                    </div>
                                </div>                
 -->
                            <div class="form-table-row bg-white">
                                <div class="form-table-col button-wrap w-100">
                                    <!-- <div id="offline_mode">
                                        <button type="button" id="save_payment_detail" class="btn btn-success float-right">Submit</button>
                                    </div>
                                    <div id="online_mode"> -->
                                        <button type="button" name="submit_online_payment" id="save_payment_details" onclick="payonline(<?php if(isset($registration_amt)){ echo $registration_amt; } ?>);" class="btn btn-success float-right">Submit</button>
                                    <!-- </div> -->
                                </div>
                            </div>

                        </div> 
                    </form>

                </div>

            </div>

        </div>

    </div>

</div>



<!-- Optional JavaScript -->

<div class="row" style="display: none;">
    <form name="frmPayment" action="<?php echo base_url(); ?>ccavenue-request-handler" method="POST" id="ccavenue">

    </form>
</div>



<script>



$(document).ready(function(){



    $("#select_payment_option").val('');



    var date_format = 'dd-mm-yyyy';

    $('.date').datepicker({

        //  format: "dd-mm-yyyy",

        format: date_format,

        autoclose: true,

    });     

});



function readURL(input) {

    if (input.files && input.files[0]) {

    var reader = new FileReader();



    reader.onload = function (e) {

        $('#blah').attr('src', e.target.result);

        $('#blah').css('display', 'block');

    };



        reader.readAsDataURL(input.files[0]);

    }

}



function getpaymentoption(payment_option){

    $("#draft_notice").empty();

    $("#online_mode").css('display', 'none');

    $("#offline_mode").css('display', 'block');

    $(".draft_input").css('display', 'none');

    //$(".online_input").css('display', 'none');

    if(payment_option == ''){

        return false;

    }

    else if(payment_option == 1){

    $("#online_mode").css('display', 'block');

    $("#offline_mode").css('display', 'none');

    //$(".online_input").css('display', 'table-row');        

    }

    else if(payment_option == 2){

        $("#draft_notice").append(`<br><div class="alert alert-warning"> 

  <p>Kindly make a demand draft in favour of</p>

  <p><b>"UJJAL VIKAS SOLAR INDIA LIMITED"</b></p>

  <p>Payble to New Delhi, Courier it to our Registered office at :-</p>

  <p><b>Office no – 205, 2 nd Floor, Laxman Palace, 19, <br>

  Veer Savarkar Block, Shakarpur, Delhi - 110092</b></p>

</div>`);



        $(".draft_input").css('display', 'table-row');

    }

}



function validaterequired(){

    var validate = 0;

    $(".required").each(function(k,v){

        if( $(this).val() == '' ){

            validate++;

            let errormsg = $(this).attr('data-error') + " is required";

            toastr.error(errormsg);

        }

    });

    if( document.querySelector("#draft_image").value != '' ){

        let draft_img = document.querySelector("#draft_image");

        let draft_img_extension = draft_img.files[0].name.split('.').pop();

        let allowed_extension = ['jpg', 'jpeg', 'png'];



        if( draft_img.files[0] > 100*1024 ){

            toastr.error("Draft Image should be 100kb in size");

            validate++;

        }



        else if( allowed_extension.indexOf(draft_img_extension) == -1 ){

            toastr.error("Only JPEG, PNG format is allowed");

            validate++;

        }      

    }   

    if(validate != 0){

        return false;

    }

}



function savepaymentdetails(){

    if( $("#select_payment_option").val() == 2 ){

        if( validaterequired() == false){

        return false;

        }

        else{

            let amount = $("#amount").val().trim();

            let payment_mode = $("#select_payment_option").val().trim();

            let draft_no = $("#draft_no").val().trim();

            let issuing_bank = $("#issuing_bank").val().trim();

            let date_of_issue = $("#date_of_issue").val().trim();

            let draft_image = $("#draft_image").prop('files')[0];



            var draft_data = new FormData();

            draft_data.append('draft_image', draft_image);

            draft_data.append('payment_mode', payment_mode);

            draft_data.append('amount', amount);

            draft_data.append('draft_no', draft_no);

            draft_data.append('date_of_issue', date_of_issue);

            draft_data.append('issuing_bank', issuing_bank);



            $.ajax({

                url:base_url+"index.php/user/registration/payment/offlinepayment",

                method:'post',

                contentType: false,

                processData: false,

                data:draft_data, 

                beforeSend:function(){

                    $("#save_payment_detail").prop('disabled', true);

                    $("#processloading").removeClass();

                    $("#processloading").addClass('show');

                },          

                success:function(s){

                    //console.log(s);

                    if(s['type']){

                        if(s['type'] == 'success'){

                            toastr.success(s['message']);

                            $(location).attr('href', base_url+'index.php/form/success');

                        }

                        else if(s['type'] == 'error'){

                            toastr.error(s['message']);

                        }

                    }

                },

                complete:function(){

                    $("#processloading").removeClass();

                    $("#processloading").addClass('hide');

                    $("#payment_form").trigger("reset");

                    $("#save_payment_detail").prop('disabled', false); 

                    $('#blah').css('display', 'none');

                    $('#blah').attr('src', '');         

                }

            });

        }

    }

    else{

        toastr.error('Select payment mode option');

        return false;

    }

}





</script>



<!-- <script src="https://checkout.razorpay.com/v1/checkout.js"></script> -->

<script>

  var razorpay_options = {

    key: "<?php echo $key_id; ?>",

    amount: "<?php echo $total; ?>",

    name: "<?php echo $name; ?>",

    description: "Order # <?php echo $merchant_order_id; ?>",

    netbanking: true,

    currency: "<?php echo $currency_code; ?>",

    prefill: {

      name:"<?php echo $card_holder_name; ?>",

      email: "<?php echo $email; ?>",

      contact: "<?php echo $phone; ?>"

    },

    notes: {

      soolegal_order_id: "<?php echo $merchant_order_id; ?>",

    },

    handler: function (transaction) {

        document.getElementById('razorpay_payment_id').value = transaction.razorpay_payment_id;

        document.getElementById('razorpay-form').submit();

    },

    "modal": {

        "ondismiss": function(){

            location.reload()

        }

    }

  };

  var razorpay_submit_btn, razorpay_instance;

 

  function razorpaySubmit(el){

    if(typeof Razorpay == 'undefined'){

      setTimeout(razorpaySubmit, 200);

      if(!razorpay_submit_btn && el){

        razorpay_submit_btn = el;

        el.disabled = true;

        el.value = 'Please wait...';  

      }

    } else {

      if(!razorpay_instance){

        razorpay_instance = new Razorpay(razorpay_options);

        if(razorpay_submit_btn){

          razorpay_submit_btn.disabled = false;

          razorpay_submit_btn.value = "Pay Now";

        }

      }

      razorpay_instance.open();

    }

  }  

</script>



<script src="https://checkout.razorpay.com/v1/checkout.js"></script>



    <script>

    //$(document).ready(function(){

        // $('#checkout_form').submit();

        function payonline(amount){
            var payment_type = $('input[name="payment_type"]:checked').val();
            if(payment_type == undefined){
                alert('Please choose any payment type');
            }else if(payment_type == 1){
                amount = parseFloat(amount);
                if(amount > 0){
                    total_amount = amount*100; 
                    $.ajax({
                    url: "<?=base_url()?>api/razorPayCreateOrder",
                    data:{api_key:"rzp_test_xe35rqzJOkRNOv",key_secret:"DAoDIORW9detN2g3dOJKRUKZ",receipt:"Roshnisolar<?=rand(111111,999999)?>", amount:total_amount, currency:"INR", payment_capture:"1"},
                    method:'POST',
                    success:function(order_id){
                       console.log(order_id.result.order_id);
                        options = {
                        "key": "rzp_test_xe35rqzJOkRNOv",//"rzp_test_xe35rqzJOkRNOv",//DAoDIORW9detN2g3dOJKRUKZ
                        "order_id": order_id.result.order_id,
                        "amount": total_amount,
                        "name": "Roshnisholar",
                        "description": "Payment for Your Booking",
                        "image": "<?php echo base_url(); ?>assets/front/img/logo.png",
                        "handler": function (response){
                            $('#transaction_id').val(response.razorpay_payment_id);
                            $('#order_id').val(order_id.result.order_id);
                            $('#signature').val(response.razorpay_signature);
                            $('#amount').val(amount);                        
                            console.log(response.razorpay_signature);
                            if(response.razorpay_order_id != ''){
                                $('#payment_form').submit();
                            }
                        },
                        "prefill": {
                            "name": '',
                            "email": '',
                            "contact": ''
                        },
                        "notes": {
                            "address": ''
                        },
                        "theme": {
                            "color": "#2130e8"
                        }
                        };   

                        rzp1 = new Razorpay(options);  
                        rzp1.open();
                    }

                    });

                }else{
                    $('#payment_form').submit();
                }            

            }else if(payment_type == 2){
                amount = parseFloat(amount);
                if(amount > 0){
                    window.location.href="<?php echo base_url(); ?>payumoney-confirmation";
                }
            }else if(payment_type == 3){
                amount = parseFloat(amount);
                if(amount > 0){
                    $.ajax({
                        type : "POST",
                        url: "<?php echo base_url(); ?>ccavenue",
                        data : {amount:amount},
                        success:function(result){
                            var json = JSON.parse(JSON.stringify(result));
                            if(json.status == 1){
                                $('#ccavenue').html(json.html);
                                setTimeout(function(){
                                  $('#ccavenue').submit();
                                }, 2000);
                            }
                        }
                    })                   
                }
            }

        }

    //});

    </script>



</body>



</html>



