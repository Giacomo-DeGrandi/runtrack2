<?php

/*Créez une fonction nommée “occurrences”. Cette fonction prend en
paramètre une chaîne de caractères nommée “str” et un caractère nommé
“char”. Elle doit retourner le nombre d'occurrences du caractère “char” dans
“str”.*/

function occurrence($str,$char){
$x=0;
	for($c=0; $c<=isset($str[$c]);$c++){
		if(($str[$c]==$char)==true){
			$x++;
		}
	}
return $x;
}

$str= 'Créez une fonction nommée';
$char='o';

echo occurrence($str,$char);

?>