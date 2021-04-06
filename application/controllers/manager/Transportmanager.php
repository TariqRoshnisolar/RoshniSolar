<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Transportmanager extends Admin_Controller{

	function __construct() {
        parent::__construct();
    }

	public function index(){
        $this->session->set_userdata('active_menu', 'transportmenu');
        $this->load->view('layout/header');
        $this->load->view('layout/menumanager/transportmanager');
        $this->load->view('layout/footer');
	}
}
?>