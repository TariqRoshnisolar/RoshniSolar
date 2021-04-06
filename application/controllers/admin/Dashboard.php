<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$urlPermission = array('dashboard');
		$userPermission = getUserDetails($this->session->userdata('user_id'),'role_manage');		
		if(!$this->session->userdata('user_id')){
			redirect('admin/logout');
		} else if( in_array($this->uri->segment(2), $urlPermission) && (!is_array($userPermission) || !in_array($this->uri->segment(2), $userPermission)) ){
			redirect('admin/logout');
		}
		$this->load->model('admin/dashboard_model');
	}

	public function index(){
		$data = array('viewPage'=>'dashboard','pageTitle'=>'Dashboard','activeMenus'=>array('dashboard'));
		$data['users'] = $this->dashboard_model->getUsersData();
		$data['admins'] = $this->dashboard_model->getAdminsData();
		$this->load->view('admin/template/default',$data);
	}
}
?>