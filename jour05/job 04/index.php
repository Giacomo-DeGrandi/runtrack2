<?php



function calcule($a , $op , $b){
	if ( $op == '+'){
		return $a + $b;
	}
		if ( $op == '-'){
		$a - $b;
		return $a - $b;
	}
	if ( $op == '*'){
		$a * $b;
		return $a * $b;
	}
	if ( $op == '/'){
		$a / $b;
		return $a / $b;
	}
	if ( $op == '%'){
		$a % $b;
		return $a % $b;
	}
}



$a=3.8;
$b=9.0;
$op= '/';




echo calcule($a, $op , $b);	//0,42!



?>