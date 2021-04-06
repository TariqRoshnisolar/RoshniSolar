<?php
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');
        $siteLang = $ci->session->userdata('site_lang');        
        $pagename = $ci->session->userdata('page_name');
        if ($siteLang) {            
            $ci->lang->load('common',$siteLang);
            if(!empty($pagename)){
               $ci->lang->load($pagename,$siteLang); 
           }            
        } else {
            $ci->lang->load('common','en');
            if(!empty($pagename)){
              $ci->lang->load($pagename,'en'); 
            } 
        }
    }

    // function front_initialize() {        
    //     $ci =& get_instance();
    //     $ci->load->helper('language');
    //     $siteLang = $ci->session->userdata('site_front_lang');        
    //     $pagename = $ci->session->userdata('page_name');
    //     if ($siteLang) {            
    //         $ci->lang->load('common',$siteLang);
    //         if(!empty($pagename)){
    //            $ci->lang->load($pagename,$siteLang); 
    //        }            
    //     } else {
    //         $userID = $ci->session->userdata('user_id');
    //         $ci->load->database();
    //         $query = $ci->db->get_where('users',array('id'=>$userID))->row();            
    //         if(isset($query->default_lang) && !empty($query->default_lang)){
    //             $ci->lang->load('common',$query->default_lang);
    //             if(!empty($pagename)){
    //                $ci->lang->load($pagename,$query->default_lang); 
    //             }
    //         }else{
    //             $ci->lang->load('common','en');
    //             if(!empty($pagename)){
    //               $ci->lang->load($pagename,'en'); 
    //             }
    //         }           
            
    //     }
    // }
}