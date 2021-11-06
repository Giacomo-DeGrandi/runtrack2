<?php

$str = 'Dans l\'espace, personne ne vous entend crier';

$x = 0;

while (isset($str[$x])){ /* pendant que le caracteres de ma string est associé à 
							un nombre de ma variable $x 
						*/
	$x++;		//j'incremente x pour percourir mon loop
}

echo $x;			// je echo ma $x APRÈS mon loop


?>