<?php

/*
CPP program to divide a number by other 
 without using / operator 
*/
class Maths 
{
	private  $num1;
	private  $num2;
	
	function __construct($num1, $num2)
	{
		# code...
		 $this->num1 = $num1;
         $this->num2 = $num2;
	}

	


// Function to find division without using 
// '/' operator 

function divide() 
{ 
	$num1  = $this->num1;
	$num2 =  $this->num2; 
	if ($num1 == 0) 
		return 0; 
		
	if ($num2 == 0) 
		return INT_MAX; 
	
	$negResult = false; 
	
	// Handling negative numbers 
	if ($num1 < 0) 
	{ 
		$num1 = -$num1 ; 
		
		if ($num2 < 0) 
			$num2 = - $num2 ; 
		else
			$negResult = true; 
	} 
	else if ($num2 < 0) 
	{ 
		$num2 = - $num2 ; 
		$negResult = true; 
	} 
	
	// if num1 is greater than equal to num2 
	// subtract num2 from num1 and increase 
	// quotient by one. 
	$quotient = 0; 
	while ($num1 >= $num2) 
	{ 
		$num1 = $num1 - $num2 ; 
		$quotient++ ; 
	} 
	
	// checking if neg equals to 1 then making 
	// quotient negative 
	if ($negResult) 
			$quotient = - $quotient ; 
	return $quotient ; 
} 


// This function returns remainder of 
// num/divisor without using % (modulo) 
// operator 

function getRemainder() 
{ 

	$num  = $this->num1;
	$divisor =  $this->num2; 
	
	// Handle divisor equals to 0 case 
	if ($divisor == 0) 
	{ 
		echo "Error: divisor can't be zero \n"; 
		return -1; 
	} 

	// Handle negative values 
	if ($divisor < 0) $divisor = -$divisor; 
	if ($num < 0)	 $num = -$num; 

	// Find the largest product of 'divisor' 
	// that is smaller than or equal to 'num' 
	$i = 1; 
	$product = 0; 
	while ($product <= $num) 
	{ 
		$product = $divisor * $i; 
		$i++; 
	} 

	// return remainder 
	return $num - ($product - $divisor); 
} 


	


}

 ?>