<!DOCTYPE html>
<html>

<head>
    <title>login system</title>
    
    <link rel="stylesheet" type="text/css" href="login.css"/>
</head>


  

<body>
<div class="loginform">
    <h1>Login</h1>
    <form action = "/login/script/authentication.php" onclick="return validate()" method = "POST">  
        <div class="txt_field">
            <input type="text" name="user" id="user" required>
            <label class="neontext"><b>Username</b></label>
        </div>
        <div class="txt_field">
            <input type="password" name="pass" id="pass" required>
            <label class="neontext"><b>Password</b></label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login" id="submit"/>
        <div class="signup_link">
            Not a Member? <a href="signup.php">Sign Up</a>
        </div>
    </form>
</div>


<script>  
function validation()  
{  
    var id=document.f1.user.value;  
    var ps=document.f1.pass.value;  
    if(id.length=="" && ps.length=="") {  
        alert("User Name and Password fields are empty");  
        return false;  
    }  
    else  
    {  
        if(id.length=="") {  
            alert("User Name is empty");  
            return false;  
        }   
        if (ps.length=="") {  
        alert("Password field is empty");  
        return false;  
        }  
    }                             
}  
</script>

</body>
</html>
