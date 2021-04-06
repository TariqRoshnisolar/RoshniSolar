<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$urlPermission = array('users','add-user','edit-user');
		$userPermission = getUserDetails($this->session->userdata('user_id'),'role_manage');
		if(!$this->session->userdata('user_id')){
			redirect('admin/logout');
		} else if( in_array($this->uri->segment(2), $urlPermission) &&  ( !is_array($userPermission) || !in_array($this->uri->segment(2), $userPermission)) ){
			redirect('admin/logout');
		}
		$this->load->library('Admin_ajax_pagination');
		$this->load->model('admin/users_model');
		$this->perPage = 10;
	}

	public function index(){
		$data = array('viewPage'=>'users/list','pageTitle'=>'Users','jsFiles'=>array('users','moment.min','daterangepicker.min'),'cssFiles'=>array('daterangepicker'),'activeMenus'=>array('all-users','users'));
		$data['posts'] = $this->users_model->getPosts();
		$data['job_state'] = $this->users_model->getJobState();
		$data['centres'] = $this->users_model->getCentres();
		$this->load->view('admin/template/default',$data);
	}

	public function ajaxPaginationSearch(){
        $returnArr = array();
		$page = $this->input->post('page');
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }

        $totalRec = count($this->users_model->getList($this->input->post()));

        $this->perPage = $this->input->post('perPage');
        $config['base_url']    = base_url().'admin/user-search-data';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $config['link_func']   = 'searchFilter';
        $this->admin_ajax_pagination->initialize($config);

		$data['users'] = $this->users_model->getList($this->input->post(),array('start'=>$offset,'limit'=>$this->perPage));
		//echo "<pre>"; print_r($data['users']); die;

		$returnArr['html'] = $this->load->view('admin/users/ajax_list',$data,true);
		$returnArr['pagination'] = $this->load->view('admin/users/ajax_list_pagination',$data,true);
        echo json_encode($returnArr);

	}

	public function detailsUser($id=''){
		$data = array('viewPage'=>'users/details','jsFiles'=>array('users'));
		if($id){
			$data['pageTitle'] = 'User Details';
			$data['activeMenus'] = array('all-users','user-details');			
			$data['users'] = $this->users_model->getUerInfo($id);
			$data['language_known'] = $this->users_model->getUserLanguage($id);
			//echo '<pre>'; print_r($data['language_known']);die();
		}
		$this->load->view('admin/template/default',$data);
	}

	function exportData(){		
		$data = $this->input->get();		
		$data['is_export'] = 1;
		$reports = $this->users_model->getReportList($data);
		if($reports){
			$csv_header = '';
			$csv_header = 'Application No,Name,Phone Number,Email Address,State,Cast,Religion,Pan Card,Aadhar No.,Date Of Birth,Gender,Marital Status,Father Name,Mother Name,Spouse Name,Present Address,Present Address2,Present State,Present District,Present Pincode,Permanent Address,Permanent Address2,Permanent State,Permanent District,Permanent Pincode,1st Degree,2nd Degree,3rd Degree,1st Degree University,2nd Degree University,3rd Degree University,1st Degree Passing Year,2nd Degree Passing Year,3rd Degree Passing Year,1st Degree Marks,2nd Degree Marks,3rd Degree Marks,Registration Date';
			$csv_header .= "\n";
			$csv_row ='';
			foreach ($reports as $key => $value) {
				foreach ($value as $field => $va) {
					$csv_row .= $va.',';
				}
				$csv_row .= "\n";
			}
			header('Content-type: application/csv');
			header('Content-Disposition: attachment; filename=user_report.csv');
			echo $csv_header . $csv_row;
			exit;
		}
	}

}
?>