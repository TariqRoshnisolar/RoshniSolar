<?php



if (!defined('BASEPATH'))

    exit('No direct script access allowed');



class Sms extends CI_Controller {



    function __construct() {
        parent::__construct();
        $this->load->library('msgnineone');

    }

    public function sendotp(){
        $response = ['type'=>'error', 'message'=>['mobile'=>'', 'email'=>'']];
        if($this->input->method() == 'post'){
            $this->form_validation->set_error_delimiters('', ''); 
            $this->form_validation->set_rules('contactno', 'Mobile No', 'required|trim|xss_clean|strip_tags|callback_ismobileunique');
            $this->form_validation->set_rules('email', 'Email Id', 'required|trim|xss_clean|strip_tags|callback_isemailunique');
            $this->form_validation->set_message('ismobileunique', 'Mobile No is already registered');
            $this->form_validation->set_message('isemailunique', 'Email Id is already registered');
            if($this->form_validation->run() == false){
                $response = ['type'=>'error', 'message'=>validation_errors()];
            }
            else{
                $contactno = $this->input->post('contactno');
                $email = $this->input->post('email');
                $otp = rand(1000,9999);
                $mobileotp_response = $this->sendotptomobile($contactno,$otp);
                $decode_responce = json_decode($mobileotp_response,true);
                 if($decode_responce['msg'] == 'success'){
                    $checkData = $this->db->get_where('user_verification',array('mobile_no'=>$decode_responce['data'][0]['number']))->row();
                    if($checkData){
                        $this->db->where('id',$checkData->id)->update('user_verification',array('otp'=>$otp));
                    }else{
                        $this->db->insert('user_verification',array('mobile_no'=>$decode_responce['data'][0]['number'],'otp'=>$otp));
                    }
                 }
                  
                $emailotp_response = '';
                //$emailotp_response = $this->sendotptoemail($email);
                $response = ['type'=>'success', 'message'=>['mobile'=>$mobileotp_response, 'email'=>$emailotp_response]]; 
            }         
        }
        echo json_encode($response);
    }

    // public function sendotp(){
    //     $response = ['type'=>'error', 'message'=>['mobile'=>'', 'email'=>'']];
    //     if($this->input->method() == 'post'){
    //         $this->form_validation->set_error_delimiters('', ''); 
    //         $this->form_validation->set_rules('contactno', 'Mobile No', 'required|trim|xss_clean|strip_tags|callback_ismobileunique');
    //         $this->form_validation->set_rules('email', 'Email Id', 'required|trim|xss_clean|strip_tags|callback_isemailunique');
    //         $this->form_validation->set_message('ismobileunique', 'Mobile No is already registered');
    //         $this->form_validation->set_message('isemailunique', 'Email Id is already registered');
    //         if($this->form_validation->run() == false){
    //             $response = ['type'=>'error', 'message'=>validation_errors()];
    //         }
    //         else{
    //             $contactno = $this->input->post('contactno');
    //             $email = $this->input->post('email');
    //             $otp = rand(1000,9999);
    //             // $mobileotp_response = $this->sendotptomobile($contactno,$otp);
    //             // $decode_responce = json_decode($mobileotp_response,true);                
    //              //if($decode_responce['msg'] == 'success'){
    //                 //$checkData = $this->db->get_where('user_verification',array('mobile_no'=>$decode_responce['data'][0]['number']))->row();
    //             $checkData = $this->db->get_where('user_verification',array('mobile_no'=>$contactno))->row();
    //                 if($checkData){
    //                     $this->db->where('id',$checkData->id)->update('user_verification',array('otp'=>$otp));
    //                 }else{
    //                     //$this->db->insert('user_verification',array('mobile_no'=>$decode_responce['data'][0]['number'],'otp'=>$otp));
    //                     $this->db->insert('user_verification',array('mobile_no'=>$contactno,'otp'=>$otp));
    //                 }
    //              //}
                  
    //             $emailotp_response = '';
    //            $response = ['type'=>'success', 'message'=>['email'=>$emailotp_response]]; 
    //             //$response = ['type'=>'success', 'message'=>['mobile'=>$mobileotp_response, 'email'=>$emailotp_response]]; 
    //         }         
    //     }
    //     echo json_encode($response);
    // }

    public function ismobileunique($contactno){
        return $this->regstration_model->uniquemobileno($contactno);
    }

    public function isemailunique($email){
        return $this->regstration_model->uniqueemail($email);
    }    

