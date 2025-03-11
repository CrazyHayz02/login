<?php
    session_start();

    $otp = $_POST['pass'];

    if ($otp == $_SESSION["otpcode"]){
        header('Location: ../home.php');
    }
    else{   
        $tries =$_SESSION["triesattempt"];  
        $tries = $tries + 1;
        $_SESSION["triesattempt"] = "$tries";
        header('Location: ../otp.php');
    }

?>
    