<style>
.toolimg{
    color: red;
}
.toolurl{
    color: #1e2980;
    text-decoration: underline;
}
.next_step_for_edit_purpose{
    display: none;
}
</style>
                <div class="form_part">

                    <form id="uploaddocfrm">

                        <!-- <p class="mb-4"><strong class="text-danger">Note :</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                    <p class="toolimg">
                    <b>Important</b> - Use this tool to compress image size - <a href="https://compressimage.toolur.com/" target="blank" class="toolurl">https://compressimage.toolur.com/</a>
                    </p>

                        <div class="form-table-wrap">
                            <div class="form-table-row">
                                <div class="form-table-col w75 upload-label">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Upload Passport Size Photograph of the Candidate / उम्मीदवार के अपना  पासपोर्ट साइज फोटो अपलोड करें </label>
                                        <input type="file" class="form-control" id="photo">
                                        <!-- <small id="emailHelp" class="form-text text-muted">Photo should be 4.5cm X 3.5cm upto / 
                                        फोटो 4.5cm X 3.5cm तक होना चाहिए <span style="color: red">50kb</span></small> -->
                                    </div>
                                </div>

                                <div class="form-table-col w25 upload-pic">
                                    <div class="upload-photo-prv">
                                        <img id="preview_photo" src="<?php 
                                        if(isset($login_user_data) && isset($login_user_data['photo']) && !empty($login_user_data['photo'])){
                                            echo base_url().'uploads/user_documents/user_photos/'.$login_user_data['photo'];
                                        }
                                        else{
                                            echo base_url().'uploads/user_documents/no_photo.png';
                                        }
                                        ?>">
                                    </div>
                                    </div>
                            </div>

                            <div class="form-table-row">
                                <div class="form-table-col w75">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Upload Signature of the Candidate /  उम्मीदवार के अपना  हस्ताक्षर अपलोड करें</label>
                                        <input type="file" class="form-control" id="signature">
                                    </div>
                                    <small id="emailHelp" class="form-text text-muted">Signature should not be in CAPITAL / BLOCK letters upto / हस्ताक्षर कैपिटल / ब्लॉक अक्षरों में नहीं होना चाहिए <span style="color: red">50kb</span></small>
                                </div>

                                <div class="form-table-col w25">
                                    <div class="upload-sign-prv">
                                        <img id="preview_signature" src="<?php 
                                        if(isset($login_user_data) && isset($login_user_data['signature']) && !empty($login_user_data['signature'])){
                                            echo base_url().'uploads/user_documents/user_signatures/'.$login_user_data['signature'];
                                        }
                                        else{
                                            echo base_url().'uploads/user_documents/dummy-signature.png';
                                        }
                                        ?>" >
                                    </div>
                                </div>

                            </div>

                            <div class="form-table-row">
                                <div class="form-table-col w-100 button-wrap bg-white">
                                    <a href="<?php echo base_url().'index.php/form/qualification'; ?>"><button type="button" class="btn btn-danger mr-2 mt-3">Back</button></a>
                                    <a href="<?php echo base_url().'form/preview'; ?>" id="next_step_for_edit_purpose" style="<?php
                                    if(isset($login_user_data)) {
                                        if(isset($login_user_data['signature']) && isset($login_user_data['photo']) && !empty($login_user_data['signature']) && !empty($login_user_data['photo']) ){
                                            echo 'display:inline-block';
                                        }
                                        else{
                                            echo 'display:none';
                                        }
                                    }
                                    ?>"><button type="button" class="btn btn-success mt-3">Save & Next</button></a>
                                    <button id="upload_docs" type="button" class="btn btn-success mt-3 ajaxStart" style="<?php
                                    if(isset($login_user_data)) {
                                        if(isset($login_user_data['signature']) && isset($login_user_data['photo']) && !empty($login_user_data['signature']) && !empty($login_user_data['photo'])){
                                            echo 'display:none';
                                        }
                                        else{
                                            echo 'display:inline-block';
                                        }
                                    }
                                    ?>">Save & Next</button>
                                </div>                            
                            </div>                            
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<script>

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

function form_validation(){
    let validate = 0;
    if($("#photo").prop('files')[0]){
        let photo = $("#photo").prop('files')[0];
        let photo_extension = photo.name.split('.').pop();
        let allowed_extension = ['jpg', 'jpeg', 'png'];
        let photosize = photo.size/1024;
        // if(photosize > 50){
        //     validate++;
        //     toastr.error('Photo size should be 50kb or less');
        // }
        //else
        if( allowed_extension.indexOf(photo_extension) == -1 ){
            toastr.error("Only JPEG, PNG format is allowed");
            validate++;
        }        
    }
    else{
        validate++;
        toastr.error('Upload passport size photograph');
    }   

    if($("#signature").prop('files')[0]){
        let signature = $("#signature").prop('files')[0];
        let signature_extension = signature.name.split('.').pop();
        let allowed_extension = ['jpg', 'jpeg', 'png'];
        let signaturesize = signature.size/1024;
        if(signaturesize > 50){
            validate++;
            toastr.error('Signature size should be 50kb or less');
        }
        else if( allowed_extension.indexOf(signature_extension) == -1 ){
            toastr.error("Only JPEG, PNG format is allowed");
            validate++;
        }        
    }
    else{
        validate++;
        toastr.error('Upload your signature');
    }    

    if(validate != 0){
        return false;
    }
}

    $("#photo").change(function(){
        $("#next_step_for_edit_purpose").css('display', 'none');
        $("#upload_docs").css('display', 'inline-block');
    if($("#photo").prop('files')[0]){
        let photo = $("#photo").prop('files')[0];
        let photosize = photo.size/1024;
        // if(photosize > 50){
        //     $("#photo").val('');
        //     $("#preview_photo").attr('src', base_url+'uploads/user_documents/no_photo.png');
        //     toastr.error('Photo size should be 50kb or less');
        // }
        // else{
            readURL(this, 'preview_photo');
        //}
    }
    });

    $("#signature").change(function(){
        $("#next_step_for_edit_purpose").css('display', 'none');
        $("#upload_docs").css('display', 'inline-block');        
    if($("#signature").prop('files')[0]){
        let signature = $("#signature").prop('files')[0];
        let signaturesize = signature.size/1024;
        if(signaturesize > 50){
            $("#signature").val('');
            $("#preview_signature").attr('src', base_url+'uploads/user_documents/dummy-signature.png');
            toastr.error('Signature size should be 50kb or less');
        }
        else{
            readURL(this, 'preview_signature');
        }
    }
    });    

    $("#upload_docs").click(function(){
        if(form_validation() == false){
            return false;
        }
        else{
            let photo = $("#photo").prop('files')[0];
            let signature = $("#signature").prop('files')[0];
            let user_data = new FormData();
            user_data.append('photo', photo);
            user_data.append('signature', signature);
            user_data.append('registration_step', '4');
            $.ajax({
                url:base_url+'index.php/user/registration/registration/uploaddocs',
                method:'post',
                contentType: false,
                processData: false,
                data:user_data,
                success:function(s){
                    //console.log(s);
                    if(s['type']){
                        if(s['type']=='success'){
                            toastr.success(s['message']);
                            $("#uploaddocfrm").trigger('reset');
                            $(location).attr('href', base_url+'index.php/form/preview');
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



