<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Headerpartners extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->config('ci-blog');
        $this->partners_content = $this->config->item('ci_front_header_partners_content');
    }

    function index() {
        if (!$this->rbac->hasPrivilege('partners', 'can_view')) {
            access_denied();
        }
        $data = array();
        $this->session->set_userdata('active_menu', 'frontcmsmenu');
        //$this->session->set_userdata('top_menu', 'Front CMS');
        //$this->session->set_userdata('sub_menu', 'admin/front/banner');
        $result = $this->cms_program_model->getByCategory($this->partners_content);
        if (!empty($result)) {
            $data['banner_images'] = $this->cms_program_model->front_cms_program_photos($result[0]['id']);
        }
        $this->load->view('layout/header');
        $this->load->view('admin/front/headerpartners/index', $data);
        $this->load->view('layout/footer');
    }

    function add() {
        if (!$this->rbac->hasPrivilege('partners', 'can_add')) {
            access_denied();
        }
        $this->session->set_userdata('active_menu', 'frontcmsmenu');
        // $this->session->set_userdata('top_menu', 'Front CMS');
        // $this->session->set_userdata('sub_menu', 'admin/front/banner');
        $partners_content = $this->config->item('ci_front_header_partners_content');
        $this->form_validation->set_rules('content_id', 'Fees Payment Id', 'required|trim|xss_clean');
        if ($this->form_validation->run() == false) {
            $data = array(
                'content_id' => form_error('content_id'),
            );
            $array = array('status' => '0', 'error' => 'Something wrong');
            echo json_encode($array);
        } else {

            $data = array(
                'program_id' => 0,
                'media_gallery_id' => $this->input->post('content_id'),
            );

            $response = $this->cms_program_model->banner($partners_content, $data);
            if ($response) {
                $array = array('status' => '1', 'error' => '', 'msg' => 'Record added successfully');
            } else {
                $array = array('status' => '0', 'error' => 'Something wrong', 'msg' => 'Something wrong');
            }
            echo json_encode($array);
        }
    }

    function remove() {
        if (!$this->rbac->hasPrivilege('partners', 'can_delete')) {
            access_denied();
        }
        $partner_content = $this->config->item('ci_front_header_partners_content');
        $this->form_validation->set_rules('content_id', 'Fees Payment Id', 'required|trim|xss_clean');
        if ($this->form_validation->run() == false) {
            $data = array(
                'content_id' => form_error('content_id'),
            );
            $array = array('status' => '0', 'error' => 'Something wrong');
            echo json_encode($array);
        } else {
            $media_gallery_id = $this->input->post('content_id');
            $response = $this->cms_program_model->bannerDelete($partner_content, $media_gallery_id);
            if ($response) {
                $array = array('status' => '1', 'error' => '', 'msg' => 'Record deleted successfully');
            } else {
                $array = array('status' => '0', 'error' => 'Something wrong', 'msg' => 'Something wrong');
            }
            echo json_encode($array);
        }
    }

}

?>