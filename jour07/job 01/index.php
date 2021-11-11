<?php

/*
Créez une variable de session nommée “nbvisites”. A chaque fois que la
page est visitée, ajoutez 1. Afficher le contenu de cette variable.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.
*/

session_start();

?>

<html>
<body>
	<form action="#" method="get">=>
		<input type="submit" value="reset" name="reset">
	</form>
</body>
</html>

<?php



if (!isset( $_SESSION['nbvisites'] ) ) {
$_SESSION['nbvisites']=0;}
else{ 
$_SESSION['nbvisites']++;}

echo 'Votre ID de session est le ' .$_SESSION['nbvisites'];

if(isset($_GET['reset'])){
	session_destroy();
	header('Location: index.php');
}



//_SESSION set SESSION var _SESSION DESTROY
// session stocke dans side server
// si l'utilisateur ferme son browser la session finit    edit cookie
// cookies stocke chez l'utilisateur, c'est moins securisé donc
// setcookie..... function time nombre second ecoule depuis 1 janv 1970
// $_COOKIE

?>
