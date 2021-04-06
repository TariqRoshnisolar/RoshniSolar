<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Feemanager extends Admin_Controller{

	function __construct() {
        parent::__construct();
    }

	public function index(){
        $this->session->set_userdata('active_menu', 'feemenu');
        $this->load->view('layout/header');
        $this->load->view('layout/menumanager/feemanager');
        $this->load->view('layout/footer');
	}
}
?>