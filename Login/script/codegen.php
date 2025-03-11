<?php
session_start();
$tries = 0;
$_SESSION["triesattempt"] = "$tries";

$id = $_SESSION['idsession'];
$otpcalc = hash('sha256', hexdec(date("YmdHis")*$id));
$code = str_split($otpcalc, 8);
$random = rand(0,7);
$_SESSION["otpcode"] = "$code[$random]"; 

 header("Location: ../otp.php");
 ?>