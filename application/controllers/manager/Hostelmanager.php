<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Hostelmanager extends Admin_Controller{

	function __construct() {
        parent::__construct();
    }

	public function index(){
        $this->session->set_userdata('active_menu', 'hostelmenu');
        $this->load->view('layout/header');
        $this->load->view('layout/menumanager/hostelmanager');
        $this->load->view('layout/footer');
	}
}
?>