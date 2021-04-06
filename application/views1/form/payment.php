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
                    <form id="payment_form" method="post" action="javascript:void(0);">
                        <input type="hidden" name="merchant_id" value="209560">
                        <input type="hidden" name="order_id" value="<?php echo $login_user_data['application_no'].'_'.time(); ?>"></td>
                        <input type="hidden" name="amount" value="<?php if(isset($registration_amt)){ echo $registration_amt; } ?>">
                        <input type="hidden" name="currency" value="INR">
                        <input type="hidden" name="redirect_url" value="<?php echo base_url().'form/paymentstatus'; ?>">
                        <input type="hidden" name="cancel_url" value="<?php echo base_url().'form/paymentstatus'; ?>">
                        <input type="hidden" name="language" value="EN">
                        <div class="table-responsive">
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
                            <button type="submit" name="submit_online_payment" id="save_payment_details" onclick="razorpaySubmit(this);" class="btn btn-success float-right">Submit</button>
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

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
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

</body>

</html>