    public function verifyotp(){
    	$response = ['type'=>'error', 'message'=>'Verfication Failed'];
        if($this->input->method() == 'post'){
        	$this->form_validation->set_rules('mobileotp', 'OTP', 'required|trim|xss_clean');
        	$this->form_validation->set_rules('phone', 'Mobile No', 'required|trim|xss_clean');
            $this->form_validation->set_rules('fname', 'First Name', 'required|trim|xss_clean|strip_tags');
            $this->form_validation->set_rules('lname', 'Last Name', 'required|trim|xss_clean|strip_tags');
            $this->form_validation->set_rules('email', 'Email Id', 'required|trim|xss_clean|strip_tags');
        	if($this->form_validation->run()== false){
        		$response = ['type'=>'error', 'message'=>validation_errors()];
        	}else{
        		$mobileotp = $this->input->post('mobileotp');
        		$contactno = $this->input->post('phone');
                $checkData = $this->db->get_where('user_verification',array('mobile_no'=>$contactno))->row();
                if($checkData && $checkData->otp == $mobileotp){
                    $this->db->where('id',$checkData->id)->update('user_verification',array('status'=>1));
                    $mobileotp_response = 'success';
                }else{
                    $mobileotp_response = 'false';
                }
        		//$mobileotp_response = $this->verifymobileotp($mobileotp, $contactno);
                //echo '<pre>'; print_r($mobileotp_response); die();
                //$mobileotp_response = json_decode($mobileotp_response);
                if($mobileotp_response =='success'){
                    // Save Data

                $f_name = $this->input->post('fname');
                $m_name = $this->input->post('mname');
                $l_name = $this->input->post('lname');
                $phone_no = $this->input->post('phone');
                $email_id = $this->input->post('email');
                $is_mobile_varified = 1;
                $is_email_varified = 1;
                $registration_step = 1;
                $created_at = date('Y-m-d H:i:s');
                $created_by = 'user';
                $password = $this->generate_user_credentials();

                $is_whatsapp_no = ($this->input->post('is_whatsapp_no'))?1:2;
                $whatsapp = $this->input->post('whatsapp');

                $data = ['f_name'=>$f_name, 'm_name'=>$m_name, 'l_name'=>$l_name, 'phone_no'=>$phone_no, 'email_id'=>$email_id, 'is_mobile_varified'=>$is_mobile_varified, 'is_mobile_varified'=>$is_mobile_varified, 'registration_step'=>$registration_step,'is_whatsapp_no'=>$is_whatsapp_no,'whatsapp'=>$whatsapp, 'created_at'=>$created_at, 'created_by'=>$created_by];

                $result = $this->regstration_model->add($data, $password);
                if($result){
                    $application_no = $result['application_no'];
                    $user_id = $result['user_id'];
                    $message = "Dear Candidate, You have successfully registered and Your Registration Number: ".$application_no.", Your UserId: ".$phone_no." and Password: ".$password;
                    $issmssent = $this->sendSMS2($phone_no,$application_no,$password);
                    //echo '<pre>'; print_r($issmssent); die();
                    $this->session->set_userdata('user_id', $user_id);

                    
                    $response = ['type'=>'success', 'message'=>['sms_status'=>$issmssent, 'msg'=>'You are registered successfully']];
                }
                else{
                    $response = ['type'=>'error', 'message'=>'Application can not be generated! try again'];
                }                                

                    // End Save Data
                }
                else{
                    $response = ['type'=>'error', 'message'=>'OTP is not varified! try again'];
                }
        	}        
        }   	
    	echo json_encode($response);
    }

    public function generate_user_credentials(){
        $password = random_string('alnum', 8);
        return $password;
    }

    public function forgetpassword(){
        $response = ['type'=>'error', 'message'=>'Something went wrong'];
        if($this->input->method() == 'post'){
            $this->form_validation->set_rules('valid_phone_no', 'Mobile No', 'required|trim|xss_clean|callback_validphoneno');
            $this->form_validation->set_message('validphoneno', 'Mobile number is not registered with us');
            if($this->form_validation->run() == false){
                $response = ['type'=>'error', 'message'=>validation_errors()];
            }
            else{
                $phone_no = $this->input->post('valid_phone_no');
                $password = $this->generate_user_credentials();
                $user_id = $this->regstration_model->getuserbymobileno($phone_no);
                if($user_id){
                $updatepassword = $this->regstration_model->updatepassword($user_id, $phone_no, $password); 
                if($updatepassword){
                    $message = "Dear Candicate! your password for UVSIL application is :".$password;
                    $issmssent = $this->sendSMS($phone_no, $message);
                    $response = ['type'=>'success', 'message'=>['sms_status'=>$issmssent, 'msg'=>'Your password has been sent to your mobile number']];
                }
                }              
            }            
        }
        echo json_encode($response);
    }

    public function validphoneno($phone_no){
        if($this->regstration_model->ismobileregistered($phone_no)){
            return true;
        }
        return false;
    }        

    public function sendotptomobile($contactno,$otp){
        return $this->msgnineone->sendotptomobile($contactno,$otp);
    }

    public function sendotptoemail($email){
        $response = $this->msgnineone->sendotptoemail($email);
        return $response;       
    }

    public function verifymobileotp($mobileotp, $contactno){
        return $this->msgnineone->verifyotpmobile($mobileotp, $contactno);
    }

    public function sendSMS($contactno, $message){
        return $this->msgnineone->sendSMS($contactno, $message);
    }

     public function sendSMS2($contactno, $application_no,$password){
        return $this->msgnineone->sendSMS($contactno, $application_no,$password);
    }       

}



?>