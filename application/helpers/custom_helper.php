<?php
  function formatMultipleRowData($data, $unique, $search){
          $feediscounts = [];
          $found;
          foreach($data as $k=>$feediscount){
          $found = 0;
          foreach($feediscounts as $f_k=>$f_h){
             if($feediscount[$unique] == $f_h[$unique]){
             $feediscounts[$f_k][$search][] = $feediscount[$search];
             $found++;
          }
        }
            if($found == 0){
               $feediscounts[$k] = $feediscount;
               unset($feediscounts[$k][$search]);
               $feediscounts[$k][$search][] = $feediscount[$search];
            }
        }
        return $feediscounts; 	
  }

  //************************* Added New
  if(!function_exists('getUserDetails')){ 
   function getUserDetails($user_id='',$column=''){    
    $ci = @get_instance();
    $ci->load->database();
    $ci->db->from('user');
    $ci->db->where('id',$user_id);
    $query = $ci->db->get();
    if($column){
        $row = $query->result_array();
        if($row){
            if($column == 'profile'){
                if($row[0][$column] && file_exists($row[0][$column])){
                    return base_url().$row[0][$column];
                } else {
                    return base_url().'assets/admin/img/user-default.png';
                }
            } else if($column == 'role_manage'){
                return json_decode($row[0][$column],true);
            } else {
                return $row[0][$column];
            }
        } else {
            if($column == 'profile'){
                return base_url().'assets/admin/img/user-default.png';
            } else {
                return false;
            }
            
        }
    } else {
        $row = $query->row();
        return $row;
    }  
}
}

if(!function_exists('getMenus')){ 
   function getMenus($json=array()){    
    $ci = @get_instance();
    $ci->load->database();
    $ci->db->from('admin_menues');
    $ci->db->where_in('codes',$json);
    $ci->db->where('show_sidebar',1);
    $ci->db->where('menu_type','main');
    $ci->db->order_by('ordering','ASC');
    $query = $ci->db->get();
    $row = $query->result_array();
    if($row){
        foreach ($row as $key => $value) {
            $ci->db->from('admin_menues');
            $ci->db->where_in('codes',$json);
            $ci->db->where('parent_id',$value['id']);
            $ci->db->where('show_sidebar',1);
            $ci->db->where('menu_type','sub');
            $ci->db->order_by('ordering','ASC');
            $query = $ci->db->get();
            $row1 = $query->result_array();
            if($row1){
             $row[$key]['submenus'] = $row1; 
            }
             
        }
    }
    return $row;
}
}

if(!function_exists('ManuArrange')){ 
    function ManuArrange(){   
        $ci = @get_instance();
        $query = $ci->db->query('Select * from admin_menues order by ordering');
        $prepare_manu = $query->result_array();
        $result_main = array();
        foreach($prepare_manu as $key => $prepare_manues){
            if($prepare_manues['menu_type'] == 'main'){
                $prepare_manues['sub'] = array();
                array_push($result_main,$prepare_manues);
            }
        }

        foreach($prepare_manu as $key => $value){               
            if($value['parent_id']){
                foreach($result_main as $key => $submanue){
                    if($submanue['id'] == $value['parent_id']){
                        array_push($result_main[$key]['sub'],$value);
                    }
                }
            }
        }
        return $result_main;
    }
}

if(!function_exists('userFileExists')){ 
   function userFileExists($file=''){    
    if($file && file_exists('uploads/user_documents/user_photos/'.$file)){
        return base_url().'uploads/user_documents/user_photos/'.$file;
    } else {
        return base_url().'assets/admin/img/user-default.png';
    }
}
}

if(!function_exists('postFileExists')){ 
   function postFileExists($file_url='',$file=''){    
    if($file && file_exists($file_url)){
        return base_url().$file_url;
    } else {
        return base_url().'assets/admin/img/no-image.jpg';
    }
}
}

if(!function_exists('getSiteSettings')){ 
   function getSiteSettings($column=''){    
    $ci = @get_instance();
    $ci->load->database();
    $ci->db->from('site_setting');
    $query = $ci->db->get();
    $row = $query->row();
    if($column){
        $row = $query->result_array();
        if($column == 'logo'){
            if(file_exists($row[0][$column])){
                return base_url().$row[0][$column];
            } else {
                return base_url().'assets/admin/img/no-image.jpg';
            }
            
        } else if($column == 'banner_image'){
            if(file_exists($row[0][$column])){
                return base_url().$row[0][$column];
            } else {
                return base_url().'assets/admin/img/no-image.jpg';
            }
            
        } else {
            return $row[0][$column];
        }
    } else {
        $row = $query->row();
        return $row;
    }
    
     
}
}

if(!function_exists('getSessionLang')){
    function getSessionLang(){
        $ci = @get_instance();        
        if($ci->session->userdata('site_lang')){
            return $lang = $ci->session->userdata('site_lang'); 
        }else{
            $ci->load->database();
            $query = $ci->db->get_where('languages',array('is_default'=>1))->row();
            return $lang = $query->lang_code; 
        }
    }
}

if(!function_exists('getsitelanguages')){
    function getsitelanguages($type='',$lang_code=''){
        $ci = @get_instance();
        $ci->load->database();
        $ci->db->select('languages.*,(CASE WHEN lang_code="'.$lang_code.'" THEN lang_code="'.$lang_code.'" ELSE 2 END) as lang_ordering');
        $ci->db->from('languages');
        $ci->db->where('site_language',1);
        $ci->db->order_by('lang_ordering','ASC');
        if($type==2){
            if(!empty($lang_code)){
                $ci->db->where('lang_code',$lang_code);
            }else{
                $ci->db->where('is_default',1);
            }            
        }
        $query = $ci->db->get();
        if($type==2){
            $row = $query->row();
        }else{
            $row = $query->result_array();
        }
        return $row;
    }
}

if(!function_exists('getPageDetailsByAlias')){ 
   function getPageDetailsByAlias($alias='',$column=''){    
    $ci = @get_instance();
    $ci->load->database();
    $ci->db->select('pages.*');
    $ci->db->from('pages');
    $ci->db->where('slug',$alias);
    $query = $ci->db->get();
    if($column){
        $row = $query->result_array();
        if($row){
            return $row[0][$column];
        } else {
            return false;
            
        }
    } else {
        $row = $query->row();
        return $row;
    }  
}
}

if(!function_exists('force_ssl')){ 
    function force_ssl() {
        if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != "on") {
            $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            redirect($url);
            exit;
        }
    }
}



// function facebook($data) {
//     $CI =& get_instance();
//     $CI->load->model('fk_model');
//     $token = $CI->fk_model->fk_cookie();
//     $attachment =  array(
//         'access_token'  => $token['access_token'],
//         'message'       => $data['text'],
//         'link'          => $data['link'],
//     );
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL,'https://graph.facebook.com/' . $token['id'] . '/feed');
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
//     curl_setopt($ch, CURLOPT_POST, true);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, $attachment);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  //to suppress the curl output
//     $result = curl_exec($ch);
//     curl_close($ch);
//     }   


?>