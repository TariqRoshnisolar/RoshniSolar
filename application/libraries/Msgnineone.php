<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Msgnineone {

    // private $_CI;
    // public $route = "4";
    // public $authKey = "";
    // public $senderId = "";
    // //public $url = "https://control.msg91.com/api/sendhttp.php";
    // public $url = "http://api.msg91.com/api/sendhttp.php";

    // function __construct() {
    //     //$this->_CI = & get_instance();

    //     //$this->authKey = $array['authkey'];
    //     //$this->senderId = $array['senderid'];
    // }

    /* Old Configration not Working
    function sendSMSold($to, $message) {
        $postData = array(
            'authkey' => $this->authKey,
            'mobiles' => $to,
            'message' => $message,
            'sender' => $this->senderId,
            'route' => $this->route
        );

        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $this->url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
                //,CURLOPT_FOLLOWLOCATION => true
        ));
        //Ignore SSL certificate verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


        //get response
        $output = curl_exec($ch);

        //Print error if any
        if (curl_errno($ch)) {
            //echo 'error:' . curl_error($ch);
        }
        curl_close($ch);

        return $output;

        //return true;
    }


*/

    // public function sendSMS2($to, $application_no,$password){
    //     $message = htmlspecialchars_decode($message);
    //     $message = urlencode($message);
        
    //     $url = 'http://m1.sarv.com/api/v2.0/sms_campaign.php?token=14298871315fb7684c0dc941.82186466&user_id=30875723&route=TR&template_id=3373&sender_id=ROSSOL&language=EN&template=Dear+Candidate%2C+You+have+successfully+registered+and+Your+Registration+Number+%3A+'.$application_no.'%2CYour+Userid%3A+'.$to.'+and+password%3A+'.$password.'&contact_numbers='.$to;
        
        
    //     $curl = curl_init();
    //       curl_setopt_array($curl, array(
    //       CURLOPT_URL => $url,
    //       CURLOPT_RETURNTRANSFER => true,
    //       CURLOPT_ENCODING => "",
    //       CURLOPT_MAXREDIRS => 10,
    //       CURLOPT_TIMEOUT => 30,
    //       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //       CURLOPT_CUSTOMREQUEST => "GET",
    //       CURLOPT_SSL_VERIFYHOST => 0,
    //       CURLOPT_SSL_VERIFYPEER => 0,
    //     ));

    //     $response = curl_exec($curl);
    //     $err = curl_error($curl);

    //     curl_close($curl);

    //     if ($err) {
    //        return $err;
    //     } else {
    //       return $response;
    //     }
    // }

    public function sendSMS($to, $application_no,$password){
        //$message = htmlspecialchars_decode($message);
        //$message = urlencode($message);
        
        $url = 'http://m1.sarv.com/api/v2.0/sms_campaign.php?token=14298871315fb7684c0dc941.82186466&user_id=30875723&route=TR&template_id=3373&sender_id=ROSSOL&language=EN&template=Dear+Candidate%2C+You+have+successfully+registered+and+Your+Registration+Number+%3A+'.$application_no.'%2CYour+Userid%3A+'.$to.'+and+password%3A+'.$password.'&contact_numbers='.$to;
        //$url = 'https://m1.sarv.com/api/v2.0/sms_campaign.php?token=14298871315fb7684c0dc941.82186466&user_id=30875723&route=TR&template_id=3373&sender_id=ROSSOL&language=EN&template='.$message.'&contact_numbers='.$to;
        //$url = "http://api.msg91.com/api/sendhttp.php?country=91&sender=SRVIND&route=4&mobiles=".$to."&authkey=240222AsKYBQ61jmg5e8b33fcP1&response=json&message=".$message."&unicode=1";
        
        $curl = curl_init();
          curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
           return $err;
          //echo "cURL Error #:" . $err;
        } else {
          //echo $response;
          //$response = json_decode($response);
          return $response;
        }
    }

public function sendotptomobile($contactno,$otp){
$phone = $contactno;
$contactno = "91".$contactno;
$message = "Your login verification code is ".$otp;
//$message = "Your login verification code is ".$rndno;
$message = urlencode($message);
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://m1.sarv.com/api/v2.0/sms_campaign.php?token=14298871315fb7684c0dc941.82186466&user_id=30875723&route=TR&template_id=3371&sender_id=ROSSOL&language=EN&template='.$message.'&contact_numbers='.$contactno,
  //CURLOPT_URL => "http://control.msg91.com/api/sendotp.php?authkey=240222AsKYBQ61jmg5e8b33fcP1&message=".$message."&sender=SRVIND&mobile=".$contactno,
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

curl_close($curl);

if ($err) {
  return "cURL Error #:" . $err;
} else {
  return $response;
}
}

    public function sendotptoemail($email){
      $message = "Your login verification code is ##OTP##";
      //$message = "Your login verification code is ".$rndno;
      $message = urlencode($message);
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => "http://control.msg91.com/api/sendotp.php?authkey=240222AsKYBQ61jmg5e8b33fcP1&message=".$message."&sender=SRVIND&email=".$email,
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

      curl_close($curl);

      if ($err) {
        return "cURL Error #:" . $err;
      } else {
        return $response;
      }
    }


    public function verifyotpmobile($otp, $contactno){
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
      $err = curl_error($curl);

      curl_close($curl);

      if ($err) {
        return "cURL Error #:" . $err;
      } else {
        return $response;
      }

    }

    public function verifyotpemail($otp, $email){
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://control.msg91.com/api/verifyRequestOTP.php?authkey=240222AsKYBQ61jmg5e8b33fcP1&email=".$email."&otp=".$otp,
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
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  return "cURL Error #:" . $err;
} else {
  return $response;
}

    }    

    public function sendmailotp($email, $rndno){

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://control.msg91.com/api/sendmailotp.php?otp=".$rndno."&template=&expiry=&email=".$email."&authkey=240222AsKYBQ61jmg5e8b33fcP1",
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

curl_close($curl);

if ($err) {
  return "cURL Error #:" . $err;
} else {
  return $response;
}
    }

}

?>