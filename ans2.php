<?php


	/** 
	// 1- PHP code to find the missing number 
	**/

	function findMissingNumber($numbers)
	{
		
		 
		$missing = array(); 
		for ($i = 1; $i < max($numbers); $i++) { 
			if (!in_array($i, $numbers)){
				$missing[] = $i;
			}		
		} 
		return $missing;
	}
	  
	// exmaple values
	$a = array(1, 2, 3, 4, 9, 10, 12);
	$missingDigit = findMissingNumber($a);
	$string=implode(",",$missingDigit);
	echo $string; // 5,6,7,8,11 
  
?>




