<?php      
    $host = "localhost";  
    $user = "root";
    $pass = "";
    $db_name = "otpphp";  
      
    $con = new mysqli($host, $user, $pass, $db_name);
    if ($con->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>