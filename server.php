<?php 
error_reporting(0);
    session_start();
	$filename="user.txt";
    $name='';
    $username='';
    $email='';
    $password='';
    $error=0;


    //$db=mysqli_connect('localhost','root','','registration_db');

// when register button is clicked
    if(isset($_POST['register'])){
        $fname=$_POST['fname'];
		$lname=$_POST['lname'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password1=$_POST['password1'];
        $password2=$_POST['password2'];

        if(empty($username)){
            echo '* Username is required'.'<br>';
            $error++;
        }
        if(empty($email)){
            echo '* email is required'.'<br>';
            $error++;
        }

        if(empty($password1)){
            echo '* password is required'.'<br>';
            $error++;
        }

        if($password1 != $password2){
            echo '* password didn\'t match'.'<br>';
            $error++;
        }
		//writing to the txt file
        if($error==0){
			
			$usernameAndPassword=$fname."\r\n".$lname."\r\n".$email."\r\n".$username."\r\n".$password1."\r\n";
			$openfile=fopen($filename,'a');
			fwrite($openfile,$usernameAndPassword);
			fclose($openfile);
		    header('location: index.php');

            }
    }
    
    //when login button is clicked
    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
		
		 if(empty($username)){
            echo '* Username is required'.'<br>';
            $error++;
        }
		
		if(empty($password)){
            echo '* password is required'.'<br>';
            $error++;
        }
		
		 if($error==0){
		$usernameAndPassword=$username."\r\n".$password;
		$documents=file_get_contents($filename);
		if ( preg_match("~\b$usernameAndPassword\b~",$documents)) {
			//echo "matched";
			$_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
		}
		  
		else{
			echo "Wrong User name or Password";
		}
		}
		
		
		
         
        


    }


			


    //when Log out button is clicked
    if (isset($_GET['logout'])) {
        session_destroy();
        
        unset($_SESSION['username']);
        header("location: login.php");
    }


    
   
        






?>