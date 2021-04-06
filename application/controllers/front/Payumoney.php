<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payumoney extends CI_Controller {

     private $login_user_data;
	 public function __construct() {
        parent::__construct(); 
        $this->load->library('user_authentication');
        $this->login_user_data = $this->user_authentication->login_user_data();
    }	

	public function check(){  
        $user = $this->login_user_data;
        $amount = $user['registration_amt'];
        //echo '<pre>'; print_r($user); die(); 

        $product_info = $user['applied_posts'][0]['postname'];
        $customer_name = $user['f_name'].' '.$user['m_name'].' '.$user['l_name'];
        $customer_emial = $user['email_id'];
	    
        $MERCHANT_KEY = "oi10C6Pl"; //change  merchant with yours
        $SALT = "qTnFUaJjtz";  //change salt with yours 
        $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);       
        
        $this->db->where('application_no',$user['application_no'])->update('users_info',array('payment_tracking_id'=>$txnid));
        //optional udf values 
        $udf1 = '';
        $udf2 = '';
        $udf3 = '';
        $udf4 = '';
        $udf5 = '';
        
        $hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $amount . '|' . $product_info . '|' . $customer_name . '|' . $customer_emial . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . $SALT;
         $hash = strtolower(hash('sha512', $hashstring));
         
        $success = base_url() . 'payment-status';  
        $fail = base_url() . 'payment-status';
        $cancel = base_url() . 'payment-status';
        
        
         $data = array(
            'mkey' => $MERCHANT_KEY,
            'tid' => $txnid,
            'hash' => $hash,
            'amount' => $amount,           
            'name' => $user['f_name'].' '.$user['m_name'].' '.$user['l_name'],
            'productinfo' => $user['applied_posts'][0]['postname'],
            'product_id'=> $user['applied_posts'][0]['post_id'],
            'mailid' => $user['email_id'],
            'phoneno' => $user['phone_no'],
            'action' => "https://sandboxsecure.payu.in",//"https://secure.payu.in"
            'sucess' => $success,
            'failure' => $fail,
            'cancel' => $cancel            
        );
        $data2['page'] = 'payment';
        $data2['title'] = 'Payment';
        $data2['login_user_data']= $this->login_user_data;
        $this->load->view('form/header', $data2);
        $this->load->view('form/payUmoney/confirmation', $data); 
        $this->load->view('form/footer');
	}

	public function paymentStatus(){
		 $status = $this->input->post('status');
         if (empty($status)) {
            redirect(base_url());
         }
       
        $firstname = $this->input->post('firstname');
        $amount = $this->input->post('amount');
        $txnid = $this->input->post('txnid');
        $posted_hash = $this->input->post('hash');
        $key = $this->input->post('key');
        $productinfo = $this->input->post('productinfo');
        $product_id = $this->input->post('product_id');
        $email = $this->input->post('email');
        $salt = "qTnFUaJjtz"; //  Your salt
        $add = $this->input->post('additionalCharges');
        If (isset($add)) {
            $additionalCharges = $this->input->post('additionalCharges');
            $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        } else {
            $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        }
        $data['hash'] = hash("sha512", $retHashSeq);
        $data['amount'] = $amount;
        $data['txnid'] = $txnid;
        $data['posted_hash'] = $posted_hash;
        $data['status'] = $status; 
	    if($status == 'success'){            
	    	$this->db->where('payment_tracking_id',$data['txnid'])->update('users_info',array('payment_order_id'=>$this->input->post('payuMoneyId'),'payment_status'=>'Success'));            
            $data2['page'] = 'payment';
            $data2['title'] = 'Payment';
            $data2['login_user_data']= $this->login_user_data;
            $this->load->view('form/header', $data2);
	        $this->load->view('form/payUmoney/success', $data); 
            $this->load->view('form/footer');  
	    }else{
            $data2['page'] = 'payment';
            $data2['title'] = 'Payment';
            $data2['login_user_data']= $this->login_user_data;
            $this->load->view('form/header', $data2);
	        $this->load->view('form/payUmoney/failure', $data); 
            $this->load->view('form/footer');  
	    }
     
	}

    
}
