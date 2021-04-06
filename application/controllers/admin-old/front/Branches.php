<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Branches extends Admin_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        
        if (!$this->rbac->hasPrivilege('branches', 'can_view')) {
            access_denied();
        }
        $this->session->set_userdata('active_menu', 'frontcmsmenu');
        //$this->session->set_userdata('top_menu', 'Human Resource');
        //$this->session->set_userdata('sub_menu', 'caste/index');
        $data['title'] = 'Add Caste';
        $data['title_list'] = 'branches List';
        $data['branch_list'] = $this->branch_model->getalldata();

        $this->form_validation->set_rules('state','State','trim|required|xss_clean');
        $this->form_validation->set_rules('address','Address','trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
        $this->load->view('layout/header', $data);
        $this->load->view('admin/front/branch/index', $data);
        $this->load->view('layout/footer', $data);
        } else {
          
            $state = $this->input->post('state');
            $address = $this->input->post('address');
            $created_by = $this->session->userdata('admin')['id'];
            $created_at = date('Y-m-d H:i:s');
            $branch_array = ['state'=>$state, 'address'=>$address, 'created_by'=>$created_by, 'created_at'=>$created_at];
            $this->branch_model->add($branch_array);
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">Branch added successfully</div>');
           redirect(base_url('admin/front/branches'));
        
        }
    }


    public function edit($id){
        if (!$this->rbac->hasPrivilege('branches', 'can_edit')) {
            access_denied();
        }
        $this->session->set_userdata('active_menu', 'frontcmsmenu');

        $data['title'] = 'Edit caste';
        $data['id'] = $id;
        $data['branch_list'] = $this->branch_model->getalldata();
        $data['branch_data'] = $this->branch_model->getdatabyid($id);

        $this->form_validation->set_rules('state','State','trim|required|xss_clean');
        $this->form_validation->set_rules('address','Address','trim|required|xss_clean');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header', $data);
            $this->load->view('admin/front/branch/index', $data);
            $this->load->view('layout/footer', $data);
        } else {
            $state = $this->input->post('state');
            $address = $this->input->post('address');
            $updated_by = $this->session->userdata('admin')['id'];
            $updated_at = date('Y-m-d H:i:s');
            $branch_array = ['state'=>$state, 'address'=>$address, 'updated_by'=>$updated_by, 'updated_at'=>$updated_at];

            $update_data = $this->branch_model->updatebyid($id, $branch_array);
            if($update_data){
                $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">Branch updated successfully</div>');
                redirect(base_url('admin/front/branches'));
            }  
        }
    }

    public function delete($id){
            $delete_data = $this->branch_model->deletedatabyid($id);
            if($delete_data){
                $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">Branch Deleted successfully</div>');
                redirect(base_url('admin/front/branches'));
            }
            else{
                $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">Please Try Again</div>');
                redirect(base_url('admin/front/branches'));
            } 
    }

    

}

?>