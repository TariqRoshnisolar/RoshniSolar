<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function getList($params = array(),$limit = array()){
		$admin_query = $this->db->query('SELECT demo_admin FROM user WHERE id = '.$this->session->userdata('user_id').'');
		$admin_result = $admin_query->row_array();

		$this->db->select('users_info.*,user_credentials.phone_no');
		$this->db->from('users_info');
		$this->db->join('user_credentials','user_credentials.user_id=users_info.id AND user_credentials.is_deleted=0');
		if(isset($admin_result['demo_admin']) && $admin_result['demo_admin'] == 1){
			$this->db->where('created_by',$this->session->userdata('user_id'));
		}

		if(isset($params['keyword']) && $params['keyword']){
			$this->db->where('(users_info.f_name LIKE "%'.$params['keyword'].'%" OR users_info.l_name LIKE "%'.$params['keyword'].'%" OR users_info.phone_no LIKE "%'.$params['keyword'].'%" OR users_info.email_id LIKE "%'.$params['keyword'].'%")');	
		}

		if(isset($params['posts']) && $params['posts']){
			$this->db->join('user_applied_posts','user_applied_posts.user_id=users_info.id AND user_applied_posts.post_id = "'.$params['posts'].'" ' );
		}

		if(isset($params['job_state']) && $params['job_state']){
			$this->db->where('users_info.jobstate',$params['job_state']);
		}

		if(isset($params['centre']) && $params['centre']){
			$this->db->join('user_applied_centre','user_applied_centre.user_id=users_info.id AND user_applied_centre.centre_id = "'.$params['centre'].'" ' );
		}

		if(isset($params['payment_status']) && $params['payment_status']){
			$this->db->where('users_info.payment_status',$params['payment_status']);
		}

		if(isset($params['startEnd']) && $params['startEnd']){
			  $explode = explode('-', $params['startEnd']);
			  $starDate = $explode[0];
			  $endDate = $explode[1];
			   $st=date('Y-m-d',strtotime($starDate)).' 00:00:00';
			   $et=date('Y-m-d',strtotime($endDate)).' 23:59:00';
              $this->db->where('users_info.created_at >=',$st);
			  $this->db->where('users_info.created_at <=',$et);
		}

		if(isset($params['sortBy']) && $params['sortBy'] && isset($params['sortByField']) && $params['sortByField']){
			$this->db->order_by($params['sortByField'],$params['sortBy']);
		} else {
			$this->db->order_by('users_info.id','DESC');
		}

		if(array_key_exists("start",$limit) && array_key_exists("limit",$limit)){
			$this->db->limit($limit['limit'],$limit['start']);
		}elseif(!array_key_exists("start",$limit) && array_key_exists("limit",$limit)){
			$this->db->limit($limit['limit']);
		}

		$query = $this->db->get();
		//echo $this->db->last_query();die();
		return ($query->num_rows() > 0)?$query->result():array();
	}

	public function getData($id=''){
		$admin_query = $this->db->query('SELECT demo_admin FROM user WHERE id = '.$this->session->userdata('user_id').'');
		$admin_result = $admin_query->row_array();
		if (isset($admin_result['demo_admin']) && $admin_result['demo_admin'] == 1) {
			return $this->db->get_where('user',array('id'=>$id,'created_by'=>$this->session->userdata('user_id')))->row();
		}else{
			return $this->db->get_where('user',array('id'=>$id))->row();
		}
	}

	public function getUerInfo($user_id=''){
		$this->db->select('users_info.application_no, users_info.f_name, users_info.m_name, users_info.l_name, users_info.phone_no, users_info.is_mobile_varified, users_info.email_id, users_info.is_email_varified, users_info.jobstate, jobstates.state as jobstate_name , users_info.acceptpolicy, users_info.is_peradderss_same, users_info.agree_preview, users_info.payment_status, users_info.category, categories.category as category_name, users_info.religion, religions.religion as religion_name, users_info.pancard, users_info.aadharno, users_info.dob, users_info.gender, genders.gender as gender_name, users_info.maritalstatus, marital_statues.status as maritalstatus_name, users_info.father_name, users_info.mother_name, users_info.spouse_name, users_info.present_addressline1, users_info.present_addressline2, users_info.present_state, pre_state.state as present_state_name, users_info.present_district, users_info.present_pincode, users_info.permanent_addressline1, users_info.permanent_addressline2, users_info.permanent_state, per_state.state as permanent_state_name , users_info.permanent_district, users_info.permanent_pincode, users_info.degree,users_info.degree2,users_info.degree3, degrees.degree as degree_name ,degree2.degree as degree_name2,degree3.degree as degree_name3, users_info.university,users_info.university2,users_info.university3, users_info.passing_year,users_info.passing_year2,users_info.passing_year3, users_info.marks,users_info.marks2,users_info.marks3, users_info.result,users_info.result2,users_info.result3, users_info.have_certificates, users_info.photo, users_info.signature,users_info.marksheet, users_info.registration_step,user_credentials.created_at as registration_date');
		$this->db->from('users_info');
		$this->db->join('user_credentials','user_credentials.user_id=users_info.id');
		$this->db->join('jobstates','jobstates.id=users_info.jobstate AND jobstates.is_deleted=0','left');
		$this->db->join('categories','categories.id=users_info.category AND categories.is_deleted=0','left');
		$this->db->join('religions','religions.id=users_info.religion AND religions.is_deleted=0','left');
		$this->db->join('genders','genders.id=users_info.gender AND genders.is_deleted=0','left');
		$this->db->join('marital_statues','marital_statues.id=users_info.maritalstatus AND marital_statues.is_deleted=0','left');
		$this->db->join('states as pre_state','pre_state.id=users_info.present_state AND pre_state.is_deleted=0','left');
		$this->db->join('states as per_state','per_state.id=users_info.permanent_state AND per_state.is_deleted=0','left');
		$this->db->join('degrees','degrees.id=users_info.degree AND degrees.is_deleted=0','left');
		$this->db->join('degrees as degree2','degree2.id=users_info.degree2 AND degree2.is_deleted=0','left');
		$this->db->join('degrees as degree3','degree3.id=users_info.degree3 AND degree3.is_deleted=0','left');
		$this->db->where('users_info.is_deleted',0);
		$this->db->where('users_info.id',$user_id);
		$query = $this->db->get();
		return $result = $query->row();
	}

	public function getUserLanguage($user_id=''){
		$this->db->select('language_name,can_read,can_write,can_speak');
		$this->db->from('user_languages');
		$this->db->where('user_id',$user_id);
		$this->db->where('is_deleted',0);
		$query = $this->db->get();
		return $result = $query->result();
	}

	
	public function deleteData($data=array()){
		if($data['ids']){
			$ids = explode(',', $data['ids']);
			$getData = $this->db->where_in('id',$ids)->get('user')->result();
			if($getData){
				foreach ($getData as $key => $value) {
					@unlink($value->profile);
				}
				
			}
			$this->db->where_in('id',$ids)->delete('user');
			return array('status'=>1,'msg'=>'Deleted successfully.');
		} else {
			return array('status'=>2,'msg'=>'Something went wrong,please try again later.');
		}
	}

	public function getPosts(){
		$this->db->select('id,postname,posttitle');
		$this->db->from('posts');
		$this->db->where('is_deleted',0);
		$query = $this->db->get();
		return $result = $query->result();
	}

	public function getJobState(){
		$this->db->select('id,state');
		$this->db->from('jobstates');
		$this->db->where('is_deleted',0);
		$query = $this->db->get();
		return $result = $query->result();
	}

	public function getCentres(){
		$this->db->select('id,name,is_default');
		$this->db->from('centre');
		$this->db->where('status',1);
		$query = $this->db->get();
		return $result = $query->result();
	}

	public function getReportList($params = array()){
		$this->db->select('users_info.application_no, CONCAT(users_info.f_name," ",users_info.l_name) as name , users_info.phone_no, users_info.email_id, jobstates.state as jobstate_name , categories.category as category_name, religions.religion as religion_name, users_info.pancard, users_info.aadharno, users_info.dob,genders.gender as gender_name,  marital_statues.status as maritalstatus_name, users_info.father_name, users_info.mother_name, users_info.spouse_name, users_info.present_addressline1, users_info.present_addressline2, pre_state.state as present_state_name, users_info.present_district, users_info.present_pincode, users_info.permanent_addressline1, users_info.permanent_addressline2, per_state.state as permanent_state_name , users_info.permanent_district, users_info.permanent_pincode,degrees.degree as degree_name ,degree2.degree as degree_name2,degree3.degree as degree_name3, users_info.university,users_info.university2,users_info.university3, users_info.passing_year,users_info.passing_year2,users_info.passing_year3, users_info.marks,users_info.marks2,users_info.marks3,user_credentials.created_at as registration_date');
		$this->db->from('users_info');
		$this->db->join('user_credentials','user_credentials.user_id=users_info.id');
		$this->db->join('jobstates','jobstates.id=users_info.jobstate AND jobstates.is_deleted=0','left');
		$this->db->join('categories','categories.id=users_info.category AND categories.is_deleted=0','left');
		$this->db->join('religions','religions.id=users_info.religion AND religions.is_deleted=0','left');
		$this->db->join('genders','genders.id=users_info.gender AND genders.is_deleted=0','left');
		$this->db->join('marital_statues','marital_statues.id=users_info.maritalstatus AND marital_statues.is_deleted=0','left');
		$this->db->join('states as pre_state','pre_state.id=users_info.present_state AND pre_state.is_deleted=0','left');
		$this->db->join('states as per_state','per_state.id=users_info.permanent_state AND per_state.is_deleted=0','left');
		$this->db->join('degrees','degrees.id=users_info.degree AND degrees.is_deleted=0','left');
		$this->db->join('degrees as degree2','degree2.id=users_info.degree2 AND degree2.is_deleted=0','left');
		$this->db->join('degrees as degree3','degree3.id=users_info.degree3 AND degree3.is_deleted=0','left');
		$this->db->where('users_info.is_deleted',0);
		if(isset($params['keyword']) && $params['keyword']){
			$this->db->where('(users_info.f_name LIKE "%'.$params['keyword'].'%" OR users_info.l_name LIKE "%'.$params['keyword'].'%" OR users_info.phone_no LIKE "%'.$params['keyword'].'%" OR users_info.email_id LIKE "%'.$params['keyword'].'%")');	
		}

		if(isset($params['posts']) && $params['posts']){
			$this->db->join('user_applied_posts','user_applied_posts.user_id=users_info.id AND user_applied_posts.post_id = "'.$params['posts'].'" ' );
		}

		if(isset($params['job_state']) && $params['job_state']){
			$this->db->where('users_info.jobstate',$params['job_state']);
		}

		if(isset($params['centre']) && $params['centre']){
			$this->db->join('user_applied_centre','user_applied_centre.user_id=users_info.id AND user_applied_centre.centre_id = "'.$params['centre'].'" ' );
		}

		if(isset($params['startEnd']) && $params['startEnd']){
			  $explode = explode('-', $params['startEnd']);
			  $starDate = $explode[0];
			  $endDate = $explode[1];
			   $st=date('Y-m-d',strtotime($starDate)).' 00:00:00';
			   $et=date('Y-m-d',strtotime($endDate)).' 23:59:00';
              $this->db->where('users_info.created_at >=',$st);
			  $this->db->where('users_info.created_at <=',$et);
		}
		$query = $this->db->get();
		return $result = $query->result();
	}


}
?>