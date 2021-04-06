<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Schsettings extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('upload');
    }

    function index() {
        if (!$this->rbac->hasPrivilege('general_setting', 'can_edit')) {
            access_denied();
        }
        $this->session->set_userdata('active_menu', 'systemsettingmenu');
        //$this->session->set_userdata('top_menu', 'System Settings');
        //$this->session->set_userdata('sub_menu', 'schsettings/index');
        $data['title'] = 'Setting List';
        $setting_result = $this->setting_model->get();
        $data['settinglist'] = $setting_result;


        $timezoneList = $this->customlib->timezone_list();
        $data['title'] = 'School Setting';
        $language_result = $this->language_model->get();
        $month_list = $this->customlib->getMonthList();
        $data['languagelist'] = $language_result;
        $data['timezoneList'] = $timezoneList;
        $data['monthList'] = $month_list;
        $dateFormat = $this->customlib->getDateFormat();
        $currency = $this->customlib->getCurrency();

        $data['dateFormatList'] = $dateFormat;
        $data['currencyList'] = $currency;


        $this->load->view('layout/header', $data);
        $this->load->view('setting/settingList', $data);
        $this->load->view('layout/footer', $data);
    }

    function ajax_editlogo() {
        $this->form_validation->set_rules('id', 'ID', 'trim|required|xss_clean');
        $this->form_validation->set_rules('file', 'Image', 'callback_handle_upload');
        if ($this->form_validation->run() == false) {
            $data = array(
                'file' => form_error('file')
            );
            $array = array('success' => false, 'error' => $data);
            echo json_encode($array);
        } else {
            $id = $this->input->post('id');

            if (isset($_FILES["file"]) && !empty($_FILES['file']['name'])) {
                $fileInfo = pathinfo($_FILES["file"]["name"]);
                $img_name = $id . '.' . $fileInfo['extension'];
                move_uploaded_file($_FILES["file"]["tmp_name"], "./uploads/school_content/logo/" . $img_name);
            }
            $data_record = array('id' => $id, 'image' => $img_name);
            $this->setting_model->add($data_record);
            $array = array('success' => true, 'error' => '', 'message' => 'Record Updated Successfully');
            echo json_encode($array);
        }
    }

    function editLogo($id) {
        $data['title'] = 'School Logo';
        $setting_result = $this->setting_model->get();
        $data['settinglist'] = $setting_result;
        $data['id'] = $id;
        $this->form_validation->set_rules('file', 'Image', 'callback_handle_upload');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header', $data);
            $this->load->view('setting/editLogo', $data);
            $this->load->view('layout/footer', $data);
        } else {
            if (isset($_FILES["file"]) && !empty($_FILES['file']['name'])) {
                $fileInfo = pathinfo($_FILES["file"]["name"]);
                $img_name = $id . '.' . $fileInfo['extension'];
                move_uploaded_file($_FILES["file"]["tmp_name"], "./uploads/school_content/logo/" . $img_name);
            }
            $data_record = array('id' => $id, 'image' => $img_name);
            $this->setting_model->add($data_record);
            $this->session->set_flashdata('msg', '<div class="alert alert-left">New Student added Successfully</div>');
            redirect('schsettings/index');
        }
    }

    function handle_upload() {
        if (isset($_FILES["file"]) && !empty($_FILES['file']['name'])) {
            $allowedExts = array('jpg', 'jpeg', 'png');
            $temp = explode(".", $_FILES["file"]["name"]);
            $extension = end($temp);
            if ($_FILES["file"]["error"] > 0) {
                $error .= "Error opening the file<br />";
            }
            if ($_FILES["file"]["type"] != 'image/gif' &&
                    $_FILES["file"]["type"] != 'image/jpeg' &&
                    $_FILES["file"]["type"] != 'image/png') {
                $this->form_validation->set_message('handle_upload', 'File type not allowed');
                return false;
            }
            if (!in_array($extension, $allowedExts)) {
                $this->form_validation->set_message('handle_upload', 'Extension not allowed');
                return false;
            }
            if ($_FILES["file"]["size"] > 102400) {
                $this->form_validation->set_message('handle_upload', 'File size shoud be less than 100 kB');
                return false;
            }
            return true;
        } else {
            $this->form_validation->set_message('handle_upload', 'Logo file is required');
            return false;
        }
    }

    function view($id) {
        $data['title'] = 'Setting List';
        $setting = $this->setting_model->get($id);
        $data['setting'] = $setting;
        $this->load->view('layout/header', $data);
        $this->load->view('setting/settingShow', $data);
        $this->load->view('layout/footer', $data);
    }

    function getSchsetting() {

        $data = $this->setting_model->getSetting();
        echo json_encode($data);
    }

    function ajax_schedit() {

        if (!$this->rbac->hasPrivilege('general_setting', 'can_edit')) {
            access_denied();
        }

        $this->form_validation->set_rules('sch_name', 'School Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('sch_phone', 'Phone', 'trim|required|xss_clean');

        $this->form_validation->set_rules('sch_address', 'Address', 'trim|required|xss_clean');
        $this->form_validation->set_rules('sch_email', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('sch_lang_id', 'Language', 'trim|required|xss_clean');

        $this->form_validation->set_rules('sch_timezone', 'timezone', 'trim|required|xss_clean');
        $this->form_validation->set_rules('sch_date_format', 'Date Format', 'trim|required|xss_clean');

        if ($this->form_validation->run() == false) {
            $data = array(
                'sch_name' => form_error('sch_name'),
                'sch_phone' => form_error('sch_phone'),
                'sch_address' => form_error('sch_address'),
                'sch_email' => form_error('sch_email'),
                'sch_lang_id' => form_error('sch_lang_id'),
                'sch_timezone' => form_error('sch_timezone'),
                'sch_date_format' => form_error('sch_date_format'),
            );
            $array = array('status' => 'fail', 'error' => $data);
            echo json_encode($array);
        } else {
            $data = array(
                'id' => $this->input->post('sch_id'),
                'name' => $this->input->post('sch_name'),
                'phone' => $this->input->post('sch_phone'),
                'address' => $this->input->post('sch_address'),
                'email' => $this->input->post('sch_email'),
                'lang_id' => $this->input->post('sch_lang_id'),
                'timezone' => $this->input->post('sch_timezone'),
                'date_format' => $this->input->post('sch_date_format'),
            );
            $this->setting_model->add($data);
            $this->load->helper('lang');
            $this->session->userdata['admin']['date_format'] = $this->input->post('sch_date_format');
            $this->session->userdata['admin']['sch_name'] = $this->input->post('sch_name');
            $this->session->userdata['admin']['timezone'] = $this->input->post('sch_timezone');
            set_language($this->input->post('sch_lang_id'));
            $array = array('status' => 'success', 'error' => '', 'message' => 'Record Saved Successfully');
            echo json_encode($array);
        }
    }

}

?>