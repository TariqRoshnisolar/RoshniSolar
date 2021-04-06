                <div class="form_part">
                    <form id="qualificationfrm">


                        <!-- <div class="form-table-wrap">
                            <div class="form-table-row w-100 bg-primary">
                                <div class="form-table-col form-control-label text-white w-100" style="padding: 8px 15px;">Education Qualification / शैक्षणिक योग्यता</div>
                            </div>
                            <div class="form-table-row">
                                <div class="form-table-col w-100">
                                    <div class="form-row">
                                        <label class="col-sm-4">Degree/Subject/Stream ( डिग्री / विषय / स्ट्रीम )<span style="color: red">*</span></label>
                                        <div class="form-group col-sm-4">
                                            <select class="form-control mb-2 required" data-errorname="Degree" id="degree" required>
                                                <option value="">Select Option</option>
                                                <?php
                                                if(isset($degrees) && !empty($degrees))
                                                {
                                                    foreach($degrees as $degree)
                                                    {
                                                        ?>
                                                        <option value="<?php echo $degree['id']; ?>"
                                                        <?php
                                                        if(isset($login_user_data) && $login_user_data['degree']==$degree['id']){
                                                            echo 'selected';
                                                        }
                                                        ?>
                                                        ><?php echo $degree['degree']; ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-4">Name of Institution/College/University ( संस्थान / कॉलेज / विश्वविद्यालय का नाम )<span style="color: red">*</span></label>
                                        <div class="form-group col-sm-4">
                                            <input type="text" class="form-control required" id="university" data-errorname="University" value="<?php
                                            if(isset($login_user_data)){
                                                echo $login_user_data['university'];
                                            }
                                            ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-4">Year Of Passing / उत्तीर्ण होने का वर्ष <span style="color: red">*</span></label>
                                        <div class="form-group col-sm-4">
                                            <input type="text" class="form-control required" id="passing_year" data-errorname="Passing Year" value="<?php
                                            if(isset($login_user_data)){
                                                echo $login_user_data['passing_year'];
                                            }
                                            ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-4">% of Marks / मार्क्स का % <span style="color: red">*</span></label>
                                        <div class="form-group col-sm-4">
                                            <input type="text" class="form-control required" id="marks" data-errorname="Marks" value="<?php
                                            if(isset($login_user_data)){
                                                echo $login_user_data['marks'];
                                            }
                                            ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-4">Passed / बीतने के <span style="color: red">*</span></label>
                                        <div class="form-group col-sm-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="result" id="inlineRadio5" value="1" 
                                                        <?php
                                                        if(isset($login_user_data) && $login_user_data['result']==1){
                                                            echo 'checked';
                                                        }
                                                        ?>
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="col-sm-4">Appeared / दिखाई दिया <span style="color: red">*</span></label>
                                        <div class="form-group col-sm-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="result" id="inlineRadio5" value="2"
                                                        <?php
                                                        if(isset($login_user_data) && $login_user_data['result']==2){
                                                            echo 'checked';
                                                        }
                                                        ?>
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->



                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr class="bg-primary">
                                    <th scope="col" colspan="7">Education Qualification / शैक्षिक योग्यता</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Degree/Stream ( डिग्री / स्ट्रीम )<span style="color: red">*</span></td>
                                    <td>Name of Institution/College/University ( संस्थान / कॉलेज / विश्वविद्यालय का नाम )<span style="color: red">*</span></td>
                                    <!-- <td>Year Of Passing / उत्तीर्ण होने का वर्ष <span style="color: red">*</span></td> -->
                                    <td>% of Marks / मार्क्स का % <span style="color: red">*</span></td>
                                    <td>Passed / उत्तीर्ण <span style="color: red">*</span></td>
                                    <td>Appeared / प्रसंस्करण <span style="color: red">*</span></td>
                                </tr>

                                <tr>



                                    <td><select class="form-control mb-2 required" data-errorname="Degree" id="degree" required>
                                            <option value="">Select Option</option>
                                            <?php
                                            if(isset($degrees) && !empty($degrees))
                                            {
                                                foreach($degrees as $degree)
                                                {
                                                    ?>
                                                    <option value="<?php echo $degree['id']; ?>"
                                                    <?php
                                                    if(isset($login_user_data) && $login_user_data['degree']==$degree['id']){
                                                        echo 'selected';
                                                    }
                                                    ?>
                                                    ><?php echo $degree['degree']; ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select></td>

                                    <td><input type="text" class="form-control required" id="university" data-errorname="University" value="<?php
                                                    if(isset($login_user_data)){
                                                        echo $login_user_data['university'];
                                                    }
                                                    ?>"></td>

                                    <!-- <td><input type="text" class="form-control required" id="passing_year" data-errorname="Passing Year" value="<?php
                                                    if(isset($login_user_data)){
                                                        echo $login_user_data['passing_year'];
                                                    }
                                                    ?>"></td> -->

                                    <td><input type="text" class="form-control required" id="marks" data-errorname="Marks" value="<?php
                                                    if(isset($login_user_data)){
                                                        echo $login_user_data['marks'];
                                                    }
                                                    ?>"></td>

                                    <td><div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="result" id="inlineRadio5" value="1" 
                                                    <?php
                                                    if(isset($login_user_data) && $login_user_data['result']==1){
                                                        echo 'checked';
                                                    }
                                                    ?>
                                            >
                                        </div></td>

                                    <td><div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="result" id="inlineRadio5" value="2"
                                                    <?php
                                                    if(isset($login_user_data) && $login_user_data['result']==2){
                                                        echo 'checked';
                                                    }
                                                    ?>
                                            >
                                        </div></td>

                                </tr>
                                
                                       <tr>



                        <td><select class="form-control mb-2" data-errorname="Degree" id="degree2" required>
                                <option value="">Select Option</option>
                                <?php
                                if(isset($degrees) && !empty($degrees)){
                                    foreach($degrees as $degree)
                                    {
                                        ?>
                                            <option value="<?php echo $degree['id']; ?>" <?php
                                        if(isset($login_user_data) && $login_user_data['degree2']==$degree['id']){
                                            echo 'selected';
                                        }
                                        ?>><?php echo $degree['degree']; ?></option>
                                            <?php
                                    }
                                }
                                ?>
                            </select></td>

                        <td><input type="text" class="form-control" id="university2" data-errorname="University2" value="<?php
                            if(isset($login_user_data)){
                                echo $login_user_data['university2'];
                            }
                            ?>">
                        </td>

                        <!-- <td><input type="text" class="form-control" id="passing_year2" data-errorname="Passing Year" value="<?php
                            if(isset($login_user_data)){
                                echo $login_user_data['passing_year2'];
                            }
                            ?>"></td>
 -->
                        <td><input type="text" class="form-control" id="marks2" data-errorname="Marks" value="<?php
                            if(isset($login_user_data)){
                                echo $login_user_data['marks2'];
                            }
                            ?>"></td>

                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="result2" id="inlineRadio6" value="1" <?php
                            if(isset($login_user_data) && $login_user_data['result2']==1){
                                echo 'checked';
                            }
                            ?>>
                            </div>
                        </td>

                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="result2" id="inlineRadio6" value="2" <?php
                            if(isset($login_user_data) && $login_user_data['result2']==2){
                                echo 'checked';
                            }
                            ?>>
                            </div>
                        </td>

                    </tr>
                    
                           <tr>



                        <td><select class="form-control mb-2" data-errorname="Degree" id="degree3" required>
                                <option value="">Select Option</option>
                                <?php
                                if(isset($degrees) && !empty($degrees))
                                {
                                    foreach($degrees as $degree)
                                    {
                                        ?>
                                            <option value="<?php echo $degree['id']; ?>" <?php
                                        if(isset($login_user_data) && $login_user_data['degree3']==$degree['id']){
                                            echo 'selected';
                                        }
                                        ?>><?php echo $degree['degree']; ?></option>
                                            <?php
                                    }
                                }
                                ?>
                            </select></td>

                        <td><input type="text" class="form-control" id="university3" data-errorname="University" value="<?php
                            if(isset($login_user_data)){
                                echo $login_user_data['university3'];
                            }
                            ?>">
                        </td>

                        <!-- <td><input type="text" class="form-control" id="passing_year3" data-errorname="Passing Year" value="<?php
                            if(isset($login_user_data)){
                                echo $login_user_data['passing_year3'];
                            }
                            ?>"></td> -->

                        <td><input type="text" class="form-control" id="marks3" data-errorname="Marks" value="<?php
                            if(isset($login_user_data)){
                                echo $login_user_data['marks3'];
                            }
                            ?>"></td>

                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="result3" id="inlineRadio7" value="1" <?php
                            if(isset($login_user_data) && $login_user_data['result3']==1){
                                echo 'checked';
                            }
                            ?>>
                            </div>
                        </td>

                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="result3" id="inlineRadio7" value="2" <?php
                            if(isset($login_user_data) && $login_user_data['result3']==2){
                                echo 'checked';
                            }
                            ?>>
                            </div>
                        </td>

                    </tr>

                                  <tr style="display:block;">
                                    
                                    
                                    <th scope="col" colspan="5"><span style="color: red">*</span> Do you have a Valid Certification from Skill India For the Green Jobs. <!-- If yes Upload certificate.

                                     The certificate will be uploaded in the Documents Page --></th>

                                     <td colspan="3"><div class="form-check form-check-inline">

                                             <input class="form-check-input" type="radio" name="have_certificates" id="inlineRadio5" value="1"
                                                    <?php
                                                    if(isset($login_user_data) && $login_user_data['have_certificates']==1){
                                                        echo 'checked';
                                                    }
                                                    ?>
                                             >

                                             <label class="form-check-label" for="inlineRadio5">Yes</label>

                                         </div>

                                         <div class="form-check form-check-inline">

                                             <input  class="form-check-input" type="radio" name="have_certificates" id="inlineRadio6" value="0" 
                                                    <?php  
                                                    if(isset($login_user_data) && $login_user_data['have_certificates']==0){
                                                        echo 'checked';
                                                    }
                                                    ?>
                                             >

                                             <label class="form-check-label" for="inlineRadio6">No</label>

                                         </div></td>
                                         
                                         
                                         </tr> 

                                <!-- <tr>

                                    <th scope="col"><div class="form-group">

                                            <label for="exampleFormControlFile1">Upload Documents (Highest Qualification Mark Sheet / Certificate) / अपलोड दस्तावेज़ (उच्चतम योग्यता मार्क शीट / प्रमाण पत्र) </label>

                                        <input type="file" class="form-control-file" id="marksheet">

                                        </div>

                                        <small id="emailHelp" class="form-text text-muted">Only applicable JPG/PDF upto / केवल 2 जीबी तक ही लागू जेपीजी / पीडीएफ <span style="color: red">2Mb</span></small></th>
                                    <th scope="col"><img id="preview_marksheet" src="<?php if(isset($login_user_data) && isset($login_user_data['marksheet']) && !empty($login_user_data['marksheet'])){
                                        echo base_url().'uploads/user_documents/user_marksheet/'.$login_user_data['marksheet'];
                                    }else{
                                        echo base_url().'uploads/user_documents/no_photo.png';
                                    }
                                     ?>" width="180" height="200"></th>

                                </tr>
 -->
                                <tr class="bg-primary">

                                    <th scope="col" colspan="7">Other Details</th>

                                </tr>

<!--                                 <tr>

                                    <th scope="col" colspan="2">Whether desirous of taking pre-Exam Training (SC/ST/Religious Minority Community)</th>

                                    <td colspan="5"><div class="form-check form-check-inline">

                                            <input class="form-check-input" type="radio" name="preexam_training" id="inlineRadio5" value="1">

                                            <label class="form-check-label" for="inlineRadio5">Yes</label>

                                        </div>

                                        <div class="form-check form-check-inline">

                                            <input class="form-check-input" type="radio" name="preexam_training" id="inlineRadio6" value="0">

                                            <label class="form-check-label" for="inlineRadio6">No</label>

                                        </div></td>

                                </tr> -->



                                <tr>
                                    <th scope="col">Language Known / भाषा ज्ञात</th>
                                    <th>Read / पढ़ना</th>
                                    <th>Write / लिखना </th>
                                    <th colspan="4">Speak / बोलना</th>
                                </tr>

                                <tr>

                                    <th scope="col"><input type="text" class="form-control user_language required" id="language_1" data-errorname="Language Known" value="<?php
                                    if(isset($login_user_data['user_languages'][0])){
                                        echo $login_user_data['user_languages'][0]['language_name'];
                                    }
                                    ?>" required></th>

                                    <td><div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="language_1_read" value="1" <?php
                                                if(isset($login_user_data['user_languages'][0]) && $login_user_data['user_languages'][0]['can_read']==1){
                                                    echo 'checked';
                                                }
                                                ?>>
                                    </div></td>

                                    <td><div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="language_1_write" value="1" <?php
                                        if(isset($login_user_data['user_languages'][0]) && $login_user_data['user_languages'][0]['can_write']==1){
                                            echo 'checked';
                                        }
                                        ?>>
                                    </div></td>

                                    <td colspan="4"><div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="language_1_speak" value="1" <?php
                                        if(isset($login_user_data['user_languages'][0]) && $login_user_data['user_languages'][0]['can_speak']==1){
                                            echo 'checked';
                                        }
                                        ?>>
                                    </div></td>

                                </tr>

                                <tr>

                                    <th scope="col"><input type="text" class="form-control user_language" id="language_2" value="<?php
                                        if(isset($login_user_data['user_languages'][1])){
                                            echo $login_user_data['user_languages'][1]['language_name'];
                                        }
                                        ?>"></th>

                                    <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="language_2_read" value="1" <?php
                                                    if(isset($login_user_data['user_languages'][1]) && $login_user_data['user_languages'][1]['can_read']==1){
                                                        echo 'checked';
                                                    }
                                                    ?>>

                                        </div></td>

                                    <td><div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="language_2_write" value="1" <?php
                                                    if(isset($login_user_data['user_languages'][1]) && $login_user_data['user_languages'][1]['can_write']==1){
                                                        echo 'checked';
                                                    }
                                                    ?>>

                                        </div></td>

                                    <td colspan="4"><div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="language_2_speak" value="1" <?php
                                                    if(isset($login_user_data['user_languages'][1]) && $login_user_data['user_languages'][1]['can_speak']==1){
                                                        echo 'checked';
                                                    }
                                                    ?>>

                                        </div></td>

                                </tr>

                                <tr>

                                    <th scope="col"><input type="text" class="form-control user_language" id="language_3" value="<?php
                                                    if(isset($login_user_data['user_languages'][2])){
                                                        echo $login_user_data['user_languages'][2]['language_name'];
                                                    }
                                                    ?>"></th>

                                    <td><div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="language_3_read" value="1" <?php
                                                    if(isset($login_user_data['user_languages'][2]) && $login_user_data['user_languages'][2]['can_read']==1){
                                                        echo 'checked';
                                                    }
                                                    ?>>

                                        </div></td>

                                    <td><div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="language_3_write" value="1" <?php
                                                    if(isset($login_user_data['user_languages'][2]) && $login_user_data['user_languages'][2]['can_write']==1){
                                                        echo 'checked';
                                                    }
                                                    ?>>

                                        </div></td>

                                    <td colspan="4"><div class="form-check">

                                            <input class="form-check-input" type="checkbox" id="language_3_speak" value="1" <?php
                                                    if(isset($login_user_data['user_languages'][2]) && $login_user_data['user_languages'][2]['can_speak']==1){
                                                        echo 'checked';
                                                    }
                                                    ?>>

                                        </div></td>

                                </tr>

                                </tbody>

                            </table>
                            
                        <div class="formbtn">
                        <a href="<?php echo base_url().'index.php/form/details'; ?>"><button type="button" class="btn btn-danger mr-2 mt-3">Back</button></a>
                        <button id="save_qualification" type="button" class="btn btn-success mt-3 ajaxStart">Save & Next</button>
                        </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<script>

function form_validation(){
    let validate = 0;
    $(".required").each(function(){
        if($(this).val() == ''){
            validate++;
            toastr.error($(this).attr('data-errorname')+" is required");
        }
    });
    
    
    
    if($('#language_1_read').prop("checked") != true && $('#language_1_write').prop("checked") != true && $('#language_1_speak').prop("checked") != true){
        validate++;
        toastr.error('Checked at least one check box');
    }

    if($('input[name=result]:checked').length <= 0){
        validate++;
        toastr.error("Passed/Appeared is required");
    }

    if($('input[name=have_certificates]:checked').length <= 0){
        validate++;
        toastr.error("Check, If have a Valid Certification?");
    }

    $(".user_language").each(function(){
        if($(this).val()!= ''){
            let language_id = $(this).attr('id');
            if( $("#"+language_id+"_read").val() == '' &&  $("#"+language_id+"_write").val() == '' && $("#"+language_id+"_speak").val() == '' ){
                validate++;
                toastr.error("Language read, write, speak options required");
            }
        }
    });   

    if(validate!=0){
        return false;
    }
}

$(document).ready(function(){
    function readURL(input, previewid) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();
    
        reader.onload = function (e) {
            $('#'+previewid).attr('src', e.target.result);
        };
    
            reader.readAsDataURL(input.files[0]);
        }
    }
//     function form_validation(){
//         let validate = 0;
//         let previous_marksheet = '<?php echo $login_user_data['marksheet'];?>';
//      if($("#marksheet").prop('files')[0]){
//         let marksheet = $("#marksheet").prop('files')[0];
//         let marksheet_extension = marksheet.name.split('.').pop();
//         let allowed_extension = ['jpg', 'pdf'];
//         let marksheetsize = marksheet.size/1024;
//         if(marksheetsize > 2048){
//             validate++;
//             toastr.error('Certificate size should be 2Mb or less');
//         }
//         else if( allowed_extension.indexOf(marksheet_extension) == -1 ){
//             toastr.error("Only JPG, PDF format is allowed");
//             validate++;
//         }        
//     }else if(previous_marksheet !=''){
//          return true;
//     }
//     else{
//         validate++;
//         toastr.error('Upload your certificate');
//     }    

//     if(validate != 0){
//         return false;
//     }
// }

// $("#marksheet").change(function(){
//         $("#next_step_for_edit_purpose").css('display', 'none');
//         $("#upload_docs").css('display', 'inline-block');        
//       if($("#marksheet").prop('files')[0]){
//         let marksheet = $("#marksheet").prop('files')[0];
//         let marksheetsize = marksheet.size/1024;
//         if(marksheetsize > 2048){
//             $("#marksheet").val('');
//             $("#preview_marksheet").attr('src', base_url+'uploads/user_documents/no_photo.png');
//             toastr.error('Certificate size should be 2Mb or less');
//         }
//         else{
//             readURL(this, 'preview_marksheet');
//         }
//     }
//     });  

    
    $("#save_qualification").click(function(){
        if(form_validation()== false){
            return false;
        }
        else{
           // let previous_marksheet = '<?php echo $login_user_data['marksheet'];?>';
           
            let degree = $("#degree").val().trim();
            let degree2 = ($("#degree2").val() !='')?$("#degree2").val().trim():$("#degree2").val();
            let degree3 = ($("#degree3").val() !='')?$("#degree3").val().trim():$("#degree3").val();
            let university = $("#university").val().trim();
            let university2 = ($("#university2").val() !='')?$("#university2").val().trim():$("#university2").val();
            let university3 = ($("#university3").val() !='')?$("#university3").val().trim():$("#university3").val();
            //let passing_year = $("#passing_year").val().trim();
            //let passing_year2 = ($("#passing_year2").val() !='')?$("#passing_year2").val().trim():$("#passing_year2").val();
            //let passing_year3 = ($("#passing_year3").val() !='')?$("#passing_year3").val().trim():$("#passing_year3").val();
           
            let marks = $("#marks").val().trim();
            let marks2 = ($("#marks2").val() !='')?$("#marks2").val().trim():$("#marks2").val();
            let marks3 = ($("#marks3").val() !='')?$("#marks3").val().trim():$("#marks3").val();
            let result = $('input[name=result]:checked').val().trim();
            let result2 = ($('input[name=result2]:checked').val() !=undefined)?$('input[name=result2]:checked').val().trim():$('input[name=result2]:checked').val();
            let result3 = ($('input[name=result3]:checked').val() !=undefined)?$('input[name=result3]:checked').val().trim():$('input[name=result3]:checked').val();
            let have_certificates = $('input[name=have_certificates]:checked').val().trim();
            //let marksheet = $("#marksheet").prop('files')[0];
            let registration_step = '3';
            let user_languages = [];

            $(".user_language").each(function(){
                if($(this).val()!= ''){
                    let language_id = $(this).attr('id');
                    let language_name = $(this).val().trim();
                    let can_read = 0;
                    let can_write = 0;
                    let can_speak = 0;
                    if($("#"+language_id+"_read").prop('checked')){
                        can_read = 1;
                    }
                    if($("#"+language_id+"_write").prop('checked')){
                        can_write = 1;
                    } 
                    if($("#"+language_id+"_speak").prop('checked')){
                        can_speak = 1;
                    }                                        
                    let language_details = {language_name:language_name, can_read:can_read, can_write:can_write, can_speak:can_speak};
                    user_languages.push(language_details);
                }
            }); 
            let json_arr = JSON.stringify(user_languages);
            let user_data = new FormData();
            user_data.append('registration_step', registration_step);
            user_data.append('degree', degree);
            user_data.append('degree2', degree2);
            user_data.append('degree3', degree3);
            user_data.append('university', university);
            user_data.append('university2', university2);
            user_data.append('university3', university3);
            //user_data.append('passing_year', passing_year);
            //user_data.append('passing_year2', passing_year2);
            //user_data.append('passing_year3', passing_year3);
            user_data.append('marks', marks);
            user_data.append('marks2', marks2);
            user_data.append('marks3', marks3);
            user_data.append('result', result);
            user_data.append('result2', result2);
            user_data.append('result3', result3);
            user_data.append('have_certificates', have_certificates);
            user_data.append('user_languages', json_arr);
            //user_data.append('marksheet', marksheet);
           // user_data.append('previous_marksheet', previous_marksheet);

            $.ajax({
                url:base_url+'index.php/user/registration/registration/updatequalification',
                method:'post',
                contentType: false,
                processData: false,
                data:user_data,
                success:function(s){
                    //console.log(s);
                    if(s['type']){
                        if(s['type']=='success'){
                            toastr.success(s['message']);
                            $("#qualificationfrm").trigger('reset');
                            $(location).attr('href', base_url+'index.php/form/doc_upload');
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
</script>



