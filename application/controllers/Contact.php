<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * @package Contact :  CodeIgniter Contact Form
 *
 * @author TechArise Team
 *
 * @email  info@techarise.com
 *
 * Description of Contact Controller
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // load email lib
        $this->load->library('email');
    }
    // contact
    public function index() {
        $data['page'] = 'contact';
        $data['title'] = 'Contact Form ';
        $this->load->view('contact/index', $data);
    }


           

    public function dealer_mail_send(){
        if (isset($_REQUEST['submit']))
        {
            $name = $_REQUEST['name'];
            $gst = $_REQUEST['gst'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];
            $cname = $_REQUEST['company'];
            $add = $_REQUEST['address'];
            $state = $_REQUEST['state'];
            $city = $_REQUEST['city'];
            $pincode = $_REQUEST['pincode'];
            $message = $_REQUEST['message'];
            $mailid="help@uvsil.in";
            $to = $mailid;

            $subject = "Dealership Form From $name";

            $headers = "";

            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $message = "<html>
<body>
<table width='650' border='0' style='border:2px solid #ccc; padding:2px; font-family:Arial, Helvetica, sans-serif; font-size:14px;' cellspacing='0' cellpadding='8'>

 <tr>
    <td><table width='650' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp;  Name of the contact person:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$name."</td>
  </tr>
  
     
 <tr> 
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp;Email:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$email."</td>
  </tr>
 
 <tr> 
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp;Phone:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$phone."</td>
  </tr>
  
  <tr> 
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp;Company Name:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$cname."</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp; GST No.:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$gst."</td>
  </tr>
  
  <tr> 
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp; Address:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$add."</td>
  </tr>
  
	<tr> 
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp;State:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$state."</td>
  </tr>
  <tr> 
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp;City:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$city."</td>
  </tr>
 
 <tr> 
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp; Pin Code:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$pincode."</td>
  </tr>
 
  <tr> 
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp;Message:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$message."</td>
  </tr>
  
 </table></td></tr></table></body>
  
 
 
</html>";


// Send the message
            $send=mail($to,$subject,$message,$headers);
            if($send)
            {
                $this->session->set_flashdata('send_success', 'Thank you. We will get you shortly');
                redirect(base_url().'page/franchise-and-dealership');
            }
            else{
                $this->session->set_flashdata('send_fail', 'Mail has not been sent successfully');
                redirect(base_url().'page/franchise-and-dealership');
            }

        }
    }

    public function enquiry_send(){
        if (isset($_REQUEST['submit']))
        {
            $fname = $_REQUEST['fname'];
            $lname = $_REQUEST['lname'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];
            $cname = $_REQUEST['company'];
            $country = $_REQUEST['country'];
            $state = $_REQUEST['state'];
            $city = $_REQUEST['city'];
            $message = $_REQUEST['message'];
            $mailid="help@uvsil.in";
            $to = $mailid;

            $subject = "Contact Us Form from- $fname $lname";
            $headers = "";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $message = "<html>
<body>
<table width='650' border='0' style='border:2px solid #ccc; padding:2px; font-family:Arial, Helvetica, sans-serif; font-size:14px;' cellspacing='0' cellpadding='8'>

 <tr>
    <td><table width='650' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp; First Name:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$fname."</td>
  </tr>
  
     <tr>
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp;Last Name:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$lname."</td>
  </tr>
 <tr> 
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp;Email:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$email."</td>
  </tr>
 
 <tr> 
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp;Phone:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$phone."</td>
  </tr>
  
  <tr> 
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp;Company Name:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$cname."</td>
  </tr>
  
  <tr> 
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp;Country:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$country."</td>
  </tr>
  
	<tr> 
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp;State:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$state."</td>
  </tr>
  <tr> 
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp;City:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$city."</td>
  </tr>
 
  <tr> 
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp;Message:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$message."</td>
  </tr>
  
 
  
 
 
</html>";


// Send the message
            $send=mail($to,$subject,$message,$headers);
            if($send)
            {
                $this->session->set_flashdata('send_success', 'Mail has been sent successfully');
                redirect(base_url().'page/enquiries');
            }
            else{
                $this->session->set_flashdata('send_fail', 'Mail has not been sent successfully');
                redirect(base_url().'page/enquiries');
            }

        }
    }


    public function survey_send(){
        if (isset($_REQUEST['submit']))
        {
            $name = $_REQUEST['name'];

            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];
            $type = $_REQUEST['survey'];

            $state = $_REQUEST['state'];
            $city = $_REQUEST['city'];
            $message = $_REQUEST['message'];
            $mailid="help@uvsil.in";
            $to = $mailid;

            $subject = "Survey Form from- $name";
            $headers = "";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $message = "<html>
<body>
<table width='650' border='0' style='border:2px solid #ccc; padding:2px; font-family:Arial, Helvetica, sans-serif; font-size:14px;' cellspacing='0' cellpadding='8'>

 <tr>
    <td><table width='650' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp; First Name:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$name."</td>
  </tr>
  
     
 <tr> 
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp; Email:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$email."</td>
  </tr>
 
 <tr> 
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp;Phone:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$phone."</td>
  </tr>
  
  <tr> 
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp; Survey Type:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$type."</td>
  </tr>
  
  
  
	<tr> 
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp;State:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$state."</td>
  </tr>
  <tr> 
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp;City:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$city."</td>
  </tr>
 
  <tr> 
    <td height='30' valign='middle' bgcolor='#E4EFFF' style='font-weight:bold; color:#333333'>&nbsp;&nbsp;Message:</td>
  </tr>
  <tr>
    <td height='30' valign='middle' bgcolor='#FFFFFF' style='color:#333333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$message."</td>
  </tr>
  
 
  
 
 
</html>";


// Send the message
            $send=mail($to,$subject,$message,$headers);
            if($send)
            {
                $this->session->set_flashdata('send_success', 'Thank you. Mail has been sent successfully');
                redirect(base_url());
            }
            else{
                $this->session->set_flashdata('send_fail', 'Mail has not been sent successfully');
                redirect(base_url());
            }

        }
    }

}
?>