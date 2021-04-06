<script src="<?php echo base_url(); ?>backend/js/custom-script.js"></script>
<script src="<?php echo base_url(); ?>backend/dist/js/moment.min.js"></script>
<?php $base_assets_url = '/backend/themes/default/'; ?>
<style>
.postname_ul_selectall_li{
    display: none;
}
</style>

        <div class="form_part">
            <form id="basic_details_frm">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr class="bg-primary">
                            <th scope="col" colspan="2">Post Applied / पोस्ट लागू किया गया </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><b>Post Applying for / आवेदन करना के लिए</b> <span style="color: red">*</span></td>
                            <td>
                                <select class="form-control" name="postname" id="postname" data-errorname="Post Applying For" required>
                                <?php
                                if(isset($postnames) && !empty($postnames)){
                                    foreach($postnames as $post){
                                        ?>
                                        <option value="<?php echo $post['id'] ?>" title="(<?php echo $post['posttitle'] ?>)"
                                            <?php echo (($post['id'] == 1)?'selected':'')?>
                                            <?php
                                            if(isset($login_user_data) && isset($login_user_data['applied_posts']) && !empty($login_user_data['applied_posts'])){
                                                if(count($login_user_data['applied_posts']) > 0){
                                                    foreach($login_user_data['applied_posts'] as $applied_post){
                                                        if($applied_post['post_id']==$post['id']){
                                                            echo 'selected';
                                                        }
                                                    }
                                                }
                                            }
                                            ?>
                                           ><?php echo $post['postname'] ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                            </td>

                        </tr>

                        <tr>

                            <td>Preferred Job State / पसंदीदा नौकरी राज्य <span style="color: red">*</span></td>

                            <td><select class="form-control required" name="jobstate" id="jobstate" data-errorname="Preferred Job State" required>
                                <option value="">Select State</option>
                                <?php
                                if(isset($jobstates) && !empty($jobstates)){
                                    foreach($jobstates as $jobstate){
                                        ?>
                                        <option value="<?php echo $jobstate['id'] ?>" <?php if(isset($login_user_data) && $login_user_data['jobstate']==$jobstate['id']){ echo 'selected'; }?>
                                            ><?php echo $jobstate['state'] ?></option>
                                        <?php
                                    }
                                }
                                ?>
                                </select></td>

                        </tr>
                       <tr>
                            <td><b>Preferred test centre / पसंदीदा परीक्षण केंद्र </b> <span style="color: red">*</span> <br>
                                (Maximum 2 Centre Can be selected / अधिकतम 2 केंद्र का चयन किया जा सकता है )</td>
                            <td>
                            <select class="form-control" name="test_center" id="test_center" data-errorname="Preferred test centre" required>
                                <?php
                                if(isset($centrenames) && !empty($centrenames)){

                                    foreach($centrenames as $centre){
                                        ?>
                                        <option value="<?php echo $centre['id'] ?>" title="(<?php echo $centre['name'] ?>)" 
                                            <?php
                                            if(isset($login_user_data) && isset($login_user_data['applied_centre']) && !empty($login_user_data['applied_centre'])){
                                                if(count($login_user_data['applied_centre']) > 0){
                                                    foreach($login_user_data['applied_centre'] as $applied_centre){
                                                        if(($applied_centre['id'] == $centre['id'])){
                                                            echo 'selected';
                                                        }
                                                    }
                                                }
                                            }
                                            ?>
                                           ><?php echo $centre['name'] ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" class="text-primary"><div class="form-check">
                            <input class="form-check-input" type="checkbox" name="declared" id="acceptpolicy" data-errorname="Accept Declaration" value="declared" required  
                            <?php 
                               if(isset($login_user_data) && $login_user_data['acceptpolicy']==1){
                                    echo 'checked';
                               }
                            ?>>

                            <label class="form-check-label" for="inlineRadio1">I have declared that the State and Posts chosen by me is according to my qualifications is correct and to the best of my knowledge and belief. It can't be changed further for any reason.

                            If any information being found untrue or incorrect at any stage, the application shall tantamount to cancellation of my candidature. <span style="color: red">*</span></label></div></td>
                        </tr>

                        <tr class="bg-primary">
                            <th scope="col" colspan="7"> Basic Details / मूल विवरण</th>
                        </tr>
                        <tr>
                            <td width="40%">Category / वर्ग <span style="color: red">*</span></td>
                            <td>
                                <?php
                                foreach($categories as $category){
                                ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="category" value="<?php echo $category['id']; ?>"
                                <?php 
                                    if(isset($login_user_data) && $login_user_data['category']==$category['id']){
                                         echo 'checked';
                                    }
                                ?>>
                                <label class="form-check-label" for="inlineRadio1"><?php echo $category['category']; ?></label>
                                </div>                                           
                                <?php } ?>
                               </td>
                        </tr>
                        <tr>
                            <td>Religion to which you belong / वह धर्म जिससे आप संबंधित हैं <span style="color: red">*</span></td>
                            <td><select class="form-control required" data-errorname="Religion" name="religion" id="religion" required>
                             <option value="">Select Option</option>
                                <?php
                                if(isset($religions) && !empty($religions)){
                                    foreach($religions as $religion){
                                        ?>
                                        <option value="<?php echo $religion['id'] ?>"
                            <?php 
                                            if(isset($login_user_data) && $login_user_data['religion']==$religion['id']){
                                                echo 'selected';
                                            }
                            ?>
                                        ><?php echo $religion['religion'] ?></option>
                                        <?php
                                    }
                                }
                                ?>    
                                </select></td>

                        </tr>

                        <tr>
                            <td>PAN No. / पैन नं </td>
                            <td><input type="text" name="pancard" data-errorname="Pan Card" id="pancard" class="form-control" required value="<?php
                            if(isset($login_user_data)){
                                echo $login_user_data['pancard'];
                            }
                            ?>"></td>
                        </tr>
                        <tr>
                            <td>Aadhar No. / आधार नं </td>
                            <td><input type="text" name="aadharno" data-errorname="Aadhar Number" id="aadharno" class="form-control" maxlength="12" required value="<?php
                            if(isset($login_user_data)){
                                echo $login_user_data['aadharno'];
                            }
                            ?>"></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-primary" style="font-size: large"><b>Personal Details / व्यक्तिगत विवरण :-</b></td>

                        </tr>

                        <tr>
                            <td>Date of Birth / जन्म की तारीख <span style="color: red">*</span></td>
                            <td><input type="text" name="dob" data-errorname="Date of Birth" placeholder="DD/MM/YYYY" class="form-control date required" id="dob" value="<?php
                            if(isset($login_user_data) && isset($login_user_data['dob']) && !empty($login_user_data['dob'])){
                                echo date('d-m-Y', strtotime($login_user_data['dob']));
                            }
                            ?>"></td>

                        </tr>

                        <tr>
                            <td>Age as on 15-08-2020 </td>
                            <td> <span class="text-primary" id="age" data-errorname="Age"></span> </td>
                        </tr>

                        <tr>

                            <td>Gender / लिंग <span style="color: red">*</span></td>
                            <td>
                                <?php
                                if(isset($genders) && !empty($genders)){
                                foreach($genders as $gender){
                                    ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio8" value="<?php echo $gender['id']; ?>"
                                            <?php
                                            if(isset($login_user_data) && $login_user_data['gender']==$gender['id']){
                                                echo 'checked';
                                            }
                                            ?>
                                    >
                                    <label class="form-check-label" for="inlineRadio8"><?php echo $gender['gender']; ?></label>
                                </div>
                                    <?php
                                }
                                }
                                ?>
                            </td>

                        </tr>

                        <tr>

                            <td>Marital status / वैवाहिक स्थिति <span style="color: red">*</span></td>

                            <td>
                                <?php
                                if(isset($maritalstatues) && !empty($maritalstatues)){
                                foreach($maritalstatues as $maritalstatus){
                                    ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="maritalstatus" id="inlineRadio8" value="<?php echo $maritalstatus['id']; ?>" onchange="maritalStatus(this.value)"
                                            <?php
                                            if(isset($login_user_data) && $login_user_data['maritalstatus']==$maritalstatus['id']){
                                                echo 'checked';
                                            }
                                            ?>
                                    >
                                    <label class="form-check-label" for="inlineRadio8"><?php echo $maritalstatus['status']; ?></label>
                                </div>
                                    <?php
                                }
                                }
                                ?>
                                </td>

                        </tr>

                        <tr>
                            <td>Father's Name / पिता का नाम <span style="color: red">*</span></td>
                            <td><input type="text" class="form-control required" data-errorname="Father's Name" id="father_name" placeholder="Father's Name" value="<?php
                            if(isset($login_user_data)){
                                echo $login_user_data['father_name'];
                            }
                            ?>"></td>
                        </tr>
                        <tr>
                            <td>Mother's Name / माता का नाम</td>
                            <td><input type="text" class="form-control" data-errorname="Mother's Name" id="mother_name" placeholder="Mother's Name" value="<?php
                            if(isset($login_user_data)){
                                echo $login_user_data['mother_name'];
                            }
                            ?>"></td>
                        </tr>
                        <tr id="spous_name_div" style="display: <?php if(isset($login_user_data) && $login_user_data['maritalstatus'] == 1){?> none<?php }else{ ?> table-row; <?php } ?>">
                            <td>Spouse's Name / जीवनसाथी का नाम</td>
                            <td><input type="text" class="form-control" id="spouse_name" placeholder="Spouse's Name" value="<?php
                            if(isset($login_user_data)){
                                echo $login_user_data['spouse_name'];
                            }
                            ?>"></td>
                        </tr>
                        <tr>
                            <td colspan="2" id="padd" class="text-primary" style="font-size: large"><b>Present Address / वर्तमान पता:-</b></td>

                        </tr>

                        <tr>
                            <td>Address Line 1 / पता पंक्ति 1 <span style="color: red">*</span></td>
                            <td><input type="text" name="present_addressline1" class="form-control required" data-errorname="Address Line 1" id="present_addressline1" value="<?php
                            if(isset($login_user_data)){
                                echo $login_user_data['present_addressline1'];
                            }
                            ?>"></td>
                        </tr>

                        <tr>
                            <td>Address Line 2 / पता पंक्ति नं। 2 </td>
                            <td><input type="text" name="present_addressline2" class="form-control required" data-errorname="Address Line 2" id="present_addressline2" value="<?php
                            if(isset($login_user_data)){
                                echo $login_user_data['present_addressline2'];
                            }
                            ?>"></td>
                        </tr>

                        <tr>
                            <td>State / राज्य <span style="color: red">*</span></td>
                            <td>
                                <select class="form-control required" id="present_state" name="present_state" data-errorname="State">
                                <option value="">Select State</option>
                                <?php
                                if(isset($states) && !empty($states)){
                                    foreach($states as $state){
                                        ?>
                                        <option value="<?php echo $state['id']; ?>"
                                            <?php
                                            if(isset($login_user_data) && $login_user_data['present_state']==$state['id']){
                                                echo 'selected';
                                            }
                                            ?>
                                        ><?php echo $state['state']; ?></option>
                                        <?php
                                    }
                                }
                                ?>
                                </select>
                            </td>

                        </tr>

                        <tr>
                            <td>District / जिला <span style="color: red">*</span></td>
                            <td><input type="text" class="form-control required" name="present_district" data-errorname="Present State" id="present_district" placeholder="District" required value="<?php
                            if(isset($login_user_data)){
                                echo $login_user_data['present_district'];
                            }
                            ?>"></td>
                        </tr>

                        <tr>
                            <td>Pin Code / पिन कोड <span style="color: red">*</span></td>
                            <td><input type="text" class="form-control required" maxlength="6" name="present_pincode" data-errorname="Present Pin Code" id="present_pincode" placeholder="Pin Code" required value="<?php
                            if(isset($login_user_data)){
                                echo $login_user_data['present_pincode'];
                            }
                            ?>"></td>
                        </tr>

                        <tr>
                            <td colspan="2" id="pradd" class="text-primary" style="font-size: large">  <input type="checkbox" name="sameadd" id="sameadd" onclick="FillAddress()" value="1" 
                            <?php
                                if(isset($login_user_data) && $login_user_data['is_peradderss_same']==1){
                                    echo 'checked';
                                }
                                ?>
                             > Same as Present Address / वर्तमान पते के समान.</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-primary" style="font-size: large"><b>Permanent Address / स्थाई पता :-</b></td>
                        </tr>
                        <tr>
                            <td>Address Line 1 / पता पंक्ति 1</td>
                            <td><input type="text" name="permanent_addressline1" class="form-control required" id="permanent_addressline1" data-errorname="Permanent Address Line 1" value="<?php
                            if(isset($login_user_data)){
                                echo $login_user_data['permanent_addressline1'];
                            }
                            ?>"></td>
                        </tr>
                        <tr>
                            <td>Address Line 2 / पता पंक्ति नं। 2 </td>
                            <td><input type="text" name="permanent_addressline2" class="form-control required" id="permanent_addressline2" data-errorname="Permanent Address Line 2" value="<?php
                            if(isset($login_user_data)){
                                echo $login_user_data['permanent_addressline2'];
                            }
                            ?>"></td>
                        </tr>
                        <tr>
                            <td>State / राज्य </td>
                            <td><select class="form-control required" id="permanent_state" name="permanent_state" data-errorname="Permanent State">
                                    <option value="">Select State</option>
                                <?php
                                if(isset($states) && !empty($states)){
                                    foreach($states as $state){
                                        ?>
                                        <option value="<?php echo $state['id']; ?>"
                                            <?php
                                            if(isset($login_user_data) && $login_user_data['permanent_state']==$state['id']){
                                                echo 'selected';
                                            }
                                            ?>
                                            ><?php echo $state['state']; ?></option>
                                        <?php
                                    }
                                }
                                ?>                                            
                                </select></td>

                        </tr>

                        <tr>

                            <td>District / जिला</td>

                            <td><input type="text" class="form-control required" name="permanent_district" id="permanent_district" placeholder="District" data-errorname="Permanent District" required value="<?php
                            if(isset($login_user_data)){
                                echo $login_user_data['permanent_district'];
                            }
                            ?>"></td>

                        </tr>

                        <tr>
                            <td>Pin Code / पिन कोड </td>
                            <td><input type="text" class="form-control required" maxlength="6" name="permanent_pincode" id="permanent_pincode" placeholder="Pin Code" data-errorname="Permanent Pin Code" required value="<?php
                            if(isset($login_user_data)){
                                echo $login_user_data['permanent_pincode'];
                            }
                            ?>"></td>

                        </tr>



                        </tbody>

                    </table>

                    <div class="formbtn">
                        <button type="button" id="savedetails" class="btn btn-success float-right ajaxStart">Save & Next</button>
                    </div>

                </div>

            </form>

        </div>

    </div>

</div>

</div>

</div>



<!-- Optional JavaScript -->



<script type="text/javascript">

    generateMultiSelect('postname');
    generateMultiSelect('test_center');
    

    function getage(userdob){
        var a = moment(userdob, 'DD-MM-YYYY');
        var b = moment('15-08-2020', 'DD-MM-YYYY');
        var days = b.diff(a, 'days');
        let years = parseInt(Number(days)/365);
        days = days - (years*365);
        let months = parseInt(Number(days)/30);
        days = days - (months*30);
        return `${years} Years, ${months} Months and ${days} Days`;        
    }

    function form_validation(){
        let validate = 0
        $(".required").each(function(){
            if($(this).val() == ''){
                validate++;
                toastr.error($(this).attr('data-errorname')+' is required');
            }
        });

        let selected_posts = getSelectedElementsBySelectId('postname');
        if(selected_posts.length <= 0 || selected_posts.length > 2){
            validate++;
            toastr.error('Post Applying for is required');
        }
        
        let selected_centre = getSelectedElementsBySelectId('test_center');
        if(selected_centre.length <= 0 || selected_posts.length > 2){
            validate++;
            toastr.error('Test centre is required');
        }

        if($("#acceptpolicy").prop('checked')== false){
            validate++;
            toastr.error('Please accept declaration');
        }

        if($('input[name=category]:checked').length <= 0){
            validate++;
            toastr.error('Category is required');
        }

        if($('input[name=gender]:checked').length <= 0){
            validate++;
            toastr.error('Gender is required');
        }   

        if($('input[name=maritalstatus]:checked').length <= 0){
            validate++;
            toastr.error('Marital Status is required');
        }            

        if(validate !=0){
            return false;
        }        
    }

    $(document).ready(function(){
        $("#savedetails").click(function(){
            if(form_validation()== false){
                return false;
            }
            else{
                let selected_posts = getSelectedElementsBySelectId('postname');
                let jobstate = $("#jobstate").val().trim();
                let selected_test_center = getSelectedElementsBySelectId('test_center');
                let acceptpolicy = 0;
                if($("#acceptpolicy").prop('checked')){
                    acceptpolicy = 1;
                }                
                let is_peradderss_same = 0;
                if($("#sameadd").prop('checked')){
                    is_peradderss_same = 1;
                }
                let category = $('input[name=category]:checked').val();
                let religion = $("#religion").val().trim();
                let pancard = $("#pancard").val().trim();
                let aadharno = $("#aadharno").val().trim();
                let dob = $("#dob").val().trim();
                let gender = $('input[name=gender]:checked').val();
                let maritalstatus = $('input[name=maritalstatus]:checked').val();
                let father_name = $("#father_name").val().trim();
                let mother_name = $("#mother_name").val().trim();
                let spouse_name = $("#spouse_name").val().trim();
                let present_addressline1 = $("#present_addressline1").val().trim();
                let present_addressline2 = $("#present_addressline2").val().trim();
                let present_state = $("#present_state").val().trim();
                let present_district = $("#present_district").val().trim();
                let present_pincode = $("#present_pincode").val().trim();
                let permanent_addressline1 = $("#permanent_addressline1").val().trim();
                let permanent_addressline2 = $("#permanent_addressline2").val().trim();
                let permanent_state = $("#permanent_state").val().trim();
                let permanent_district = $("#permanent_district").val().trim();
                let permanent_pincode = $("#permanent_pincode").val().trim();
                let registration_step = '2';
                $.ajax({
                    url:base_url+'index.php/user/registration/registration/updatebasicdetails',
                    method:'post',
                    data:{selected_posts:selected_posts, jobstate:jobstate, selected_test_center:selected_test_center, acceptpolicy:acceptpolicy, is_peradderss_same:is_peradderss_same, category:category, religion:religion, pancard:pancard, aadharno:aadharno, dob:dob, gender:gender, maritalstatus:maritalstatus, father_name:father_name, mother_name:mother_name, spouse_name:spouse_name, present_addressline1:present_addressline1, present_addressline2:present_addressline2, present_state:present_state, present_district:present_district, present_pincode:present_pincode, permanent_addressline1:permanent_addressline1, permanent_addressline2:permanent_addressline2, permanent_state:permanent_state, permanent_district:permanent_district, permanent_pincode:permanent_pincode, registration_step:registration_step},
                    success:function(s){
                        //console.log(s);
                        if(s['type']){
                            if(s['type']=='success'){
                                toastr.success(s['message']);
                                $("#basic_details_frm").trigger('reset');
                                $(location).attr('href', base_url+'index.php/form/qualification');
                            }
                            else if(s['type']=='error'){
                                toastr.error(s['message']);
                            }
                        }
                    }
                });
            }
        });
    });

    function FillAddress() {
        if($("#sameadd").prop('checked')){
        $("#permanent_addressline1").val($("#present_addressline1").val()) ;
        $("#permanent_addressline2").val($("#present_addressline2").val());
        $("#permanent_state").val($("#present_state").val());
        $("#permanent_district").val($("#present_district").val());
        $("#permanent_pincode").val($("#present_pincode").val());
        }
        else{
        $("#permanent_addressline1").val('') ;
        $("#permanent_addressline2").val('');
        $("#permanent_state").val('');
        $("#permanent_district").val('');
        $("#permanent_pincode").val('');
        }
    }

</script>





<script>

    $(document).ready(function () {

        $("#dob").on('change', function(){
            let userage = getage($("#dob").val());
            $("#age").text(userage);
        });

    });

</script>

<script src="/reqrutment<?php echo $base_assets_url;?>js/jquery.multi-select.js"></script>

<script type="text/javascript">

    $(document).ready(function(){
        $(".postname_checkbox").on('click', function(){
            if( $(".postname_checkbox:checked").length > 2 ){
                this.checked = false;
                showSelectedCount('postname');
                return false;
            }
        });
        
        $(".test_center_checkbox").on('click', function(){
            if( $(".test_center_checkbox:checked").length > 2 ){
                this.checked = false;
                showSelectedCount('test_center');
                return false;
            }
        });
        $('.test_center_ul_selectall_li').css('display','none');
    });

    function maritalStatus(val){
        if(val !='' && val == 1){
            $('#spous_name_div').css('display','none');
        }else{
            $('#spous_name_div').css('display','table-row');
        }
    }



</script>

</body>

</html>

