<?php

$num = 1;
$x= 2;

for (  $num = 1 ; $num <= 100 ; $num++){

	do {
		$x++ ;
		echo "<br/>";
	    echo $num;
	} while ( $x % $num == 0 and $num < 1000);

}

/*	} elseif (($num / $num) == $num) {
		echo "<br/>";
		echo $num;
	} else { 
		$num == false;

 	} */

?>