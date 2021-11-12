<?php

/*
Créez un formulaire qui contient un input de type de text nommé “prenom”
et un bouton submit. Lorsque l’on valide le formulaire, le prénom est ajouté
dans une variable de session. Afficher l’ensemble des prénoms.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste.
*/

session_start();

?>

<html>
<body>
	<form action="" method="post">Prenom:
		<input type="text" value="prenom" name="prenom">
	</form>
	<form action="" method="get">=>
		<input type="submit" value="reset" name="reset">
	</form>
</body>
</html>

<?php


$_SESSION["pname"][] = $_POST["prenom"];


foreach($_SESSION["pname"] as $v){ 
	echo $v."<br/>";
}


if (isset($_GET["reset"])){ 
    session_destroy();
	header('Location: index.php');
}


?>
