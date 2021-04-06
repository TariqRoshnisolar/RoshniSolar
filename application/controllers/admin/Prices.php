<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prices extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$urlPermission = array('prices','add-price','edit-price');
		$userPermission = getUserDetails($this->session->userdata('user_id'),'role_manage');
		if(!$this->session->userdata('user_id')){
			redirect('admin/logout');
		} else if( in_array($this->uri->segment(2), $urlPermission) && (!is_array($userPermission) || !in_array($this->uri->segment(2), $userPermission)) ){
			redirect('admin/logout');
		}
		$this->load->library('Admin_ajax_pagination');
		$this->load->model('admin/prices_model');
		$this->perPage = 10;
	}

	public function index(){
		$data = array('viewPage'=>'prices/list','pageTitle'=>'Prices','cssFiles'=>array('daterangepicker'),'jsFiles'=>array('prices','moment.min','daterangepicker.min'),'activeMenus'=>array('all-prices','prices'));
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
        $totalRec = count($this->prices_model->getList( $this->input->post() ));

        $config['base_url']    = base_url().'admin/price-search-data';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $config['link_func']   = 'searchFilter';
        $this->admin_ajax_pagination->initialize($config);
		$data['prices'] = $this->prices_model->getList( $this->input->post(),array('start'=>$offset,'limit'=>$this->perPage) );
		$returnArr['html'] = $this->load->view('admin/prices/ajax_list',$data,true);
		$returnArr['pagination'] = $this->load->view('admin/prices/ajax_list_pagination',$data,true);
        echo json_encode($returnArr);

	}

	public function managePrice($id=''){
		$data = array('viewPage'=>'prices/manage','jsFiles'=>array('prices'));
		$data['getCat'] = $this->db->get_where('categories',array('is_deleted'=>0))->result();
		if($id){
			$data['pageTitle'] = 'Edit Category';
			$data['activeMenus'] = array('all-prices','edit-price');
			$data['prices'] = $this->prices_model->getData($id);
		} else {
			$data['pageTitle'] = 'Add Category';
			$data['activeMenus'] = array('all-prices','add-price');
			$data['prices'] = array();
		}
		$this->load->view('admin/template/default',$data);
	}

	public function saveData(){
		$data = $this->input->post();
		if(isset($data['categories']) && count($data['categories'])>0){
			$data['apply_for_category'] = implode(',', $data['categories']);
			unset($data['categories']);
			if($data['id']){
			    $data['updated_by'] = $this->session->userdata('user_id');
			}else{
				$data['created_by'] = $this->session->userdata('user_id');
			}
			$return = $this->prices_model->saveData($data);	
		}else{
			$return['status'] = 2;
			$return['msg'] = 'Please choose atleast one category';
		}			
		echo json_encode($return);
	}

	public function deleteData(){
		$return = $this->prices_model->deleteData($this->input->post());
		echo json_encode($return);
	}
}
?>