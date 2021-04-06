<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class smscrobjob extends CI_Controller{

	public function index(){

	}
	
	public function sendpendingsms(){

		$smsrecievers = $this->composesms_model->getpendingsms();

		date_default_timezone_set('Asia/Kolkata');
        $date = date('Y-m-d H:i:s');

		foreach($smsrecievers as $smsreciever){
			$id = $smsreciever['id'];
            $name = $smsreciever['name'];
            $mobileno = $smsreciever['mobile'];
            $sms_content = $smsreciever['content'];

            $detail = array(
                        'contact_no' => $mobileno,
                        'date' => $date,
                        'student_name' => $name,
                        'msg' => $sms_content,
                    );
            $send_status = $this->smsgateway->sentAbsentStudentSMS($detail);

            if($send_status == 'success'){
            	$smssendstatus = ['status'=>'sent'];
                $updaterecord = $this->composesms_model->updaterecord($id, $smssendstatus);
            }
		}

		/*
		$mobileno = "+918745956993";
		$date = date('d-m-Y');
		$name = "Pawan";
		$sms_content = "Hello";
		$detail = array(
                        'contact_no' => $mobileno,
                        'date' => $date,
                        'student_name' => $name,
                        'msg' => $sms_content,
                    );
		$send_status = $this->smsgateway->sentAbsentStudentSMS($detail);
		*/

    }
}

?>