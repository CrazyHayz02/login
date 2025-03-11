<!DOCTYPE html>
<?php
session_start();
$otp = $_SESSION["otpcode"];
echo "<script>alert('$otp')</script>";
?>
<html>
<head>
  <title>OTP system</title>
  <link rel="stylesheet" type="text/css" href="login.css"/> 

</head>
<div class="loginform">
    <h1>OTP</h1>
    <form action = "/login/script/otpauth.php" method = "POST">
    <div class="txt_field">
        <input type="password"  name="pass" id="pass" required>
        <label><b>Enter code</b></label> 
    </div>
    <input type="submit" value="Login" id="submit" name="submit"/>
</form>
  <?php
      $tries = $_SESSION["triesattempt"];  
      if ($tries < 3 && $tries > 0){
        echo "<p> Try Again!!!</p>";
      }
      elseif($tries >= 3){
        echo "<p>No More Tries</p> <h2>New Code? <br> <input name='newcode' type='button' value='Retry' onclick='reset()'/></h2>";
        echo "<script> document.getElementById('pass').disabled = true; document.getElementById('submit').disabled = true; </script>";
      }
      else{
        echo "<p><br></P>";
      }
  ?>
</div>
<script>
  function reset(){
    window.location = "/login/script/codegen.php";
  }
</script>

</body>
</html>
 