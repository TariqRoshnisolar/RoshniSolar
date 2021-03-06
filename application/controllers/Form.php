<?php

/*

 * To change this license header, choose License Headers in Project Properties.

 * To change this template file, choose Tools | Templates

 * and open the template in the editor.

 */



/**

 * @package Contact :  CodeIgniter Contact Form

 *

 * @author TechArise Team

 *

 *

 *

 * Description of Contact Controller

 */

if (!defined('BASEPATH'))

    exit('No direct script access allowed');



class Form extends CI_Controller

{

    private $login_user_data;

    public function __construct()

    {

        parent::__construct();

        // load email lib

        $this->load->library('email');
        $this->load->library('msgnineone');
        $this->load->library('user_authentication');
        $this->login_user_data = $this->user_authentication->login_user_data();
        date_default_timezone_set('asia/kolkata');
        $this->load->model('form_master_model');
        $this->load->model('payment_model');
        $this->load->model('payment_model');
    }

    public function gererate_captch(){
        $random_alpha = md5(rand());
        $captcha_code = substr($random_alpha, 0, 6);
        unset($_SESSION["captcha_code"]);
        $_SESSION["captcha_code"] = $captcha_code;
        $target_layer = imagecreatetruecolor(70,30);
        $captcha_background = imagecolorallocate($target_layer, 255, 160, 119);
        imagefill($target_layer,0,0,$captcha_background);
        $captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0);
        imagestring($target_layer, 5, 5, 5, $captcha_code, $captcha_text_color);
        header("Content-type: image/jpeg");
        imagejpeg($target_layer);     
    }

    public function userauthentication(){
        if($this->input->method() == 'post'){
            if($this->login_user_data){
                $response = ['type'=>'error', 'message'=>'User is already login. Please logout and try again'];
            }
            else{
            $response = ['type'=>'error', 'message'=>'Something went wrong'];
            $this->form_validation->set_rules('phone_no', 'Mobile No', 'required|trim|xss_clean|strip_tags');
            $this->form_validation->set_rules('password', 'Password', 'required|trim|xss_clean|strip_tags'); 
            $this->form_validation->set_rules('captchacode', 'Captcha Code', 'required|trim|xss_clean|strip_tags|callback_validatecaptchacode'); 
            $this->form_validation->set_message('validatecaptchacode', 'Captcha is not correct. try again');
			
            if($this->form_validation->run() == false){
                $response = ['type'=>'error', 'message'=>validation_errors()];
            }
            else{
                $phone_no = $this->input->post('phone_no');
                $password = $this->input->post('password');
                $this->login_user_data = $this->user_authentication->user_authenticate($phone_no, $password);
                if($this->login_user_data){
                    $this->session->set_userdata('user_id', $this->login_user_data['id']);
                    $response = ['type'=>'success', 'message'=>$this->login_user_data];
                }
                else{
                    $response = ['type'=>'error', 'message'=>'Incorrect Login Details'];
                }
            }
            }

            echo json_encode($response);       
        }
    }

    public function validatecaptchacode($captchacode){
        if($this->session->userdata('captcha_code')) {
            if($this->session->userdata('captcha_code') == $captchacode){
                return true;
            }
        }
        return false;
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('index.php/form'));
    }

    public function index()

    {
        
        $data['page'] = 'index';
        $data['title'] = 'Application Form ';
        $data['updates'] = $this->cms_program_model->getUpdatesByDate();
        $this->load->view('form/header', $data);
        $this->load->view('form/index', $data);
        $this->load->view('form/footer');

    }



    public function basic_info()
    {
        if($this->login_user_data['payment_status'] != 'Success'){
        if(!$this->login_user_data){
        $data['page'] = 'basic_info';
        $data['title'] = 'Basic Info';
        $data['login_user_data']= $this->login_user_data;
        $this->load->view('form/header', $data);
        $this->load->view('form/basic_info', $data);
        $this->load->view('form/footer');
        }
        else{
            $this->user_authentication->disable_user_access();
        }
        }
        else{
            redirect(base_url().'form/success');
        }        
    }

    public function details(){
        if($this->login_user_data['payment_status'] != 'Success'){
        if($this->login_user_data)
        {
        $data['page'] = 'details';
        $data['login_user_data']= $this->login_user_data;
        $data['title'] = 'Details';
        $data['postnames'] = $this->form_master_model->getposts();
        $data['centrenames'] = $this->form_master_model->getcentres();
        $data['jobstates'] = $this->form_master_model->getjobstates();
        $data['categories'] = $this->form_master_model->getcategories();
        $data['religions'] = $this->form_master_model->getreligions();
        $data['genders'] = $this->form_master_model->getgenders();
        $data['maritalstatues'] = $this->form_master_model->getmaritalstatues();
        $data['states'] = $this->form_master_model->getstates();
        $this->load->view('form/header', $data);
        $this->load->view('form/details', $data);
        $this->load->view('form/footer');
        }
        else{
            $this->user_authentication->disable_user_access();
        }
        }
        else{
            redirect(base_url().'form/success');
        }
    }



    public function doc_upload(){
        if($this->login_user_data['payment_status'] != 'Success'){
        if($this->login_user_data){
        $data['page'] = 'doc_upload';
        $data['title'] = 'Upload';
        $data['login_user_data']= $this->login_user_data;
        $this->load->view('form/header', $data);
        $this->load->view('form/doc_upload', $data);
        $this->load->view('form/footer');            
        }
        else{
            $this->user_authentication->disable_user_access();
        }
        }
        else{
            redirect(base_url().'form/success');
        }
    }



    public function qualification(){
        if($this->login_user_data['payment_status'] != 'Success'){
        if($this->login_user_data){
        $data['page'] = 'qualification';
        $data['title'] = 'Qualification';
        $data['login_user_data']= $this->login_user_data;
        $data['degrees'] = $this->form_master_model->getdegrees();
        $this->load->view('form/header', $data);
        $this->load->view('form/qualification', $data);
        $this->load->view('form/footer');
        }
        else{
            $this->user_authentication->disable_user_access();
        }
        }
        else{
            redirect(base_url().'form/success');
        }        
    }



    public function preview(){
     if($this->login_user_data['payment_status'] != 'Success'){
        if($this->login_user_data){
        $data['page'] = 'preview';
        $data['title'] = 'Preview';
        $data['login_user_data']= $this->login_user_data; 
        $this->load->view('form/header', $data);
        $this->load->view('form/preview', $data);
        $this->load->view('form/footer');           
        }
        else{
            $this->user_authentication->disable_user_access();
        }
        }   
        else{
            redirect(base_url().'form/success');
        }     
    }

    public function downloadpreviewpdf(){
        if($this->login_user_data){
        $data['page'] = 'preview';
        $data['title'] = 'Preview';
        $data['login_user_data']= $this->login_user_data;
        $html=$this->load->view('form/preview', $data, true);
        $pdfFilePath = "output_pdf_name.pdf";
        $this->load->library('m_pdf');
        $this->m_pdf->pdf->WriteHTML($html);
        $this->m_pdf->pdf->Output($pdfFilePath, 'D');           
        }else{
        $this->user_authentication->disable_user_access();
        }
    }

    public function download_paymeny_receipt_pdf(){
        if($this->login_user_data){
        $data['page'] = 'Online Payment Receipt';
        $data['title'] = 'Online Payment Receipt';
        $data['login_user_data']= $this->login_user_data;
        $html=$this->load->view('form/payment_receipt', $data, true);
        $pdfFilePath = "online_paymnt_receipt.pdf";
        $this->load->library('m_pdf');
        $this->m_pdf->pdf->WriteHTML($html);
        $this->m_pdf->pdf->Output($pdfFilePath, 'D');           
        }
        else{
        $this->user_authentication->disable_user_access();
        }
    }    



    public function payment(){
        if($this->login_user_data['payment_status'] != 'Success'){
        if($this->login_user_data){
        $data['page'] = 'payment';
        $data['title'] = 'Payment';
        $data['login_user_data']= $this->login_user_data;
        $data['registration_amt'] = $this->payment_model->registrationamt($data['login_user_data']['category']);
        $this->load->view('form/header', $data);
        $this->load->view('form/payment', $data);
        $this->load->view('form/footer');            
        }
        else{
            $this->user_authentication->disable_user_access();
        } 
        }
else{
    redirect(base_url().'index.php/form/success');
}                
    }

    public function paymentstatus(){
        $data['page'] = 'payment';
        $data['title'] = 'Payment';
        $data['login_user_data']= $this->login_user_data;
        $this->load->view('form/header', $data);
        $this->load->view('form/paymentstatus', $data);
        $this->load->view('form/footer');     
    } 

    public function success(){
        if($this->login_user_data['payment_status'] == 'Success'){
        $data['page'] = 'success';
        $data['title'] = 'Application Success';
        $data['login_user_data']= $this->login_user_data;
        $this->load->view('form/header', $data);
        $this->load->view('form/applicationsuccess', $data);
        $this->load->view('form/footer');            
        }
        else{
            redirect(base_url().'index.php/form/payment');
        }
    }

    // public function paymentreceipt(){
    //     $data['page'] = 'Payment Receipt';
    //     $data['title'] = 'Payment Receipt';
    //     $data['login_user_data']= $this->login_user_data;
    //     $this->load->view('form/header', $data);
    //     $this->load->view('form/paymentreceipt', $data);
    //     $this->load->view('form/footer');            
    // }               



    public function comingsoon()

    {

        $data['page'] = 'comingsoon';

        $data['title'] = 'Coming Soon';



        $this->load->view('form/comingsoon', $data);



    }





}

