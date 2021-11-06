<?php

$str = "I m sorry Dave I m afraid I can t do that";
$str2 = ['a','e','i','o','I'];

$i = 0;
$x = 0;
  
while (isset($str[$i])) {
	foreach ($str2 as $x){
		if($str[$i] == $x){ 
			echo $str[$i];
		}
		$x++;

	}
	$i++;
}



?>