<?php

error_reporting(0);
    session_start();
	$filename="user.txt";
	
	$error=0;
	
	
	if($_POST) {
		if(isset($_POST['submit'])) {
			
			
			if($_POST['applyin'] == '0') {
				echo '<p> *Please select an option from Apply In.</p>';
				$error++;
			}
			
			
		
			if($_POST['passtype'] == '0') {
				echo '<p> *Please select an option from Passport Type .</p>';
				$error++;
			}
			
			if($_POST['fathernationality'] == '0') {
				echo '<p> *Please select an option from father nationality .</p>';
				$error++;
			}	
		
			if(empty($_POST['nameappli'])){
            echo '* Username is required'.'<br>';
            $error++;
        }
			
			if(empty($_POST['surname'])){
            echo '* SUrName is required'.'<br>';
            $error++;
			
			}
			
			if($_POST['nationality'] == '0') {
				echo '<p> *Please select an option from nationality.</p>';
				$error++;
			}
			
			
			if(empty($_POST['Dbirth'])){
            echo '* Date of Birth is required'.'<br>';
            $error++;
			
			}
			
			if(empty($_POST['fathername'])){
            echo '* Father`s name is required'.'<br>';
            $error++;
			
			}
			
			if(empty($_POST['mothername'])){
            echo '* Mother`s name is required'.'<br>';
            $error++;
			
			}
			
			if(empty($_POST['BirId'])){
            echo '* BirthId is required'.'<br>';
            $error++;
			
			}
			
			if($_POST['predistrict'] == '0') {
				echo '<p> *Please select an option from Present District.</p>';
				$error++;
			}
			
			
			if($_POST['prepolstation'] == '0') {
				echo '<p> *Please select an option from Present Police Stasion.</p>';
				$error++;
			}
			
			
			
			if($_POST['prepostoff'] == '0') {
				echo '<p> *Please select an option from Present Post Office.</p>';
				$error++;
			}
			
			
			
			if($_POST['perdistrict'] == '0') {
				echo '<p> *Please select an option from Permanent District.</p>';
				$error++;
			}
			
			
			if($_POST['perpolstasion'] == '0') {
				echo '<p> *Please select an option from Permanent Police Stasion.</p>';
				$error++;
			}
			
			
			
			if($_POST['perpostoff'] == '0') {
				echo '<p> *Please select an option from Permanent Post Office.</p>';
				$error++;
			}
			
			
			if($error==0){
			
			$usernameAndPassword="Apply in : ".$_POST['applyin'] ."\r\n Passport type ".$_POST['passtype']."\r\n Name of Applicant :   ".$_POST['nameappli'] ."\r\n Surname :   ".$_POST['surname']
			."\r\n Gender :   ".$_POST['Gtype'] ."\r\n Nationality :   ".$_POST['nationality'] ."\r\n Date of Birth :   ".$_POST['Dbirth'] ."\r\n Fathers name :   ".$_POST['fathername']
			."\r\n Mother`sname :   ".$_POST['mothername']."\r\n Birth ID :   ".$_POST['BirId']
			."\r\n Present Address :   ".$_POST['prevname'].",".$_POST['preroadname'].",".$_POST['predistrict'].",".$_POST['prepolstation'].",".$_POST['prepostoff']
			."\r\n Permanent Address :   ".$_POST['pervillname'].",".$_POST['perroadname'].",".$_POST['perdistrict'].",".$_POST['perpolstasion'].",".$_POST['perpostoff']
			."\r\n Email :   ".$_POST['Email']
			;
			
			
			$openfile=fopen($filename,'a');
			fwrite($openfile,$usernameAndPassword);
			fclose($openfile);
		   // header('location: index.php');

            }
			
		}
	}
?>

</style></head>
    <body>

