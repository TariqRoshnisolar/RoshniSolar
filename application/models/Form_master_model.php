<?php
    
    class Form_master_model extends CI_Model {
        
        
        
        function __construct() {
            
            parent::__construct();
            
        }
        
        public function getposts(){
            $response = false;
            $query = $this->db->query("SELECT id, postname, posttitle FROM posts WHERE is_deleted=0");
            if($query){
                if($query->num_rows() > 0){
                    $response = $query->result_array();
                }
            }
            return $response;
        }  
        
        public function getjobstates(){
            $response = false;
            $query = $this->db->query("SELECT id, state FROM jobstates WHERE is_deleted=0");
            if($query){
                if($query->num_rows() > 0){
                    $response = $query->result_array();
                }
            }
            return $response;
        }  
        
        public function getcategories(){
            $response = false;
            $query = $this->db->query("SELECT id, category FROM categories WHERE is_deleted=0");
            if($query){
                if($query->num_rows() > 0){
                    $response = $query->result_array();
                }
            }
            return $response;
        }
        
        public function getreligions(){
            $response = false;
            $query = $this->db->query("SELECT id, religion FROM religions WHERE is_deleted=0");
            if($query){
                if($query->num_rows() > 0){
                    $response = $query->result_array();
                }
            }
            return $response;
        }  
        
        public function getgenders(){
            $response = false;
            $query = $this->db->query("SELECT id, gender FROM genders WHERE is_deleted=0");
            if($query){
                if($query->num_rows() > 0){
                    $response = $query->result_array();
                }
            }
            return $response;
        }  
        
        public function getmaritalstatues(){
            $response = false;
            $query = $this->db->query("SELECT id, status FROM marital_statues WHERE is_deleted=0");
            if($query){
                if($query->num_rows() > 0){
                    $response = $query->result_array();
                }
            }
            return $response;
        } 
        
        public function getstates(){
            $response = false;
            $query = $this->db->query("SELECT id, state FROM states WHERE is_deleted=0");
            if($query){
                if($query->num_rows() > 0){
                    $response = $query->result_array();
                }
            }
            return $response;
        }
        
        public function getdegrees(){
            $response = false;
            $query = $this->db->query("SELECT id, degree FROM degrees WHERE is_deleted=0");
            if($query){
                if($query->num_rows() > 0){
                    $response = $query->result_array();
                }
            }
            return $response;
        }  
        
        public function getcentres(){
            $response = false;
            $query = $this->db->query("SELECT id, name,is_default FROM centre WHERE is_deleted=0 AND status=1");
            if($query){
                if($query->num_rows() > 0){
                    $response = $query->result_array();
                }
            }
            return $response;
        }
        
        public function getintrest_category(){
            $response = false;
            $query = $this->db->query("SELECT id, name FROM intrest_category WHERE status=1");
            if($query){
                if($query->num_rows() > 0){
                    $response = $query->result_array();
                }
            }
            return $response;
        }
       /*  public function getdistributor($id){
            $response = false;
            $query = $this->db->query("SELECT id, ed_name FROM electricity_distribution WHERE status=1 and state_id = '".$id."'");
            if($query){
                if($query->num_rows() > 0){
                    $response = $query->result_array();
                }
            }
            return $response;
        } */
        /* public function getportal_link($id){
            $response = false;
            $query = $this->db->query("SELECT company_url FROM electricity_distribution WHERE status=1 and id = '".$id."'");
            if($query){
                if($query->num_rows() > 0){
                    $response = $query->row_array();
                }
            }
            return $response;
        }  */
        public function getcities($id){
            $response = false;
            $query = $this->db->query("SELECT id,name FROM cities WHERE  state_id = '".$id."'");
            if($query){
                if($query->num_rows() > 0){
                    $response = $query->result_array();
                }
            }
            return $response;
        }
         public function getstateby_id($id){
            $response = false;
            $query = $this->db->query("SELECT state FROM states WHERE is_deleted=0 and id = '".$id."'");
            if($query){
                if($query->num_rows() > 0){
                    $response = $query->row_array();
                }
            }
            return $response;
        }  
         public function getcityby_id($id){
            $response = false;
            $query = $this->db->query("SELECT name FROM cities WHERE  id = '".$id."'");
            if($query){
                if($query->num_rows() > 0){
                    $response = $query->row_array();
                }
            }
            return $response;
        } 
         public function getcategory_id($id){
            $response = false;
            $query = $this->db->query("SELECT name FROM intrest_category WHERE  id = '".$id."'");
            if($query){
                if($query->num_rows() > 0){
                    $response = $query->row_array();
                }
            }
            return $response;
        } 
    }
    
    
    
?>