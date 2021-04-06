<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Communicate_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->current_session = $this->setting_model->getCurrentSession();
    }

    public function addsmstype($data){
        $insertsmstype = $this->db->insert('sms_types', $data);
        if($insertsmstype){
            return true;
        }else{
            return false;
        }
    }

    public function getsmstype($id=null){
        if($id != null){
        $query = $this->db->where('status',1)->where('id',$id)->order_by('title')->get('sms_types');
        }
        else{
            $query = $this->db->where('status',1)->order_by('title')->get('sms_types');
        }
        
        if($query){
            $getsmstype = $query->result_array();
            return $getsmstype;
        }
    }

    public function updatesmstype($data, $id){
       $query = $this->db->where('id', $id)->update('sms_types', $data);
       if($query){
           return true; 
       }
       else{
           return false;
       }
    }

    public function deletesmstype($id){
      $query = $this->db->where('id', $id)->delete('sms_types');
      if($query){
        return true; 
      }
      else{
        return false;
      }
    }



    

    

    

}
