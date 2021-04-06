<?php
if(isset($getcredential)){
	
	?>
	<style>
#studenttable {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#studenttable td, #studenttable th {
    border: 1px solid #ddd;
    padding: 8px;
}

#studenttable tr:nth-child(even){background-color: #f2f2f2;}

#studenttable tr:hover {background-color: #ddd;}

#studenttable th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
#studenttable input{
	height: auto;
}
</style>
    
    <table id="studenttable">
    <tr>
    <th>Select <input type="checkbox" name="selectallstudent" id="selectallstudent" onchange="selectallstudents()" value=""></th>
    <th>Name</th>
    </tr>
    <?php
       foreach($getcredential as $credential){
          ?>
          <tr>
          <td><input type="checkbox" name="selectstudent[]" class="selectstudent" value="<?php echo base64_encode($credential['id']); ?>"></td>
          <td><?php echo $credential['firstname'].' '.$credential['lastname']; ?></td>
          </tr>
          <?php
       }
    ?>  
    </table>

<div align="center">
    <button type="button" id="backsubmitstudent" onclick="backsubmitstudents()">Back</button>
    <button type="button" id="selectsubmitstudent" onclick="selectsubmitstudents()">Submit</button>
</div>
    <?php
}

?>

<script>

 function backsubmitstudents(){
 	$("#forgetpassworddiv").empty();
 	$("#forgetpassworddiv").append( $("#submitemailorphonediv").html() );
 	
 }

function selectallstudents(){
    if( $("#selectallstudent").prop('checked') ){
       $(".selectstudent").each(function(k,v){
          $(this).prop('checked', true);
       });
    }

    if( !$("#selectallstudent").prop('checked') ){
       $(".selectstudent").each(function(k,v){
          $(this).prop('checked', false);
       });
    }
}

function selectsubmitstudents(){
    if( $(".selectstudent:checkbox:checked").length > 0 ){
        var selectedstudents = [];
       $(".selectstudent:checkbox:checked").each(function(k,v){
            selectedstudents.push( $(this).val() ); 
       });
        
       $.ajax({
       	<?php
        if($sendingprocess == 'mail'){
          ?>
        url:'<?php echo base_url('site/sendemailcredentialtomultiplestudent') ?>',
          <?php
        }
        else if( $sendingprocess == 'phone' ){
          ?>
        url:'<?php echo base_url('site/sendphonecredentialtomultiplestudent') ?>',
          <?php
        }
       	?>
        
        method:'post',
        cache:false,
        data:{selectedstudents:selectedstudents},
        success:function(s){
            if(s== 'sent'){

                        $("#submitemailorphonediv").hide();
                        $("#forgetpassworddiv").empty();
                        $("#successmodalbody").empty();
                    $("#successmodalbody").append("<div class='alert alert-success'>Your Login Detail has been sent successfully</div>");
                       $("#forgetpassworddiv").append( $("#successmodaldiv").html() );
                       //alert('Login Details Sent Successfully');
                       //$(location).attr('href', "<?php echo base_url('site/login'); ?>");;
                    }
                    else if( s=='Record not found' ){
                         $("#submitemailorphonediv").hide();
                        $("#forgetpassworddiv").empty();
                        $("#successmodalbody").empty();
                    $("#successmodalbody").append("<div class='alert alert-danger'>No Record Found.. please try again</div>");
                       $("#forgetpassworddiv").append( $("#successmodaldiv").html() );
                    }
                    else{
                       // $("#successmodal").modal('show');
                        $("#submitemailorphonediv").hide();
                        $("#forgetpassworddiv").empty();
                        $("#successmodalbody").empty();
                    $("#successmodalbody").append(s);
                       $("#forgetpassworddiv").append( $("#successmodaldiv").html() );
                    }
                    //alert(s);
                    console.log(s);
        },
        error:function(e){
          alert(e);
          console.log(e);
        }
       });
       
    }
    else{
        alert('Please select a student');
        return false;
    }
}

</script>