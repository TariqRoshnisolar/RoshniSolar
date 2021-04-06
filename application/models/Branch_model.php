<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Branch_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /**
     * This funtion takes id as a parameter and will fetch the record.
     * If id is not provided, then it will fetch all the records form the table.
     * @param int $id
     * @return mixed
     */

    public function add($data) {
      if($this->db->insert('branches', $data)){
        return true;
      }
      else{
        return false;
      }
    }

   public function getalldata(){

    $query = $this->db->where('is_deleted', 0)->get('branches');
    if($query){
        return $query->result_array();
    }
    else{
      return false;
    }
   }

   public function getdatabyid($id){

    $query = $this->db->where('id',$id)->where('is_deleted', 0)->get('branches');
    if($query){
        return $query->row_array();
    } 
    else{
      return false;
    }   
   }

   public function updatebyid($id, $branch_data){

    $query = $this->db->where('id',$id)->update('branches', $branch_data);

    if($query){
        return true;
    }
    else{
        return false;
    }
   }

   public function deletedatabyid($id){
       $query = $this->db->where('id',$id)->update('branches', ['is_deleted'=>1]);

    if($query){
        return true;
    }
    else{
        return false;
     }
   }


}
