<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$subject = "Hotel LB Continental Query";
$mail_body = "<H1>Hotel LB Continental</H1>".
"<table style='width:50%'>
  <tr>
    <td>Name</td>
    <td>".$name."</td>
  </tr>
  <tr>
    <td>Email</td>
    <td>".$email."</td>
  </tr>
  <tr>
    <td>Phone</td>
    <td>".$phone."</td>
  </tr>
    <tr>
    <td>Message</td>
    <td>".$message."</td>
  </tr>
</table>";

/*ini_set('SMTP','smtp.gmail.com');
ini_set('smtp_port',465);
ini_set('username','hotellbcontinental1@gmail.com');
ini_set('password','hotellbcontinental');*/

mail('hotellbcontinental1@gmail.com',$subject,$mail_body,$headers);
header( "Location: contact.php" );

?>