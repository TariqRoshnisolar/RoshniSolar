<?php if($page != 'index'){ ?>
<div class="ccr_header border-top mt-5">
    <div class="container">
    	<h4>For Instant help</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="login_info"><b>Toll Free : <a href="tel:+917665662444" style="color: #007bff;">1800 123 7055</b></a></div>
            </div>            
            
            <div class="col-md-4">
            	<div class="login_info"><b>Give us a Missed Call : <a href="tel:+917665662444" style="color: red;">7665662444</b></a></div>
            </div>
            <div class="col-md-4">
                <div class="login_info"><b>Whatsapp :  <a href="https://api.whatsapp.com/send?phone=+919311775816" target="_blank"  style="color: green;">9311775816</a></b></div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<script>
$(document).ready(function(){
    var date_format = 'dd-mm-yyyy';
    $('.date').datepicker({
        //  format: "dd-mm-yyyy",
        format: date_format,
        autoclose: true,
    });     
});
</script>
</body>
</html>