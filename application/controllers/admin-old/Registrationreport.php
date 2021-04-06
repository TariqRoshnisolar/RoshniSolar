<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Registrationreport extends Admin_Controller{

	function __construct() {
        parent::__construct();
        $this->load->model('regstration_model');
    }

	public function index(){
        if (!$this->rbac->hasPrivilege('registration_report', 'can_view')) {
            access_denied();
        }
        $this->session->set_userdata('active_menu', 'reportmenu');
        $data['title'] = 'student fee';
        $data['paymentstatuslist'] = $this->regstration_model->getallpaymentstatus();
        $data['resultlist'] = $this->regstration_model->getallrecords();
        $this->load->view('layout/header', $data);
        $this->load->view('admin/candicateregistration/registrationreport', $data);
        $this->load->view('layout/footer', $data);        
    }


    public function filtercandicatereport(){
        if($this->input->method() == 'post'){
        $response = ['type'=>'error', 'message'=>'No Record Found'];
            $payment_mode = $this->input->post('payment_mode');
            $payment_status = $this->input->post('payment_status');
            $registration_steps = $this->input->post('registration_steps');
            $resultlist = $this->regstration_model->getallrecords($payment_mode, $payment_status, $registration_steps);
            if($resultlist){
                $response = ['type'=>'success', 'message'=>$resultlist];
            }
        } 
        echo json_encode($response);      
    }

    public function changeuserstatus(){
        if($this->input->method() == 'post'){
        $response = ['type'=>'error', 'message'=>'Please try again'];
        $this->form_validation->set_rules('user_id', 'User', 'required|trim|xss_clean');
        $this->form_validation->set_rules('status', 'Status', 'required|trim|xss_clean');
        if($this->form_validation->run() == false){
            $response = ['type'=>'error', 'message'=>validation_errors()];
        }
        else{
            $user_id = $this->input->post('user_id');
            $status = $this->input->post('status');
            $is_changed = $this->regstration_model->changeuserstatus($user_id, $status);
            if($is_changed){
                $response = ['type'=>'success', 'message'=>'Status has been changed'];
            }
        }
        } 
        echo json_encode($response);      
    }    
    



}

?>