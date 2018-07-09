<?php include('server.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    
    
    <title>Registration</title>
    
</head>
<body>
    <form  style="text-align:center" method='post' action='register.php'>
        <label> First Name</label>
        <input type='text' name='fname' value='<?php echo $name; ?>' > <br><br>
		<label> Last Name</label>
        <input type='text' name='lname' value='<?php echo $name; ?>' > <br><br>
        <label>User Name</label> 
        <input type='text' name='username' value='<?php echo $username; ?>'><br><br>
        <label>Email</label>
        <input type='email' name='email' value='<?php echo $email; ?>'><br><br>
        <label>Password</label>
        <input type='password' name='password1'><br><br>
        <label>Confirm Password</label>
        <input type='password' name='password2'><br><br>
        <button type='submit' name='register'>Register</button> 
    </form>
    <p style="text-align:center">
    <a href='login.php'>Sign in</a>
    </p>



    
</body>
</html>