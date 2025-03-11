<!DOCTYPE html>
<html>

<head>
    <title>login system</title>
    <link rel="stylesheet" type="text/css" href="login.css"/> 
</head>

<body>
<h1>Access Granted</h1>

<input name='signout' type='button' value='Signout' onclick='end()'/>
</body>
  
<script>
  function end(){
    window.location = "/login/script/signout.php";
  }
</script>
<body>