<?php



if (!defined('BASEPATH'))

    exit('No direct script access allowed');



class Registration extends CI_Controller {



    function __construct() {

        parent::__construct();

    }

    public function uniquemobileno(){
        $response = ['type'=>'error', 'message'=>'Something went wrong'];
        if($this->input->method() == 'post'){
            $this->form_validation->set_rules('mobileno', 'Mobile No', 'required|trim|xss_clean');
            if($this->form_validation->run() == false){
                $response = ['type'=>'error', 'message'=>validation_errors()];
            }
            else{
                $phone_no = $this->input->post('mobileno');
                if( $this->regstration_model->uniquemobileno($phone_no) ){
                    $response = ['type'=>'success', 'message'=>''];
                }
            }
        }
        echo json_encode($response);
    }

    public function updatebasicdetails(){
        $response = ['type'=>'error', 'message'=>'Something went wrong'];
        $this->form_validation->set_rules('selected_posts[]', 'Post Applying For', 'required|xss_clean');
        $this->form_validation->set_rules('jobstate[]', 'Job State', 'required|xss_clean');
        $this->form_validation->set_rules('selected_test_center[]', 'Test Centre', 'required|xss_clean');
        $this->form_validation->set_rules('acceptpolicy', 'Accept Declaration', 'required|trim|xss_clean');
        $this->form_validation->set_rules('category', 'Category', 'required|trim|xss_clean');
        $this->form_validation->set_rules('religion', 'Religion', 'required|trim|xss_clean');
        // $this->form_validation->set_rules('pancard', 'Pancard', 'required|trim|xss_clean');
        // $this->form_validation->set_rules('aadharno', 'Aadhar No', 'required|trim|xss_clean');
        $this->form_validation->set_rules('dob', 'DOB', 'required|trim|xss_clean');
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim|xss_clean');
        $this->form_validation->set_rules('maritalstatus', 'Marital Status', 'required|trim|xss_clean');
        $this->form_validation->set_rules('father_name', 'Father Name', 'required|trim|xss_clean');
        $this->form_validation->set_rules('present_addressline1', 'Present Addressline 1', 'required|trim|xss_clean');
        $this->form_validation->set_rules('present_addressline2', 'Present Addressline 2', 'required|trim|xss_clean');
        $this->form_validation->set_rules('present_state', 'Present State', 'required|trim|xss_clean');
        $this->form_validation->set_rules('present_district', 'Present District', 'required|trim|xss_clean');
        $this->form_validation->set_rules('present_pincode', 'Present Pincode', 'required|trim|xss_clean');
        $this->form_validation->set_rules('permanent_addressline1', 'Permanent Addressline 1', 'required|trim|xss_clean');
        $this->form_validation->set_rules('permanent_addressline2', 'Permanent Addressline 2', 'required|trim|xss_clean');
        $this->form_validation->set_rules('permanent_state', 'Permanent State', 'required|trim|xss_clean');
        $this->form_validation->set_rules('permanent_district', 'Permanent District', 'required|trim|xss_clean');
        $this->form_validation->set_rules('permanent_pincode', 'Permanent Pincode', 'required|trim|xss_clean');
        if($this->form_validation->run()== false){
            $response = ['type'=>'error', 'message'=>validation_errors()];
        }
        else{
            $selected_posts = $this->input->post('selected_posts');
            $jobstate = $this->input->post('jobstate');
            $selected_centre = $this->input->post('selected_test_center');
            $acceptpolicy = $this->input->post('acceptpolicy');
            $is_peradderss_same = $this->input->post('is_peradderss_same');
            $category = $this->input->post('category');
            $religion = $this->input->post('religion');
            $pancard = $this->input->post('pancard');
            $aadharno = $this->input->post('aadharno');
            $dob = date('Y-m-d', strtotime($this->input->post('dob')));
            $gender = $this->input->post('gender');
            $maritalstatus = $this->input->post('maritalstatus');
            $father_name = $this->input->post('father_name');
            $mother_name = $this->input->post('mother_name');
            $spouse_name = $this->input->post('spouse_name');
            $present_addressline1 = $this->input->post('present_addressline1');
            $present_addressline2 = $this->input->post('present_addressline2');
            $present_state = $this->input->post('present_state');
            $present_district = $this->input->post('present_district');
            $present_pincode = $this->input->post('present_pincode');
            $permanent_addressline1 = $this->input->post('permanent_addressline1');
            $permanent_addressline2 = $this->input->post('permanent_addressline2');
            $permanent_state = $this->input->post('permanent_state');
            $permanent_district = $this->input->post('permanent_district');
            $permanent_pincode = $this->input->post('permanent_pincode');
            $user_id = $this->session->userdata('user_id');
            $registration_step = $this->input->post('registration_step');
            $user_registration_step = $this->regstration_model->getuserregistrationstep($user_id);
            if($user_registration_step){
                if($registration_step < $user_registration_step){
                    $registration_step = $user_registration_step;
                }
            }
            $created_at = date('Y-m-d H:i:s'); 
            $created_by = 'user';             

            $data = ['category'=>$category, 'religion'=>$religion, 'pancard'=>strtoupper($pancard), 'aadharno'=>strtoupper($aadharno), 'dob'=>$dob, 'gender'=>$gender, 'maritalstatus'=>$maritalstatus, 'father_name'=>$father_name, 'mother_name'=>$mother_name, 'spouse_name'=>$spouse_name, 'present_addressline1'=>$present_addressline1, 'present_addressline2'=>$present_addressline2, 'present_state'=>$present_state, 'present_district'=>$present_district, 'present_pincode'=>$present_pincode, 'permanent_addressline1'=>$permanent_addressline1, 'permanent_addressline2'=>$permanent_addressline2, 'permanent_state'=>$permanent_state, 'permanent_district'=>$permanent_district, 'permanent_pincode'=>$permanent_pincode, 'registration_step'=>$registration_step, 'is_peradderss_same'=>$is_peradderss_same, 'acceptpolicy'=>$acceptpolicy];

            $isupdated = $this->regstration_model->updatebasicdetails($data, $user_id, $selected_posts,$selected_centre,$jobstate);
            if($isupdated){
                $response = ['type'=>'success', 'message'=>'Details has been submitted'];
            }
            else{
                $response = ['type'=>'error', 'message'=>'Please try again'];
            }
        }
        echo json_encode($response);
    }

