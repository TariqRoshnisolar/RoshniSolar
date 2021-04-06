<div class="emp-profile">
    <img class="checkIcon" src="<?php echo base_url(); ?>assets/front/img/Check.svg" alt="Payment Successful Icon">
    <h1>Payment Successful!</h1><hr>
    <div>        
        <table class="paymentTable" width = "100%">
            <?php //echo '<pre>'; print_r($login_user_data); ?>
            <tr><td>Name:</td><td><?php echo $login_user_data['f_name'] ?> <?php echo $login_user_data['l_name'] ?></td></tr>
            <tr><td>Email: </td><td><?php echo $login_user_data['email_id'] ?></td></tr>
            <tr><td>Mobile:</td><td>+91 <?php echo $login_user_data['phone_no'] ?></td></tr>    
            <tr><td>Amount Paid:</td><td>₹<?php echo $login_user_data['registration_amt'] ?> (Including GST)</td></tr>    
            <tr><td>Transaction Id:</td><td><?php echo $login_user_data['payment_tracking_id'] ?></td></tr>
            <tr><td>Application No:</td><td><?php echo $login_user_data['application_no'] ?></td></tr>
        </table>
    </div>
   <center> 
   	<button onclick="print_page();" class="print_button print_button2">Online Payment Receipt</button>
   	<a href="javascript:void(0);" onclick="download_page();" type="button" class="print_button print_button3">Download Payment Receipt</a>
   </center>
</div>
<?php 
$data = $this->db->get_where('users_info',array('application_no'=>$login_user_data['application_no']))->row();
$setting = $this->db->get('site_setting')->row();
?>
<div class="invoiceDiv" id='DivIdToPrint' style="display: none; font-family:'Arial';">
    <p align=center style="margin-bottom: 0in; line-height: 100%"><font face="arial unicode ms, serif"><b>ROSHNI URJAN NIGAM OPC PVT. LTD
