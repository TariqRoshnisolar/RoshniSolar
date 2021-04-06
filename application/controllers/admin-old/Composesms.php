<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class composesms extends Admin_Controller{

	function __construct() {
        parent::__construct();

        $this->load->library('smsgateway');
        $this->load->library('mailsmsconf');
        $this->load->model("classteacher_model");
        $this->mailer;
    }

	public function index(){
        if (!$this->rbac->hasPrivilege('compose_sms', 'can_view')) {
            access_denied();
        }
        $this->session->set_userdata('active_menu', 'communicatemenu');
		//$this->session->set_userdata('top_menu', 'Communicate');
        //$this->session->set_userdata('sub_menu', 'composesms/index');
        $data['title'] = 'Add Mailsms';
        $listMessage = $this->messages_model->get();
        $data['listMessage'] = $listMessage;

        $staff = $this->staff_model->getAll();
        $data['stafflist'] = $staff;

        $smstype = $this->communicate_model->getsmstype();
        $data['smstype'] = $smstype;

        $templatelist = $this->smstemplates_model->gettemplatelist();
        $data['templatelist'] = $templatelist;


        $this->load->view('layout/headerwithoutdatejs');
        $this->load->view('admin/mailsms/composesms', $data);
        $this->load->view('layout/footer');

       
	}

	public function loadallclasses(){
		   $allclasses = $this->class_model->get();
		   $data['allclasses'] = $allclasses;
		   $this->load->view('admin/mailsms/ajax/allclasseslist', $data);
		   //echo json_encode($allclasses);
	}


	public function loadsmsrecievers(){

		$sender_id = $_POST['sender_id'];
		$sms_type_id = $_POST['sms_type_id'];
		$date = $_POST['date'];
		$sms_content = $_POST['sms_content'];
		$sendto = $_POST['sendto'];
		$data['sendto'] = $sendto;

        if($sender_id != '' && $sms_type_id !='' && $date !='' && $sms_content !='' && $sendto !=''){

        	if( $sendto=='teachers' ){
			$staff = $this->staff_model->getAll();
            $data['stafflist'] = $staff;
			$this->load->view('admin/mailsms/ajax/teacher_recievers_list', $data);
		}

		if( $sendto=='students' || $sendto=='parents' ){
			if( isset($_POST['allsections']) ){

			
			$selectsection = $_POST['allsections'];

		    $student_list = array();
            foreach($selectsection as $section){
                 $section = explode('_', $section);
                 $class_id = $section[0];
                 $section_id = $section[1];
                $student_list[] = $this->student_model->searchByClassSection($class_id, $section_id);
             }

            $data['student_list'] = $student_list;
            $this->load->view('admin/mailsms/ajax/student_recievers_list', $data);
		   }
		}

            }

	}


	public function sendallsms(){
		$sender_id = $this->input->post('sender_id');
		$sms_type_id = $this->input->post('sms_type_id');
		$date = $this->input->post('date');
		$sms_content_original = $this->input->post('sms_content');
		$sendto = $this->input->post('sendto');
		$smsrecieverarray = $this->input->post('smsrecieverarray');
		$sendcopytoteacher = $this->input->post('sendcopytoteacher');
		$sendonallnoofreciever = $this->input->post('sendonallnoofreciever');
        
        date_default_timezone_set('Asia/Kolkata');

        $stringtotime = strtotime($date);
        $date = date('Y-m-d H:i:s', $stringtotime);
        $dateforsmscontent = date('d-m-Y', $stringtotime);

        $flag = true;

    if( count($smsrecieverarray) > 0 ){
           foreach($smsrecieverarray as $smsreciever){

            $name = $smsreciever['name'];
            $mobileno = $smsreciever['mobileno'];
            $admino = $smsreciever['admission_no'];
            $empid = $smsreciever['employee_id'];
            $classsection = $smsreciever['classsection'];

            $sms_content = strip_tags($sms_content_original);
            $sms_content = htmlspecialchars($sms_content);
            $sms_content = trim($sms_content);

            $sms_content = str_replace("STUNAME",$name,$sms_content);
            $sms_content = str_replace("TODAYDATE",$dateforsmscontent,$sms_content);

            $detail = array(
                        'contact_no' => $mobileno,
                        'date' => $date,
                        'student_name' => $name,
                        'msg' => $sms_content,
                    );

            $data = ['name'=>$name, 'mobile'=>$mobileno, 'sender_id'=>$sender_id, 'date'=>$date, 'smstype'=>$sms_type_id, 'content'=>$sms_content, 'empid'=>$empid, 'admino'=>$admino, 'class_section'=>$classsection];



            $insertrecordid = $this->composesms_model->insertrecord($data);

            /*
            if($insertrecordid){
                $id = $insertrecordid;
                $send_status = $this->smsgateway->sentAbsentStudentSMS($detail);

            if($send_status){
                $smssendstatus = ['status'=>'sent'];
                $updaterecord = $this->composesms_model->updaterecord($id, $smssendstatus);
            }
            if(!$send_status){
             $flag = false;
                }

            }
            */

            

        }

        if($sendcopytoteacher == 1){
            $sender_profile = $this->staff_model->getProfile($sender_id);
            $sender_name = $sender_profile['name'].' '.$sender_profile['surname'];
            $sender_mobileno = $sender_profile['contact_no'];
            $sender_employee_id = $sender_profile['employee_id'];
            $sender_detail = array(
                        'contact_no' => $sender_mobileno,
                        'date' => $date,
                        'student_name' => $sender_name,
                        'msg' => $sms_content,
                    );

            $sender_data = ['name'=>$sender_name, 'mobile'=>$sender_mobileno, 'sender_id'=>$sender_id, 'date'=>$date, 'smstype'=>$sms_type_id, 'content'=>$sms_content, 'empid'=>$sender_employee_id];

            $insertsenderrecordid = $this->composesms_model->insertrecord($sender_data);
           
           /*
           if($insertsenderrecordid){
            $sendcopytoteacher_status = $this->smsgateway->sentAbsentStudentSMS($sender_detail);

              if(!$sendcopytoteacher_status){
                $flag = false;
              }
            
            if($sendcopytoteacher_status){
                $sendersmssendstatus = ['status'=>'sent'];
                $senderupdaterecord = $this->composesms_model->updaterecord($insertsenderrecordid, $sendersmssendstatus);
             }

           }
           */

        }
        
        /* Start Cron Job or PHP Script Using Curl */
        $url = base_url('smscrobjob/sendpendingsms');
        $this->mailsmsconf->httpGet($url);

        /* End Cron Job or PHP Script Using Curl */

        if($flag){
            echo 1;
        }
        else{
            echo 0;
        }
    }
    else{
       echo "No SMS Recievers Selected";
    }
        




	}


	public function success(){
        
        $backpagelink = base_url('admin/composesms');
        $data = ['successmsg'=>'SMS Sent Successfully','backpagelink'=>$backpagelink];

		$this->load->view('layout/header');
        $this->load->view('admin/mailsms/smssuccess', $data);
        $this->load->view('layout/footer');

	}

    public function smsreport(){
        $fromdate = $this->input->post('fromdate');
        $todate = $this->input->post('todate');
        $mobileno = $this->input->post('mobileno');
        $sms_type_id = $this->input->post('sms_type_id');

        $mobileno = strip_tags($mobileno);
        $mobileno = htmlspecialchars($mobileno);
        $mobileno = trim($mobileno);
          
$smsreport = $this->composesms_model->getreport($fromdate, $todate, $mobileno, $sms_type_id);

$totalsentsmscount = $this->composesms_model->totalsentsmscount($fromdate, $todate);

$data['smsreport'] = $smsreport;

$data['totalsentsmscount'] = $totalsentsmscount;


        $this->load->view('admin/mailsms/ajax/smsreportlist', $data);
    }

    

}
?>