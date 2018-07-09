<?php include('server.php');?>
<?php 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }  
?>
<!DOCTYPE html>
<html>
    
    <body>
        <h1>Welcome <?php echo strtoupper($_SESSION['username'])?> </h1>
        <form method='GET' action='index.php'>
        <?php include('file.php')?>
        <br>
			

        <button type='submit' name='logout'>logout</button>

        </form>
    </body>
</html>