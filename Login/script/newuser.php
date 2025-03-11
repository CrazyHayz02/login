<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../login.css"/> 
    </head>

<?php     
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];
    $lastname = $_POST['last'];  
    $firstname = $_POST['first'];
    $email = $_POST['email'];  
       
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password); 
      
        $sql = "INSERT INTO `users` (`firstname`, `lastname`, `username`, `email`, `password`) VALUES ('$firstname', '$lastname', '$username', '$email', '$password')";  

        if (mysqli_query($con, $sql)) {
            echo "  <div class='loginform'>
                        <h1>Success<br></h1>

                        <h2>
                            Please Login
                            <input name='login' type='button' value='login' onclick='loginbut()'/>
                        </h2>
                        <script>
                            function loginbut(){
                                window.location = '../';
                            }
                        </script>

                ";
        }
        else{
            echo "Error: " . $sql . "<br>" . mysqli_error($con); 
        }
        mysqli_close($con);
?>
</html>