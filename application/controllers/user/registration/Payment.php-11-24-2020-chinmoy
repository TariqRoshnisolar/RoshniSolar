<?php



if (!defined('BASEPATH'))

    exit('No direct script access allowed');



class Payment extends CI_Controller {



    function __construct() {

        parent::__construct();
        $this->load->model('payment_model');
        $this->load->model('regstration_model');
        $this->load->library('msgnineone');
    }



    public function offlinepayment() {
        $this->form_validation->set_rules('payment_mode', 'Payment Mode', 'required|trim|xss_clean|strip_tags');
        $this->form_validation->set_rules('amount', 'Amount', 'required|trim|xss_clean|strip_tags');
        $this->form_validation->set_rules('draft_no', 'Draft No.', 'required|trim|xss_clean|strip_tags');
        $this->form_validation->set_rules('date_of_issue', 'Date of Issue', 'required|trim|xss_clean|strip_tags');
        $this->form_validation->set_rules('issuing_bank', 'Issuing Bank', 'required|trim|xss_clean|strip_tags');
        $response = ['type'=>'error', 'message'=>'Something went wrong'];
        if($this->form_validation->run() == false){
            $response = ['type'=>'error', 'message'=>validation_errors()];
        }
        else{
            if(isset($_FILES['draft_image'])){
                $draft_image_file = $_FILES['draft_image'];
                $draft_image_name = $_FILES['draft_image']['name'];
                $draft_image_extension = explode('.', $draft_image_name);
                $draft_image_extension = end($draft_image_extension);
                $allowed_extension = ['jpg', 'jpeg', 'png'];
                $image_validation = true;
                if( !in_array($draft_image_extension, $allowed_extension) ){
                    $image_validation = false;
                    $response = ['type'=>'error', 'message'=>'Only JPEG, PNG format is allowed'];
                }
                else if( $draft_image_file['size']/1024 > 100 ){
                    $image_validation = false;
                    $response = ['type'=>'error', 'message'=>'Maximum image size should be 100kb'];
                }
                if($image_validation){
                    $payment_mode = $this->input->post('payment_mode');
                    $amount = $this->input->post('amount');
                    $draft_no = $this->input->post('draft_no');
                    $date_of_issue = date('Y-m-d', strtotime($this->input->post('date_of_issue')));
                    $student_id = $this->session->userdata('user_id');
                    $issuing_bank = $this->input->post('issuing_bank');
                    $created_at = date('Y-m-d H:i:s');
                    $created_by = 'user';
                    $draft_image_name_encrypted = 'user_'.$student_id.'_draft_'.date('dmYHis').'.'.$draft_image_extension;
                    $is_uploaded = move_uploaded_file($draft_image_file['tmp_name'], 'uploads/user_documents/user_drafts/'.$draft_image_name_encrypted);
                    $registration_step = '6';
            $user_registration_step = $this->regstration_model->getuserregistrationstep($student_id);
            if($registration_step < $user_registration_step){
                $registration_step = $user_registration_step;
            }                    
                    $data = ['payment_mode'=>$payment_mode, 'registration_step'=>$registration_step, 'registration_amt'=>$amount, 'draft_no'=>$draft_no, 'issuing_bank'=>$issuing_bank, 'draft_image'=>$draft_image_name_encrypted, 'date_of_issue'=>$date_of_issue, 'updated_at'=>$created_at, 'updated_by'=>$created_by, 'payment_status'=>'Success'];
                    if( $this->payment_model->save($data, $student_id) ){
                        $contactno = $this->regstration_model->getusemobilenumber($student_id);
                        if($contactno){
                            $message = "Dear Candicate! Your payment of Rs. ".$amount." has been received.";
                            $sendsms = $this->msgnineone->sendSMS($contactno, $message);
                        }
                        $response = ['type'=>'success', 'message'=>'Payment has been made successfully'];
                    }
                    else{
                        $response = ['type'=>'error', 'message'=>'Something went wrong'];
                    }                    
                }
            }
            else{
                $response = ['type'=>'error', 'message'=>'Draft Image is required'];
            }            
        }
        echo json_encode($response);
    }


}



?>