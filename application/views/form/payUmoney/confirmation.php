<div class="container mt-5">
	<div class="row">
        <div class="col-md-2"></div>  
        <div class="col-md-8">
        	<div class="card">
        		<h5 class="card-header bg-success text-white">Checkout Confirmation</h5>
        		<div class="card-body">
        			<form action="<?php echo $action; ?>/_payment" method="post" id="payuForm" name="payuForm">
		                <input type="hidden" name="key" value="<?php echo $mkey; ?>" />
		                <input type="hidden" name="hash" value="<?php echo $hash; ?>"/>
		                <input type="hidden" name="txnid" value="<?php echo $tid; ?>" />
		                <div class="form-group">
		                    <label class="control-label">Your Name</label>
		                    <input class="form-control" name="firstname" id="firstname" value="<?php echo $name; ?>" readonly/>
		                </div>
		                <div class="form-group">
		                    <label class="control-label">Email</label>
		                    <input class="form-control" name="email" id="email" value="<?php echo $mailid; ?>" readonly/>
		                </div>
		                <div class="form-group">
		                    <label class="control-label">Phone</label>
		                    <input class="form-control validate" name="phone" id="phone" value="<?php echo $phoneno; ?>" data-validate-msg="Phone field is required" readonly/>
		                </div>
		                <div class="form-group">
		                    <label class="control-label"> Product Info</label>
		                    <textarea class="form-control" name="productinfo" readonly><?php echo $productinfo; ?></textarea>
		                </div>
		                <div class="form-group">
		                    <label class="control-label">Total Payable Amount</label>
		                    <input class="form-control" name="amount" value="<?php echo $amount; ?>"  readonly/>
		                </div>		                
		                <div class="form-group">
		                    <input name="surl" value="<?php echo $sucess; ?>" size="64" type="hidden" />
		                    <input name="furl" value="<?php echo $failure; ?>" size="64" type="hidden" />  
		                    <!--for test environment comment  service provider   -->
		                    <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
		                    <input name="curl" value="<?php echo $cancel; ?> " type="hidden" />
		                </div>
		                <div class="form-group float-right">
		                	<input type="button" value="Pay Now" class="btn btn-success payBtn"/>
		                </div>
		            </form> 
        		</div>
        	</div>
        	                                   
        </div>
        <div class="col-md-2"></div>
    </div>
	<!-- Footer -->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
<script type="text/javascript">
	function aaa(message,secret) {
     var hash = CryptoJS.HmacSHA256("Message", "secret");
     var hashInBase64 = CryptoJS.enc.Base64.stringify(hash);
     document.write(hashInBase64);
    }

    $(".payBtn").click(function(){
		$( "#payuForm" ).submit();
	});
</script>