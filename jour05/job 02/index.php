<?php



function bonjour($jour){
	echo 'Bon';
	if ($jour) {
		  echo "jour";
	} else {
		 echo "soir";
	}
}	

$jour = false;

echo bonjour($jour);


?>