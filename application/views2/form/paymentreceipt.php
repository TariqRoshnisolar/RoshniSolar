<style>
#payment_receipt{
	width: 400px;
	    box-shadow: 2px 2px #f7f7f7;
	    border: 1px solid #e2e2e2;
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
<div class="content-wrapper" style="min-height: 946px;">
<section class="content" >
	<div class="row">
		<div class="col-md-12">
			<div class="box-body">
				<br><br>
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
						<tr><td class="profilehead">Candicate Name</td><td class="headdots">:</td><td>Pawan Kumar</td></tr>
						<tr><td class="profilehead">Application No.</td><td class="headdots">:</td><td>000099</td></tr>
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
			</div>
		</div>
	</div>
</section>
</div>