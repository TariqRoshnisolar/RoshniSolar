<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$cname = $_POST['company'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$message = $_POST['message'];

$mailid="ssawan99@gmail.com";
 $to = $mailid;

$subject = "Contact Us Form";
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
//echo $message;

// Obtain file upload vars
// $fileatt      = $_FILES['fileatt']['tmp_name'];
// $fileatt_type = $_FILES['fileatt']['type'];
// $fileatt_name = $_FILES['fileatt']['name'];
// echo $aa=filesize($fileatt);
// $headers = "From: Demo <MonsterMail@hostmonster.com> ";
//
//if (is_uploaded_file($fileatt)) {
//  // Read the file to be attached ('rb' = read binary)
//  $file = fopen($fileatt,'rb');
//  $data = fread($file,filesize($fileatt));
//  fclose($file);
//
//  // Generate a boundary string
//  $semi_rand = md5(time());
//  $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
//
//  // Add the headers for a file attachment
//  $headers .= "\nMIME-Version: 1.0\n" .
//              "Content-Type: multipart/mixed;\n" .
//              " boundary=\"{$mime_boundary}\"";
//
//  // Add a multipart boundary above the plain message
//  $message = "This is a multi-part message in MIME format.\n\n" .
//             "--{$mime_boundary}\n" .
//             "Content-Type: text/html; charset=\"iso-8859-1\"\n" .
//             "Content-Transfer-Encoding: 7bit\n\n" .
//             $message . "\n\n";
//
//  // Base64 encode the file data
//  $data = chunk_split(base64_encode($data));
//
//  // Add file attachment to the message
//  $message .= "--{$mime_boundary}\n" .
//              "Content-Type: {$fileatt_type};\n" .
//              " name=\"{$fileatt_name}\"\n" .
//              "Content-Disposition: attachment;\n" .
//              " filename=\"{$fileatt_name}\"\n" .
//              "Content-Transfer-Encoding: base64\n\n" .
//              $data . "\n\n" .
//              "--{$mime_boundary}--\n";
//}

// Send the message
$send=mail($to,$subject,$message,$headers);
if($send)
{
    echo 'send';
}
else{
    echo 'not send';
}


?>

