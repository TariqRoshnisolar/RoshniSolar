<div class="container mt-5">
	<div class="row">
        <div class="col-md-2"></div>  
        <div class="col-md-8">
        	<div class="card">
        		<h4 class="card-header">Transaction <label for="Success" class="badge badge-success">Success</label></h4>
        		<div class="card-body">
        			<?php 
		                echo "<p>Thank You. Your order status is ". $status .".</br>";
		                echo "Your Transaction ID for this transaction is ".$txnid."</br>";
		                echo "We have received a payment of Rs. " . $amount . ". Your order  will dispatch soon.</p>";
		                echo "<a href='".base_url()."index.php/form/payment' class='btn btn-sm float-left btn-info'> < - Go Back</a>";
		            ?>
        		</div>
        	</div>
            
         </div> 
        <div class="col-md-2"></div>
    </div>
	<!-- Footer -->
	
	