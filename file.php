<?php

//load index page

			$user=file('user.txt');
			//$username=trim($_SESSION['username']);
			$len=count($user);
			for($i=10;$i<=$len;$i+=20){
				$a=trim($user[$i]);
						
					
						$p=$i-10;
						
						
						echo "<h3>Personal Info summary</h3> ";
						
						
						echo " ".$user[$p+2]."<br>";
						echo " ".$user[$p+3]."<br>";
						echo " ".$user[$p+4]."<br>";
						echo " ".$user[$p+5]."<br>";
						echo " ".$user[$p+6]."<br>";
						echo " ".$user[$p+7]."<br>";
						echo " ".$user[$p+8]."<br>";
						echo " ".$user[$p+9]."<br>";
						
						
						
						echo "<h3>Passport Info summary</h3> ";
						echo " ".$user[$p]."<br>";
						echo " ".$user[$p+1]."<br>";
						
						
						echo "<h3>Contact Info summary</h3> ";
						echo "".$user[$p+10]."<br>";
						echo "".$user[$p+11]."<br>";
						echo "".$user[$p+12]."<br>";
						
						
						echo "<h3>Payment Info summary</h3> ";
						echo "".$user[$p+13]."<br>";
						echo "".$user[$p+14]."<br>";

							
					
				
			}
?>

 