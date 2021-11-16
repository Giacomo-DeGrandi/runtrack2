<?php

$tab = ['chaise', 'verre', 'chat'];

$alpha = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','w','x','y','z'];
//	[0,1,2,3,4,5,6,7,8,9]

$croissant = true;
$x=0;


echo $tab[0][0];				// TRICKKKK


function bubblesort($tab,$croissant){
	$alpha = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','w','x','y','z'];
	foreach($alpha as $k => $v){
		if ($v == $tab[0][0]){
			$k = 0;
			echo $v;
		}
		echo $k;
	}
}

		/*

		Créez une fonction nommée “bubblesort”. Cette fonction prend en
paramètres un tableau nommé “tab” contenant plusieurs chaînes de
caractères et un booléen nommé “croissant”. Si “croissant” vaut true, la
fonction doit retourner le tableau trié par ordre croissant, sinon la fonction
doit retourner le tableau trié par ordre décroissant.
Exemple : Si tab contient [“abc”, “ghi”, “def”] le resultat sera “abc”, “def”,
“ghi” par ordre croissant et “ghi”, “def”, “abc” par ordre décroissant.

	//$x=0;		// *

	//foreach($tab as $k => $v){		// access to values inside $tab
		//foreach(isset($v) as $k2 => $v2){

		//echo $v;					// echo $v = chaiseverrechat
		//echo $v[0];				// echo  $v[0] = cvc  access to first letter of each string in $tab arr

	//	if(isset($v[0])){			// here we could have the int 3 to define how many $v with $x 
			//$x++;
			//$x=$k;				//	* now they're ordered
			//foreach(($v[0]) as $k2 => $v2){
			//	echo $v2;
			//}
		}
		//echo $k;
		//for($i=0; $i<(isset($v)); $i++){ 
		//	echo $i;
		//}
	//}
	//echo $x;

*/
		//	foreach($alpha as $k3 => $v3){
		//		//echo $v[0];				// echo  $v[0] = cccc....vvvvvvvvv........ccccc 
		//		if($v[0] == $v3){
		//			echo $v[0];
		//		}
		//	}
		//for($i=0; $i<$k; $i++){
		//	//echo $v[0];
		//}


bubblesort($tab,$croissant);


?>