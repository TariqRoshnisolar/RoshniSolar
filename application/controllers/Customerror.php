<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Customerror extends Admin_Controller {

public function error_404(){
	$heading = "The page you were looking for doesn't exist";
	$message = 'You may have mistyped the address or the page may have moved.';
	$data = ['heading'=>$heading, 'message'=>$message];
	$this->load->view('errors/html/custom_error_404', $data);
}

public function somethingwrong(){
	$data['title'] = 'Something Went Wrong';
	$this->load->view('layout/header', $data);
	$this->load->view('errors/html/custom_error_general');
}

}

?>


