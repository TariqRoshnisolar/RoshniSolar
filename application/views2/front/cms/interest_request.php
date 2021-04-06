<section class="pageBanner">
    <img src="<?php echo base_url(); ?>assets/front/img/slide/shutterstock_1780391507.jpg" alt="" class="bannerImg">
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Interest Request</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Interest Request</li>
                </ol>
            </div>
        </div>
    </section>
</section>


<section id="contact" class="contact pt-0">
    <div class="container">
        <div class="section-title">
            <h2><?php //echo $this->lang->line('contact_us'); ?></h2>
        </div>
        
        <div class="row">
            <?php if($error = $this->session->flashdata('msg')){ ?>
                <h6 style="margin-left: 415px;color:<?php echo $this->session->flashdata('color'); ?>"><strong>Success!</strong> <?php echo  $error; ?><h6>
                <?php } ?>
                <form method="post" action="<?php echo base_url();?>send-form-request">
                    <div class="col-lg-12" >
                        <h4 class="text-center text-uppercase mb-4"><?php echo $this->lang->line('fill_free_to_message_us'); ?></h4> 
                        
                        <h2>Applicant Details</h2>
                        <br>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label>Customer Category<span style="color:#F00">*</span> :</label>
                                            <select name="id_bene_catg" id="id_bene_catg" class="form-control" onchange="check_customer_category();" required>
                                                <option value="">Select Category</option>
                                                <?php 
                                                    foreach($getintrest_category as $category)
                                                    {
                                                        echo '<option value="'.$category['id'].'">'.$category['name'].'</option>';
                                                    }
                                                ?>
                                            </select>
                                            <span class="common-error-msg text-danger "></span>
                                            <span class="common-error-msg text-danger" id="id_bene_catg_err"></span> 	 		
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label>State<span style="color:#F00">*</span> :</label>
                                            <select name="statecd" id="statecd" class="form-control" onchange="load_district_discom();" required>
                                                <option value="">Select State</option>
                                                <?php 
                                                    foreach($getstates as $getstate)
                                                    {
                                                        echo '<option value="'.$getstate['id'].'">'.$getstate['state'].'</option>';
                                                    }
                                                ?>
                                            </select>
                                            <span class="common-error-msg text-danger "></span> 
                                            <span class="common-error-msg text-danger" id="statecd_err"></span> 			
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label>Electricity Distribution Company Name<span style="color:#F00">*</span> :</label><img src="/img/common/loader.gif" id="loading_discom" style="display: none;"> 
                                            <input type="text" name="elec_distribution_name" class="form-control" id="elec_distribution_name" maxlength="30" value="" required>  
                                            
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group"><label>Consumer Number from Electricity Bill <span style="color:#F00">*</span> :</label><input type="text" name="elect_consumer_acc" class="form-control" id="elect_consumer_acc" maxlength="30" value="" required>           <span class="common-error-msg text-danger "></span> 	
                                            <span class="common-error-msg text-danger" id="elect_consumer_acc_err"></span> 		
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group"><label>Name of the Individual<span style="color:#F00">*</span> :</label><input type="text" name="contact_name" class="form-control" id="contact_name" maxlength="50" value="" required>           <span class="common-error-msg text-danger "></span> 	
                                            <span class="common-error-msg text-danger" id="contact_name_err"></span> 		
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group"><label>Address of the Individual<span style="color:#F00">*</span> :</label><textarea name="address" id="address" class="form-control" rows="6" cols="35" maxlength="1000" required></textarea>           <span class="common-error-msg text-danger "></span>
                                            <span class="common-error-msg text-danger" id="address_err"></span> 	 		
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label>District<span style="color:#F00">*</span> :</label> 
                                            <select name="distcd" class="form-control" id="distcd" required>
                                                <option value="">Select District</option> 
                                            </select>
                                            <span class="common-error-msg text-danger "></span> 	
                                            <span class="common-error-msg text-danger" id="distcd_err"></span> 		
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group"><label>Pincode<span style="color:#F00">*</span> :</label><input type="text" name="pin" class="form-control" id="pin" maxlength="6" value="" required>           <span class="common-error-msg text-danger "></span>
                                            <span class="common-error-msg text-danger" id="pin_err"></span> 	 		
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group"><label>Mobile<span style="color:#F00">*</span> :</label><input type="text" name="mobile" id="mobile" class="form-control" maxlength="10"  value="" required>           <span class="common-error-msg text-danger "></span> 
                                            <span class="common-error-msg text-danger" id="mobile_err"></span> 			
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group"><label>Email<span style="color:#F00">*</span> :</label><input type="email" name="email" class="form-control" id="email" placeholder="you@domain.com" maxlength="50" value="" required>           <span class="common-error-msg text-danger "></span> 
                                            <span class="common-error-msg text-danger" id="email_err"></span> 			
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group"><label>STD Code - Landline phone :</label><br>
                                            <input type="text" name="landphone_std" id="landphone_std" class="form-control" maxlength="5" size="5" style="width:20%;display:inline-block" onkeypress="return number(event)" value="">-<input type="text" name="landphone" id="landphone" class="form-control" maxlength="10" size="12" style="width:60%;display:inline-block" onkeypress="return number(event)" value="">           <span class="common-error-msg text-danger "></span>
                                            <span class="common-error-msg text-danger" id="landphone_err"></span><br>
                                            <span class="common-error-msg text-danger" id="landphone_std_err"></span> 	 		
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h2>Installation Details</h2>
                        <br>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-group"><label>Do you know the suitable size of plant for you building :</label><br>
                                            
                                            <input type="radio" name="know_size" id="yes_size" class="know_size" value="1" checked="checked" onclick="sizeofplant_yes();"> Yes 
                                            
                                            <input type="radio" id="no_size" name="know_size" class="know_size" onclick="sizeofplant_no();" value="0"> No
                                            
                                            <span class="common-error-msg text-danger "></span>
                                            <span class="common-error-msg text-danger" id="know_size_err"></span> 	 		
                                        </div>
                                    </td>
                                    <td colspan="2"><a href="javascript:void(0)" onclick="menu_other_tab('/rooftop_calculator')">Calculate feasible size of plant using Solar Rooftop Calculator</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group"><label>Size of power plant (in kW) :</label><input type="text" name="size" id="size" class="form-control" maxlength="3"  value="" >           <span class="common-error-msg text-danger "></span>
                                            <span class="common-error-msg text-danger" id="size_err"></span> 	 		
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group"><label>Shadow free Rooftop area available :</label><input type="text" name="area" id="area" maxlength="10" class="form-control disable"  value="" disabled>           <span class="common-error-msg text-danger "></span>
                                            <span class="common-error-msg text-danger" id="area_err"></span> 	 		
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group"><label>Average Annual Electricity Consumption (in kWh) :</label><input type="text" name="annual_energy" id="annual_energy" class="form-control disable" maxlength="10" onkeypress="return number(event)" value="" disabled>           <span class="common-error-msg text-danger "></span>
                                            <span class="common-error-msg text-danger" id="annual_energy_err"></span> 	 		
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group"><label>Average Tariff paid (in Rs. / kWh) :</label><input type="text" name="avg_tariff" id="avg_tariff" class="form-control disable" maxlength="11" value="" disabled>           <span class="common-error-msg text-danger "></span> 
                                            <span class="common-error-msg text-danger" id="avg_tariff_err"></span> 			
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><span style="color:red;">Disclaimer : Kindly note that submission of the installation interest request does not provide any legal right to the applicant to avail central financial assistance from MNRE. This form will only facilitate the interested residential sector consumer so that their request is being provided to their inbox of SPIN account of the concerned DISCOM of the State.</span></td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <input name="submit" type="submit"  class="btn btn-primary" value="Submit">			
                        
                        
                    </div>
                </form>
                </div>
                
            </div>
        </section>
        <div class="modal fade" id="categoryModel" tabindex="-1" aria-labelledby="coronaModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> 
                    </div> 
                    <div class="modal-body">
                        <p>Presently there is no central financial assistance from MNRE is available for these sectors. System are being installed in market mode. Kindly follow the procedures and regulations as notified by State Electricity Regulatory Commissions/Joint Electricity Regulatory Commission and orders of State Power Department / Renewable Energy Departments / DISCOMs for grid connected Rooftop systems.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="ok" data-dismiss="modal" aria-label="Close" class="btn btn-primary">Ok</button> 
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="portalModel" tabindex="-1" aria-labelledby="coronaModal" aria-hidden="true" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <h4 class="modal-title">Interest Request Form for Roshni Solar</h4>
                        
                    </div>
                    <div class="modal-body">
                        <p style="background-image: linear-gradient(to bottom,#d9edf7 0,#b9def0 100%);">Selected Electricity Distribution Company has already online portal. You have to enter installation interest request directly to discom portal whose link is as below.
                            <span id="portal"></span> 
                            <br><br> 
                            <a href="<?php echo base_url();?>interest_request">Go Back</a> 
                        </p> 
                    </div>
                    
                </div>
            </div>
        </div>
        <script>
            function check_customer_category()
            {
                var customer_category =$('#id_bene_catg').val();
                if(customer_category != 1)
                { 
                    $("#id_bene_catg").val('');
                    $('#categoryModel').modal('show');
                } 
            } 
            function load_district_discom()
            {
                var statecd =$('#statecd').val();
                
                $.ajax({
                    url: "<?php echo base_url();?>get-distributor",
                    type: "POST",
                    data:{statecd : statecd},
                    dataType:"json",
                    success: function(data){  
                        //$('#elec_distribution_name').html(data.output); 
                        $('#distcd').html(data.state); 
                    }
                });
                
            } 
            /* function check_portal_link() 
                {
                var elec_distribution_name =$('#elec_distribution_name').val();
                
                $.ajax({
                url: "<?php echo base_url();?>check-portal-link",
                type: "POST",
                data:{elec_distribution_name : elec_distribution_name},
                dataType:'json',
                success: function(data)
                {
                if(data.company_url != '')
                {      
                var link = '<a href="'+data.company_url+'" target="_blank">'+data.company_url+'</a>';
                $('#portal').html(link);
                $('#portalModel').modal('show');
                }
                
                }
                });  
                
            }  */
            function sizeofplant_yes()
            {
                document.getElementById("size").disabled = false;
                document.getElementById("annual_energy").disabled = true;
                document.getElementById("area").disabled = true;
                document.getElementById("avg_tariff").disabled = true;
            }
            function sizeofplant_no()
            { 
                document.getElementById("size").disabled = true;
                document.getElementById("annual_energy").disabled = false;
                document.getElementById("area").disabled = false;
                document.getElementById("avg_tariff").disabled = false;
            }
            
        </script> 
        