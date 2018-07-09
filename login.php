<?php include('count.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head><b><center><h1 style="Color:red">Character Counter</h1></center></b></head>
<body>
    <form style="text-align:center"  method='post' action='login.php'>
        
        
        <input name="OfficeNo" type="text" value='<?php echo $OfficeNo; ?>' ><br><br>
        
        
       
        <button type='submit' name='main'>Count</button> 
    </form>
    



    
</body>
</html>