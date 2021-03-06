<?php 

	

	/**

	 * Set Time Zone

	 */

date_default_timezone_set('Asia/Kolkata');

/*

 * Add error_reporting to track error in code

 */

	error_reporting(E_ALL);

/*

 * Specify domains from which requests are allowed

 */

header('Access-Control-Allow-Origin: *');

/*

 * Specify which request methods are allowed

 */

header('Access-Control-Allow-Methods: GET, POST, OPTIONS');

/*

 * Additional headers which may be sent along with the CORS request

 * The X-Requested-With header allows jQuery requests to go through

 */

header('Access-Control-Allow-Headers: X-Requested-With');

/*

 * Additional header for app

 */

header('Content-Type:application/json');



	/**

	 * This controller handels the App request.

	 */

	class Api extends MY_Controller

	{

		

		function __construct()

		{

			parent::__construct();

       $this->load->library('msgnineone');

        $this->load->model('payment_model');

         $this->load->model('regstration_model');

     

		}





    

  public function demo()

  {

  	echo('ok');

  }



  public function getposts()

  {

   $posts = array();

  	 $this->db->select('*');

        $this->db->from('posts');

        $query = $this->db->get();

        $posts=$query->result();

        

         foreach ($posts as $c){

           

            array_push($posts, $c);

        }

         $this->db->select('*');

        $this->db->from('site_setting');

        $query1 = $this->db->get();

        $site_setting=$query1->result();

        

       die(json_encode(array("status"=>"1","message"=>"Success","posts"=>$posts,"site_setting"=>$site_setting)));

  }



  public function save_otp(){



        $data = $this->input->post();

        $arr = array();



      //  $save_data = array();

        // $save_data['email'] = $data['email'];

        // $save_data['mobile'] = $data['mobile'];

        // $data['verification_code'] = rand(111111,999999);

        $email = $data['email'];

        $mobile = $data['mobile'];



     

        $query = "SELECT email_id FROM users_info 

            WHERE email_id ='".$email."'";

         $users = $this->db->query($query);

    

        if($users->num_rows() > 0){

            die(json_encode(array("status"=>"0","message"=>"Email already register")));

        }



        $usersMobile = $this->db->query('SELECT * FROM users_info 

            WHERE phone_no="'.$mobile.'"');

       if($usersMobile->num_rows() > 0){

            die(json_encode(array("status"=>"0","message"=>"Mobile already register")));

        }



        $contactno = $data['mobile'];

        $otp =$this->sendotptomobile1($contactno);

        $arr['status'] = 1;

            $arr['msg'] = 'Success';

            $arr['otpval'] = $otp;

            die(json_encode($arr));

    }



     public function vaildate_otp(){

                $mobileotp = $this->input->post('mobileotp');

        		$contactno = $this->input->post('phone');

        		$mobileotp_response = $this->verifyotpmobile1($mobileotp, $contactno);

                $mobileotp_response = json_decode($mobileotp_response);

                if($mobileotp_response->type =='success'){

                    // Save Data



                $f_name = $this->input->post('fname');

                $m_name = $this->input->post('mname');

                $l_name = $this->input->post('lname');

                $phone_no = $this->input->post('phone');

                $email_id = $this->input->post('email');

                $is_mobile_varified = 1;

                $is_email_varified = 1;

                $registration_step = 1;

                $created_at = date('Y-m-d H:i:s');

                $created_by = 'user';

                $password = $this->generate_user_credentials1();



                $data = ['f_name'=>$f_name, 'm_name'=>$m_name, 'l_name'=>$l_name, 'phone_no'=>$phone_no, 'email_id'=>$email_id, 'is_mobile_varified'=>$is_mobile_varified, 'is_mobile_varified'=>$is_mobile_varified, 'registration_step'=>$registration_step, 'created_at'=>$created_at, 'created_by'=>$created_by];



                $result = $this->regstration_model->add($data, $password);

                if($result){

                    $application_no = $result['application_no'];

                    $user_id = $result['user_id'];

                    $message = "Dear Candidate, You have successfully registered and Your Registration Number: ".$application_no.", Your UserId: ".$phone_no." and Password: ".$password;

                    $issmssent = $this->sendSMS1($phone_no, $message);

                    $this->session->set_userdata('user_id', $user_id);



                    

                    $response = ['type'=>'success', 'message'=>['sms_status'=>$issmssent, 'msg'=>'You are registered successfully']];

                }

                else{

                    $response = ['type'=>'error', 'message'=>'Application can not be generated! try again'];

                }                                



                    // End Save Data

                }

                else{

                    $response = ['type'=>'error', 'message'=>'OTP is not varified! try again'];

                }

                echo json_encode($response);

    }



    public function sendotptomobile1($contactno){

$contactno = "91".$contactno;

$message = "Your login verification code is ##OTP##";

// $rndno=rand(1111,9999);

// $message = "Your login verification code is ".$rndno;

$message = urlencode($message);

$curl = curl_init();



curl_setopt_array($curl, array(

  CURLOPT_URL => "http://control.msg91.com/api/sendotp.php?authkey=240222AsKYBQ61jmg5e8b33fcP1&message=".$message."&sender=SRVIND&mobile=".$contactno,

  CURLOPT_RETURNTRANSFER => true,

  CURLOPT_ENCODING => "",

  CURLOPT_MAXREDIRS => 10,

  CURLOPT_TIMEOUT => 30,

  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

  CURLOPT_CUSTOMREQUEST => "POST",

  CURLOPT_POSTFIELDS => "",

  CURLOPT_SSL_VERIFYHOST => 0,

  CURLOPT_SSL_VERIFYPEER => 0,

));



$response = curl_exec($curl);

$err = curl_error($curl);

print_r($message);

curl_close($curl);



if ($err) {

  return "cURL Error #:" . $err;

} else {

  return $response;

 

}

}



  public function verifyotpmobile1($otp, $contactno){

      $contactno = "91".$contactno;

$curl = curl_init();



curl_setopt_array($curl, array(

  CURLOPT_URL => "https://control.msg91.com/api/verifyRequestOTP.php?authkey=240222AsKYBQ61jmg5e8b33fcP1&mobile=".$contactno."&otp=".$otp,

  CURLOPT_RETURNTRANSFER => true,

  CURLOPT_ENCODING => "",

  CURLOPT_MAXREDIRS => 10,

  CURLOPT_TIMEOUT => 30,

  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

  CURLOPT_CUSTOMREQUEST => "POST",

  CURLOPT_POSTFIELDS => "",

  CURLOPT_SSL_VERIFYHOST => 0,

  CURLOPT_SSL_VERIFYPEER => 0,

  CURLOPT_HTTPHEADER => array(

    "content-type: application/x-www-form-urlencoded"

  ),

));



$response = curl_exec($curl);

print_r($response);

$err = curl_error($curl);



curl_close($curl);



if ($err) {

  return "cURL Error #:" . $err;

} else {

  return $response;

}



    }



     public function generate_user_credentials1(){

        $password = random_string('alnum', 8);

        return $password;

    }



   



    public function sendSMS1($contactno, $message){

        return $this->msgnineone->sendSMS($contactno, $message);

    }  





     public function razorPayCreateOrder(){
        $data = $this->input->post();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.razorpay.com/v1/orders');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "amount=".$data['amount']."&currency=".$data['currency']."&receipt=".$data['receipt']."&payment_capture=1");
        curl_setopt($ch, CURLOPT_USERPWD, 'rzp_test_xe35rqzJOkRNOv' . ':' . 'DAoDIORW9detN2g3dOJKRUKZ');
        $headers = array();
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
        $result = curl_exec($ch);
        $resp = json_decode($result); 
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
            $res['status'] = 0;
        }else{
            if(!empty($resp->id)){
                $res['status'] = 1;
                $res['result'] = array("order_id" => $resp->id);
                $res['detail'] = $resp;
            }else{
                $res['status'] = 0;
            }
        }
        $res['response'] = $resp;
        curl_close($ch); 
        die(json_encode($res));
    }





      public function paymentdetail()

     {

       

         $getData = $this->input->post();

         $student_id = $this->session->userdata('user_id');

          $created_at = date('Y-m-d H:i:s');

            $created_by = "user";

            $payment_order_id= $getData['order_id'];

            $payment_tracking_id= $getData['transaction_id'];

            $amount= $getData['amount'];

            $registration_step= 6;

            $online_payment_status= 'Success';









            $data = ['payment_mode'=>1, 'payment_order_id'=>$payment_order_id, 'payment_tracking_id'=>$payment_tracking_id, 'registration_amt'=>$amount, 'registration_step'=>$registration_step, 'updated_at'=>$created_at, 'updated_by'=>$created_by, 'payment_status'=>$online_payment_status];

            $update_payment = $this->payment_model->save($data, $student_id);

            if($update_payment){

                if($online_payment_status=='Success'){

                    $contactno = $this->regstration_model->getusemobilenumber($student_id);



                    if($contactno){

                        $message = "Dear Candicate! Your payment of Rs. ".$amount." has been received.";

                        //$sendsms = $this->msgnineone->sendSMS($contactno, $message);

                    }

                }             

            }



        // print_r($getData);

        $order_id= $getData['order_id'];

        // $redirect_url= $getData['redirect_url'];

        if($order_id)

        {

           $response = ['type'=>'success', 'message'=>'Details has been submitted'];

          redirect('index.php/form/success');

        }

       echo json_encode($response);

         

    }





















   

 

}

 ?>