<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function getUsersData(){
		$this->db->select('user.*');
		$this->db->from('user');
		$this->db->where('usertype','user');
		$query = $this->db->get();
		return $query->num_rows();
	}
	
	public function getAdminsData(){
		$this->db->select('user.*');
		$this->db->from('user');
		$this->db->where('usertype','admins');
		$query = $this->db->get();
		return $query->num_rows();
	}

	
}
?>