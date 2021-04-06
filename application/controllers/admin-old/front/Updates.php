<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Updates extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $config = array(
            'field' => 'slug',
            'title' => 'title',
            'table' => 'front_cms_programs',
            'id' => 'id',
        );
        $this->load->library('slug', $config);
        $this->load->config('ci-blog');
        $this->load->library('imageResize');
    }

    function index() {
        if (!$this->rbac->hasPrivilege('updates', 'can_view')) {
            access_denied();
        }
        $data = array();
        $this->session->set_userdata('active_menu', 'frontcmsmenu');
        //$this->session->set_userdata('top_menu', 'Front CMS');
        //$this->session->set_userdata('sub_menu', 'admin/front/notice');
        $update_content = $this->config->item('ci_front_update_content');
        $listResult = $this->cms_program_model->getByCategory($update_content);

        $data['listResult'] = $listResult;
        $this->load->view('layout/header');
        $this->load->view('admin/front/updates/index', $data);
        $this->load->view('layout/footer');
    }

    function create() {
        if (!$this->rbac->hasPrivilege('updates', 'can_add')) {
            access_denied();
        }
        $data['title'] = 'Add Book';
        $data['title_list'] = 'Book Details';
        $this->session->set_userdata('active_menu', 'frontcmsmenu');
        // $this->session->set_userdata('top_menu', 'Front CMS');
        // $this->session->set_userdata('sub_menu', 'admin/front/notice');
        $this->form_validation->set_rules('title', 'title', 'trim|required|xss_clean');
      //  $this->form_validation->set_rules('description', 'Description', 'trim|required|xss_clean');
        $this->form_validation->set_rules('update_type', 'Update Type', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header');
            $this->load->view('admin/front/updates/create', $data);
            $this->load->view('layout/footer');
        } else {

            $category = $this->input->post('content_category');
            if (isset($category)) {
                $contents_category = $category;
            } else {
                $contents_category = "";
            }

            $data = array(
                'title' => $this->input->post('title'),
                'link' => $this->input->post('link'),
                'description' => htmlspecialchars_decode($this->input->post('description')),
                'update_type' => $this->input->post('update_type'),
                'meta_title' => $this->input->post('meta_title'),
                'meta_keyword' => $this->input->post('meta_keywords'),
                'feature_image' => $this->input->post('image'),
                'from_date' => date('Y-m-d', $this->customlib->datetostrtotime($this->input->post('from_date'))),
                'to_date' => date('Y-m-d', $this->customlib->datetostrtotime($this->input->post('to_date'))),
                'sidebar' => $this->input->post('sidebar'),
                'type' => $this->config->item('ci_front_update_content'),
                'meta_description' => $this->input->post('meta_description')
            );

            $data['slug'] = $this->slug->create_uri($data);
            $data['url'] = $this->config->item('ci_front_page_read_url') . $data['slug'];
            $this->cms_program_model->add($data);
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">Updates added successfully</div>');
            redirect('admin/front/updates');
        }
    }

    function edit($slug) {
        if (!$this->rbac->hasPrivilege('updates', 'can_edit')) {
            access_denied();
        }
        $data['title'] = 'Edit Book';
        $data['title_list'] = 'Book Details';
        $this->session->set_userdata('active_menu', 'frontcmsmenu');
        // $this->session->set_userdata('top_menu', 'Front CMS');
        // $this->session->set_userdata('sub_menu', 'admin/front/notice');
        $result = $this->cms_program_model->getBySlug($slug);
        $data['result'] = $result;
        $this->form_validation->set_rules('title', 'title', 'trim|required|xss_clean');
       // $this->form_validation->set_rules('description', 'Description', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header');
            $this->load->view('admin/front/updates/edit', $data);
            $this->load->view('layout/footer');
        } else {
            $data = array(
                'id' => $this->input->post('id'),
                'title' => $this->input->post('title'),
                'link' => $this->input->post('link'),
                'update_type' => $this->input->post('update_type'),
                'url' => $this->config->item('ci_front_page_url') . $this->input->post('url'),
                'description' => htmlspecialchars_decode($this->input->post('description')),
                'meta_title' => $this->input->post('meta_title'),
                'meta_keyword' => $this->input->post('meta_keywords'),
                'feature_image' => $this->input->post('image'),
                'from_date' => date('Y-m-d', $this->customlib->datetostrtotime($this->input->post('from_date'))),
                'to_date' => date('Y-m-d', $this->customlib->datetostrtotime($this->input->post('to_date'))),
                'sidebar' => $this->input->post('sidebar'),
                'meta_description' => $this->input->post('meta_description')
            );


            $data['slug'] = $this->slug->create_uri($data, $this->input->post('id'));
            $data['url'] = $this->config->item('ci_front_page_read_url') . $data['slug'];
            $this->cms_program_model->add($data);
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">Updates updated successfully</div>');
            redirect('admin/front/updates');
        }
    }

    function delete($id) {

        if (!$this->rbac->hasPrivilege('updates', 'can_delete')) {
            access_denied();
        }
        $data['title'] = 'Fees Master List';
        $this->cms_program_model->removeBySlug($id, 'update');
        redirect('admin/front/updates');
    }

}

?>