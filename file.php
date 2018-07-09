<?php

//load index page

			$user=file('user.txt');
			$username=trim($_SESSION['username']);
			$len=count($user);
			for($i=3;$i<=$len;$i+=5){
				$a=trim($user[$i]);
						
					if($username==$a){
						$p=$i-3;
						echo "<h3>Personal Info</h3> ";
						echo "Full Name: ".$user[$p]." ".$user[$p+1]."<br>";
						echo "First Name: ".$user[$p]."<br>";
						echo "Last Name: ".$user[$p+1]."<br>";
						echo "Email: ".$user[$p+2]."<br>";
						echo "User Name: ".$user[$p+3]."<br>";
						

							
					}
				
			}
?>