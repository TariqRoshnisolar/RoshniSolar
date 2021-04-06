<?php

class Staff_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get($id = null) {

        $this->db->select('staff.*,roles.name as user_type,roles.id as role_id')->from('staff')->join("staff_roles", "staff_roles.staff_id = staff.id", "left")->join("roles", "staff_roles.role_id = roles.id", "left");
        

        if ($id != null) {
            $this->db->where('staff.id', $id);
        } else {
            $this->db->where('staff.is_active', 1);
            $this->db->order_by('staff.id');
        }
        $query = $this->db->get();
        if ($id != null) {
            return $query->row_array();
        } else {
            return $query->result_array();
        }
    }

    public function getAll($id = null, $is_active = null) {

        $this->db->select("staff.*,roles.id as role_id, roles.name as role");
        $this->db->from('staff');
        $this->db->join('staff_roles', "staff_roles.staff_id = staff.id", "left");
        $this->db->join('roles', "roles.id = staff_roles.role_id", "left");
        $this->db->join('department', "department.id = staff.department", "left");




        if ($id != null) {
            $this->db->where('staff.id', $id);
        } else {
            if ($is_active != null) {

                $this->db->where('staff.is_active', $is_active);
            }
            $this->db->order_by('staff.id');
        }
        $query = $this->db->get();
        if ($id != null) {
            return $query->row_array();
        } else {
            return $query->result_array();
        }
    }

    public function add($data) {

        if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('staff', $data);
        } else {
            $this->db->insert('staff', $data);
            return $this->db->insert_id();
        }
    }

    public function update($data) {
        $this->db->where('id', $data['id']);
        $query = $this->db->update('staff', $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function getByVerificationCode($ver_code) {
        $condition = "verification_code =" . "'" . $ver_code . "'";
        $this->db->select('*');
        $this->db->from('staff');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function batchInsert($data, $roles = array(), $leave_array = array()) {

        $this->db->trans_start();
        $this->db->trans_strict(FALSE);

        $this->db->insert('staff', $data);
        $staff_id = $this->db->insert_id();
        $roles['staff_id'] = $staff_id;
        $this->db->insert_batch('staff_roles', array($roles));

        if(!empty($leave_array)){
        foreach ($leave_array as $key => $value) {
            $leave_array[$key]['staff_id'] = $staff_id;
        }

        $this->db->insert_batch('staff_leave_details', $leave_array);
        }
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {

            $this->db->trans_rollback();
            return FALSE;
        } else {

            $this->db->trans_commit();
            return $staff_id;
        }
    }



    public function remove($id) {

        $this->db->where('id', $id);
        $this->db->delete('staff');


        $this->db->where('staff_id', $id);
        $this->db->delete('staff_payslip');

        $this->db->where('staff_id', $id);
        $this->db->delete('staff_leave_request');

        $this->db->where('staff_id', $id);
        $this->db->delete('staff_attendance');
    }



    public function valid_employee_id($str) {
        $name = $this->input->post('name');
        $id = $this->input->post('employee_id');
        $staff_id = $this->input->post('editid');

        if((!isset($id)))  {
            $id = 0;
        }
        if (!isset($staff_id)) {
            $staff_id = 0;
        }

        if ($this->check_data_exists($name, $id, $staff_id)) {
            $this->form_validation->set_message('username_check', 'Record already exists');
            return FALSE;
           
        } else {
           
            return TRUE;
        }
       
    }

    function check_data_exists($name, $id, $staff_id) {

        if ($staff_id != 0) {
            $data = array('id != ' => $staff_id, 'employee_id' => $id);
            $query = $this->db->where($data)->get('staff');
            if ($query->num_rows() > 0) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {

            $this->db->where('employee_id', $id);
            $query = $this->db->get('staff');
            if ($query->num_rows() > 0) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }

    public function valid_email_id($str) {
        $email = $this->input->post('email');
        $id = $this->input->post('employee_id');
        $staff_id = $this->input->post('editid');

        if (!isset($id)) {
            $id = 0;
        }
        if (!isset($staff_id)) {
            $staff_id = 0;
        }

        if ($this->check_email_exists($email, $id, $staff_id)) {
            $this->form_validation->set_message('check_exists', 'Email already exists');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function check_email_exists($email, $id, $staff_id) {

        if ($staff_id != 0) {
            $data = array('id != ' => $staff_id, 'email' => $email);
            $query = $this->db->where($data)->get('staff');
            if ($query->num_rows() > 0) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {

            $this->db->where('email', $email);
            $query = $this->db->get('staff');
            if ($query->num_rows() > 0) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }

    public function getStaffRole($id = null) {

         $userdata = $this->customlib->getUserData();
        if($userdata["role_id"] != 7){
            $this->db->where("id !=", 7);
        }

        $this->db->select('roles.id,roles.name as type')->from('roles');
        if ($id != null) {
            $this->db->where('id', $id);
        } else {
            $this->db->order_by('id');
        }
        $this->db->where("is_active", "yes");
        $query = $this->db->get();
        if ($id != null) {
            return $query->row_array();
        } else {
            return $query->result_array();
        }
    }


    function getEmployee($role, $active = 1) {

        $query = $this->db->select("staff.*,roles.name as user_type")->join('staff_roles', "staff_roles.staff_id = staff.id", "left")->join('roles', "roles.id = staff_roles.role_id", "left")->where("staff.is_active", $active)->where("roles.name", $role)->get("staff");

        return $query->result_array();
    }

    function getEmployeeByRoleID($role, $active = 1) {

        $query = $this->db->select("staff.*,roles.id as role_id, roles.name as role")->join('staff_roles', "staff_roles.staff_id = staff.id", "left")->join('roles', "roles.id = staff_roles.role_id", "left")->where("staff.is_active", $active)->where("roles.id", $role)->get("staff");


        return $query->result_array();
    }



    function getStaffId($empid) {

        $data = array('employee_id' => $empid);
        $query = $this->db->select('id')->where($data)->get("staff");


        return $query->row_array();
    }

    function getProfile($id) {

        $this->db->select('staff.*,staff_roles.role_id, roles.name as user_type');
        $this->db->join("staff_roles", "staff_roles.staff_id = staff.id", "left");
        $this->db->join("roles", "staff_roles.role_id = roles.id", "left");
        $this->db->where("staff.id", $id);
       // $this->db->where("staff.is_active", 1);

        $this->db->from('staff');
        $query = $this->db->get();

        return $query->row_array();
    }

    public function searchFullText($searchterm, $active) {

        $query = $this->db->query("SELECT `staff`.*, `roles`.`name` as user_type  FROM `staff` LEFT JOIN `staff_roles` ON `staff_roles`.`staff_id` = `staff`.`id` LEFT JOIN `roles` ON `staff_roles`.`role_id` = `roles`.`id` WHERE  `staff`.`is_active` = '$active' and (`staff`.`name` LIKE '%$searchterm%' ESCAPE '!' OR `staff`.`surname` LIKE '%$searchterm%' ESCAPE '!' OR `staff`.`employee_id` LIKE '%$searchterm%' ESCAPE '!' OR `staff`.`local_address` LIKE '%$searchterm%' ESCAPE '!'  OR `staff`.`contact_no` LIKE '%$searchterm%' ESCAPE '!' OR `staff`.`email` LIKE '%$searchterm%' ESCAPE '!')");

        return $query->result_array();
    }

    public function searchByEmployeeId($employee_id) {

        $this->db->select('*');
        $this->db->from('staff');
        $this->db->like('staff.employee_id', $employee_id);
        $this->db->like('staff.is_active', 1);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function disablestaff($id) {

        $data = array('is_active' => 0);

        $query = $this->db->where("id", $id)->update("staff", $data);
    }

    public function enablestaff($id) {

        $data = array('is_active' => 1);

        $query = $this->db->where("id", $id)->update("staff", $data);
    }

    public function getByEmail($email, $email_type) {
        $this->db->select('*');
        $this->db->from('staff');
        if($email_type != null){
            $this->db->where($email_type, $email);
        }
        //$this->db->where('email', $email);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return FALSE;
        }
    }

    public function checkLogin($data, $email_type) {


        $record = $this->getByEmail($data['email'], $email_type);
        if ($record) {
            $pass_verify = $this->enc_lib->passHashDyc($data['password'], $record->password);
            if ($pass_verify) {
                $roles = $this->staffroles_model->getStaffRoles($record->id);

                $record->roles = array($roles[0]->name => $roles[0]->role_id, 'staff_role_id'=> $roles[0]->staff_role_id);

                return $record;
            }
        }
        return false;
    }

    function getStaffbyrole($id) {

        $this->db->select('staff.*,staff_roles.role_id, department.department_name as department,roles.name as user_type');
        $this->db->join("staff_roles", "staff_roles.staff_id = staff.id", "left");
        $this->db->join("roles", "staff_roles.role_id = roles.id", "left");
        $this->db->where("staff_roles.role_id", $id);
        $this->db->where("staff.is_active", "1");
        $this->db->from('staff');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function searchNameLike($searchterm) {
        $this->db->select('staff.*')->from('staff');
        $this->db->group_start();
        $this->db->like('staff.name', $searchterm);
        $this->db->group_end();
        $this->db->order_by('staff.id');

        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_role($role_data) {

        $this->db->where("staff_id", $role_data["staff_id"])->update("staff_roles", $role_data);
    }

    public function getstaffcontactno($staffid){
       $query = $this->db->select('contact_no')->where('id', $staffid)->get('staff');
       if($query){
          $contact_no = $query->row_array();
          if( count($contact_no) > 0 ){
             $contact_no = $contact_no['contact_no'];
             return $contact_no;
          }
          else{
            return false;
          }
       }
       else{
        return false;
       }
    }

    public function getcredentialbyemail($email){

    $query = $this->db->query("select name,surname,email, username, cleanpass from staff where email='$email'");
       
       if($query){
         $result = $query->row_array();
         if( count($result) > 0 ){
            return $result;
         }
         else{
            return false;
         }
       }

    }

    public function getcredentialbyphone($phoneno){

    $query = $this->db->query("select name,surname,email, username, cleanpass from staff where contact_no='$phoneno'");
       
       if($query){
         $result = $query->row_array();
         if( count($result) > 0 ){
            return $result;
         }
         else{
            return false;
         }
       }

    }

}

?>