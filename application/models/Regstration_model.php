<?php

class Regstration_model extends CI_Model {



    function __construct() {

        parent::__construct();

    }

    public function get($user_id){
        $response = false;
        $query = $this->db->query("SELECT users_info.application_no, users_info.f_name, users_info.m_name, users_info.l_name, users_info.phone_no, users_info.is_mobile_varified, users_info.email_id, users_info.is_email_varified,  users_info.acceptpolicy, users_info.is_peradderss_same, users_info.agree_preview, users_info.payment_status, users_info.category, categories.category as category_name, users_info.religion, religions.religion as religion_name, users_info.pancard, users_info.aadharno, users_info.dob, users_info.gender, genders.gender as gender_name, users_info.maritalstatus, marital_statues.status as maritalstatus_name, users_info.father_name, users_info.mother_name, users_info.spouse_name, users_info.present_addressline1, users_info.present_addressline2, users_info.present_state, pre_state.state as present_state_name, users_info.present_district, users_info.present_pincode, users_info.permanent_addressline1, users_info.permanent_addressline2, users_info.permanent_state, per_state.state as permanent_state_name , users_info.permanent_district, users_info.permanent_pincode, users_info.degree,users_info.degree2,users_info.degree3, degrees.degree as degree_name ,degrees2.degree as degree_name2 ,degrees3.degree as degree_name3 , users_info.university,users_info.university2,users_info.university3, users_info.passing_year,users_info.passing_year2,users_info.passing_year3, users_info.marks,users_info.marks2,users_info.marks3, users_info.result,users_info.result2,users_info.result3, users_info.have_certificates, users_info.photo, users_info.signature,users_info.marksheet, users_info.registration_step,users_info.payment_order_id,users_info.payment_tracking_id,users_info.registration_amt 
FROM users_info 
INNER JOIN user_credentials ON (user_credentials.user_id=users_info.id and user_credentials.is_deleted=0)
LEFT JOIN categories ON (categories.id=users_info.category and categories.is_deleted=0) 
LEFT JOIN religions ON (religions.id=users_info.religion and religions.is_deleted=0) 
LEFT JOIN genders ON (genders.id=users_info.gender and genders.is_deleted=0) 
LEFT JOIN marital_statues ON (marital_statues.id=users_info.maritalstatus and marital_statues.is_deleted=0) 
LEFT JOIN states pre_state ON (pre_state.id=users_info.present_state and pre_state.is_deleted=0)
LEFT JOIN states per_state ON (per_state.id=users_info.permanent_state and per_state.is_deleted=0)
LEFT JOIN degrees ON (degrees.id=users_info.degree and degrees.is_deleted=0)
LEFT JOIN degrees as degrees2 ON (degrees2.id=users_info.degree2 and degrees2.is_deleted=0)
LEFT JOIN degrees as degrees3 ON (degrees3.id=users_info.degree3 and degrees3.is_deleted=0)
WHERE users_info.is_deleted=0 
and users_info.id=$user_id");
        if($query){
            if($query->num_rows() > 0){
                $response = $query->row_array();
            }
        }
        return $response;
    }

    public function getallpaymentstatus(){
        $response = false;
        $query = $this->db->query("SELECT DISTINCT payment_status FROM users_info");
        if($query){
            if($query->num_rows() > 0){
                $response = $query->result_array();
            }
        }
        return $response;
    }

    public function getallrecords($payment_mode='', $payment_status='', $registration_steps=''){
        $response = false;
        $sql = "SELECT users_info.id as user_id, users_info.application_no, users_info.f_name, users_info.m_name, users_info.l_name, users_info.phone_no, users_info.is_mobile_varified, users_info.email_id, users_info.is_email_varified, users_info.jobstate, jobstates.state as jobstate_name , users_info.acceptpolicy, users_info.is_peradderss_same, users_info.agree_preview, users_info.payment_mode, users_info.payment_status, users_info.category, categories.category as category_name, users_info.religion, religions.religion as religion_name, users_info.pancard, users_info.aadharno, users_info.dob, users_info.gender, genders.gender as gender_name, users_info.maritalstatus, marital_statues.status as maritalstatus_name, users_info.father_name, users_info.mother_name, users_info.spouse_name, users_info.present_addressline1, users_info.present_addressline2, users_info.present_state, pre_state.state as present_state_name, users_info.present_district, users_info.present_pincode, users_info.permanent_addressline1, users_info.permanent_addressline2, users_info.permanent_state, per_state.state as permanent_state_name , users_info.permanent_district, users_info.permanent_pincode, users_info.degree, degrees.degree as degree_name , users_info.university, users_info.passing_year, users_info.marks, users_info.result, users_info.have_certificates, users_info.photo, users_info.signature, users_info.registration_step, users_info.created_at, users_info.updated_at, users_info.status
        FROM users_info 
        INNER JOIN user_credentials ON (user_credentials.user_id=users_info.id and user_credentials.is_deleted=0) 
        LEFT JOIN jobstates ON (jobstates.id=users_info.jobstate and jobstates.is_deleted=0) 
        LEFT JOIN categories ON (categories.id=users_info.category and categories.is_deleted=0) 
        LEFT JOIN religions ON (religions.id=users_info.religion and religions.is_deleted=0) 
        LEFT JOIN genders ON (genders.id=users_info.gender and genders.is_deleted=0) 
        LEFT JOIN marital_statues ON (marital_statues.id=users_info.maritalstatus and marital_statues.is_deleted=0) 
        LEFT JOIN states pre_state ON (pre_state.id=users_info.present_state and pre_state.is_deleted=0)
        LEFT JOIN states per_state ON (per_state.id=users_info.permanent_state and per_state.is_deleted=0)
        LEFT JOIN degrees ON (degrees.id=users_info.degree and degrees.is_deleted=0)
        WHERE users_info.is_deleted=0 ";

        if($payment_mode != ''){
            $sql .= "AND users_info.payment_mode='$payment_mode' ";
        }

        if($payment_status != ''){
            $sql .= "AND users_info.payment_status='$payment_status' ";   
        }

        if($registration_steps != ''){
            $sql .= "AND users_info.registration_step='$registration_steps' ";
        }

        $sql .= "ORDER BY users_info.id DESC";
        $query = $this->db->query($sql);



        if($query){
            if($query->num_rows() > 0){
                $response = $query->result_array();
                foreach($response as $key=>$user){
                    $response[$key]['appliedposts'] = $this->getuserappliedposts($user['user_id']);
                    $response[$key]['userlanguages'] = $this->getuserlanguages($user['user_id']);
                }                
            }
        }
        return $response;        
    }

    public function getuserregistrationstep($user_id){
        $response = false;
        $query = $this->db->query("SELECT users_info.registration_step
            FROM users_info
            WHERE users_info.id=$user_id
            AND users_info.is_deleted=0");
        if($query){
            if($query->num_rows() > 0){
                $response = $query->row_array()['registration_step'];
            }
        }
        return $response;        
    } 

    public function ismobileregistered($phone_no){
        $response = false;
        $query = $this->db->query("SELECT users_info.id
            FROM users_info
            WHERE users_info.phone_no='$phone_no'
            AND users_info.is_deleted=0");
        if($query){
            if($query->num_rows() > 0){
                $response = true;
            }
        }
        return $response;        
    }

    public function getuserbymobileno($phone_no){
        $response = false;
        $query = $this->db->query("SELECT users_info.id
            FROM users_info
            WHERE users_info.phone_no='$phone_no'
            AND users_info.is_deleted=0");
        if($query){
            if($query->num_rows() > 0){
                $response = $query->row_array()['id'];
            }
        }
        return $response;        
    }    

    public function updatepassword($user_id, $phone_no, $password){
        $response = false;
        $query = $this->db->query("UPDATE user_credentials SET password=md5('$password') WHERE user_id=$user_id");
        if($query){
            $response = true;
        }
        return $response;        
    }          

    public function getuserappliedposts($user_id){
        $response = false;
        $query = $this->db->query("SELECT posts.id as post_id, posts.postname
                FROM user_applied_posts
            INNER JOIN posts ON (user_applied_posts.post_id=posts.id and posts.is_deleted=0)
            WHERE user_applied_posts.user_id=$user_id
            AND user_applied_posts.is_deleted=0");
        if($query){
            if($query->num_rows() > 0){
                $response = $query->result_array();
            }
        }
        return $response;        
    }
    
    public function getuserappliedcentre($user_id){
        $response = false;
        $query = $this->db->query("SELECT user_applied_centre.centre_id as id, centre.name
                FROM user_applied_centre
            INNER JOIN centre ON (user_applied_centre.centre_id=centre.id and centre.is_deleted=0)
            WHERE user_applied_centre.user_id=$user_id
            AND user_applied_centre.is_deleted=0");
        if($query){
            if($query->num_rows() > 0){
                $response = $query->result_array();
            }
        }
        return $response;
    }

    public function getuserappliedJobState($user_id){
        $response = false;
        $query = $this->db->query("SELECT user_job_state.state_id as id, jobstates.state
                FROM user_job_state
            INNER JOIN jobstates ON (user_job_state.state_id=jobstates.id and jobstates.is_deleted=0)
            WHERE user_job_state.user_id=$user_id
            AND user_job_state.is_deleted=0");
        if($query){
            if($query->num_rows() > 0){
                $response = $query->result_array();
            }
        }
        return $response;
    }

    public function getuserlanguages($user_id){
        $response = false;
        $query = $this->db->query("SELECT user_languages.language_name, user_languages.can_read, user_languages.can_write, user_languages.can_speak
                FROM user_languages
            WHERE user_languages.user_id=$user_id
            AND user_languages.is_deleted=0");
        if($query){
            if($query->num_rows() > 0){
                $response = $query->result_array();
            }
        }
        return $response;        
    }

    public function getusemobilenumber($user_id){
        $response = false;
        $query = $this->db->query("SELECT users_info.phone_no
                FROM users_info
            WHERE users_info.id=$user_id
            AND users_info.is_deleted=0");
        if($query){
            if($query->num_rows() > 0){
                $response = $query->row_array()['phone_no'];
            }
        }
        return $response;        
    }    

    public function user_authenticate($phone_no, $password){
        $response = false;
        $query = $this->db->query("SELECT users_info.id, users_info.application_no, users_info.f_name, users_info.m_name, users_info.l_name, users_info.phone_no, users_info.is_mobile_varified, users_info.email_id, users_info.is_email_varified, users_info.registration_step FROM users_info INNER JOIN user_credentials ON (user_credentials.user_id=users_info.id and user_credentials.is_deleted=0) WHERE users_info.is_deleted=0 and users_info.status=0 and user_credentials.phone_no=$phone_no and user_credentials.password=md5('$password')");
        if($query){
            if($query->num_rows() > 0){
                $response = $query->row_array();
            }
        }
        return $response;
    }

    public function add($data, $password) {

        if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('users_info', $data);
        } else {
            $this->db->trans_begin();
            $query = $this->db->insert('users_info', $data);

            if($query){
                $id = $this->db->insert_id();
                $application_no = 'ROSSOL'.str_pad($id, 6, 150000, STR_PAD_LEFT);
                $phone_no = $data['phone_no'];
                $created_at = $data['created_at'];
                $created_by = $data['created_by'];
                $insert_applicationno = $this->db->where('id', $id)->update('users_info', ['application_no'=>$application_no]);
                $insert_credentials = $this->db->query("INSERT INTO user_credentials (user_id, phone_no, password, created_at, created_by) VALUES('$id', '$phone_no', md5('$password'), '$created_at', '$created_by')");

                // $emaildata['phone'] = $phone_no;
                // $emaildata['password'] = $password;
                // $this->email->from('surveyindia@mailinator.com','Surveyindia');
                // $this->email->to($data['email_id']);
                // $this->email->set_mailtype('html');
                // $this->email->subject('User Signup email');
                // $body = $this->load->view('email/signup_email_template',$emaildata,TRUE);
                // $this->email->message($body);
                // $mail = $this->email->send();

            }
            if( $this->db->trans_status() === false ){
                $this->db->trans_rollback();
                return false;
            }
            else{
                $this->db->trans_commit();
                return ['user_id'=>$id, 'application_no'=>$application_no];
            }
        }
    }

    public function uniquemobileno($phone_no){
        $query = $this->db->where('phone_no', $phone_no)->where('is_deleted', 0)->get('users_info');
        if($query){
            if($query->num_rows() > 0){
                return false;
            }
        }
        return true;
    }

    public function uniqueemail($email_id){
        $query = $this->db->where('email_id', $email_id)->where('is_deleted', 0)->get('users_info');
        if($query){
            if($query->num_rows() > 0){
                return false;
            }
        }
        return true;
    } 

    public function updatebasicdetails($data, $user_id, $selected_posts,$selected_centre,$jobstate){
        $applied_posts = [];
        foreach($selected_posts as $post){
            $applied_posts[] = ['user_id'=>$user_id ,'post_id'=>$post];
        }
        $applied_centre = [];
        foreach($selected_centre as $centre){
            $applied_centre[] = ['user_id'=>$user_id ,'centre_id'=>$centre];
        }
        $applied_jobstate = [];
        foreach($jobstate as $centre){
            $applied_jobstate[] = ['user_id'=>$user_id ,'state_id'=>$centre];
        }
        $this->db->trans_begin();
        $query1 = $this->db->where('id', $user_id)->update('users_info', $data);
        $query2 = $this->db->where('user_id', $user_id)->update('user_applied_posts', ['is_deleted'=>1]);
        $query3 = $this->db->insert_batch('user_applied_posts', $applied_posts);
        $query4 = $this->db->where('user_id', $user_id)->delete('user_applied_centre');
        $query5 = $this->db->insert_batch('user_applied_centre', $applied_centre);
        $query6 = $this->db->where('user_id', $user_id)->delete('user_job_state');
        $query7 = $this->db->insert_batch('user_job_state', $applied_jobstate);
        if($this->db->trans_status()=== false){
            $this->db->trans_rollback();
            return false;
        }
        else{
            $this->db->trans_commit();
            return true;            
        }
    }

    public function updatequalification($data, $user_id, $users_languages){
        $this->db->trans_begin();
        $query1 = $this->db->where('id', $user_id)->update('users_info', $data);
        $query2 = $this->db->where('user_id', $user_id)->update('user_languages', ['is_deleted'=>1]);
        if(count($users_languages) > 0){
        $user_languages = [];
        foreach($users_languages as $language){
            $user_languages[] = ['user_id'=>$user_id ,'language_name'=>$language['language_name'], 'can_read'=>$language['can_read'], 'can_write'=>$language['can_write'], 'can_speak'=>$language['can_speak']];
        }
        $query3 = $this->db->insert_batch('user_languages', $user_languages);
        }        
        if($this->db->trans_status()=== false){
            $this->db->trans_rollback();
            return false;
        }
        else{
            $this->db->trans_commit();
            return true;            
        }
    } 

    public function uploaddocs($data, $user_id){
        $query = $this->db->where('id', $user_id)->update('users_info', $data);
        if($query){
            return true;
        }
        else{
            return false;
        }
    }

    public function updatepreviewagree($data, $user_id){
        $query = $this->db->where('id', $user_id)->update('users_info', $data);
        if($query){
            return true;
        }
        else{
            return false;
        }
    }

    public function changeuserstatus($user_id, $status){
        $data = ['status'=>$status];
        $query = $this->db->where('id', $user_id)->update('users_info', $data);
        return $query;
        if($query){
            return true;
        }
        else{
            return false;
        }
    }                 

}



?>