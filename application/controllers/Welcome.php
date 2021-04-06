<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Front_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->config('form-builder');
        $this->load->library(array('mailer', 'form_builder'));
        $this->load->model(array('frontcms_setting_model'));
        $this->load->library('Ajax_pagination');
        $this->banner_content = $this->config->item('ci_front_banner_content');
        $this->partners_content = $this->config->item('ci_front_partners_content');
        $this->header_partners_content = $this->config->item('ci_front_header_partners_content');
        $this->perPage = 12;
        $ban_notice_type = $this->config->item('ci_front_notice_content');
        // $this->data['banner_notices'] = $this->cms_program_model->getByCategory($ban_notice_type, array('start' => 0, 'limit' => 5));
        $this->data['banner_notices'] = $this->cms_program_model->getNoticeByDate();
        $this->data['updates'] = $this->cms_program_model->getUpdatesByDate();
        $this->data['slider_gallery'] = $this->cms_program_model->getSilderImages();
        $this->data['branches_list'] = $this->branch_model->getalldata();
        $this->data['partners_list'] = $this->cms_program_model->getSilderImages();
        $header_partner_list = $this->cms_program_model->getByCategory($this->header_partners_content);
        if (!empty($header_partner_list)) {
            $this->data['header_partner_images'] = $this->cms_program_model->front_cms_program_photos($header_partner_list[0]['id']);
        } 
                
    }

    public function show_404() {
        $this->load->view('errors/error_message');
    }

    public function index() {
        //redirect('index.php/form');
        $data = array('viewPage'=>'home/index','jsFiles'=>array('cms'),'activeMenus'=>array('home'));
        $this->load->view('front/template/default',$data);
    }

   public function page($slug) {
        $page = $this->cms_page_model->getBySlug($slug);
        if (!$page) {
            $this->data['page'] = $this->cms_page_model->getBySlug('404-page');
        } else {
            $this->data['page'] = $this->cms_page_model->getBySlug($slug);
        }

        $this->data['listMenus'] = $this->cms_menuitems_model->getSubMenu($slug);

        if ($page['is_homepage']==1) {
            redirect('/');
        }
        $this->data['active_menu'] = $slug;
        $this->data['page_side_bar'] = $this->data['page']['sidebar'];
        $this->data['page_content_type'] = "";
        if (!empty($this->data['page']['category_content'])) {
            $content_array = $this->data['page']['category_content'];
            reset($content_array);
            $first_key = key($content_array);
            $totalRec = count($this->cms_program_model->getByCategory($content_array[$first_key]));
            $config['target'] = '#postList';
            $config['base_url'] = base_url() . 'welcome/ajaxPaginationData';
            $config['total_rows'] = $totalRec;
            $config['per_page'] = $this->perPage;
            $config['link_func'] = 'searchFilter';
            $this->ajax_pagination->initialize($config);
            //get the posts data
            $this->data['page']['category_content'][$first_key] = $this->cms_program_model->getByCategory($content_array[$first_key], array('limit' => $this->perPage));
            $this->data['page_content_type'] = $content_array[$first_key];
            //load the view
        }
        $this->data['page_form'] = false;

        if (strpos($page['description'], '[form-builder:') !== false) {
            $this->data['page_form'] = true;
            $start = '[form-builder:';
            $end = ']';
            // echo $page['description'];
            $form_name = $this->customlib->getFormString($page['description'], $start, $end);

            $form = $this->config->item($form_name);

            $this->data['form_name'] = $form_name;
            $this->data['form'] = $form;

            if (!empty($form)) {
                foreach ($form as $form_key => $form_value) {
                    if (isset($form_value['validation'])) {
                        $display_string = ucfirst(preg_replace('/[^A-Za-z0-9\-]/', ' ', $form_value['id']));
                        $this->form_validation->set_rules($form_value['id'], $display_string, $form_value['validation']);
                    }
                }
                if ($this->form_validation->run() == FALSE) {
                    
                } else {
                    $setting = $this->frontcms_setting_model->get();

                    $response_message = $form['email_title']['mail_response'];
                    $record = $this->input->post();



                    if ($record['form_name'] == 'contact_us') {
                            $email= $this->input->post('email');
                            $name= $this->input->post('name');
                        $cont_data = array(
                            'name' => $name." (".$email.")",
                            'source' => 'Online',
                            'email' => $this->input->post('email'),
                            'purpose' => $this->input->post('subject'),
                            'date' => date('Y-m-d'),
                            'note' => $this->input->post('description')." (Sent from online front site)",
                        );
                        $visitor_id = $this->Visitors_model->add($cont_data);
                    }

                    if ($record['form_name'] == 'complain') {
                        $complaint_data = array(
                            'complaint_type' => 'General',
                            'source' => 'Online',
                            'name' => $this->input->post('name'),
                            'email' => $this->input->post('email'),
                            'contact' => $this->input->post('contact_no'),
                            'date' => date('Y-m-d'),
                            'description' => $this->input->post('description'),
                        );
                        $complaint_id = $this->complaint_Model->add($complaint_data);
                    }

                    $email_subject = $record['email_title'];
                    $mail_body = "";
                    unset($record['email_title']);
                    unset($record['submit']);
                    foreach ($record as $fetch_k_record => $fetch_v_record) {
                        $mail_body .= ucwords($fetch_k_record) . ": " . $fetch_v_record;
                        $mail_body .= "<br/>";
                    }
                    if (!empty($setting) && $setting->contact_us_email != "") {

                        $this->mailer->send_mail($setting->contact_us_email, $email_subject, $mail_body);
                    }

                    $this->session->set_flashdata('msg', $response_message);
                    redirect('page/' . $slug, 'refresh');
                }
            }
        }


       // $this->load_theme('pages/page');
    }

 
    function ajaxPaginationData() {
        $page = $this->input->post('page');
        $page_content_type = $this->input->post('page_content_type');
        if (!$page) {
            $offset = 0;
        } else {
            $offset = $page;
        }
        $data['page_content_type'] = $page_content_type;
        //total rows count
        $totalRec = count($this->cms_program_model->getByCategory($page_content_type));
        //pagination configuration
        $config['target'] = '#postList';
        $config['base_url'] = base_url() . 'welcome/ajaxPaginationData';
        $config['total_rows'] = $totalRec;
        $config['per_page'] = $this->perPage;
        $config['link_func'] = 'searchFilter';
        $this->ajax_pagination->initialize($config);
        //get the posts data
        $data['category_content'] = $this->cms_program_model->getByCategory($page_content_type, array('start' => $offset, 'limit' => $this->perPage));
        //load the view
        $this->load->view('themes/default/pages/ajax-pagination-data', $data, false);
    }

 public function read($slug) {

        $this->data['active_menu'] = 'home';
        $page = $this->cms_program_model->getBySlug($slug);
        $this->data['page_side_bar'] = $page['sidebar'];
        $this->data['featured_image'] = $page['feature_image'];
        $this->data['page'] = $page;
        $this->load_theme('pages/read');
    }
    
    public function aboutus_page(){
        $this->load->view('about/vision-mission');
    }

    public function residential_page(){
        $this->load->view('about/residential');
    }


    //////////////////////////************************** Added New

    public function contactus_page(){
        $data['page'] = 'contactus';
        $data['title'] = 'Contact Us';
        $this->load->view('common/header', $data);
        $this->load->view('pages/contactus',$data); 
        $this->load->view('common/footer');       
    }

    public function recruitment_page(){
        $data['page'] = 'recruitment';
        $data['title'] = 'Recruitment';
        $this->load->view('common/header', $data);
        $this->load->view('pages/recruitment',$data); 
        $this->load->view('common/footer');
    }

    public function minister_page(){
        $data['page'] = 'minister';
        $data['title'] = 'Minister';
        $this->load->view('common/header', $data);
        $this->load->view('pages/minister',$data); 
        $this->load->view('common/footer');
    }

    public function prsecy_page(){
        $data['page'] = 'secretary';
        $data['title'] = 'Secretary';
        $this->load->view('common/header', $data);
        $this->load->view('pages/secretary',$data); 
        $this->load->view('common/footer');
    }

    public function keyofficials_page(){
        $data['page'] = 'keyofficials';
        $data['title'] = 'Key Officials';
        $this->load->view('common/header', $data);
        $this->load->view('pages/keyofficials',$data); 
        $this->load->view('common/footer');
    }

    public function rti_page(){
        $data['page'] = 'rti';
        $data['title'] = 'RTI';
        $this->load->view('common/header', $data);
        $this->load->view('pages/rti',$data); 
        $this->load->view('common/footer');
    }

}
