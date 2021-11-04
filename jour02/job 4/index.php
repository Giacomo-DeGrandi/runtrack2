<?php

$num = 0;


for ( $num = 0 ; $num <= 100 ; $num++ ){
	// Number of multiples of n from 1 to m is m/n (integer division). 100/3 donc % 3??

	if ($num % 3 == 0 ){ 
	echo "<br/>";		
	echo "Fizz";
	} elseif ($num % 5 == 0 ){
	echo "<br/>";
	echo "Buzz";		
	} else { 
	echo "<br/>";
	echo $num;
	}
	if ($num % 3 == 0 && $num % 5 == 0 ){
	echo "<br/>";
	echo "FizzBuzz";
	}

}



//se $num == ogni numero che tra 0 e 100 diviso per 3 dà resto 0 



?>


