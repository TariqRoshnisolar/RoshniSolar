<style>
.alert{
	margin-top: 57px;
    font-size: 16px;
}
</style>
<?php 
include("backend/paymentgateway/ccavenue/Crypto.php"); ?>
<?php

	error_reporting(0);
	
	$workingKey='8A1CACFC6DC1ED1918423BB691410F36';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	// echo "<pre>";
	// print_r($decryptValues);
	// echo "</pre>";

	if(isset($decryptValues[3])){
		$information=explode('=',$decryptValues[3]);
		$order_status=$information[1];
		$information_amt=explode('=',$decryptValues[10]);
		$amount = $information_amt[1];
		$student_id = $this->session->userdata('user_id');
		$information_order=explode('=',$decryptValues[0]);
		$payment_order_id = $information_order[1]; 
		$information_tracking=explode('=',$decryptValues[1]);
		$payment_tracking_id = $information_tracking[1]; 
		$information_paymentmode=explode('=',$decryptValues[5]);
		$payment_mode_info = $information_paymentmode[1]; 
        $online_payment_status = $order_status;
        $registration_step = 5;
		if($order_status==="Success"){
            $online_payment_status = $order_status;
            $registration_step = 6;
		    ?>
<div class="alert alert-success col-md-4 offset-md-4">
  <strong>Dear Candicate!</strong> Your payment of Rs. <?php echo $amount; ?> has been recieved successfully.
</div>

<style>
@media screen {
  #printSection {
      display: none;
  }
}

@media print {
  body * {
    visibility:hidden;
  }
  #printSection, #printSection * {
    visibility:visible;
  }
  #printSection {
    position:absolute;
    left:0;
    top:0;
  }
    html, body {
      height:100vh; 
      margin: 0 !important; 
      padding: 0 !important;
      overflow: hidden;
    }
}
#payment_receipt{
    width: 400px;
        box-shadow: 2px 2px #f7f7f7;
        border: 1px solid #e2e2e2;
            margin: 0 auto;
}
#payment_tbl th, #payment_tbl td{
    border: 1px solid #d4d4d4;
    padding-left: 12px;
    padding-right: 12px;
}
#payment_tbl{
    margin: 0 auto;
    width: 96%;

}
.amount{
    float: right;
}
.heads{
    float: left;
}
#candicateinfotbl{
    margin: 0 auto;
}
.profilehead{
    font-weight: bold;
}
.headdots{
    width: 15px;
}
.logoreceipt{
    width: 220px;
}
.logotbl{
    margin: 0 auto;
}
.receiptname{
    font-weight: bold;
    text-decoration: underline; 
}
.receiptfooter{
    font-size: 12px;
    text-align: center;
}
.companyaddress{
    font-size: 11px;
    line-height: 17px;
}
</style>
                <div class="form_part">

                <div id="payment_receipt">
                    <br>
                    <table class="logotbl">
                        <tr><td><img src="<?php echo base_url().'backend/themes/default/images/logo.png' ?>" class="logoreceipt" /></td><td></td><td></td></tr>
                    </table>

                    <table id="candicateinfotbl" style="margin-top: 3px;">
                        <tr>
                            <td class="companyaddress">Office no – 205, 2nd Floor, Laxman Palace, 19, <br>Veer Savarkar Block, Shakarpur, Delhi – 110092</td>
                        </tr>
                    </table>

                    <table id="candicateinfotbl">
                        <tr><td class="profilehead">GST NO.</td><td class="headdots">:</td><td>1234567890</td></tr>
                    </table>                    

                    <center><h6 class="receiptname">Payment Receipt</h6></center>

                    <table id="candicateinfotbl">
                        <tr><td class="profilehead">Candicate Name</td><td class="headdots">:</td><td>
        <?php echo $login_user_data['f_name'].' '; ?>
        <?php
        if(isset($login_user_data['m_name'])){
            echo $login_user_data['m_name'].' ';
        }
        ?>
        <?php echo $login_user_data['l_name']; ?>
                        </td></tr>
                        <tr><td class="profilehead">Application No.</td><td class="headdots">:</td><td><?php echo $login_user_data['application_no']; ?></td></tr>
                    </table>

                    <br>
                    <table id="payment_tbl">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Perticulers</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><span class="heads">Registration Fee</span></td>
                                <td><span class="amount">593</span></td>                                
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><span class="heads">GST 18%</span></td>
                                <td><span class="amount">107</span></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><span class="heads"><b>Total</b></span</td>
                                <td><span class="amount">700</span></td>
                            </tr>                                                                                   
                        </tbody>
                    </table>
                    <br>
                    <div class="receiptfooter">* This is computer generated document. Signature is not required</div>
                    <br>
                </div>

<br>
<div class="col-md-12 text-center">
<button type="button" class="btn btn-dark" id="print_preview" onclick="PrintData()">Print</button>
</div>
<br><br>
                </div>

		    <?php
		}
		else{
?>
<div class="alert alert-danger col-md-5 offset-md-3">
  <strong>Dear Candicate!</strong> Sorry, Your payment has been declined.<br>
    <center>Order Status : <?php echo $order_status; ?></center>
    <center>Please try again....</center>
    Go to payment link - <a href="<?php echo base_url().'form/payment'; ?>"><?php echo base_url().'index.php/form/payment'; ?></a>
</div>
<?php			
		}

            $created_at = date('Y-m-d H:i:s');
            $created_by = "user";
            $data = ['payment_mode'=>1, 'payment_order_id'=>$payment_order_id, 'payment_tracking_id'=>$payment_tracking_id, 'registration_amt'=>$amount, 'registration_step'=>$registration_step, 'updated_at'=>$created_at, 'updated_by'=>$created_by, 'payment_status'=>$online_payment_status];
            $update_payment = $this->payment_model->save($data, $student_id);
            if($update_payment){
                if($online_payment_status=='Success'){
                    $contactno = $this->regstration_model->getusemobilenumber($student_id);
                    if($contactno){
                        $message = "Dear Candicate! Your payment of Rs. ".$amount." has been received.";
                        $sendsms = $this->msgnineone->sendSMS($contactno, $message);
                    }
                }             
            }

	}
	else{
		redirect(base_url());
	}


?>

<div class="text-center col-md-4 offset-md-4">
<a class="btn btn-success" href="<?php echo base_url(); ?>">Back to Home</a>
</div>
<script type="text/javascript">
function PrintData() {
    printElement(document.getElementById("payment_receipt"));
    //printElement(document.getElementById("printThisToo"), true, "<hr />");
    window.print();
}

function printElement(elem, append, delimiter) {
    var domClone = elem.cloneNode(true);

    var $printSection = document.getElementById("printSection");

    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }

    if (append !== true) {
        $printSection.innerHTML = "";
    }

    else if (append === true) {
        if (typeof(delimiter) === "string") {
            $printSection.innerHTML += delimiter;
        }
        else if (typeof(delimiter) === "object") {
            $printSection.appendChlid(delimiter);
        }
    }

    $printSection.appendChild(domClone);
}
</script>	
	
</script>