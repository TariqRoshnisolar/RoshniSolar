<?php



class Payment_model extends CI_Model {



    function __construct() {

        parent::__construct();

    }



    public function save($data, $student_id){
    	$query = $this->db->where('id', $student_id)->update('users_info', $data);
    	if($query){
    		return true;
    	}
    	else{
    		return false;
    	}
    }

    public function registrationamt($category_id=''){
        $response = false;
        $query = $this->db->select('amount')->from('registration_amt')->where('is_deleted', 0)->where('find_in_set("'.$category_id.'", apply_for_category) <> 0')->get();
        if($query){
            if($query->num_rows() > 0){
                $response = $query->row_array()['amount'];
            }
        }
        return $response;
    }    

}



?>