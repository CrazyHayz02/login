<?php     
    session_start();

    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass']; 
       
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password); 
      
        $sql = "select *from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        


          
        if($count == 1){  
            $id = $row['id'];
            $email = $row['email'];
            $_SESSION["idsession"] = "$id";
            $_SESSION["emailsession"] = "$email";
            header('Location: codegen.php');
        }  
        else{  
            header('Location: ../index.php');  
        }    
        mysqli_close($con); 
?>  

<html>
    <head>
        <title>Welcome</title>
    </head>
</html>