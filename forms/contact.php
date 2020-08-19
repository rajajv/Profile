<?php
$contact_name=$_POST['name'];
$contact_email=$_POST['email'];
$contact_message=$_POST['message'];
$to_email = 'rajajaisankar11@gmail.com'; //you can give email id to whom you need to send
$html = $contact_message;
$subject = $_POST['subject'];
$message = $html;
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: RAJA' . "\r\n"; //DONT GIVE SPACE IN "ABC"  //you can replace your value but no space.. if u give space you can get email in spam only..
$response = mail($to_email,$subject,$message,$headers);
if($response)
{
    echo "Mail sent";
}
else
{
    echo "Not sent.. Try later";
}
?>