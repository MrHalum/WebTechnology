<?php

error_reporting(0);
    session_start();
	$filename="user.txt";
	
	$error=0;
	
	
	if($_POST) {
		if(isset($_POST['main'])) {
			
			if(empty($_POST['OfficeNo'])){
            echo '* type any sentence '.'<br>';
            $error++;
        }
		
		if($error==0){
			 
			 $str = $_POST['OfficeNo'];
			 $strArray = count_chars($str,1);
			 

foreach ($strArray as $key=>$value)
   {
   echo "The character <b>'".chr($key)."'</b> was found $value time(s)<br>";
   
  
   }
   
   
   
   //echo "Total words are ".(str_word_count($_POST['OfficeNo']));
		$count=str_word_count($_POST['OfficeNo'],1);
		$arr = array_count_values($count);
		
		
		
	   //print_r($arr);
			
			}}
	}
?>

<table>

<tr>
    <th>1</th>
    <th>2</th>
    <th>3</th>
</tr>

<?php 
    foreach ($result as $arr) 
    { 
        echo '<tr>';
        echo '<td>' . $arr['id'] . '</td>';
        echo '<td>' . $arr['first_name'] . '</td>';
        echo '<td>' . $arr['last_name'] . '</td>';
        echo '</tr>';
    }
?>

</table>


