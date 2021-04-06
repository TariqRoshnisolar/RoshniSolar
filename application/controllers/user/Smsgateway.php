<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Smsgateway extends CI_Controller {

    public function __construct() {
        //parent::__construct();
        $this->load->library('msgnineone');
    }

    public function index(){

    }

    public function sendotp($contactno=null, $email=null){
        $response = ['type'=>'error', 'message'=>['mobile'=>'', 'email'=>'']];
        if($this->input->method() == 'post'){
        $mobileotp_response = sentotptomobile($contactno);
        $emailotp_response = sentotptoemail($email);
        $response = ['type'=>'success', 'message'=>['mobile'=>$mobileotp_response, 'email'=>$emailotp_response]];           
        }
        echo json_encode($response);
    }

    public function sentotptomobile($contactno){
        $response = $this->msgnineone->sendotptomobile($contactno);
        if($response){
            $response = json_decode($response);
            if( $response->type == 'success' ){
                return true;
            }
        }
        return false;
    }

    public function sentotptoemail($email){
        $response = $this->msgnineone->sendotptoemail($email);
        if($response){
            $response = json_decode($response);
            if( $response->type == 'success' ){
                return true;
            }
        }
        return false;       
    }

}