<head><b><h1>PASSPORT APPLICATION - STAGE 1</h1></b></head>
	<head><b><h4 style="Color:red">Before filling up the online application form read the guildline carefully.</h4></b></head>
	<head><b><h4>Fields marked with (*) are mandatory.</h4></b></head>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<fieldset>
		<legend></legend>
		<table width="30%" style="float:left">
		 
			<tr><td><h3>Passport Application Information</h3></td></tr>
			</td>
			
			<tr>
				<td> Applying in</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td>
				
			<select name="applyin">
			
			<option value="0" > select</option>
	   <option value="Bangladesh"> Bangladesh</option>
	   <option value="India"> India</option>
	   <option value="Russia">Russia</option>
	   <option value="Malaysia">Malaysia</option>
	   <option value="Mongolia">Mongolia</option>
	   
	  </select>	
	  
			</td>
			
			
			
			</tr>
			
			<tr>
			<td> Application Type</td>
				<td>:</td>
				<td></td>
				<td><b> New APPLICATION </b></td>
				
				
				
				
			</tr>
			
			
			<tr>
			<td> Passport Type</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
					<td>
			<select name="passtype">
	   <option value="0">Select</option>
	   <option value="Regular">Regular</option>
	   <option value="Diplomatic">Diplomatic</option>
	   <option value="Official">Official </option>
			</select>	
			</td>
			
			
			</tr>
			
			<tr>
			<td>Delivery Type</td>
			<td>:</td>
			<td></td>
			<td><input name="Dtype" type="radio" value="Regular">Regular
			<input name="Dtype" type="radio" value="Express">Express	
			</td>
			</tr>
			
			<tr><td><br></br><h3>Personal Information</h3></td>
				
				
				
				
				</tr>
				
				<tr>
				<td>Name of Applicant</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td><input name="nameappli" type="text"  ></td>
				
			</tr>
			
			
			<tr>
				<td>First Part(given Name)</td>
				<td>:</td>
				<td></td>
				<td><input name="fname" type="text"></td>
				
			</tr>
			
			<tr>
				<td>Second Part(surName)</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td><input name="surname" type="text"  ></td>
				
			</tr>
			
			
			<tr>
			<td><br></br>Guardian
			<input name="gtype" type="checkbox" value="tick">tick only if Applicant is legally adapted
			
			</td>
			</tr>
			
			<tr>
				<td>Father`s name</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td><input name="fathername" type="text"></td>
				
			</tr>
			
			
			<tr>
				<td>Father`s Nationality</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td>
			<select name="fathernationality">
	   <option value="0">select</option>
	   <option value="Bangladeshi">Bangladeshi</option>
	   <option value="Russian">Russian</option>
	   <option value="Malaysian">Malaysian</option>
	   <option value="Mongolian">Mongolian</option>
	   
	  </select>	
			</td>
			</tr>
			
			<tr>
				<td>Father`s Profession</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td>
			<select name="fatherpro">
	   <option value="0">Select</option>
	   <option value="Govt. job">Govt. job</option>
	   <option value="Private job">Private job</option>
	   <option value="Business">Business</option>
	  </select>	
			</td>
			</tr>
			
			<tr>
				<td>Mother`s name</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td><input name="mothername" type="text"></td>
				
			</tr>
			
			
			<tr>
				<td>Mother`s Nationality</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td>
			<select name="mothernationality">
	   <option value="0">Select</option>
	   <option value="Bangladeshi">Bangladeshi</option>
	   <option value="Russian">Russian</option>
	   <option value="Malaysian">Malaysian</option>
	   <option value="Mongolian">Mongolian</option>
	   
	  </select>	
			</td>
			</tr>
			
			<tr>
				<td>Mother`s Profession</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td>
			<select name="motherpro">
	   <option value="0">Select</option>
	   <option value="Govt. job">Govt. job</option>
	   <option value="Private job">Private job</option>
	   <option value="Business">Business</option>
	  </select>	
			</td>
			</tr>
			
			<tr>
				<td>Spouse`s name</td>
				<td>:</td>
				<td></td>
				<td><input name="Spousename" type="text"></td>
				
			</tr>
			
			
			<tr>
				<td>Spouse`s Nationality</td>
				<td>:</td>
				<td></td>
				<td>
			<select name="Spousenationality">
	   <option value="0">Select</option>
	   <option value="Bangladeshi">Bangladeshi</option>
	   <option value="Russian">Russian</option>
	   <option value="Malaysian">Malaysian</option>
	   <option value="Mongolian">Mongolian</option>
	   
	  </select>	
			</td>
			</tr>
			
			
			<tr>
				<td>Spouse`s Profession</td>
				<td>:</td>
				<td></td>
				<td>
			<select name="Spousepro">
	   <option value="0">Select</option>
	   <option value="1">Govt. job</option>
	   <option value="2">Private job</option>
	   <option value="3">Business</option>
	  </select>	
			</td>
			</tr>
			
			<tr>
				<td>Marital Status</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td>
			<select name="marital">
	   <option value="0">Select</option>
	   <option value="1">married</option>
	   <option value="2">unmarried</option>
	  </select>	
			</td>
			</tr>
			
			
			<tr>
				<td>Applicant`s Profession</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td>
			<select name="applipro">
	   <option value="0">Select</option>
	   <option value="1">Govt. job</option>
	   <option value="2">Private job</option>
	   <option value="3">Business</option>
	  </select>	
			</td>
			</tr>
			
			<tr>
				<td> Country of Birth</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td>
			<select name="cbirth">
	   <option value="0">Select</option>
	   <option value="Bangladeshi">Bangladeshi</option>
	   <option value="Russian">Russian</option>
	   <option value="Malaysian">Malaysian</option>
	   <option value="Mongolian">Mongolian</option>
	   
	  </select>	
			</td>
			</tr>
			
			<tr>
				<td>Birth District</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td>
			<select name="birthdist">
	   <option value="0">Select</option>
	   <option value="Dhaka">Dhaka</option>
	   <option value="comilla">comilla</option>
	   <option value="Rajshahi">Rajshahi</option>
	  </select>	
			</td>
			</tr>
			</table>
			</div>
			<table width="50%" style="float:right">
			
			<tr>
			<td>Date of Birth</td> 
			<td>:</td> 
			<td><h4 style="Color:red">*</td>
			<td><input name="Dbirth" type="text"></td>
			<td><font size="2" style="Color:blue"><i>(dd/mm/yyyy)</i></font>	</td>	
			</td>
			</tr>
			
			<tr>
			<td>Gender</td>
			<td>:</td>
			<td><h4 style="Color:red">*</td>
			<td><input name="Gtype" type="radio" value="Male">Male
			<input name="Gtype" type="radio" value="Female">Female	
			<input name="Gtype" type="radio" value="Others">Others
			</td>
			</tr>
			
			<tr>
				<td>Birth Id No.</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td><input name="BirId" type="text"></td>
				
			</tr>
			
			<tr>
				<td>National Id No.</td>
				<td>:</td>
				<td></td>
				<td><input name="Nidname" type="text"></td>
				
			</tr>
			
			<tr>
				<td>Tax Id No.</td>
				<td>:</td>
				<td></td>
				<td><input name="Tidname" type="text"></td>
				
			</tr>
			
			<tr>
			<td>Height</td>
			<td>:</td>
			<td><h4 style="Color:red">*</td>
			<td><input name="cm" type="number" >cm
			<input name="inch" type="number" >inch	
			</tr>
			
			<tr>
				<td>Religion</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td>
			<select name="Relnane">
	   <option value="0">Select</option>
	   <option value="Hindu">Hindu</option>
	   <option value="Muslim">Muslim</option>
	   <option value="Christan">Christan</option>
	  </select>	
			</td>
			</tr>
			
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td><input name="Email" type="text"></td>
				
			</tr>
			
			<tr><td><br></br><h3>Citizenship Information</h3></td></tr>
			
			<tr>
				<td> Nationality</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td>
			<select name="nationality">
	   <option value="0">select</option>
	   <option value="India">India</option>
	   <option value="Russia">Russia</option>
	   <option value="Malaysia">Malaysia</option>
	   <option value="Mongolia">Mongolia</option>
	   
	  </select>	
			</td>
			
			
			
			<tr>
				<td> Citizenship Status</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td>
			<select name="cstutus">
	   <option value="0">Bangladesh</option>
	   <option value="1">India</option>
	   <option value="2">Russia</option>
	   <option value="3">Malaysia</option>
	   <option value="4">Mongolia</option>
	   
	  </select>	
			</td>
			</tr>
			
			
			<tr>
			<td>Dual citizedship</td>
			<td>:</td>
			<td><h4 style="Color:red">*</td>
			<td><input name="cship" type="radio" value="Regular">Yes
			<input name="cship" type="radio" value="Express">No	
			</td>
			</tr>
			
			<tr><td><br></br><h3>Present Address</h3></td></tr>
			
			<tr>
				<td>Village/house</td>
				<td>:</td>
				<td></td>
				<td><input name="prevname" type="text"></td>
				
			</tr>
			
			
			<tr>
				<td>Road/Block/section</td>
				<td>:</td>
				<td></td>
				<td><input name="preroadname" type="text"></td>
				
			</tr>
			
			
			<tr>
				<td> District</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td>
			<select name="predistrict">
	   <option value="0">Bangladesh</option>
	   <option value="1">India</option>
	   <option value="2">Russia</option>
	   <option value="3">Malaysia</option>
	   <option value="4">Mongolia</option>
	   
	  </select>	
			</td>
			</tr>
			
			<tr>
				<td> Police Station</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td>
			<select name="prepolstation">
	   <option value="0">Bangladesh</option>
	   <option value="1">India</option>
	   <option value="2">Russia</option>
	   <option value="3">Malaysia</option>
	   <option value="4">Mongolia</option>
	   
	  </select>	
			</td>
			</tr>
			
			
			<tr>
				<td> Post office</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td>
			<select name="prepostoff">
	   <option value="0">Bangladesh</option>
	   <option value="1">India</option>
	   <option value="2">Russia</option>
	   <option value="3">Malaysia</option>
	   <option value="4">Mongolia</option>
	   
	  </select>	
			</td>
			</tr>
			
			<tr><td><br></br><h3>Present Address</h3></td></tr>
			
			<tr>
			<td>
			<input name="gtype" type="checkbox" value="tick">Same as above
			</td>
			</tr>
			
			<tr>
				<td>Village/house</td>
				<td>:</td>
				<td></td>
				<td><input name="pervillname" type="text"></td>
				
			</tr>
			
			
			<tr>
				<td>Road/Block/section</td>
				<td>:</td>
				<td></td>
				<td><input name="perroadname" type="text"></td>
				
			</tr>
			
			
			<tr>
				<td> District</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td>
			<select name="perdistrict">
	   <option value="0">Bangladesh</option>
	   <option value="1">India</option>
	   <option value="2">Russia</option>
	   <option value="3">Malaysia</option>
	   <option value="4">Mongolia</option>
	   
	  </select>	
			</td>
			</tr>
			
			<tr>
				<td> Police Station</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td>
			<select name="perpolstasion">
	   <option value="0">Bangladesh</option>
	   <option value="1">India</option>
	   <option value="2">Russia</option>
	   <option value="3">Malaysia</option>
	   <option value="4">Mongolia</option>
	   
	  </select>	
			</td>
			</tr>
			
			
			<tr>
				<td> Post office</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td>
			<select name="perpostoff">
	   <option value="0">select</option>
	   <option value="1">India</option>
	   <option value="2">Russia</option>
	   <option value="3">Malaysia</option>
	   <option value="4">Mongolia</option>
	   
	  </select>	
			</td>
			</tr>
			
			
			<tr>
			<td></td><td></td><td><br></br><br></br><br></br>
			<button><a href='form2.php'>Next</a></button> </td>
			
		<td><br></br><br></br><br></br><input type="submit" name="submit"></td>
		</tr>
			
			
			</table>
		
		
	</fieldset>
</form>