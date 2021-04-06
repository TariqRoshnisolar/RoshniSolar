<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fee extends Student_Controller {

    function __construct() {
        parent::__construct();
    }

    public function stufeedetail() {

    $this->form_validation->set_rules('receiptid', 'Receipt No', 'required|numeric|trim|xss_clean');
    $this->form_validation->set_rules('studentid', 'Student ID', 'required|numeric|trim|xss_clean');

    if( $this->form_validation->run() == false ){
         //$response = ['type'=>'error', 'message'=>validation_errors()];
         //echo json_encode($response);
    }
    else{
        $receiptid = $this->input->post('receiptid');
        $studentid = $this->input->post('studentid');

$student = $this->student_model->get($studentid);
        $data['student'] = $student;

        $class_section = $this->student_model->getClassSection($student["class_id"]);
        $data["class_section"] = $class_section;

        //$session = $this->setting_model->getCurrentSession();
        
        $schooldetail = $this->setting_model->getSchoolDetail();
        $data['schooldetail'] = $schooldetail;
 
       
           // $feesubmitdata = $this->session->flashdata('feesubmitdata');
           // $data['feesubmitdata'] = $feesubmitdata;
         //  $receiptheads = $this->studentfee_model->studentfeereportforreceipt($feesubmitdata['addfeeinsertid']);
            //print_r($feesubmitdata);
          // $data['receiptheads'] = $receiptheads;

           //$receiptinfo = $this->studentfee_model->studentfeermaineportforreceipt($feesubmitdata['yearsession'], $feesubmitdata['student'], $feesubmitdata['studentsessionid'], $feesubmitdata['adminno'], $feesubmitdata['installment']);
           //$data['receiptinfo'] = $receiptinfo;

$getfeedata = $this->studentfee_model->stufeedetailforreceiptdownload($studentid, $receiptid);

        if($getfeedata){
            $receiptinfo = $getfeedata['stufeedata'];
            $receiptheads = $getfeedata['stufeedataamonut'];
            $data['receiptheads'] = $receiptheads;
            $data['receiptinfo'] = $receiptinfo;
          $this->load->view('studentfee/downloadfeereceipt', $data);

          //$pdfFilePath = "output_pdf_name.pdf";
 
        //load mPDF library
/*
        $this->load->library('m_pdf');

        $html =  $this->load->view('studentfee/downloadfeereceipt', $data, true);

 $pdfFilePath ="Salesreport-".time()."-download.pdf";

       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "F");  
        echo $pdfFilePath; 
            //$response = ['type'=>'success', 'message'=>$getfeedata];
           // echo json_encode($response);
        */
        }


    }


    }

}

?>