<?php
session_start();

$email = $_SESSION['idsession'];
$code = $_SESSION["otpcode"];

$to = "$email";
$subject = "OTP";

$message = "
<html>
<head>
<title>OTP code</title>
</head>
<body>
<p>$code</p>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: aaron.hayes02@otpproject.com>' . "\r\n";

mail($to,$subject,$message,$headers);

?>