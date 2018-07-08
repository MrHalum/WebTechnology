
</style></head>
    <body>

<head><b><h1>PASSPORT APPLICATION - STAGE 2</h1></b></head>
	<head><b><h4 style="Color:red">Before filling up the online application form read the guildline carefully.</h4></b></head>
	<head><b><h4>Fields marked with (*) are mandatory.</h4></b></head>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<fieldset>
		<legend></legend>
		<table width="30%" style="float:left">
		 
			<tr><td><h3> Application Information</h3></td></tr>
			</td>
			
			</tr>
				
				<tr>
				<td>Office no</td>
				<td>:</td>
				<td></td>
				<td><input name="OfficeNo" type="text"  ></td>
				
			</tr>
			
			</tr>
				
				<tr>
				<td>Residence No</td>
				<td>:</td>
				<td></td>
				<td><input name="ResNo" type="text"  ></td>
				
			</tr>
			
			</tr>
				
				<tr>
				<td>Mobile No</td>
				<td>:</td>
				<td></td>
				<td><input name="MobiNo" type="text"  ></td>
				
			</tr>
			
			<tr><td><h3> Emergency Contact Person`s Details</h3></td></tr>
			</td>
			
			</tr>
				
				<tr>
				<td>Name</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td><input name="Emrgname" type="text" required></td>
				
			</tr>
			
			<tr>
				<td> Country</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td>
				
			<select name="Ecountry">
			
			<option value="0" > select</option>
	   <option value="1"> Bangladesh</option>
	   <option value="2"> India</option>
	   <option value="3">Russia</option>
	   <option value="4">Malaysia</option>
	   <option value="5">Mongolia</option>
	   
	  </select>	
	  
			</td>
			
			<tr>
			<td>
			<input name="gtype" type="checkbox" value="tick">Same as permanent Address
			</td>
			</tr>
			
			<tr>
			<td>
			<input name="gtype" type="checkbox" value="tick">Same as present Address
			</td>
			</tr>
			
			<tr>
				<td>Village/house</td>
				<td>:</td>
				<td></td>
				<td><input name="Emergvillname" type="text"></td>
				
			</tr>
			
			
			<tr>
				<td>Road/Block/section</td>
				<td>:</td>
				<td></td>
				<td><input name="emergroadname" type="text"></td>
				
			</tr>
			
			
			<tr>
				<td> District</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td>
			<select name="emergdistrict">
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
			<select name="emergpolstasion">
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
			<select name="emergpostoff" >
	   <option value="0">Bangladesh</option>
	   <option value="1">India</option>
	   <option value="2">Russia</option>
	   <option value="3">Malaysia</option>
	   <option value="4">Mongolia</option>
	   
	  </select>	
			</td>
			</tr>
			
			</tr>
				
				<tr>
				<td>Contact</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td><input name="emergcont" type="text"  required></td>
				
			</tr>
			
			
			</tr>
				
				<tr>
				<td>Email</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td><input name="Emremail" type="text"  ></td>
				
			</tr>
			
			
			<tr>
				<td> Relationship</td>
				<td>:</td>
				<td><h4 style="Color:red">*</td>
				<td>
			<select name="EmrgRelation">
	   <option value="0">select</option>
	   <option value="1">unmarried</option>
	   <option value="2">Married</option>
	   
	   
	  </select>	
			</td>
			</tr>
			</table>
			</div>
			<table width="50%" style="float:right">
			
			<tr><td><h3>Old passport Information</h3></td></tr>
			</td>
			
			<tr>
				<td>Passport no</td>
				<td>:</td>
				<td></td>
				<td><input name="oldpassno" type="text"></td>
				
			</tr><tr>
				<td>Place of issue</td>
				<td>:</td>
				<td></td>
				<td><input name="oldissu" type="text"></td>
				
			</tr><tr>
				<td>date of issue</td>
				<td>:</td>
				<td></td>
				<td><input name="olddate" type="text"></td>
				
			</tr>
			
			<tr>
				<td> Re-issue Reason</td>
				<td>:</td>
				<td></td>
				<td>
			<select name="Reissue">
	   <option value="0">select</option>
	   <option value="1">unmarried</option>
	   <option value="2">Married</option>
	   
	   
	  </select>	
			</td>
			</tr>
			
			<tr>
			<td></td><td></td><td><br></br><br></br><br></br>
			<button><a href='form3.php'>Next</a></button> </td>
			
		<td><br></br><br></br><br></br><input type="submit" name="submit"></td>
		</tr>
			
			
			</table>
			
			
			</table>
			
		
	</fieldset>
</form>