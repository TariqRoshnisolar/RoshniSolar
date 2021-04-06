<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$urlPermission = array('categories','add-category','edit-category');
		$userPermission = getUserDetails($this->session->userdata('user_id'),'role_manage');
		if(!$this->session->userdata('user_id')){
			redirect('admin/logout');
		} else if( in_array($this->uri->segment(2), $urlPermission) && (!is_array($userPermission) || !in_array($this->uri->segment(2), $userPermission)) ){
			redirect('admin/logout');
		}
		$this->load->library('Admin_ajax_pagination');
		$this->load->model('admin/categories_model');
		$this->perPage = 10;
	}

	public function index(){
		$data = array('viewPage'=>'categories/list','pageTitle'=>'Categories','cssFiles'=>array('daterangepicker'),'jsFiles'=>array('categories','moment.min','daterangepicker.min'),'activeMenus'=>array('all-categories','categories'));
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

        $this->perPage = $this->input->post('perPage');
        $totalRec = count($this->categories_model->getList( $this->input->post() ));

        $config['base_url']    = base_url().'admin/category-search-data';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $config['link_func']   = 'searchFilter';
        $this->admin_ajax_pagination->initialize($config);

		$data['categories'] = $this->categories_model->getList( $this->input->post(),array('start'=>$offset,'limit'=>$this->perPage) );

		$returnArr['html'] = $this->load->view('admin/categories/ajax_list',$data,true);
		$returnArr['pagination'] = $this->load->view('admin/categories/ajax_list_pagination',$data,true);
        echo json_encode($returnArr);

	}

	public function manageCategory($id=''){
		$data = array('viewPage'=>'categories/manage','jsFiles'=>array('categories'));
		if($id){
			$data['pageTitle'] = 'Edit Category';
			$data['activeMenus'] = array('all-categories','edit-category');
			$data['categories'] = $this->categories_model->getData($id);
		} else {
			$data['pageTitle'] = 'Add Category';
			$data['activeMenus'] = array('all-categories','add-category');
			$data['categories'] = array();
		}
		$this->load->view('admin/template/default',$data);
	}

	public function saveData(){
		$data = $this->input->post();
		if($data['id']){
			$data['updated_by'] = $this->session->userdata('user_id');
		}else{
			$data['created_by'] = $this->session->userdata('user_id');
		}
		$return = $this->categories_model->saveData($data);		
		echo json_encode($return);
	}

	public function deleteData(){

		$return = $this->categories_model->deleteData($this->input->post());
		echo json_encode($return);
	}
}
?>