</b></font></p>
<p align=center style="margin-bottom: 0in; line-height: 100%"><font face="arial unicode ms, serif">Online Payment Receipt</font></p>
<p align=center style="margin-bottom: 0in; line-height: 100%"><font face="arial unicode ms, serif"><font size=2 style="font-size: 9pt">Submitted date: <?php echo date('d/m/Y',strtotime($data->created_at)); ?> Print Time: <?php echo date('h:i A')?></font></font></p>
<p align=center style="margin-bottom: 0in; line-height: 100%"><br>
</p>
<center>
    <table width=430 cellpadding=7 cellspacing=0>
        <col width=144>
        <col width=26>
        <col width=215>
        <tr valign=top>
            <td width=144 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p><font face="arial unicode ms, serif"><font size=1 style="font-size: 8pt">Application
                no.</font></font></p>
            </td>
            <td width=26 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p align=center><font face="arial unicode ms, serif"><font size=1 style="font-size: 8pt"><b>:</b></font></font></p>
            </td>
            <td width=215 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p align=center><?php echo $login_user_data['application_no']; ?><br>
                </p>
            </td>
        </tr>
        <tr valign=top>
            <td width=144 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p><font face="arial unicode ms, serif"><font size=1 style="font-size: 8pt">Name</font></font></p>
            </td>
            <td width=26 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p align=center><font face="arial unicode ms, serif"><font size=1 style="font-size: 8pt"><b>:</b></font></font></p>
            </td>
            <td width=215 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p align=center><?php echo $login_user_data['f_name']; ?> <?php echo $login_user_data['m_name']; ?> <?php echo $login_user_data['l_name']; ?><br>
                </p>
            </td>
        </tr>
        <tr valign=top>
            <td width=144 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p><font face="arial unicode ms, serif"><font size=1 style="font-size: 8pt">Father’s
                name</font></font></p>
            </td>
            <td width=26 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p align=center><font face="arial unicode ms, serif"><font size=1 style="font-size: 8pt"><b>:</b></font></font></p>
            </td>
            <td width=215 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p align=center><?php echo $login_user_data['father_name']; ?><br>
                </p>
            </td>
        </tr>
        <tr valign=top>
            <td width=144 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p><font face="arial unicode ms, serif"><font size=1 style="font-size: 8pt">Mother’s
                name</font></font></p>
            </td>
            <td width=26 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p align=center><font face="arial unicode ms, serif"><font size=1 style="font-size: 8pt"><b>:</b></font></font></p>
            </td>
            <td width=215 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p align=center><?php echo $login_user_data['mother_name']; ?><br>
                </p>
            </td>
        </tr>
        <tr valign=top>
            <td width=144 height=3 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p><font face="arial unicode ms, serif"><font size=1 style="font-size: 8pt">Paid
                amount</font></font></p>
            </td>
            <td width=26 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p align=center><font face="arial unicode ms, serif"><font size=1 style="font-size: 8pt"><b>:</b></font></font></p>
            </td>
            <td width=215 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p align=center>₹<?php echo $login_user_data['registration_amt']; ?> (Including GST 18%)<br>
                </p>
            </td>
        </tr>
        <tr valign=top>
            <td width=144 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p><font face="arial unicode ms, serif"><font size=1 style="font-size: 8pt">Transaction
                id</font></font></p>
            </td>
            <td width=26 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p align=center><font face="arial unicode ms, serif"><font size=1 style="font-size: 8pt"><b>:</b></font></font></p>
            </td>
            <td width=215 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p align=center><?php echo $login_user_data['payment_tracking_id']; ?><br>
                </p>
            </td>
        </tr>
        <tr valign=top>
            <td width=144 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p><font face="arial unicode ms, serif"><font size=1 style="font-size: 8pt">Payment
                date</font></font></p>
            </td>
            <td width=26 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p align=center><font face="arial unicode ms, serif"><font size=1 style="font-size: 8pt"><b>:</b></font></font></p>
            </td>
            <td width=215 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p align=center><?php echo $login_user_data['payment_status']; ?><br>
                </p>
            </td>
        </tr>
        <tr valign=top>
            <td width=144 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p><font face="arial unicode ms, serif"><font size=1 style="font-size: 8pt">Mobile
                number</font></font></p>
            </td>
            <td width=26 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p align=center><font face="arial unicode ms, serif"><font size=1 style="font-size: 8pt"><b>:</b></font></font></p>
            </td>
            <td width=215 style="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                <p align=center><?php echo $login_user_data['phone_no']; ?><br>
                </p>
            </td>
        </tr>
    </table>
</center>
<p align=justify style="margin-bottom: 0in; line-height: 100%"><br>
</p>
<p align=justify style="font-size:15px;margin-bottom: 0in; line-height: 100%;text-align: center;padding-left: 0.08in; padding-right: 0.08in">I <?php echo $login_user_data['f_name']; ?> <?php echo $login_user_data['m_name']; ?> <?php echo $login_user_data['l_name']; ?> hereby declare that I have made online Payment for the online Examination Fees, for which details are mentioned above, if at any point of time it is found that the receipt is fake or amount is not credited in Company Account my Examination form will be rejected.</p>
<p align=center style="margin-bottom: 0in; line-height: 100%"><br>
</p>
<p style="margin-bottom: 0in; line-height: 100%;font-weight: bold;">Note : This is a system generated receipt hence their is no signature required on  behalf of the company*
</p>
</div>
<style type="text/css">
.checkIcon {height: 15%;width: 15%;display: block;margin-left: auto;margin-right: auto;}
h1 {font-family: Arial, Helvetica, sans-serif;color: #33B97E;text-align: center;}
.paymentTable {table-layout: auto;margin: 5% 25%;font-family: Arial, Helvetica, sans-serif;}
hr {border: 5px solid #33B97E;border-radius: 5px;margin: 5% 20%;}
.print_button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.print_button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.print_button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #77c180;
}
</style>

<script type="text/javascript">
function print_page(){
  var divToPrint=document.getElementById('DivIdToPrint');
  var newWin=window.open('','Print-Window');
  newWin.document.open();
  newWin.document.write('<html><body style="font-family: Gotham, Helvetica Neue, Helvetica, Arial," sans-serif";" onload="window.print()">'+divToPrint.innerHTML+'</body></html>');
  newWin.document.close();
  setTimeout(function(){newWin.close();},10);
}

function download_page(){
	
}
</script>