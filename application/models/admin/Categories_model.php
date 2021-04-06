<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function getList($params = array(),$limit = array()){
		$this->db->select('id,category,created_at');
		$this->db->from('categories');		
		$this->db->where('is_deleted',0);
		if(isset($params['keyword']) && $params['keyword']){
			$this->db->where('(categories.category LIKE "%'.$params['keyword'].'%")');	
		}

		if(isset($params['startEnd']) && $params['startEnd']){
			  $explode = explode('-', $params['startEnd']);
			  $starDate = $explode[0];
			  $endDate = $explode[1];
			   $st=date('Y-m-d',strtotime($starDate)).' 00:00:00';
			   $et=date('Y-m-d',strtotime($endDate)).' 23:59:00';
              $this->db->where('categories.created_at >=',$st);
			  $this->db->where('categories.created_at <=',$et);
		}

		if(isset($params['sortBy']) && $params['sortBy'] && isset($params['sortByField']) && $params['sortByField']){
			$this->db->order_by($params['sortByField'],$params['sortBy']);
		} else {
			$this->db->order_by('categories.id','DESC');
		}

		if(array_key_exists("start",$limit) && array_key_exists("limit",$limit)){
			$this->db->limit($limit['limit'],$limit['start']);
		}elseif(!array_key_exists("start",$limit) && array_key_exists("limit",$limit)){
			$this->db->limit($limit['limit']);
		}

		$query = $this->db->get();
		// echo $this->db->last_query();die();
		return ($query->num_rows() > 0)?$query->result():array();

	}

	public function getData($id=''){
		return $this->db->get_where('categories',array('id'=>$id))->row();
	}

	public function saveData($data=array()){
		if($data['id']){
			$id = $data['id'];
			$data['updated_at'] = date('Y-m-d H:i:s');
			unset($data['id']);
			$this->db->where('id',$id)->update('categories',$data);
		} else {
			$data['created_at'] = date('Y-m-d H:i:s');
			$this->db->insert('categories',$data);
		}

		return array('status'=>1,'msg'=>'Data successfully saved');
	}
	

	public function deleteData($data=array()){
		if($data['ids']){
			$ids = explode(',', $data['ids']);
			$getData = $this->db->where_in('id',$ids)->get('categories')->result();
			if($getData){
				foreach ($getData as $key => $value) {
					@unlink($value->logo);
				}				
			}
			$this->db->where_in('id',$ids)->update('categories',array('is_deleted'=>1));
			return array('status'=>1,'msg'=>'Deleted successfully.');
		} else {
			return array('status'=>2,'msg'=>'Something went wrong,please try again later.');
		}
	}

}
?>