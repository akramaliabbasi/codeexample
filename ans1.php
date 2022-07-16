<?php

/** 
// 1- PHP code to check if num is divisable of both 2 and 3
// 2- code to check whether the number is Even print in Normal way
// 3- code to check if num is divisable  3 multiplay it
// 4- else just print it
**/

function check($Number){
    
	// iterate from 0 to N
    for ($num = 1; $num <= $Number; $num++)
    {
		
		if($num % 3 == 0 && $num % 2 == 0){
				print $num. ", is divisable of both 2 & 3  "."<br />"; // if num is divisable of both 2 and 3
		}else if($num % 2 == 0){
			print $num.", is  number even <br />"; // is  number even ?
		}else if($num % 3 == 0){
			print $num * $num.", divisable with 3 then multiplay <br />"; // divisable with 3 then multiplay it
		}else{
			 print $num.", just number<br />";	
		}
	}
}
  
// Driver Code
$number = 55;
check($number)



?>


