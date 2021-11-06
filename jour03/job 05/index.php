<html>

<body>

	<table>
		<tr>
			<th>Voyelles</th>		<!-- je cree mon table avec mes theads -->
			<th>Consonnes</th>
		</tr>
		<tr>						<!-- je ouvre mon row pour php -->

<?php

$str = 'On n est pas le meilleur quand on le croit mais quand on le sait';
$vow = ['a','e','i','o','u','O'];		// je creé une array pour le voyelles
										// forcement tout ce que c'est ne pas des 
										//voyelles c'est des consonnes
// combien de fois des consonnes ou voyelles?

$x=0; 			// je definit mes variable pour stocker mes valeur
$value=0;
$vowels=0;
$cons=0;


while (isset($str[$x])) {		// pendent que chaque caracteres est associé à un
								// valeur en $x ,(jusqu'à que isset($str) est vrai
								// chaque caractere à valeur $x et est definit par $str[$x]
								// ou en general $str[$nombre_du_caractere]).
	foreach ($vow as $value){	// pour chaque element de mon array $vow je l'associe à la variable
								// value et je fais partir mon loop TEST pour le voyelles
		if($str[$x] == $value){ // si mon caractere de la var $str est egal à ma variable $value
								// $x c'est une Voyelle
			$vowels++;			// increment $vowels et compte les voyelles
		} 
	}
	$x++;			//increment mon loop qui parcour ma string
}
					// ici le loop à finit de compté donc mes variables ont 
					// les nombres dejà stocke (essaie avec echo $x)

$cons= $x - $vowels;		// j'enleve les voyelles à la longuer de notre string stocké  		
							// en $x maintenant 
echo "<td>".$vowels."</td>";
echo "<td>".$cons."</td>";

$dic = ['voyelles' => $vowels,'consonnes' => $cons];


?>
		</tr>
	</table>
</body>
</html>