    public function updatequalification(){
        $response = ['type'=>'error', 'message'=>'Something went wrong'];
        if($this->input->method() == 'post'){
            $this->form_validation->set_rules('degree', 'Degree', 'required|trim|xss_clean|strip_tags');
            $this->form_validation->set_rules('university', 'University', 'required|trim|xss_clean|strip_tags');
            //$this->form_validation->set_rules('passing_year', 'Passing Year', 'required|trim|xss_clean|strip_tags');
            $this->form_validation->set_rules('marks', 'Marks', 'required|trim|xss_clean|strip_tags');
            $this->form_validation->set_rules('result', 'Result', 'required|trim|xss_clean|strip_tags');
            $this->form_validation->set_rules('have_certificates', 'Valid Certification', 'required|trim|xss_clean|strip_tags');
            if($this->form_validation->run()== false){
                $response = ['type'=>'error', 'message'=>validation_errors()];
            }
            // if(!isset($_FILES['marksheet']) && $this->input->post('previous_marksheet') == ''){
            //     $response = ['type'=>'error', 'message'=>'Candicate Certificate is required'];
            // }
            else{
                $degree = $this->input->post('degree');
                $degree2 = $this->input->post('degree2');
                $degree3 = $this->input->post('degree3');
                $university = $this->input->post('university');
                $university2 = $this->input->post('university2');
                $university3 = $this->input->post('university3');
                //$passing_year = $this->input->post('passing_year');
                //$passing_year2 = $this->input->post('passing_year2');
                //$passing_year3 = $this->input->post('passing_year3');
                //$have_certificates = $this->input->post('have_certificates');
                $marks = $this->input->post('marks');
                $marks2 = $this->input->post('marks2');
                $marks3 = $this->input->post('marks3');
                $result = $this->input->post('result');
                $result2 = $this->input->post('result2');
                $result3 = $this->input->post('result3');
                $have_certificates = $this->input->post('have_certificates');
                $arr = $this->input->post('user_languages');
                $user_languages = json_decode($arr,true);
                $user_id = $this->session->userdata('user_id');
                $registration_step = $this->input->post('registration_step');
                $user_registration_step = $this->regstration_model->getuserregistrationstep($user_id);
                if($registration_step < $user_registration_step){
                    $registration_step = $user_registration_step;
                }
                $created_at = date('Y-m-d H:i:s'); 
                $created_by = 'user'; 
                
                // if( isset($_FILES['marksheet'])){
                //    $user_id = $this->session->userdata('user_id');
                //    $marksheet_name_encrypted = ''; 
                   
                //    // Upload Photo
                //     $marksheet = $_FILES['marksheet'];
                //     $marksheet_name = $_FILES['marksheet']['name'];
                //     $marksheet_extension = explode('.', $marksheet_name);
                //     $marksheet_extension = end($marksheet_extension);
                //     $allowed_extension = ['jpg', 'pdf'];
                //     $marksheet_validation = true;
                //     if( !in_array($marksheet_extension, $allowed_extension) ){
                //         $marksheet_validation = false;
                //         $response = ['type'=>'error', 'message'=>'Only JPG, PNG format is allowed'];
                //     }
                //     else if( $marksheet['size']/1024 > 2048 ){
                //         $marksheet_validation = false;
                //         $response = ['type'=>'error', 'message'=>'Maximum image size should be 2Mb'];
                //     }
                //     if($marksheet_validation){
                //         $marksheet_name_encrypted = 'user_'.$user_id.'_marksheet_'.date('dmYHis').'.'.$marksheet_extension;
                //         $is_marksheet_uploaded = move_uploaded_file($marksheet['tmp_name'], 'uploads/user_documents/user_marksheet/'.$marksheet_name_encrypted);
                //     }
                // }

                $data = ['degree'=>$degree,'degree2'=>$degree2,'degree3'=>$degree3, 'university'=>$university,'university2'=>$university2,'university3'=>$university3,  'marks'=>$marks,'marks2'=>$marks2,'marks3'=>$marks3, 'result'=>$result,'result2'=>$result2,'result3'=>$result3, 'have_certificates'=>$have_certificates,'registration_step'=>$registration_step];
                // if(isset($marksheet_name_encrypted) && !empty($marksheet_name_encrypted)){
                //     $temp =array();
                //     $temp['marksheet'] = $marksheet_name_encrypted;
                //     $data = array_merge($data,$temp);
                // }

                $update_qualification = $this->regstration_model->updatequalification($data, $user_id, $user_languages);

                if($update_qualification){
                    $response = ['type'=>'success', 'message'=>'Details has been submitted'];
                }
                else{
                    $response = ['type'=>'error', 'message'=>'Please try again'];
                }
            }
        }
        echo json_encode($response);
    }

