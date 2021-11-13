<?php

$prenom= '';

setcookie('pname',$prenom);

if (!isset($_GET["connexion"])){
	echo '<form action="" method="get"> Username<br>';
	echo '<input type="text" value="prenom" name="prenom"><br>';
	echo '<input type="submit" value="connexion" name="connexion"></form>';
	if(isset($_GET['prenom'])){ 
	$prenom=$_GET['prenom'];}
} else {
	setcookie('pname',$prenom);
	echo '<html><body>';
	echo '<h1>Bonjour '.$_GET["prenom"].'</h1><br>';
	echo '<form action="" method="get">
					<input type="submit" value="deco" name="deco">
				</form>
			</body>
		</html>';
	if(isset($_GET['deco'])){
		header('Location: index.php');
	}


}


/*
Créez un formulaire de connexion qui contient un input de type de text
nommé “prenom” et un bouton submit nommé “connexion”. Lorsque l’on
valide le formulaire, le prénom est ajouté dans un cookie. Si un utilisateur a
déjà entré son prénom n'affichez plus le formulaire de connexion. A la
place, écrivez “Bonjour prenom !” et ajouter un bouton “Déconnexion”
nommé “deco”. Lorsque l’utilisateur se déconnecte, il faut à nouveau
afficher le formulaire de connexion.
*/

?>
