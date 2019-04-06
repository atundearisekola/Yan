<?php
include 'Maths.php';

/**
* 
*/


// Client Script
$nominator = -13; $denominator = 5 ; 
$math = new Maths($nominator, $denominator);

$result = $math.divide();
$remainder = $math.getRemainder();
echo  "Result: ". $num1."/".$num2." = ".$result." reminder ".$remainder; 
	


}

 ?>