    public function uploaddocs(){
        $response = ['type'=>'error', 'message'=>'Something went wrong'];
        if($this->input->method() == 'post'){
            if(!isset($_FILES['photo'])){
                $response = ['type'=>'error', 'message'=>'Candicate photo is required'];
            }
            if(!isset($_FILES['signature'])){
                $response = ['type'=>'error', 'message'=>'Candicate Signature is required'];
            }
            if( isset($_FILES['photo']) && isset($_FILES['signature']) ){
                $user_id = $this->session->userdata('user_id');
                $photo_name_encrypted = '';
                $signature_name_encrypted = '';

                // Upload Photo
                $photo = $_FILES['photo'];
                $photo_name = $_FILES['photo']['name'];
                $photo_extension = explode('.', $photo_name);
                $photo_extension = end($photo_extension);
                $allowed_extension = ['jpg', 'jpeg', 'png'];
                $photo_validation = true;
                if( !in_array($photo_extension, $allowed_extension) ){
                    $photo_validation = false;
                    $response = ['type'=>'error', 'message'=>'Only JPEG, PNG format is allowed'];
                }
                // else if( $photo['size']/1024 > 50 ){
                //     $photo_validation = false;
                //     $response = ['type'=>'error', 'message'=>'Maximum image size should be 50kb'];
                // }
                if($photo_validation){
                    $photo_name_encrypted = 'user_'.$user_id.'_photo_'.date('dmYHis').'.'.$photo_extension;
                    $is_photo_uploaded = move_uploaded_file($photo['tmp_name'], 'uploads/user_documents/user_photos/'.$photo_name_encrypted);
                }  

                // Upload Photo


                //Upload Signature
                $signature = $_FILES['signature'];
                $signature_name = $_FILES['signature']['name'];
                $signature_extension = explode('.', $signature_name);
                $signature_extension = end($signature_extension);
                $allowed_extension = ['jpg', 'jpeg', 'png'];
                $signature_validation = true;
                if( !in_array($signature_extension, $allowed_extension) ){
                    $signature_validation = false;
                    $response = ['type'=>'error', 'message'=>'Only JPEG, PNG format is allowed'];
                }
                else if( $signature['size']/1024 > 50 ){
                    $signature_validation = false;
                    $response = ['type'=>'error', 'message'=>'Maximum image size should be 50kb'];
                }
                if($signature_validation){
                    $signature_name_encrypted = 'user_'.$user_id.'_signature_'.date('dmYHis').'.'.$signature_extension;
                    $is_signature_uploaded = move_uploaded_file($signature['tmp_name'], 'uploads/user_documents/user_signatures/'.$signature_name_encrypted);
                }
                //Upload Signature

            $registration_step = $this->input->post('registration_step');
            $user_registration_step = $this->regstration_model->getuserregistrationstep($user_id);
            if($registration_step < $user_registration_step){
                $registration_step = $user_registration_step;
            }
                $updated_at = date('Y-m-d H:i:s'); 
                $updated_by = 'user';  

                if($signature_validation== true && $photo_validation==true){
                $data = ['photo'=>$photo_name_encrypted, 'signature'=>$signature_name_encrypted, 'registration_step'=>$registration_step];

                $uploaddocs = $this->regstration_model->uploaddocs($data, $user_id);

                if($uploaddocs){
                    $response = ['type'=>'success', 'message'=>'Details has been submitted'];
                }
                else{
                    $response = ['type'=>'error', 'message'=>'Please try again'];
                }                   
                }
            }
        }
        echo json_encode($response);
    }

    public function previewagree(){
        $response = ['type'=>'error', 'message'=>'Something went wrong'];
        if($this->input->method() == 'post'){
            $this->form_validation->set_rules('agree_preview', 'Agree', 'required|trim|xss_clean|strip_tags');
            if($this->form_validation->run() == false){
                $response = ['type'=>'error', 'message'=>validation_errors()];
            }
            else{
                $user_id = $this->session->userdata('user_id');
                $agree_preview = $this->input->post('agree_preview');
            $registration_step = $this->input->post('registration_step');
            $user_registration_step = $this->regstration_model->getuserregistrationstep($user_id);
            if($registration_step < $user_registration_step){
                $registration_step = $user_registration_step;
            }                
                $data = ['agree_preview'=>$agree_preview, 'registration_step'=>$registration_step];
                $update_data = $this->regstration_model->updatepreviewagree($data, $user_id);
                if($update_data){
                    $response = ['type'=>'success', 'message'=>'Details has been submitted'];
                }
                else{
                    $response = ['type'=>'error', 'message'=>'Please try again'];
                }
            }
        }
        echo json_encode($response);
    }


}



?>