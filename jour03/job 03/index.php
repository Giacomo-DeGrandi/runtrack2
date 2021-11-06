<?php

$str = "I m sorry Dave I m afraid I can t do that";
$str2 = "aeiou";

$i= 0;
  
while (isset($str[$i])) {
	if ($i % 2 == 0){
	echo $str[$i];
}
	$i++;
}


/*


<!DOCTYPE html>
<html>
 <head>
  <title>Hello World PHP</title>
 </head>
 <body>
 <?php 

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie";

$i=0;

while(isset($str[$i])){
    if ($i % 2 == 0){
        echo($str[$i]);
    }
    $i++;
}

?>
 </body>
</html>



		if ($a == $i){
			echo $a;
		} else {
			echo false;
		}




foreach ([$str2] as $i){ //pour chaque letter of $str2 comme valeur
		if ($a == $i){
			echo $a;
		} else {
			echo false;
		}

	}



	while(list($key,$value)=each($identite )) {
echo $key,' : ', $value,'<br/>';
}

while ( isset ( $str [ $i ] ) ) {
	foreach (isset ($str2 [ $a ])) {

		$a++;

		if ($i == $a){
			echo $i;
		}
	}
    $i++;
}

  // Calcul de la taille du tableau $legumes
  $tailleLegumes = sizeof($legumes);
 
  // Parcours du tableau
  for($i=0; $i<$tailleLegumes; $i++)
  {
    echo $legumes[ $i ] ,'<br/>';  
  }

*/

?>