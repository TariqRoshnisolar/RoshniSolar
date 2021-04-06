<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_authentication {

	protected $CI;

	public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function is_user_login(){
        if($this->CI->session->userdata('user_id')){
            return $this->CI->session->userdata('user_id');
        }
        else{
            return false;
        }
    }

    public function login_user_data(){
        $response = false;
        if( $this->is_user_login() ){
            $user_id = $this->is_user_login();
            $user_data = $this->CI->regstration_model->get($user_id);
            if($user_data){
                $user_data['applied_posts'] = $this->CI->regstration_model->getuserappliedposts($user_id);
                $user_data['applied_centre'] = $this->CI->regstration_model->getuserappliedcentre($user_id);
                $user_data['jobstate'] = $this->CI->regstration_model->getuserappliedJobState($user_id);
                $user_data['user_languages'] = $this->CI->regstration_model->getuserlanguages($user_id);
                $response = $user_data;
            }
        }
        return $response;
    }

    public function user_authenticate($phone_no, $password){
        $response = false;
        $user_data = $this->CI->regstration_model->user_authenticate($phone_no, $password);
        if($user_data){
            $response = $user_data;
        }
        return $response;
    }

    public function disable_user_access(){
        //$this->CI->session->sess_destroy();
        redirect(base_url('form'));
    }    	
}
?>