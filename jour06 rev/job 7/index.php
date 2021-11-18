<?php

function countnow($anything){					// en fin mon count() personelle
	for($x=0; $x<=isset($anything[$x]); $x++){	// compte une string ou un array et donne un int
	}return $x; 
}



$tab = ['uvw','cdg','mno']; //for the test was 29,16,55,12,34

function bubblesort($tab,$croissant){
	if (isset($croissant)){ 
		$lenght = countnow($tab);
		for($i=0; $i< $lenght; $i++){			  // first loop start 
			for($j=0; $j< $lenght -1; $j++){ 	  // second loop start  try echo $tab[$j] to check the values 
											 	  // this will echo EACH VALUE in the same 
											 	  // written order that $tab for the NUM of ELEMENTS of the table 
												  // ____----> here start the swap
				if($tab[$j] > $tab[$j + 1]){ 	  // if my $tab[$j] (ea. '55') is bigger than $tab[$j + 1] (in this
												  // case '12' ):       1st we create an alias for the swap, that
					$alias		=	$tab[$j + 1]; // is equal to the second element we check, $tab[$j + 1] (or '55')
					$tab[$j + 1]=	$tab[$j];	  // we assign this value to the value before $tab[$j] (or '12') 
					$tab[$j]	=	$alias;		  // we assign the first value to the $alias (that is the second one)
				}		
			}
		}	
		//for($i=0; $i<$lenght; $i++){
		//	echo $tab[$i];
		//}
	} else { 
		$lenght = countnow($tab);
		for($i=0; $i< $lenght; $i++){
			for($j=0; $j< $lenght - 1; $j++){

				if($tab[$j] < $tab[$j + 1]){ 	  // here's the sign to decroissant							  
					$alias		=	$tab[$j]; 
					$tab[$j]	=	$tab[$j + 1];	  
					$tab[$j + 1]=	$alias;
				}
			}
		}	
		for($i=0; $i<$lenght; $i++){
		echo $tab[$i];
		}
	}
}


$croissant=null;

 bubblesort($tab,$croissant);



		/*

		Créez une fonction nommée “bubblesort”. Cette fonction prend en
paramètres un tableau nommé “tab” contenant plusieurs chaînes de
caractères et un booléen nommé “croissant”. Si “croissant” vaut true, la
fonction doit retourner le tableau trié par ordre croissant, sinon la fonction
doit retourner le tableau trié par ordre décroissant.
Exemple : Si tab contient [“abc”, “ghi”, “def”] le resultat sera “abc”, “def”,
“ghi” par ordre croissant et “ghi”, “def”, “abc” par ordre décroissant.

			//idee pour le morpion !!!!!

			$tab[0][1][0]
			$tab[0][1][0]
			$tab[0][1][0]

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




?>