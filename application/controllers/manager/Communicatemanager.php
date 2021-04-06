<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Communicatemanager extends Admin_Controller{

	function __construct() {
        parent::__construct();
    }

	public function index(){
        $this->session->set_userdata('active_menu', 'communicatemenu');
        $this->load->view('layout/header');
        $this->load->view('layout/menumanager/communicatemanager');
        $this->load->view('layout/footer');
	}
}
?>