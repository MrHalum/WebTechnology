<?php include('server.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    
    
    <title>Registration</title>
    
</head>
<body>
    <form style="text-align:center"  method='post' action='login.php'>
        <label>Name</label>
        
        <input type='text' name='username'><br><br>
        
        <label>Password</label>
        <input type='text' name='password'><br>
       
        <button type='submit' name='login'>Log In</button> 
    </form>
    <p style="text-align:center">
    <a href='register.php'>Sign Up</a>
    </p>



    
</body>
</html>