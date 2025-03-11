<!DOCTYPE html>
<html>

<head>
    <title>login system</title>
    <link rel="stylesheet" type="text/css" href="login.css"/> 
</head>


  

<body>
<div class="loginform">
    <h1>Sign up</h1>
    <form name='loginform' action = "/login/script/newuser.php" method = "POST" onsubmit="return validation()">  
        <div class="txt_field">
            <input type="text" name="first" id="first" required>
            <label><b>Firstname</b></label>
        </div>
        <div class="txt_field">
            <input type="text" name="last" id="last" required>
            <label><b>Lastname</b></label>
        </div>
        <div class="txt_field">
            <input type="text" name="email" id="email" required>
            <label><b>Email</b></label>
        </div>
        <div class="txt_field">
            <input type="text" name="user" id="user" required>
            <label><b>Username</b></label>
        </div>
        <div class="txt_field">
            <input type="password" name="pass" id="pass" required>
            <label><b>Password</b></label>
        </div>
        <div class="txt_field">
            <input type="password" name="repass" id="repass" required>
            <label><b>Re-enter Password</b></label>
        </div>
        <input type="submit" value="Login" id="submit"/>
        <div class="signup_link">
            Already a Member? <a href="index.php">Log in</a>
        </div>
    </form>
</div>

<script>  
function validation()  
{  
    var reps=document.loginform.repass.value;  
    var ps=document.loginform.pass.value;  
    if(ps != reps) {  
        alert("The passwords don't match!!!!");  
        return false;  
    }  
    else{
        return true;
    }
}
</script>

</body>
</html>
