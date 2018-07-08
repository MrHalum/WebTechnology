<?php

error_reporting(0);
    session_start();
	$filename="user.txt";
	
	$error=0;
	
	
	if($_POST) {
		if(isset($_POST['submit'])) {
			
			if(empty($_POST['Amount'])){
            echo '* Amount is required'.'<br>';
            $error++;
			
			}if(empty($_POST['Dtpay'])){
            echo '* Date Of Payment is required'.'<br>';
            $error++;
			
			}if(empty($_POST['RecNo'])){
            echo '* Receipt is required'.'<br>';
            $error++;
			
			}


			
			if($error==0){
			
			$usernameAndPassword="Amount : ".$_POST['Amount'] ."\r\n Date of Payment ".$_POST['Dtpay']."\r\n Receipt no :   ".$_POST['RecNo'] ;
			
			
			$openfile=fopen($filename,'a');
			fwrite($openfile,$usernameAndPassword);
			fclose($openfile);
		   

            }
			
		}
	}
?>

</style></head>
    <body>

<head><b><h1>PASSPORT APPLICATION - STAGE 3</h1></b></head>
	<head><b><h4 style="Color:red">Before filling up the online application form read the guildline carefully.</h4></b></head>
	<head><b><h4>Fields marked with (*) are mandatory.</h4></b></head>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<fieldset>
		<legend></legend>
		<table width="30%" style="float:left">
		 
			<tr><td><h3>Payment Information</h3></td></tr>
			</td>
			
			</tr>
		
		<tr>
			<td>Payment Type</td>
			<td>:</td>
			<td></td>
			<td><input name="pType" type="radio" value="Regular">Online
			<input name="pType" type="radio" value="Express">Non-online	
			</td>
			</tr>
			
			<tr>
			<td>
			<input name="gtype" type="checkbox" value="tick">Skip Payment
			</td>
			</tr>
			
			</tr>
				
				<tr>
				<td>Amount</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td><input name="Amount" type="text"  ></td>
				
			</tr>
			
			<tr>
				<td>Date of Payment</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td><input name="Dtpay" type="text"  ></td>
				
			</tr><tr>
				<td>Receipt no</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td><input name="RecNo" type="text"  ></td>
				
			</tr>
			
			<tr>
			<td> Name Of Bank</td>
				<td>:</td>
				<td></td>
					<td>
			<select name="Bankname">
	   <option value="0">Select</option>
	   <option value="1">Regular</option>
	   <option value="2">Diplomatic</option>
	   <option value="3">Official </option>
			</select>	
			</td>
			
			
			</tr>
			
			<tr>
			<td> Name Of Branch</td>
				<td>:</td>
				<td></td>
					<td>
			<select name="BranchName">
	   <option value="0">Select</option>
	   <option value="1">Regular</option>
	   <option value="2">Diplomatic</option>
	   <option value="3">Official </option>
			</select>	
			</td>
			
			
			</tr>
			
			
			<tr>
			<td></td><td></td><td><br></br><br></br><br></br>
			<button><a href='formUlti.php'>Next</a></button> </td>
			
		<td><br></br><br></br><br></br><input type="submit" name="submit"></td>
		</tr>
			
			
			</table>
			
			
			</table>
			
		
	</fieldset>
</form>